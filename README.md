# 👨‍💻 Tasty Food - Web Profile & Back-Office Administrator

Halo! Perkenalkan, Nama saya Faqih Aunillah dari kelas XII RPL 3. Ini adalah project web profile restoran sekaligus panel admin terintegrasi yang saya bangun menggunakan framework Laravel. Project ini dirancang dengan struktur kode yang bersih, responsif, dan dinamis agar mempermudah pengelolaan konten.

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel">
  <img src="https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white" alt="Bootstrap">
  <img src="https://img.shields.io/badge/SQLite-003B57?style=for-the-badge&logo=sqlite&logoColor=white" alt="SQLite">
</p>

---

## 📝 Deskripsi & Fungsi Project
Tasty Food adalah platform digital berbasis web profile yang menyajikan informasi seputar dunia kuliner, menu makanan, serta berita terupdate dari restoran. 

Fungsi utama dari project ini adalah menyediakan Panel Back-Office (Admin) yang aman dan instan, sehingga pemilik restoran atau admin web bisa langsung merubah seluruh aset visual, teks, menu navigasi, hingga footer global tanpa perlu menyentuh baris kode program (zero-code content management).

---

## 🚀 Fitur yang Sudah Diimplementasikan
*   **Branding & Logo Teks Navbar Global:** Fleksibilitas mengubah tulisan brand/logo utama pada pojok kiri navbar publik langsung melalui admin panel.
*   **Kelola Konten Home:** Kendali penuh atas teks hero section (judul atas/bawah), narasi deskripsi utama, aset gambar hero, hingga teks ringkasan preview "Tentang Kami".
*   **Grid Menu Makanan Melayang (4 Cards):** Pembaruan dinamis untuk 4 item card makanan bulat, meliputi file nama gambar, nama menu, dan deskripsi pendeknya.
*   **Kelola Konten Footer Global:** Manajemen mandiri untuk data kaki halaman, termasuk judul brand footer, deskripsi singkat, URL media sosial (Facebook & Twitter), hingga informasi kontak resmi (Email, Telepon, dan Lokasi).
*   **Sistem Navigasi Dinamis (Navbar):** Pengaturan label menu navigasi utama (Home, Tentang, Berita, Galeri, Kontak) secara dinamis dari database.
*   **CRUD Berita Kuliner:** Sistem manajemen artikel berita kuliner lengkap (Tampil List Admin, Tambah Baru, Edit Artikel, Detail Baca Selengkapnya, dan Hapus Data).
*   **Dashboard Admin Responsif:** Layout panel kendali admin yang didesain ulang menggunakan sistem grid 3 kolom yang fleksibel, rapi, dan nyaman diakses dari berbagai resolusi layar.

---

## 🛠️ Spesifikasi Teknologi (Tech Stack)
*   **Core Framework:** Laravel 11.x / 10.x (PHP 8.x)
*   **Database Engine:** SQLite (Relational Database management via migrations)
*   **Frontend Templating:** Blade Engine, HTML5, CSS3, & Bootstrap 5 (Responsive Layout)
*   **Typography:** Montserrat via Google Fonts API

---

## 👤 Pengembang Proyek (Developer)
*   Faqih Aunillah - Siswa SMKN 4 Bandung Kelas XII RPL 3

---

## ⚙️ Cara Menjalankan Project di Lingkungan Lokal (Local Setup)

1. **Clone Repository:**
   git clone (https://github.com/Aunillah17/Tasty-Food.git)
   
2. **Masuk ke Direktori Project:**
   cd Tasty-Food
   
3. **Install Dependencies Vendor:**
   composer install
   
4. **Duplikasi Environment Configuration:**
   cp .env.example .env
   
5. **Generate Application Key:**
   php artisan key:generate
   
6. **Eksekusi Database Migration & Seeder:**
(Membuat skema tabel navbars, homes, footers, beritas, sekaligus mengisi data default)
php artisan migrate:fresh --seed

7. **Clear Cache Optimization:**
   php artisan route:clear && php artisan view:clear && php artisan config:clear
   
8. **Jalankan Aplikasi:**
   php artisan serve

   ---
