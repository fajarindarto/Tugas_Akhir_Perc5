# Tugas_Akhir_Perc5
Tugas Akhir Percobaan 5 - Praktikum Pemrograman Web

Nama : Fajar Indarto

NPM  : 2015061067

A. Penjelasan Umum

Tugas akhir yang saya buat ini merupakan sistem informasi pendaftaran vaksin yang bernama Klinik-ku, sistem informasi ini dibuat dengan menggunakan web framework laravel yang berisi operasi CRUD dimana terdapat create data, read data, update data, dan delete data. Aplikasi ini dibuat dengan tujuan untuk memudahkan para pengguna dan para karyawan klinik untuk mendaftarkan dan menyimpan data para masyarakat untuk daftar vaksin

B. How to Use 

Untuk menggunakan sistem informasi ini pastikan telah mendownload composer, xampp, php yang tersedia di browser.
1. Pertama buka Xampp dan start bagian apache dan MySQL
2. Buka commad prompt lalu masuk ke directori dimana file tersedia, selanjutnya jalankan perintah php artisan serve untuk menjalankan laravelnya
3. Lalu masuk ke http://127.0.0.1:8000 dan akan tampil menu utama dari Klinik-Ku
4. Untuk melakukan create data, klik pada menu nav bar create, lalu masukkan data informasi masyarakat berupa nama depan, nama belakang, nomor kk, nomor nik, umur, alamat, dan nomor telepon
5. Untuk melakukan edit data, klik button edit lalu pilih informasi data yang ingin diubah lalu klik button update 
6. Untuk mengecek detail dari sebuah data masyarakat, klik button detail maka akan tampil semua informasi yang ada pada masyarakat tersebut
6. Untuk melakukan delete data, pilih data yang mau di delete lalu klik button detail untuk masuk ke detail dan klik button delete yang tersedia untuk menghapus
7. Sistem informasi ini dapat di install sehingga dapat digunakan di dekstop masing - masing

C. Database Design

Database yang digunakan pada sistem informasi ini memiliki nama sms, hal ini telah di konfigurasi pada .env yang telah tersedia 
Pada database ini tabel utama yang digunakan adalah tabel masyarakats yang berisi beberapa kolom antara lain id, noDaftar, namaDepan, namaBelakang, noKK, noNIK, umur, alamat, noTelp, created_at, dan updated_at
Berikut adalah tipe data yang digunakan pada masing - masing kolom
1. id = int (primary key, auto increment)
2. noDaftar = String (varchar)
3. namaDepan = String (varchar)
4. namaBelakang = String (varchar)
5. noKK = String (varchar)
6. noNIK = String (varchar)
7. umur = int 
8. alamat = String (varchar)
9. noTelp = String (varchar)
10. created_at = timestamp
11. updated_at = timestamp

D. Routes

Routes digunakan untuk membantu dan menggunakan CRUD yang telah dibuat sehingga dapat dipakai. 
Routes ini memanggil CRUD yang telah di buat di bagian controllers di MasyarakatController. (App\Http\Contollers\MasyarakatController)
Model yang telah dibuat sebagai tokoh utama dalam sistem infromasi ini adalah Masyarakat.php (App\Http\Models\Masyarakat)
Database yang dibuat terdapat pada create_masyarakat_table (Database\Migrations)
Fungsi utama html yang dibuat berada pada 3 source yaitu masyarakat.blade.php, navbar.blade.php, masyarakatslist.blade.php dan detail.blade.php (Resources\Views)
Routes berada dan diatur pada web.php (Routes\web.php)
Konfigurasi database terletak pada .env
Konfigurasi PWA yang telah ada pada sistem informasi ini terletak pada manifest.json, sw.js (Public)
