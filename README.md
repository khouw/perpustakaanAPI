<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Perpustakaan API

Prototype API ini dikembangkan dengan mengacu pada library SLiMS 9 - Bulian.

Langkah menjalankan:
- Buat database `senayan` kosong MySQL.
- Import struktur database di file `senayan.sql`
- Import sampel data di file `sampledata.sql`
- Install git for Windowws dengan mengunduh di https://git-scm.com/download/win
- Buka Git Bash di folder tempat Anda akan menyimpan source code, dengan cara klik kanan, `Git Bash Here`.
- Setelah terbuka terminal Git Bash, jalankan perintah `git clone https://github.com/khouw/perpustakaanAPI.git`. Perintah ini akan mengcopy source code dari Github ke PC Anda.
- Masuk ke dalam folder yang baru didownload oleh Git dengan menggunakan `cd`. 
- Jalankan perintah `composer install` untuk menginstall library yang dipakai
- Copy file `.env` dengan menggunakan perintah `cp .env.example .env`. Sesuaikan nama database, username, dan password database di file ini.
- Jalankan perintah `php artisan key:generate`.


## List Tabel
- mst_author
- mst_place
- mst_publisher
- biblio
- biblio_author

