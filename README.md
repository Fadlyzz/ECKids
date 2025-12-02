<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

☕ English Cafe Kids Landing Page

🚀 Deskripsi Proyek

Proyek ini adalah Landing Page modern yang dibangun menggunakan framework Laravel dan Blade, dengan styling yang sepenuhnya berbasis Tailwind CSS. Tujuan utamanya adalah menampilkan fitur-fitur, program, dan manfaat dari English Cafe Kids dengan desain yang responsif dan menarik.

Aplikasi ini menggunakan struktur Blade Layout (layouts/app.blade.php) dan Component (seperti section-hero.blade.php) untuk pemisahan tampilan yang optimal, memastikan kode bersih dan mudah dikelola.

🛠️ Persyaratan Sistem

Untuk menjalankan proyek ini secara lokal, Anda memerlukan:

PHP >= 8.1

Composer

Node.js (Untuk kompilasi aset jika menggunakan Vite/Mix, meskipun pada project ini Tailwind dimuat via CDN)

⚙️ Panduan Instalasi (Setup Lokal)

Ikuti langkah-langkah berikut untuk menginisialisasi dan menjalankan proyek:

1. Kloning Repositori

git clone [https://github.com/NAMA_AKUN_ANDA/NAMA_REPO.git](https://github.com/NAMA_AKUN_ANDA/NAMA_REPO.git)
cd NAMA_REPO

2. Instalasi Dependensi

Instal dependensi PHP menggunakan Composer:

composer install

3. Konfigurasi Lingkungan

Buat file .env dengan menyalin file contoh yang ada:

cp .env.example .env

Kemudian, buat kunci aplikasi:

php artisan key:generate

4. Menjalankan Aplikasi

Jalankan server pengembangan Laravel:

php artisan serve

Aplikasi kini dapat diakses di http://127.0.0.1:8000.

✨ Fitur Utama

Berdasarkan struktur file yang ada, landing page ini mencakup:

Hero Section (section-hero): Tampilan utama yang menarik dengan ajakan bertindak (CTA).

Features Section (section-features): Menjelaskan metodologi pengajaran dan keunggulan.

Benefits Section: Menampilkan daftar manfaat yang didapatkan oleh siswa.

Program Section (section-program): Detail tentang aktivitas dan metode belajar interaktif.

Struktur Layout Master: Menggunakan resources/views/layouts/app.blade.php sebagai kerangka utama untuk konsistensi Header dan Footer.

📦 Teknologi yang Digunakan

Framework: Laravel

Templating: Blade

Styling: Tailwind CSS (via CDN untuk kemudahan pengembangan)

Assets: Font Awesome (untuk ikon)

📚 Informasi Tambahan (Belajar Laravel)

Jika Anda tertarik untuk mempelajari lebih dalam tentang Laravel, sumber daya berikut sangat direkomendasikan:

Dokumentasi Laravel

Laravel Learn

Laracasts (Tutorial video komprehensif)

🤝 Kontribusi

Kami menghargai setiap bentuk kontribusi, baik itu laporan bug, saran fitur, atau pull request kode baru.

Fork repositori ini.

Buat branch baru: git checkout -b feature/nama-fitur-baru.

Lakukan perubahan dan commit: git commit -m 'feat: menambahkan fitur baru X'.

Push ke branch Anda: git push origin feature/nama-fitur-baru.

Buka Pull Request baru.

Pastikan Anda mematuhi Code of Conduct dari Laravel.

🛡️ Keamanan

Jika Anda menemukan kerentanan keamanan dalam proyek ini, silakan kirim e-mail ke Taylor Otwell via taylor@laravel.com. Semua kerentanan keamanan akan ditangani dengan segera.

📜 Lisensi

Framework Laravel adalah software sumber terbuka yang dilisensikan di bawah Lisensi MIT.
