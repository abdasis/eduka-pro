# Eduka Pro

**Tema block (Full Site Editing) WordPress untuk website sekolah.**

Eduka Pro adalah tema modern berbasis block editor WordPress (FSE) yang dirancang khusus untuk sekolah — mulai dari TK, SD, SMP, hingga SMA. Tema hadir dengan halaman beranda siap pakai, tipografi yang nyaman dibaca, palet biru-emas yang profesional, dan integrasi mulus dengan plugin **SPMB Pro** (Sistem Penerimaan Murid Baru / PPDB online).

Tema ini tidak bergantung pada page builder apa pun. Seluruh tampilan dibangun dengan blok native WordPress, sehingga ringan, cepat, dan dapat disesuaikan langsung dari Site Editor.

---

## Fitur Utama

### Halaman Beranda Lengkap
Tema mengirim halaman beranda marketing yang langsung dapat digunakan, terdiri dari bagian-bagian berikut:

- **Hero** — judul utama dengan ajakan mendaftar PPDB
- **Sambutan Kepala Sekolah**
- **Visi & Misi**
- **Program Jenjang** (TK / SD / SMP / SMA)
- **Statistik Sekolah** (jumlah siswa, guru, ekstrakurikuler, tahun berdiri)
- **Fasilitas**
- **Testimoni** (orang tua / alumni)
- **Galeri**
- **Berita Terbaru** (query post otomatis)
- **CTA PPDB** — ajakan pendaftaran
- **Kontak**

### Tipografi & Palet
- **Font**: Plus Jakarta Sans (badan teks) + Fraunces (judul) — keduanya *variable font* yang dibundel lokal (tanpa request ke Google Fonts).
- **Palet**: Biru `#1E63E8` sebagai warna utama, Emas `#FFB703` sebagai aksen, netral slate untuk teks dan latar.

### Full Site Editing
- 9 template: `front-page`, `home`, `index`, `single`, `page`, `page-full-width`, `archive`, `search`, `404`.
- 2 template part: `header`, `footer` (lengket / sticky).
- 21 pola (pattern) yang dapat disisipkan ulang dari Site Editor.
- Semua dapat diedit langsung tanpa menyentuh kode.

### Variasi Gaya
Tema mengirim 9 variasi gaya yang bisa dipilih dari Site Editor:

- **Warna**: `Biru Emas` (palet default yang lebih dalam), `Malam` (mode gelap).
- **Tipografi**: `Plus Jakarta + Fraunces` (default), `Fraunces Display` (serif untuk badan & judul).
- **Section**: `Section Primary`, `Section Surface`, `Section Contrast` — terapkan ke blok group/kolom.
- **Block**: `Display` (judul besar), `Eyebrow` (label kecil uppercase).

### Integrasi SPMB Pro (PPDB)
Tema dirancang untuk bekerja berdampingan dengan plugin **SPMB Pro**:

- Template khusus **Page Full Width (SPMB)** — lebar penuh tanpa sidebar, ideal untuk menampung shortcode `[spmb_form]`, `[spmb_cek_status]`, `[spmb_pengumuman]`.
- Stylesheet `spmb-overrides.css` yang otomatis dimuat saat plugin aktif, menyesuaikan tampilan form, notifikasi, tabel status, dan badge hasil seleksi agar selaras dengan palet tema.
- Aman untuk JavaScript plugin — kelas dan atribut penting (`data-jalur`, `data-final-step`, `spmb-step-jalur`) tetap utuh sehingga logika form multi-langkah berjalan normal.

Tema tetap berfungsi penuh tanpa plugin SPMB Pro. Integrasi hanya aktif saat plugin terpasang.

---

## Persyaratan

- WordPress **6.7** atau lebih baru
- PHP **7.2** atau lebih baru (disarankan 8.x)

---

## Instalasi

### Via Dashboard WordPress
1. Unduh repositori ini sebagai ZIP (`Code` → `Download ZIP`).
2. Ganti nama folder hasil unduhan menjadi `eduka-pro` (tanpa sufiks `-main`).
3. Kompres folder `eduka-pro` menjadi ZIP.
4. Buka **Appearance → Themes → Add New → Upload Theme** di dashboard WordPress.
5. Unggah ZIP, lalu klik **Install** dan **Activate**.

### Via FTP / Manual
1. Salin folder `eduka-pro` ke direktori `wp-content/themes/`.
2. Aktifkan dari menu **Appearance → Themes**.

