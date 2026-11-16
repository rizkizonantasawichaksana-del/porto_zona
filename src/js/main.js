const root = document.documentElement;
const themeToggle = document.querySelector(".theme-toggle");
const themeColor = document.querySelector('meta[name="theme-color"]');
const themeStorageKey = "rizki-zonanta-wicaksana-theme";
const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)");

try {
  const savedTheme = window.localStorage.getItem(themeStorageKey);
  if (savedTheme === "light" || savedTheme === "dark") {
    root.dataset.theme = savedTheme;
  }
} catch (error) {
  console.error("Preferensi tema tidak dapat dibaca dari penyimpanan browser.", error);
}

function syncThemeControls() {
  const isLight = root.dataset.theme === "light";
  themeToggle?.setAttribute("aria-label", isLight ? "Ganti ke tema gelap" : "Ganti ke tema terang");
  themeColor?.setAttribute("content", isLight ? "#e9e9ee" : "#111116");
}

syncThemeControls();

if (themeToggle) {
  themeToggle.addEventListener("click", () => {
    const nextTheme = root.dataset.theme === "light" ? "dark" : "light";
    root.dataset.theme = nextTheme;
    syncThemeControls();

    try {
      window.localStorage.setItem(themeStorageKey, nextTheme);
    } catch (error) {
      console.error("Preferensi tema tidak dapat disimpan di browser.", error);
    }
  });
}

if (!reduceMotion.matches) {
  root.classList.add("page-entering");
  document.body.addEventListener("animationend", function removePageEntry(event) {
    if (event.animationName !== "page-enter") return;
    root.classList.remove("page-entering");
    document.body.removeEventListener("animationend", removePageEntry);
  });
}

let pageNavigationStarted = false;

document.addEventListener("click", (event) => {
  if (!(event.target instanceof Element)) return;

  const link = event.target.closest("a[href]");
  if (!(link instanceof HTMLAnchorElement)) return;
  if (
    event.defaultPrevented ||
    event.button !== 0 ||
    event.metaKey ||
    event.ctrlKey ||
    event.shiftKey ||
    event.altKey ||
    link.hasAttribute("download") ||
    (link.target && link.target !== "_self")
  ) {
    return;
  }

  const destination = new URL(link.href, window.location.href);
  if (destination.origin !== window.location.origin || destination.pathname === window.location.pathname) return;

  event.preventDefault();
  if (pageNavigationStarted) return;
  pageNavigationStarted = true;

  if (reduceMotion.matches) {
    window.location.assign(destination.href);
    return;
  }

  root.classList.add("page-leaving");
  window.setTimeout(() => window.location.assign(destination.href), 220);
});

const revealItems = document.querySelectorAll(".reveal");
root.classList.add("has-motion");

if ("IntersectionObserver" in window) {
  const revealObserver = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-visible");
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.12 },
  );
  revealItems.forEach((item) => revealObserver.observe(item));
} else {
  revealItems.forEach((item) => item.classList.add("is-visible"));
}

const stage = document.querySelector("#lanyard-stage");
const badge = document.querySelector("#id-card");
const clasp = document.querySelector(".lanyard-clasp");
const strapPaths = [
  document.querySelector("#strap-shadow"),
  document.querySelector("#strap-main"),
  document.querySelector("#strap-seam"),
];

