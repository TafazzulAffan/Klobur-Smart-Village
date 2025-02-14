<p align="center"><img src="http://trazzadmin.trazzpro.com/assets/images/Logomakr_0sjMbT_small.png"></p>

## Tentang jembul

SIMDesa merupakan aplikasi berbasis web yang diharapkan dapat membantu desa-desa di Indonesia untuk lebih berkembang dalam semua bidang. Teknologi dipandang penting untuk mendukung perkembangan desa dalam hal:

- Pelayanan yang transparan dan tidak berbelit-belit
- Adanya informasi kependudukan yang lengkap
- Kerja perangkat desa semakin mudah

## Feature Aplikasi

- Data Penduduk
- Perizinan Online 
- DST


## Cara Install Project DENGAN github desktop
Untuk menginstal project ini anda harus memiliki Composer
bagi yang belum install composer silahkan download [Klik di sini](https://getcomposer.org/download/1.9.0/composer.phar) tutorial cara instal composer [klik di sini](https://www.malasngoding.com/cara-install-composer/)

Bagi yang sudah memiliki composer silahkan ikuti tutor dibawah ini
- Klik tombol Clone or download
- Klik Open in desktop
- Klik open GithubDesktop.exe
- Silahkan pilih lokasi path yang anda inginkan
- Kemudian klik Clone
- Tunggu sampai proses clone selesai
- Buka folder porject yang sudah di clone melalui terminal
- Lakukan composer install ketik
```terminal
composer install
```
- Tunggu sampai proses selesai
- Buat database baru di phpmyadmin anda beri nama sesuka hati anda
- Copy file .env.example yang ada di dalam folder project dan ubah namanya menjadi .env
bagi yang menggunakan git bash atau terminal linux bisa ketik seperti dibawah
```terminal
cp .env.example .env
```
bagi yang menggunakan terminal windows bisa ketik seperti dibawah
```terminal
copy .env.example .env
```
- Lakukan generate key ketik 
```terminal
php artisan key:generate
```
- Buka file .env
- Ubah konfigurasi database sesuai nama database yang anda buat tadi lalu simpan
- lakukan migrate ketik :
```terminal
php artisan migrate --seed
```
atau : 
```terminal
php artisan migrate:fresh --seed
```

- kemudian ketik :
```
php artisan storage:link
```
- Finish project laravel bisa dijalankan dengan menggunakan development server dengan cara ketik
```terminal
php artisan serve
```
Dan juga jalankan dengan NPM 
```terminal
npm run dev
```

- Lalu ctrl+klik pada http://127.0.0.0:8000

Untuk Login CMS Admin silahkan isi email dan Password dibawah ini :

#### Email : admin123@gmail.com
#### Password : admin123



## Hak Cipta, Syarat dan Ketentuan
Aplikasi ini di development oleh TIM PPKO HIMTI UNESA

Sistem ini dikelola dengan merujuk pada lisensi [GNU General Public License Version 3](https://github.com/jemsnaban/simdesa/blob/master/LICENSE.md)