### Via WP-CLI
```bash
wp theme install /path/to/eduka-pro.zip --activate
# atau bila sudah ada di direktori themes:
wp theme activate eduka-pro
```

---

## Setup Awal

### Halaman Beranda
Agar halaman beranda tampil penuh seperti desain:

1. Buat halaman baru, misalnya berjudul **Beranda** (kosongkan kontennya).
2. Buat halaman kedua, misalnya **Berita**, untuk menampung daftar post.
3. Buka **Settings → Reading**:
   - *Your homepage displays* → **A static page**
   - *Homepage* → pilih **Beranda**
   - *Posts page* → pilih **Berita**
4. Template `front-page.html` akan otomatis dipakai untuk halaman Beranda.

### Halaman PPDB (bila menggunakan SPMB Pro)
1. Buat tiga halaman: **Pendaftaran**, **Cek Status**, **Pengumuman**.
2. Sisipkan shortcode masing-masing:
   - `[spmb_form]` di halaman Pendaftaran
   - `[spmb_cek_status]` di halaman Cek Status
   - `[spmb_pengumuman]` di halaman Pengumuman
3. Untuk setiap halaman, atur **Page Template** menjadi **Page Full Width (SPMB)** dari panel Page (sidebar editor).
4. Tambahkan ketiga halaman ke menu navigasi.

### Navigasi
Tema menggunakan blok Navigation. Kelola menu dari **Appearance → Editor → Navigation** atau melalui panel blok Navigation di header.

### Logo & Identitas
Atur logo, judul, dan tagline dari **Appearance → Site Editor → Template Parts → Header** (blok Site Logo & Site Title). Tema otomatis menampilkan judul situs bila logo belum diatur.

---

## Kustomisasi

### Warna & Tipografi
Dari Site Editor → **Styles**, pilih variasi warna/tipografi, atau sesuaikan palet dan font secara individual. Perubahan diterapkan ke seluruh situs tanpa kode.

### Pola (Patterns)
Buka **Patterns** di Site Editor. Semua pola Eduka Pro (hero, statistik, fasilitas, testimoni, dll.) dapat disisipkan ke halaman apa pun.

### Child Theme
Untuk kustomisasi yang tetap aman saat update, buat child theme dengan `Template: eduka-pro` di header `style.css` child.

---

## Struktur Direktori

```
eduka-pro/
├── style.css                 # Header tema
├── functions.php             # Hook, enqueue, integrasi SPMB
├── theme.json                # Pengaturan global (palet, font, spacing)
├── screenshot.png             # 1200x900
├── assets/
│   ├── css/
│   │   ├── editor-style.css
│   │   └── spmb-overrides.css # Override gaya SPMB Pro
│   └── fonts/                 # Plus Jakarta Sans + Fraunces (woff2)
├── parts/
│   ├── header.html
│   └── footer.html
├── templates/                 # 9 template FSE
├── patterns/                  # 21 pola blok
└── styles/                    # 9 variasi gaya
    ├── colors/
    ├── typography/
    ├── sections/
    └── blocks/
```

---

## Pertanyaan Umum

**Apakah tema butuh plugin SPMB Pro?**
Tidak. Tema berfungsi penuh tanpa plugin. Integrasi SPMB Pro hanya aktif saat plugin terpasang — form akan otomatis menyesuaikan palet tema.

**Apakah butuh page builder (Elementor, Spectra, dll.)?**
Tidak. Eduka Pro murni block theme. Semua diatur lewat Site Editor WordPress.

**Bisakah digunakan untuk blog non-sekolah?**
Bisa. Palet dan tipografi cukup netral; tinggal nonaktifkan bagian spesifik sekolah di halaman beranda.

**Apakah font dimuat dari Google?**
Tidak. Font dibundel lokal di `assets/fonts/` — tidak ada request eksternal, lebih cepat dan privasi terjaga.

---

## Kompatibilitas Plugin

- **SPMB Pro** — terdukung penuh (CSS override + template full-width)
- Plugin block standar (Yoast, Rank Math, dll.) — kompatibel
- Plugin cache (W3 Total Cache, WP Rocket) — kompatibel

---

## Lisensi

Eduka Pro dirilis di bawah **GPLv2 atau lebih baru**.

Font:
- **Plus Jakarta Sans** — SIL Open Font License 1.1
- **Fraunces** — SIL Open Font License 1.1

---

## Kredit

Dikembangkan untuk ekosistem **WP Sekolah**.

Kontribusi, laporan bug, dan permintaan fitur silakan lewat issue di repositori ini.