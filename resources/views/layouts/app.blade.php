<!doctype html>
<html lang="id" data-theme="dark">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="@yield('meta_description', 'Portofolio Rizki Zonanta Wicaksana — mahasiswa Informatika Universitas Teknokrat Indonesia dan web developer.')" />
    <meta name="theme-color" content="#111116" />
    <title>@yield('title', 'Rizki Zonanta Wicaksana — Web Developer')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet" />
    @vite(['src/css/main.css', 'src/js/main.js'])
  </head>
  <body class="@yield('body_class', 'subpage bg-bg text-ink font-body antialiased')">
    <div class="page-noise" aria-hidden="true"></div>
    <header class="site-header">
      <a class="brand" href="{{ route('home') }}#home" aria-label="Rizki Zonanta Wicaksana, beranda">
        <span class="brand-mark">rz<span>.</span></span>
        <span class="brand-name">RIZKI ZONANTA WICAKSANA</span>
      </a>
      <nav class="main-nav" aria-label="Navigasi utama">
        <a href="{{ route('home') }}#home" @if (request()->routeIs('home')) aria-current="page" @endif>Home</a>
        <a href="{{ route('work') }}" @if (request()->routeIs('work')) aria-current="page" @endif>Karya</a>
        <a href="{{ route('certificates') }}" @if (request()->routeIs('certificates')) aria-current="page" @endif>Sertifikat</a>
        <a href="{{ route('contact') }}" @if (request()->routeIs('contact')) aria-current="page" @endif>Kontak</a>
      </nav>
      <div class="header-actions">
        <span class="availability"><i></i> WEB DEVELOPER</span>
        <button class="theme-toggle" type="button" aria-label="Ganti ke tema terang" title="Ganti tema">
          <svg class="theme-icon theme-icon-sun" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="3.5"></circle><path d="M12 2v2m0 16v2M4.93 4.93l1.42 1.42m11.3 11.3 1.42 1.42M2 12h2m16 0h2M4.93 19.07l1.42-1.42m11.3-11.3 1.42-1.42"></path></svg>
          <svg class="theme-icon theme-icon-moon" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.2 15.1A8.3 8.3 0 0 1 8.9 3.8 8.6 8.6 0 1 0 20.2 15.1Z"></path></svg>
        </button>
      </div>
    </header>

    @yield('content')

    <footer class="site-footer">
      <a class="brand" href="{{ route('home') }}#home">
        <span class="brand-mark">rz<span>.</span></span>
        <span class="brand-name">RIZKI ZONANTA WICAKSANA</span>
      </a>
      <span class="footer-note">DESAIN DENGAN RASA. DIBUAT DENGAN TUJUAN.</span>
      <a class="back-to-top" href="{{ route('home') }}#home">KEMBALI KE BERANDA ↑</a>
      <span class="copyright">© 2026 RIZKI ZONANTA WICAKSANA</span>
    </footer>
  </body>
</html>
