# 🎬 AnimasiGlobal

Website katalog film animasi dari berbagai negara, dibangun dengan Laravel 11 dan Eloquent ORM.

## Fitur
- Tampil daftar film animasi dari berbagai negara
- Tambah, edit, hapus film (CRUD lengkap)
- Filter film per negara
- Halaman Box Office & Rekomendasi
- Manajemen data negara

## Persyaratan
- PHP >= 8.2
- Composer
- Laravel 11

## Cara Menjalankan

1. Clone repository
   git clone https://github.com/raiszzza/animasi-global.git
   cd animasi-global

2. Install dependencies
   composer install

3. Buat file environment
   cp .env.example .env

4. Ubah konfigurasi database di .env
   DB_CONNECTION=sqlite

5. Generate app key
   php artisan key:generate

6. Migrasi dan isi data
   php artisan migrate:fresh --seed

7. Jalankan server
   php artisan serve

8. Buka browser
   http://127.0.0.1:8000