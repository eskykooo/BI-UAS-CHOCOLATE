# CHOCO EIS — Executive Information System

> Sistem Informasi Eksekutif berbasis web untuk memantau, menganalisis, dan mengambil keputusan strategis berdasarkan data penjualan cokelat premium secara global.

---

## 👥 Tim Pengembang — Kelompok 22 (Sistem Informasi)

| Nama | NIM |
|------|-----|
| Hendri Zaidan Safitra | 2409116013 |
| Najmi Hafizh Mauludan Zain | 2409116028 |
| Rizqy | 2409116039 |

---

## 📌 Tentang Proyek

**CHOCO EIS** adalah sistem informasi eksekutif (*Executive Information System*) berbasis web yang dirancang khusus untuk membantu manajemen dan para eksekutif dalam memantau, menganalisis, dan mengambil keputusan strategis berdasarkan data penjualan cokelat premium secara global.

Dengan pendekatan *Business Intelligence* (BI), sistem ini mengubah data mentah penjualan menjadi informasi visual yang mudah dipahami, lengkap dengan grafik interaktif, ringkasan angka penting, serta *insight* otomatis yang membantu eksekutif melihat peluang dan risiko tanpa harus membaca laporan teknis yang panjang.

---

## 🎯 Fungsi Utama

CHOCO EIS berfungsi sebagai pusat kendali data (*command center*) bagi eksekutif untuk:

1. **Memantau Kesehatan Bisnis Secara Real-time** — Melihat total pendapatan dan volume penjualan terkini dalam satu layar utama.
2. **Menganalisis Tren Penjualan** — Mengidentifikasi pola kenaikan atau penurunan pendapatan dari waktu ke waktu (bulanan/mingguan).
3. **Mengidentifikasi Produk & Brand Unggulan** — Mengetahui produk apa yang paling laris dan brand mana yang mendominasi pasar.
4. **Melihat Performa Regional** — Memahami kontribusi pendapatan dari masing-masing negara untuk mendukung keputusan ekspansi.
5. **Mengevaluasi Efektivitas Sales Channel** — Membandingkan performa setiap kanal distribusi (offline, online, marketplace, dll).
6. **Memahami Preferensi Pembayaran Pelanggan** — Mengetahui metode pembayaran apa yang paling banyak digunakan pelanggan.
7. **Menyaring Data dengan Filter Interaktif** — Mengeksplorasi data dari berbagai sudut pandang tanpa perlu keahlian teknis.
8. **Menyajikan Insight Strategis Otomatis** — Sistem secara otomatis menghasilkan narasi analisis singkat berdasarkan data terkini.
9. **Mengekspor Laporan** — Mendownload data transaksi ke format Excel atau mencetaknya sebagai PDF untuk keperluan rapat dan presentasi.

---

## 🖥️ Tampilan Aplikasi