if (stage && badge && clasp) {
  const motion = {
    x: 0,
    y: reduceMotion.matches ? 0 : -260,
    velocityX: reduceMotion.matches ? 0 : 1.1,
    velocityY: 0,
    rotationX: 0,
    rotationY: 0,
    rotationVelocityX: 0,
    rotationVelocityY: 0,
    targetRotationX: 0,
    targetRotationY: 0,
    isFlipped: false,
    falling: !reduceMotion.matches,
    dragging: false,
    moved: false,
    suppressClick: false,
    pointerId: null,
    startPointerX: 0,
    startPointerY: 0,
    startX: 0,
    startY: 0,
    startRotationX: 0,
    startRotationY: 0,
    lastFrameTime: 0,
  };

  function clamp(value, min, max) {
    return Math.min(max, Math.max(min, value));
  }

  function nearestEquivalentAngle(target, current) {
    return target + 360 * Math.round((current - target) / 360);
  }

  function setFlipped(isFlipped) {
    motion.isFlipped = isFlipped;
    motion.targetRotationX = nearestEquivalentAngle(0, motion.rotationX);
    motion.targetRotationY = nearestEquivalentAngle(isFlipped ? 180 : 0, motion.rotationY);
    badge.setAttribute("aria-pressed", String(isFlipped));
  }

  function updateLanyard() {
    const stageRect = stage.getBoundingClientRect();
    const badgeRect = badge.getBoundingClientRect();
    const anchorX = stageRect.width / 2;
    const anchorY = 31;
    const endX = badgeRect.left + badgeRect.width / 2 - stageRect.left;
    const endY = badgeRect.top - stageRect.top + 6;
    const verticalDirection = Math.sign(endY - anchorY) || 1;
    const length = Math.max(32, Math.abs(endY - anchorY));
    const curve = verticalDirection * length * 0.48;
    const sidePull = clamp(motion.x * 0.24, -45, 45);
    const path = `M ${anchorX} ${anchorY} C ${anchorX + sidePull} ${anchorY + curve}, ${endX - sidePull} ${endY - curve * 0.55}, ${endX} ${endY}`;

    stage.querySelector("#lanyard-svg").setAttribute("viewBox", `0 0 ${stageRect.width} ${stageRect.height}`);
    strapPaths.forEach((strap) => strap.setAttribute("d", path));
    clasp.style.left = `${endX}px`;
    clasp.style.top = `${endY - 5}px`;
    clasp.style.transform = `translateX(-50%) rotate(${clamp(motion.x * 0.12, -16, 16)}deg)`;
  }

  function renderBadge() {
    const tilt = clamp(motion.x * 0.095 + motion.velocityX * 0.9, -17, 17);
    badge.style.transform = `translate(calc(-50% + ${motion.x}px), ${motion.y}px) rotate(${tilt}deg) rotateX(${motion.rotationX}deg) rotateY(${motion.rotationY}deg)`;
    updateLanyard();
  }

  function animate(time) {
    const frameScale = motion.lastFrameTime
      ? Math.min((time - motion.lastFrameTime) / (1000 / 60), 2)
      : 1;
    motion.lastFrameTime = time;

    if (!motion.dragging) {
      if (motion.falling) {
        motion.velocityY += 0.62 * frameScale;
        motion.velocityX += -motion.x * 0.002 * frameScale;
        motion.velocityX *= Math.pow(0.998, frameScale);
        motion.velocityY *= Math.pow(0.999, frameScale);
        motion.x += motion.velocityX * frameScale;
        motion.y += motion.velocityY * frameScale;

        if (motion.y >= 0) {
          motion.y = 0;
          motion.velocityY *= -0.28;
          motion.falling = false;
        }
      } else {
        const idleX = reduceMotion.matches ? 0 : Math.sin(time / 1450) * 3;
        const idleY = reduceMotion.matches ? 0 : Math.sin(time / 920) * 1.5;
        motion.velocityX += (idleX - motion.x) * 0.012 * frameScale;
        motion.velocityY += (idleY - motion.y) * 0.014 * frameScale;
        motion.velocityX *= Math.pow(0.96, frameScale);
        motion.velocityY *= Math.pow(0.96, frameScale);
        motion.x += motion.velocityX * frameScale;
        motion.y += motion.velocityY * frameScale;
      }

      motion.rotationVelocityX += (motion.targetRotationX - motion.rotationX) * 0.045 * frameScale;
      motion.rotationVelocityY += (motion.targetRotationY - motion.rotationY) * 0.045 * frameScale;
      motion.rotationVelocityX *= Math.pow(0.82, frameScale);
      motion.rotationVelocityY *= Math.pow(0.82, frameScale);
      motion.rotationX += motion.rotationVelocityX * frameScale;
      motion.rotationY += motion.rotationVelocityY * frameScale;

      if (Math.abs(motion.targetRotationX - motion.rotationX) < 0.2 && Math.abs(motion.rotationVelocityX) < 0.2) {
        motion.rotationX = 0;
        motion.targetRotationX = 0;
        motion.rotationVelocityX = 0;
      }
      if (Math.abs(motion.targetRotationY - motion.rotationY) < 0.2 && Math.abs(motion.rotationVelocityY) < 0.2) {
        motion.rotationY = motion.isFlipped ? 180 : 0;
        motion.targetRotationY = motion.rotationY;
        motion.rotationVelocityY = 0;
      }
    }

    renderBadge();
    window.requestAnimationFrame(animate);
  }

  badge.addEventListener("pointerdown", (event) => {
    if (event.button !== 0) return;
    motion.dragging = true;
    motion.moved = false;
    motion.pointerId = event.pointerId;
    motion.suppressClick = false;
    motion.startPointerX = event.clientX;
    motion.startPointerY = event.clientY;
    motion.startX = motion.x;
    motion.startY = motion.y;
    motion.startRotationX = motion.rotationX;
    motion.startRotationY = motion.rotationY;
    motion.targetRotationX = motion.rotationX;
    motion.targetRotationY = motion.rotationY;
    motion.rotationVelocityX = 0;
    motion.rotationVelocityY = 0;
    motion.falling = false;
    motion.velocityX = 0;
    motion.velocityY = 0;
    badge.setPointerCapture(event.pointerId);
  });

  badge.addEventListener("dragstart", (event) => event.preventDefault());

  badge.addEventListener("pointermove", (event) => {
    if (!motion.dragging || event.pointerId !== motion.pointerId) return;
    const deltaX = event.clientX - motion.startPointerX;
    const deltaY = event.clientY - motion.startPointerY;
    if (Math.abs(deltaX) > 4 || Math.abs(deltaY) > 4) motion.moved = true;
    if (!motion.moved) return;

    motion.x = motion.startX + deltaX;
    motion.y = motion.startY + deltaY;
    motion.rotationX = motion.startRotationX - deltaY * 0.8;
    motion.rotationY = motion.startRotationY + deltaX * 0.8;
    motion.targetRotationX = motion.rotationX;
    motion.targetRotationY = motion.rotationY;
    motion.rotationVelocityX = 0;
    motion.rotationVelocityY = 0;
    motion.velocityX = 0;
    motion.velocityY = 0;
    renderBadge();
  });

  function releaseBadge(event) {
    if (!motion.dragging || event.pointerId !== motion.pointerId) return;
    const wasDragged = motion.moved;
    motion.dragging = false;
    motion.pointerId = null;
    motion.moved = false;

    if (wasDragged) {
      motion.suppressClick = event.type === "pointerup";
      setFlipped(false);
    }
  }

  badge.addEventListener("click", (event) => {
    if (motion.suppressClick && event.detail > 0) {
      motion.suppressClick = false;
      event.preventDefault();
      return;
    }

    motion.suppressClick = false;
    setFlipped(!motion.isFlipped);
  });

  badge.addEventListener("pointerup", releaseBadge);
  badge.addEventListener("pointercancel", releaseBadge);
  badge.addEventListener("lostpointercapture", () => {
    motion.dragging = false;
    motion.pointerId = null;
  });
  window.addEventListener("resize", updateLanyard);
  renderBadge();
  window.requestAnimationFrame(animate);
}
