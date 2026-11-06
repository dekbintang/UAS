# SIM Koperasi Web

Aplikasi manajemen keanggotaan dan pencatatan transaksi pembelian produk untuk unit usaha koperasi. Dibangun dengan PHP native dan Tailwind CSS.

## Tech Stack

- **Backend:** PHP 7.4+ / 8.x (mysqli)
- **Frontend:** Tailwind CSS (CDN), Google Fonts
- **Database:** MySQL / MariaDB
- **Server:** XAMPP / Laragon

## Fitur

- CRUD data anggota (nama, email, No. KTP, telepon, tier keanggotaan)
- CRUD transaksi pembelian produk (nama produk, jumlah, harga per unit)
- Halaman publik: beranda, profil, layanan, produk, berita, kontak
- Formulir registrasi anggota

## Struktur

```
├── koperasi.php               # Koneksi database
├── database.sql               # Skrip inisialisasi tabel
├── Home.php                   # Halaman utama
├── About.php                  # Profil koperasi
├── daftar_member.php          # CRUD anggota
├── edit_member.php            # Edit data anggota
├── delete_member.php          # Hapus anggota
├── pembelian_products.php     # CRUD transaksi pembelian
├── editPembelian.php          # Edit transaksi
└── deletePembelian.php        # Hapus transaksi
```

## Setup

1. Clone ke direktori web server:
   ```bash
   git clone https://github.com/dekbintang/UAS.git C:/xampp/htdocs/koperasi
   ```
2. Buat database `koperasi` di phpMyAdmin dan import `database.sql`.
3. Buka `http://localhost/koperasi/Home.php`.

## Lisensi

[MIT](LICENSE)