### Dashboard Utama
![Dashboard](https://github.com/user-attachments/assets/0a7390b5-7aef-494a-af66-68b94c4ca720)

### Halaman Login
![Login](https://github.com/user-attachments/assets/f68454e1-1421-41a6-a741-fe3773e54e34)

---

## 📋 Fitur Lengkap

### 1. Dashboard Eksekutif *(Executive Overview)*

Halaman utama yang menyajikan gambaran menyeluruh kondisi bisnis dalam satu tampilan.

| Komponen | Deskripsi |
|----------|-----------|
| Total Revenue Filtered | Jumlah seluruh pendapatan (USD) berdasarkan filter aktif, ditampilkan dengan angka besar berwarna emerald |
| Total Volume Sold | Jumlah total unit produk yang terjual |
| Produk Paling Laris | Informasi brand dan jenis produk dengan penjualan tertinggi |
| Brand Terlaris | Brand yang mendominasi penjualan |
| Kontribusi Penjualan | Persentase kontribusi produk terlaris terhadap total penjualan |
| Grafik Tren Pendapatan | *Line chart* pergerakan revenue per bulan (atau per minggu jika bulan tertentu dipilih) |
| Pangsa Pasar Produk | *Doughnut chart* distribusi penjualan antar produk/brand |
| Automated Strategic Insight | Narasi analisis otomatis yang menyoroti tren positif, peringatan penurunan, atau produk dominan |

![Dashboard Eksekutif](https://github.com/user-attachments/assets/d50224e0-4be2-42ae-a8e5-9e376fa1224c)

---

### 2. Analisis Produk & Brand

Halaman khusus untuk mengevaluasi performa portofolio produk.

| Komponen | Deskripsi |
|----------|-----------|
| Top 5 Produk Berdasarkan Revenue | *Bar chart* 5 produk dengan pendapatan tertinggi, dilengkapi label produk dan brand |
| Pangsa Pasar Brand Utama | *Doughnut chart* distribusi pendapatan antar brand |
| Bottom 5 Produk (Kurang Laku) | Tabel 5 produk dengan performa terendah, ditandai status *"Review"* |
| Performa Brand Teratas | Tabel peringkat brand berdasarkan total revenue |
| Insight Otomatis | Rekomendasi strategis: brand yang memimpin pasar dan produk yang perlu perhatian khusus |

![Analisis Produk & Brand](https://github.com/user-attachments/assets/2c379b83-713e-4e08-957f-7ef387f7a794)

---

### 3. Analisis Pasar & Regional

Halaman untuk memahami kontribusi pendapatan dari berbagai wilayah.

| Komponen | Deskripsi |
|----------|-----------|
| Grafik Revenue per Negara | *Bar chart* yang membandingkan pendapatan antar negara |
| Tabel Data Per Negara | Detail revenue dan unit terjual per negara |
| Insight Regional Otomatis | Analisis negara dengan kontribusi terbesar dan rekomendasi strategis untuk ekspansi logistik |

![Analisis Pasar & Regional](https://github.com/user-attachments/assets/9d9eb1f9-bf91-4eb3-bb69-96eacd6770f9)

---

### 4. Analisis Sales Channel

Halaman untuk mengevaluasi efektivitas saluran distribusi.

| Komponen | Deskripsi |
|----------|-----------|
| Grafik Revenue by Channel | *Horizontal bar chart* perbandingan pendapatan per kanal penjualan |
| Distribusi Volume (Units) | *Doughnut chart* pangsa pasar volume penjualan per channel |
| Tabel Detail Channel | Data lengkap revenue dan unit untuk setiap sales channel |

![Analisis Sales Channel](https://github.com/user-attachments/assets/c4a8cf92-fbb9-4cfd-9e46-31987246b1fd)

---

### 5. Analisis Metode Pembayaran

Halaman untuk memahami preferensi transaksi pelanggan.

| Komponen | Deskripsi |
|----------|-----------|
| Grafik Preferensi Pembayaran | *Doughnut chart* distribusi jumlah transaksi per metode pembayaran |
| Detail Transaksi Pembayaran | Tabel jumlah transaksi dan total revenue per metode |
| Insight Pembayaran Otomatis | Analisis metode pembayaran paling populer dan rekomendasi stabilitas gateway |

![Analisis Metode Pembayaran](https://github.com/user-attachments/assets/df48a0b7-6969-48dc-9653-83a891b019d1)

---

### 6. Laporan Transaksi

Halaman untuk melihat data penjualan secara detail dalam bentuk tabel.

| Komponen | Deskripsi |
|----------|-----------|
| Tabel Log Penjualan | 100 data transaksi terbaru: Tanggal, Produk, Negara, Channel, Metode Pembayaran, Revenue, dan Units |
| Filter Interaktif | Menyaring data berdasarkan bulan, produk, negara, dan channel |
| Ekspor Excel | Mendownload data transaksi sebagai file `.xls` kompatibel dengan Excel / Google Sheets |
| Cetak / PDF | Mencetak laporan transaksi ke format PDF melalui fitur print browser |

![Laporan Transaksi](https://github.com/user-attachments/assets/d6999b0b-9797-4a6e-9701-76b38fbabdf0)

---

## 🔍 Filter Interaktif

Setiap halaman analisis dilengkapi dengan filter yang dapat dikombinasikan secara fleksibel.

| Filter | Deskripsi |
|--------|-----------|
| **Bulan** | Melihat data pada bulan tertentu (1–12). Jika dipilih, grafik tren beralih dari tampilan per bulan menjadi per minggu |
| **Jenis Produk** | Menyaring berdasarkan kategori produk cokelat (Dark Chocolate, Milk Chocolate, White Chocolate, dll) |
| **Negara** | Memfilter data berdasarkan negara asal penjualan |
| **Sales Channel** | Menyaring berdasarkan kanal distribusi |

> **Cara kerja:** Filter bekerja secara *real-time* — ketika pengguna memilih nilai dari dropdown, halaman langsung menampilkan data yang sudah disesuaikan tanpa perlu menekan tombol "Submit" terpisah.

---

## 💡 Insight Strategis Otomatis

Salah satu fitur unggulan CHOCO EIS adalah kemampuannya menghasilkan narasi analisis secara otomatis berdasarkan data yang sedang ditampilkan. Contoh insight yang dihasilkan:

- *"Tren positif terdeteksi pada Bulan 6, revenue naik 25%."*
- *"Waspada penurunan revenue 15% pada Bulan 3."*
- *"Produk Dark Chocolate dari brand Godiva mendominasi pasar."*
- *"Brand Lindt memimpin revenue global saat ini."*
- *"Pasar di United States berkontribusi paling besar terhadap total revenue. Pertimbangkan ekspansi logistik di wilayah ini."*
- *"Kanal Online terbukti paling efektif. Optimalkan biaya marketing pada kanal ini untuk ROI maksimal."*
- *"Pelanggan lebih memilih transaksi via Credit Card. Pastikan integrasi gateway pembayaran ini selalu stabil."*

---

## 📤 Ekspor Data

| Format | Deskripsi |
|--------|-----------|
| **Excel (.xls)** | Data transaksi diekspor ke file tab-separated yang kompatibel dengan Excel. File terunduh otomatis dengan nama `Laporan_Chocolate_EIS.xls`. Filter yang aktif ikut diterapkan pada data yang diekspor. |
| **PDF / Print** | Laporan dapat dicetak langsung dari browser menggunakan `window.print()` yang menghasilkan tampilan ramah cetak (*print-friendly*). |

---

## 📊 Visualisasi Data

Semua grafik dibangun menggunakan **Chart.js** dengan tema warna *luxury latte* (cokelat keemasan) yang konsisten.

| Jenis Grafik | Penggunaan |
|-------------|------------|
| **Line Chart** | Tren pendapatan dari waktu ke waktu (Dashboard) |
| **Bar Chart** | Perbandingan performa antar kategori: produk, negara (Dashboard, Produk, Regional) |
| **Horizontal Bar Chart** | Perbandingan revenue antar channel (Channel) |
| **Doughnut Chart** | Pangsa pasar dan distribusi proporsional (Dashboard, Produk, Channel, Pembayaran) |

---

## 🎯 Tujuan & Manfaat

### Tujuan
- Menyediakan sistem informasi eksekutif yang intuitif dan visual untuk memantau kinerja bisnis cokelat premium di pasar global.
- Membantu proses pengambilan keputusan berbasis data (*data-driven decision making*) bagi para eksekutif dan manajer.
- Menggantikan laporan statis dengan dashboard interaktif yang dapat dieksplorasi secara dinamis.

### Manfaat per Peran

| Peran | Manfaat |
|-------|---------|
| **CEO / Direktur** | Melihat gambaran besar bisnis dalam satu dashboard, mengidentifikasi tren, dan menemukan peluang pertumbuhan |
| **Manajer Produk** | Mengevaluasi performa setiap lini produk dan brand, mengetahui produk mana yang perlu dipertahankan atau dievaluasi ulang |
| **Manajer Marketing** | Mengukur efektivitas kampanye berdasarkan wilayah dan channel penjualan, mengalokasikan budget dengan lebih tepat |
| **Manajer Regional** | Memantau kontribusi pendapatan setiap negara dan merencanakan strategi ekspansi ke wilayah potensial |
| **Tim Keuangan** | Mengakses data transaksi detail dan mengekspor laporan untuk analisis keuangan lebih lanjut |
| **Analis Bisnis** | Menggali data dari berbagai dimensi menggunakan filter interaktif untuk menemukan pola dan wawasan baru |

---

## 🛠️ Teknologi

| Lapisan | Teknologi |
|---------|-----------|
| **Backend** | PHP 8+ (Custom MVC Framework — bukan Laravel) |
| **Database** | MySQL dengan InnoDB — Star Schema (1 tabel fakta + 5 tabel dimensi) |
| **Frontend** | Tailwind CSS (CDN) — Dark theme, glassmorphism, responsive layout |
| **Grafik** | Chart.js (CDN) — Line, Bar, Horizontal Bar, Doughnut charts interaktif |
| **Server** | Apache / Nginx via Laragon, XAMPP, atau web server lain |

---

## ⚙️ Persyaratan Sistem

- Web server (Apache / Nginx) dengan **PHP 7.4+**
- **MySQL** / MariaDB
- Browser modern (Chrome, Firefox, Edge, Safari)
- Resolusi layar minimal **1024×768** (direkomendasikan **1920×1080** untuk pengalaman optimal)
- Koneksi internet (untuk memuat Tailwind CSS dan Chart.js dari CDN)
