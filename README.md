# Portofolio Rizki Zonanta Wicaksana

Portofolio ini menggunakan Laravel 13 untuk routing dan Blade, serta Vite + Tailwind CSS v4 untuk aset frontend.

## Persyaratan

- PHP 8.3 atau lebih baru
- Composer 2
- Node.js 20.19 atau lebih baru

## Menjalankan aplikasi

1. Pasang dependensi PHP dan JavaScript:

   ```sh
   composer install
   npm install
   ```

2. Siapkan konfigurasi lokal dan kunci aplikasi:

   ```sh
   # Windows PowerShell
   Copy-Item .env.example .env
   php artisan key:generate
   ```

3. Jalankan Laravel dan Vite di dua terminal:

   ```sh
   php artisan serve
   ```

   ```sh
   npm run dev
   ```

4. Buka `http://127.0.0.1:8000`.

## Database

Skema awal MySQL/MariaDB dan data portofolio yang sudah ditampilkan tersedia di
[`database/porto_zona.sql`](./database/porto_zona.sql). Impor berkas tersebut melalui
phpMyAdmin atau klien MySQL; database `porto_zona` akan dibuat jika belum ada.

Jika Laravel perlu diarahkan ke database MySQL tersebut, sesuaikan konfigurasi
database di `.env` (`DB_CONNECTION=mysql`, `DB_DATABASE=porto_zona`, serta host,
username, dan password), lalu jalankan `php artisan config:clear`. Aplikasi saat ini
masih menampilkan konten dari Blade statis; skema ini belum dihubungkan ke halaman.
Session dan cache lokal tetap disimpan sebagai file.

## Build produksi

```sh
npm run build
```

Pastikan document root server mengarah ke direktori `public`.

## Halaman

- `/` — Home
- `/karya` — Karya
- `/tentang` — Tentang
- `/kontak` — Kontak
- `/jelajahi` — Jelajahi
- `/sertifikat` — Sertifikat
