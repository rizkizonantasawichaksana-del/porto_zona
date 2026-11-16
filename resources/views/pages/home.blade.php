@extends('layouts.app')

@section('title', 'Rizki Zonanta Wicaksana — Web Developer')
@section('meta_description', 'Portofolio Rizki Zonanta Wicaksana — mahasiswa Informatika Universitas Teknokrat Indonesia dan web developer.')
@section('body_class', 'bg-bg text-ink font-body antialiased')

@section('content')
  <main>
    <section class="hero page-section" id="home" aria-labelledby="hero-title">
      <div class="ambient ambient-one" aria-hidden="true"></div>
      <div class="ambient ambient-two" aria-hidden="true"></div>
      <div class="hero-copy reveal">
        <h1 id="hero-title">
          <span class="outline-text">Rizki Zonanta<br />Wicaksana</span><br />
          <span class="hero-role">web developer</span>
        </h1>
        <p class="hero-description">
          Saya adalah mahasiswa Informatika di Universitas Teknokrat Indonesia yang memiliki ketertarikan dalam bidang teknologi, khususnya pengembangan web, aplikasi, dan desain antarmuka (UI/UX). Saya senang mempelajari hal-hal baru, mengeksplorasi teknologi, serta mengembangkan ide menjadi solusi digital yang kreatif, responsif, dan fungsional.

          Saya terus mengasah kemampuan dalam bidang pemrograman dan pengembangan aplikasi untuk menciptakan pengalaman pengguna yang nyaman, modern, dan mudah digunakan. Bagi saya, setiap proyek merupakan kesempatan untuk belajar, berkembang, dan menghasilkan sesuatu yang bermanfaat.
        </p>
        <div class="hero-links">
          <a class="primary-link" href="#contact">Hubungi saya <span aria-hidden="true">↘</span></a>
          <a class="secondary-link" href="{{ route('explore') }}">explore <span aria-hidden="true">↗</span></a>
        </div>
        <div class="hero-location"><span>UNIVERSITAS TEKNOKRAT INDONESIA</span><span>WEB DEVELOPER</span></div>
      </div>

      <div class="lanyard-stage reveal" id="lanyard-stage" aria-label="Kartu identitas foto interaktif">
        <div class="stage-orbit orbit-a" aria-hidden="true"></div>
        <div class="stage-orbit orbit-b" aria-hidden="true"></div>
        <div class="stage-orbit orbit-c" aria-hidden="true"></div>
        <span class="lanyard-anchor" aria-hidden="true"><i></i></span>
        <svg class="lanyard-svg" id="lanyard-svg" aria-hidden="true">
          <defs>
            <linearGradient id="strap-gradient" x1="0%" y1="0%" x2="100%" y2="0%">
              <stop offset="0%" stop-color="#f2bc4b"></stop>
              <stop offset="50%" stop-color="#ffe08a"></stop>
              <stop offset="100%" stop-color="#b57819"></stop>
            </linearGradient>
          </defs>
          <path class="strap-shadow" id="strap-shadow"></path>
          <path class="strap-main" id="strap-main"></path>
          <path class="strap-seam" id="strap-seam"></path>
        </svg>
        <button class="id-card" id="id-card" type="button" aria-label="Kartu lanyard interaktif Rizki Zonanta Wicaksana. Tarik untuk menggerakkan atau ketuk untuk membalik." aria-pressed="false">
          <span class="card-loop" aria-hidden="true"></span>
          <span class="card-face card-front">
            <span class="portrait-frame">
              <img id="portrait-image" src="{{ asset('images/profil.png') }}" alt="Foto Rizki Zonanta Wicaksana" draggable="false" />
            </span>
            <span class="card-name">RIZKI ZONANTA WICAKSANA</span>
          </span>
          <span class="card-face card-back" aria-hidden="true">
            <span class="card-back-mark">rz<span>.</span></span>
            <span class="card-back-divider"></span>
            <span class="card-back-name">RIZKI ZONANTA<br />WICAKSANA</span>
            <span class="card-back-role">WEB DEVELOPER</span>
          </span>
        </button>
        <span class="lanyard-clasp" aria-hidden="true"></span>
      </div>

      <a class="scroll-hint" href="#contact"><span class="scroll-line"></span> SCROLL TO CONTACT</a>
    </section>

    <section class="contact page-section" id="contact" aria-labelledby="contact-title">
      <div class="contact-orb" aria-hidden="true"></div>
      <div class="contact-layout">
        <div class="contact-inner reveal">
          <h2 id="contact-title">Kontak saya</h2>
          <div class="contact-methods" aria-label="Kanal kontak">
            <a class="contact-method contact-method-email" href="mailto:rizkizonantawicaksana@teknokrat.ac.id?subject=Halo%20Rizki">
              <span class="contact-method-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24"><path d="M3.5 6.5v12h4V10l4.5 3.3 4.5-3.3v8.5h4v-12L12 13 3.5 6.5Z"></path></svg>
              </span>
              <span class="contact-method-copy"><small>EMAIL</small><strong>rizkizonantawicaksana@teknokrat.ac.id</strong></span>
              <span class="contact-method-arrow" aria-hidden="true">↗</span>
            </a>
            <a class="contact-method contact-method-instagram" href="https://www.instagram.com/rizkizonanta.w/" target="_blank" rel="noopener noreferrer">
              <span class="contact-method-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24"><rect x="3.5" y="3.5" width="17" height="17" rx="5"></rect><circle cx="12" cy="12" r="4"></circle><circle class="icon-dot" cx="17.5" cy="6.8" r="1"></circle></svg>
              </span>
              <span class="contact-method-copy"><small>INSTAGRAM</small><strong>@rizkizonanta.w</strong></span>
              <span class="contact-method-arrow" aria-hidden="true">↗</span>
            </a>
            <a class="contact-method contact-method-whatsapp" href="https://wa.me/6288707082727?text=Halo%20Rizki" target="_blank" rel="noopener noreferrer">
              <span class="contact-method-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24"><path d="M20 11.6a8 8 0 0 1-11.8 7L4 20l1.4-4.1A8 8 0 1 1 20 11.6Z"></path><path d="M9 8.5c.3-.5.6-.5.9-.5l.7 1.8-.8.9c.7 1.4 1.5 2.2 2.9 2.9l.9-.8 1.8.7c0 .4-.1.7-.5 1-1.1.8-3.5-.3-5.1-1.9S8.2 9.6 9 8.5Z"></path></svg>
              </span>
              <span class="contact-method-copy"><small>WHATSAPP</small><strong>0887 0708 2727</strong></span>
              <span class="contact-method-arrow" aria-hidden="true">↗</span>
            </a>
          </div>
        </div>
        <figure class="contact-visual reveal">
          <img src="{{ asset('images/kontak.png') }}" alt="Ilustrasi buku kontak berwarna oranye" />
        </figure>
      </div>
    </section>
  </main>
@endsection
