@extends('layouts.app')

@section('title', 'Sertifikat — Rizki Zonanta Wicaksana')
@section('meta_description', 'Sertifikat dan pencapaian belajar Rizki Zonanta Wicaksana.')

@section('content')
  <main class="subpage-main">
    <section class="work page-section certificate-page" aria-labelledby="certificates-title">
      <div class="section-top reveal">
        <p class="eyebrow"><span class="eyebrow-line"></span> PERJALANAN BELAJAR</p>
        <span class="section-index">02 — CERTIFICATES</span>
      </div>
      <div class="work-heading reveal">
        <h1 id="certificates-title">Belajar,<br /><span class="outline-text">terus bertumbuh.</span></h1>
        <p>Sertifikat dan pencapaian<br />dalam perjalanan saya.</p>
      </div>
      <div class="certificate-empty reveal" aria-labelledby="certificate-empty-title">
        <span class="certificate-empty-icon" aria-hidden="true">
          <svg viewBox="0 0 48 48"><path d="M9 7.5h30v24H9z"></path><path d="M15 15h18M15 21h12"></path><circle cx="32" cy="33" r="7"></circle><path d="m28.5 39-1 6 4.5-2 4.5 2-1-6"></path></svg>
        </span>
        <div class="certificate-empty-copy">
          <p class="eyebrow">KOLEKSI SERTIFIKAT</p>
          <h2 id="certificate-empty-title">Sertifikat akan ditambahkan.</h2>
          <p>Belum ada dokumen sertifikat yang ditampilkan saat ini.</p>
        </div>
        <a class="secondary-link certificate-contact-link" href="{{ route('contact') }}">Hubungi saya <span aria-hidden="true">↗</span></a>
      </div>
    </section>
  </main>
@endsection
