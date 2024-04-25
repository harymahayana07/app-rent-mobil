### Rental Mobil TDP
Rental Mobil TDP adalah Aplikasi web sederhana yang memungkinkan pengguna untuk melakukan penyewaan mobil. selain diperuntukan untuk coding test aplikasi ini juga saya buat sedemikian untuk menambah pemahaman dan pengalaman saya.

Fitur-fitur yang telah saya kembangkan antara lain :
 - Registrasi pengguna baru
 - Login dan logout pengguna
 - Pencarian mobil berdasarkan merek, model, no.plat, etc.
 - Transaksi Pengguna
 - Administrasi mobil & pengguna (tambah, edit, hapus).
 - Ubah Profile
 - Change Password

### Instalasi
Clone repositori ke mesin lokal Anda:
```sh
git clone https://github.com/username/app-rent-mobil.git
cd app-rent-mobil
```
installasi composer dan laravel mix lalu coba jalankan :
```sh
composer install
npm install
npm run dev
```
Salin file .env.example menjadi .env dan sesuaikan konfigurasi database Anda.

lalu Generate app key:
```sh
php artisan key:generate
```
Jalankan migrasi database dan seeder untuk membuat tabel-tabel yang diperlukan:
```sh
php artisan migrate --seed
```
Jalankan server:
```sh
php artisan serve
```
Akses Website app di browser Anda dengan URL:
```sh
http://localhost:8000
```

### Penggunaan
 - Registrasi pengguna baru dengan mengklik tombol "Register" dan mengisi formulir yang diberikan.
 - Login dengan kredensial yang telah Anda buat.
 - Telusuri atau lihat mobil yang tersedia dengan mengklik menu "Semua Mobil".
 - Pilih mobil yang Anda inginkan dan buat transaksi pemesanan dengan mengisi formulir yang diberikan.
 - Anda dapat melihat transaksi dan total untuk transaksi anda berdasarkan tanggal.
 - Pengguna dapat mengelola data mobil (tambah, edit, hapus) melalui menu "Mobil".
 - Pengguna dapat mengelola data Pengguna (tambah, edit, hapus) melalui menu "Pengguna".
 - Pengguna dapat mengelola data Transaksi (tambah, edit, hapus) melalui menu "Transaction".
 - Pengguna dapat mengubah profile mereka dan mengganti sandi mereka sendiri.
 - menu logout ada dikiri dan kanan atas.


### Kontribusi
Kontribusi selalu dipersilakan! Jika Anda ingin berkontribusi pada proyek ini, silakan buat pull request ke repositori ini.

### Technology used:
HTML,CSS,javaScipt,Php Frameworks(Laravel ^9.52), Bootstrap(SB Admin 2), Tailwind CSS, JQuery, Laravel Mix, Etc.
