@extends('layouts.app')

@section('title', 'Kontak — Rizki Zonanta Wicaksana')
@section('meta_description', 'Hubungi Rizki Zonanta Wicaksana melalui Instagram, WhatsApp, atau email.')

@section('content')
  <main class="subpage-main">
    <section class="contact page-section contact-page" aria-labelledby="contact-title">
      <div class="contact-orb" aria-hidden="true"></div>
      <div class="contact-layout">
        <div class="contact-inner reveal">
          <p class="eyebrow"><span class="eyebrow-line"></span> TERHUBUNG DENGAN SAYA</p>
          <h1 id="contact-title">Mari mulai<br /><span class="outline-text">percakapan.</span></h1>
          <div class="contact-methods" aria-label="Kanal kontak">
            <a class="contact-method contact-method-email" href="mailto:rizkizonantawicaksana@teknokrat.ac.id?subject=Halo%20Rizki">
              <span class="contact-method-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M3.5 6.5v12h4V10l4.5 3.3 4.5-3.3v8.5h4v-12L12 13 3.5 6.5Z"></path></svg></span>
              <span class="contact-method-copy"><small>EMAIL</small><strong>rizkizonantawicaksana@teknokrat.ac.id</strong></span>
              <span class="contact-method-arrow" aria-hidden="true">↗</span>
            </a>
            <a class="contact-method contact-method-instagram" href="https://www.instagram.com/rizkizonanta.w/" target="_blank" rel="noopener noreferrer">
              <span class="contact-method-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><rect x="3.5" y="3.5" width="17" height="17" rx="5"></rect><circle cx="12" cy="12" r="4"></circle><circle class="icon-dot" cx="17.5" cy="6.8" r="1"></circle></svg></span>
              <span class="contact-method-copy"><small>INSTAGRAM</small><strong>@rizkizonanta.w</strong></span>
              <span class="contact-method-arrow" aria-hidden="true">↗</span>
            </a>
            <a class="contact-method contact-method-whatsapp" href="https://wa.me/6288707082727?text=Halo%20Rizki" target="_blank" rel="noopener noreferrer">
              <span class="contact-method-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M20 11.6a8 8 0 0 1-11.8 7L4 20l1.4-4.1A8 8 0 1 1 20 11.6Z"></path><path d="M9 8.5c.3-.5.6-.5.9-.5l.7 1.8-.8.9c.7 1.4 1.5 2.2 2.9 2.9l.9-.8 1.8.7c0 .4-.1.7-.5 1-1.1.8-3.5-.3-5.1-1.9S8.2 9.6 9 8.5Z"></path></svg></span>
              <span class="contact-method-copy"><small>WHATSAPP</small><strong>0887 0708 2727</strong></span>
              <span class="contact-method-arrow" aria-hidden="true">↗</span>
            </a>
          </div>
        </div>
        <figure class="contact-visual reveal">
          <img src="{{ asset('images/kontak.png') }}" alt="Ilustrasi buku kontak berwarna oranye" />
        </figure>
      </div>
      <span class="contact-index" aria-hidden="true">02 — SAY HELLO</span>
    </section>
  </main>
@endsection
