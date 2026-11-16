@extends('layouts.app')

@section('title', 'Karya — Rizki Zonanta Wicaksana')
@section('meta_description', 'Kumpulan karya web development Rizki Zonanta Wicaksana.')

@section('content')
  <main class="subpage-main">
    <section class="work page-section work-page" aria-labelledby="work-title">
      <div class="section-top reveal">
        <p class="eyebrow"><span class="eyebrow-line"></span> ARSIP KREATIF</p>
        <span class="section-index">01 — SELECTED WORK</span>
      </div>
      <div class="work-heading reveal">
        <h1 id="work-title">Yang sudah<br /><span class="outline-text">saya buat.</span></h1>
        <p>Ide, proses, dan kolaborasi<br />yang menjadi sesuatu yang nyata.</p>
      </div>
      <div class="project-grid">
        <a class="project-card project-card-wide reveal" href="mailto:rizkizonantawicaksana@teknokrat.ac.id?subject=Proyek%20Nusa%20Studio">
          <div class="project-art art-nusa"><span class="project-category">01 / BRAND IDENTITY</span><span class="nusa-sun"></span><span class="nusa-word">nusa<span>®</span></span><span class="nusa-lines"></span><span class="project-art-note">CERITA LOKAL,<br />RASA UNIVERSAL.</span><span class="project-visit">↗</span></div>
          <span class="project-details"><span><strong>Nusa Studio</strong><small>Identitas visual · 2025</small></span><span class="project-type">BRANDING</span></span>
        </a>
        <a class="project-card reveal" href="mailto:rizkizonantawicaksana@teknokrat.ac.id?subject=Proyek%20Saku">
          <div class="project-art art-saku"><span class="project-category">02 / PRODUCT DESIGN</span><span class="saku-glow"></span><span class="saku-phone"><span class="saku-notch"></span><span class="saku-logo">saku<span>.</span></span><span class="saku-label">SALDO KAMU</span><span class="saku-balance">Rp 8.450.000</span><span class="saku-chart"><i></i><i></i><i></i><i></i><i></i><i></i><i></i></span><span class="saku-tabs"><i></i><i></i><i></i></span></span><span class="project-visit">↗</span></div>
          <span class="project-details"><span><strong>Saku</strong><small>Desain produk · 2025</small></span><span class="project-type">UI / UX</span></span>
        </a>
        <a class="project-card reveal" href="mailto:rizkizonantawicaksana@teknokrat.ac.id?subject=Proyek%20Forma">
          <div class="project-art art-forma"><span class="project-category">03 / DIGITAL EXPERIENCE</span><span class="forma-title">FORMA<small>objects for living</small></span><span class="forma-chair"><i></i><b></b><em></em><span></span></span><span class="forma-number">01 — 04</span><span class="project-visit">↗</span></div>
          <span class="project-details"><span><strong>Forma Objects</strong><small>Web design · 2024</small></span><span class="project-type">WEB</span></span>
        </a>
      </div>
      <p class="work-footnote reveal"><span>✳</span> Ada ide untuk dikerjakan bersama? <a href="{{ route('contact') }}">Mari ngobrol ↗</a></p>
    </section>
  </main>
@endsection
