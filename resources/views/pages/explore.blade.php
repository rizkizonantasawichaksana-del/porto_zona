@extends('layouts.app')

@section('title', 'Jelajahi — Rizki Zonanta Wicaksana')
@section('meta_description', 'Pilih halaman portofolio Rizki Zonanta Wicaksana yang ingin kamu buka.')

@section('content')
  <main class="subpage-main">
    <section class="explore-page page-section" aria-labelledby="explore-title">
      <div class="section-top reveal">
        <p class="eyebrow"><span class="eyebrow-line"></span> JELAJAHI PORTOFOLIO</p>
      </div>
      <div class="explore-heading reveal">
        <h1 id="explore-title">Explore</h1>
      </div>

      <nav class="explore-grid" aria-label="Pilih halaman portofolio">
        <a class="explore-card reveal" href="{{ route('work') }}">
          <span class="explore-art explore-art-work" aria-hidden="true">
            <span class="explore-art-label">SELECTED WORK</span>
            <span class="work-preview preview-one">WEB<br />DESIGN</span>
            <span class="work-preview preview-two">IDE → KODE</span>
          </span>
          <span class="explore-card-copy">
            <span class="explore-card-kicker">PROYEK &amp; PROSES</span>
            <strong>Karya</strong>
            <span class="explore-card-description">Lihat pilihan proyek web dan eksplorasi digital.</span>
            <span class="explore-card-arrow" aria-hidden="true">↗</span>
          </span>
        </a>

        <a class="explore-card reveal" href="{{ route('about') }}">
          <span class="explore-art explore-art-about" aria-hidden="true">
            <span class="about-photo-ring"></span>
            <img src="{{ asset('images/profil.png') }}" alt="" />
            <span class="about-photo-note">RIZKI<br />ZONANTA</span>
          </span>
          <span class="explore-card-copy">
            <span class="explore-card-kicker">Tentang saya</span>
            <strong>About me</strong>
            <span class="explore-card-description">Kenali saya, studi, dan fokus saya di web development.</span>
            <span class="explore-card-arrow" aria-hidden="true">↗</span>
          </span>
        </a>

        <a class="explore-card reveal" href="{{ route('contact') }}">
          <span class="explore-art explore-art-contact" aria-hidden="true">
            <span class="contact-orbit-mini"></span>
            <span class="contact-bubble bubble-mail">@</span>
            <span class="contact-bubble bubble-chat">↗</span>
            <span class="contact-bubble bubble-social">◎</span>
          </span>
          <span class="explore-card-copy">
            <span class="explore-card-kicker">SAPA &amp; KOLABORASI</span>
            <strong>Kontak</strong>
            <span class="explore-card-description">Hubungi saya melalui email, Instagram, atau WhatsApp.</span>
            <span class="explore-card-arrow" aria-hidden="true">↗</span>
          </span>
        </a>

        <a class="explore-card reveal" href="{{ route('certificates') }}">
          <span class="explore-art explore-art-certificate" aria-hidden="true">
            <span class="certificate-preview-mark">
              <svg viewBox="0 0 48 48"><path d="M9 7.5h30v24H9z"></path><path d="M15 15h18M15 21h12"></path><circle cx="32" cy="33" r="7"></circle><path d="m28.5 39-1 6 4.5-2 4.5 2-1-6"></path></svg>
            </span>
            <span class="explore-art-label">LEARNING JOURNEY</span>
          </span>
          <span class="explore-card-copy">
            <span class="explore-card-kicker">PENCAPAIAN &amp; BELAJAR</span>
            <strong>Sertifikat</strong>
            <span class="explore-card-description">Lihat dokumentasi sertifikat dan pencapaian belajar saya.</span>
            <span class="explore-card-arrow" aria-hidden="true">↗</span>
          </span>
        </a>
      </nav>

      <a class="explore-home-link" href="{{ route('home') }}"><span aria-hidden="true">←</span> Kembali ke beranda</a>
    </section>
  </main>
@endsection
