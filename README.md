# Project CI4 - Ahmad Fahzriel


Tugas UTS mata kuliah **Pengembangan Aplikasi Web Framework** menggunakan CodeIgniter 4.

---

## Apa itu CodeIgniter 4?

CodeIgniter 4 (CI4) adalah framework PHP yang ringan dan cepat buat bikin aplikasi web. CI4 menggunakan pola arsitektur **MVC (Model-View-Controller)** yang memisahkan logika bisnis, tampilan, dan data supaya kode lebih rapi dan mudah dikelola.

Dibanding nulis PHP murni, pakai CI4 jauh lebih terstruktur — routing, koneksi database, validasi form, session, dan banyak fitur lainnya udah tersedia tinggal pakai. Cocok buat yang baru belajar framework sekaligus udah cukup powerful buat project yang lebih besar.

---

## Kenapa CI4?

- Ringan dan cepat, ga butuh banyak konfigurasi buat mulai
- Dokumentasinya lengkap dan mudah dipahami
- Struktur MVC bikin kode lebih terorganisir
- Bisa konek ke berbagai database (MySQL, PostgreSQL, dll)
- Banyak dipakai di industri, jadi relevan buat dipelajari

---

## Struktur MVC di CI4

Kalau pakai CI4, kode dibagi jadi 3 bagian utama:

- **Model** — ngurusin semua yang berhubungan sama database (ambil data, simpan, update, hapus)
- **View** — tampilan yang dilihat user, ditulis pakai HTML + CSS + JS
- **Controller** — jembatan antara Model dan View, ngatur alur aplikasi

---

## Isi Repo

```
projectCI4fahzriel/
├── project1fahzriel/
├── project2fahzriel/
└── project3fahzriel/
```

---

## Requirement

- PHP >= 8.1
- Composer
- XAMPP / Laragon / PHP built-in server

---

## Cara Jalanin

1. Clone repo ini
   ```bash
   git clone https://github.com/fahzriel/projectCI4fahzriel.git
   ```

2. Masuk ke folder project yang mau dijalanin
   ```bash
   cd project1fahzriel
   ```

3. Install dependencies
   ```bash
   composer install
   ```

4. Copy `.env`
   ```bash
   cp env .env
   ```

5. Sesuaikan konfigurasi database di `.env` kalau perlu

6. Jalankan server
   ```bash
   php spark serve
   ```

7. Buka di browser
   ```
   http://localhost:8080
   ```

---

## Identitas

| | |
|---|---|
| Nama | Ahmad Fahzriel |
| NIM | 23260052 |
| Prodi | Teknik Informatika |
| Semester | 6 |
| GitHub | [@fahzriel](https://github.com/fahzriel) |
