<div align="center">

# 🏛️ SIM Koperasi Web
### *Sistem Informasi Keanggotaan & Transaksi Pembelian Koperasi*

[![PHP](https://img.shields.io/badge/PHP-7.4%20%7C%208.x-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3.x-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)](https://tailwindcss.com)
[![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg?style=for-the-badge)](LICENSE)

<p align="center">
  Aplikasi berbasis web untuk digitalisasi manajemen keanggotaan dan pencatatan transaksi pembelian produk pada unit usaha koperasi. Dilengkapi dengan antarmuka modern yang responsif menggunakan Tailwind CSS.
</p>

</div>

---

## 📌 Gambaran Proyek

Pengelolaan data anggota koperasi serta riwayat transaksi produk sering kali mengalami inefisiensi ketika dicatat secara manual di buku fisik. 

**SIM Koperasi Web** menyediakan solusi digital sederhana, ringan, dan cepat untuk:
* **Manajemen Keanggotaan (Member Management):** Pendaftaran anggota baru, validasi identitas (No. KTP & No. Telepon), serta pengelompokan tingkatan (*membership tier*).
* **Transaksi Pembelian Produk (Purchase Tracking):** Pencatatan inventarisasi pembelian produk oleh anggota beserta kuantitas dan kalkulasi harga satuan.
* **Katalog Layanan & Informasi Publik:** Halaman profil publik koperasi (Home, Tentang Kami, Layanan, Berita/News, dan Kontak).

---

## 🌟 Fitur Utama

```
                      ┌─────────────────────────────────┐
                      │        SIM KOPERASI WEB         │
                      └────────────────┬────────────────┘
                                       │
        ┌──────────────────────────────┴──────────────────────────────┐
        ▼                                                             ▼
┌──────────────────────────────┐                       ┌──────────────────────────────┐
│     MANAJEMEN ANGGOTA        │                       │    TRANSAKSI PEMBELIAN       │
├──────────────────────────────┤                       ├──────────────────────────────┤
│ • Pendaftaran Anggota Baru   │                       │ • Input Pembelian Barang     │
│ • Validasi No KTP & Kontak   │                       │ • Kalkulasi Harga per Unit   │
│ • Klasifikasi Tier Anggota   │                       │ • Riwayat Transaksi          │
│ • Ubah & Hapus Data Anggota  │                       │ • Update & Hapus Transaksi   │
└──────────────────────────────┘                       └──────────────────────────────┘
```

* **Manajemen Anggota Penuh (CRUD Member):** Pencatatan nama lengkap, email, nomor identitas KTP, nomor telepon, dan status tier keanggotaan.
* **Pencatatan Pembelian Produk (CRUD Purchasing):** Pengelolaan data produk yang dibeli anggota, jumlah unit, dan nominal harga.
* **Landing Page Interaktif:** Menggunakan Tailwind CSS CDN dengan palet warna modern (*warm amber & gold*) dan tipografi Google Fonts (*Poppins*).

---

## 🛠️ Tech Stack & Struktur File

* **Bahasa Pemrograman:** PHP Native (7.4+ / 8.x)
* **Basis Data:** MySQL / MariaDB (ekstensi `mysqli`)
* **Styling & UI:** [Tailwind CSS](https://tailwindcss.com/) & Google Fonts (Poppins)
* **Web Server:** Apache / Nginx (XAMPP / Laragon compatible)

### Struktur Repositori
```
├── koperasi.php               # Konfigurasi koneksi basis data MySQL
├── database.sql               # Skrip inisialisasi tabel basis data
├── Home.php                   # Halaman beranda utama
├── About.php                  # Informasi profil koperasi
├── service.php                # Layanan simpan pinjam / unit usaha
├── product.php                # Katalog produk koperasi
├── news.php                   # Portal kabar & berita anggota
├── contact.php                # Formulir kontak & lokasi kantor
├── register.php               # Formulir registrasi anggota mandiri
├── member.php                 # Tampilan daftar anggota aktif
├── daftar_member.php          # CRUD panel pengelolaan data anggota
├── edit_member.php            # Form perubahan data anggota
├── delete_member.php          # Handler penghapusan data anggota
├── pembelian_products.php     # CRUD panel transaksi pembelian barang
├── editPembelian.php          # Form perubahan transaksi pembelian
└── deletePembelian.php        # Handler penghapusan transaksi pembelian
```

---

## ⚡ Panduan Instalasi Lokal

### Prasyarat
* XAMPP / Laragon / Web server lokal dengan PHP & MySQL.

### Langkah Setup

1. **Clone Repositori ke htdocs / root server:**
   ```bash
   git clone https://github.com/dekbintang/UAS.git C:/xampp/htdocs/koperasi
   ```

2. **Import Database:**
   * Buka **phpMyAdmin** (`http://localhost/phpmyadmin`).
   * Buat basis data baru dengan nama: `koperasi`
   * Import file [`database.sql`](database.sql).

3. **Periksa Konfigurasi Koneksi:**
   Buka file `koperasi.php`, pastikan pengaturan MySQL sudah sesuai:
   ```php
   $host = 'localhost';
   $username = 'root';  
   $password = '';      
   $dbname = 'koperasi'; 
   ```

4. **Jalankan Aplikasi:**
   Buka peramban web dan akses:
   ```
   http://localhost/koperasi/Home.php
   ```

---

## 👨‍💻 Pengembang

**I Kadek Bintang Adi Bimantara**  
*Program Studi Teknologi Informasi — Universitas Udayana*  
* [GitHub Profile](https://github.com/dekbintang)
* [Instagram](https://instagram.com/ikadek_bintang)

---

## 📄 Lisensi
Proyek ini dilisensikan di bawah [Lisensi MIT](LICENSE).
