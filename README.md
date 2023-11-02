<div align="center">
  <h1>	Software Requirements Specification </h1>
  <h1>	Website HasarisStore (Fashion) </h1>
  <h2>	Versi 1.0 Disetujui </h2>
  <h2>	Disusun Oleh : </h2>

  <p>	22091397019 - Ihda Anisa Ulfa </p>
  <p>	22091397020 - Hanif Ihsan Alim Akbar  </p>
  <p>	22091397030 - Nurissa’idah </p>

<p>	02/10/2023 </p>
</div>
<div align="center">
	
## Daftar Isi

</div>

- [Bab 1. Pengantar](#Bab-1-Pengantar)

- [1.1 Tujuan ](#11-Tujuan)

- [1.2 Konvensi Dokumen](#12-Konvensi-Dokumen)

- [1.3 Audiens Yang Dituju](#13-Audiens-Yang-Dituju)

- [1.4 Lingkup Produk](#14-Lingkup-Produk)

- [1.5 Referensi](#15-Referensi)

- [Bab 2. Deskripsi Keseluruhan](#Bab-2-Deskripsi-Keseluruhan)

- [2.1 Perspektif Produki](#21-Perspektif-Produk)

- [2.2 Fungsi Produk](#22-Fungsi-Produk)

- [2.3 Kelas dan Karakteristik Pengguna](#23-Kelas-dan-Karakteristik-Pengguna)

- [2.4 Lingkungan Pengembangan](#24-Lingkungan-Pengembangan)

- [2.5 Kendala Desain dan Implementasi](#25-Kendala-Desain-dan-Implementasi)

- [2.6 Dokumentasi Pengguna](#26-Dokumentasi-Pengguna)

- [2.7 Asumsi dan Dependensi](#27-Asumsi-dan-Dependensi)

- [Bab 3. Persyaratan Antarmuka	](#Bab-3-Persyaratan-Antarmuka)

- [3.1 Antarmuka Pengguna](#31-Antarmuka-Pengguna)

- [3.2 Antarmuka Perangkat Keras](#32-Antarmuka-Perangkat-Keras)

- [3.3 Antarmuka Perangkat Lunak](#33-Antarmuka-Perangkat-Lunak)

- [3.4 Antarmuka Komunikasi](#34-Antarmuka-Komunikasi)

- [Bab 4. Fitur Sistem](#Bab-4-Fitur-Sistem)

- [4.1 Deskripsi dan Prioritas](#41-Deskripsi-dan-Prioritas)

- [4.2 Fitur Sistem](#42-Fitur-Sistem)

- [4.3 Persyaratan Fungsional](#43-Persyaratan-Fungsional)

- [Bab 5. Persyaratan Fungsional Lainnya](#Bab-5-Persyaratan-Fungsional-Lainnya)

- [5.1 Persyaratan Performa](#51-Persyaratan-Performa)

- [5.2 Persyaratan Keamanan Pengguna](#52-Persyaratan-Keamanan-Pengguna)

- [5.3 Persyaratan Keamanan Website](#53-Persyaratan=Keamanan-Website)

- [5.4 Atribut Kualitas Perangkat Lunak](#54-Atribut-Kualitas-Perangkat-Lunak)

- [Bab 6. Persyaratan Lainnya](#Bab-6-Persyaratan-Lainnya)
  

| Nama          | Tanggal          | Alasan Perubahan        | Versi        |
|-------------------------------|----------------|-----------------------------|----------------------------------------|
|||||
|||||


<div align="center">

## Bab 1. Pendahuluan

</div>

## 1.1 Tujuan 

Tujuan pembuatan website Fashion Pria dan Wanita ( Hasaris store ) antara lain :
Menghasilkan sebuah website untuk pengguna yang sedang mencari barang kebutuhan fashion Pria dan Wanita dan memudahkan pemilik toko Hasaris untuk memasarkan dan mempromosikan barang toko kebutuhan fashion pria dan wanita.
Menjadikan website ini sebagai salah satu media layanan toko online untuk mempermudah pembeli mendapatkan produk yang dicari.
Dapat memfasilitasi pemilik toko dalam memasarkan dan mempromosikan  produk fashion untuk pria dan wanita, termasuk pakaian sehari-hari, pakaian formal, aksesoris, sepatu, tas, dan lainnya.
Mempermudah dan memperlancar proses transaksi jual beli karena penjual dan pembeli tidak harus bertemu langsung untuk melakukan transaksi.
Menyediakan informasi yang bermanfaat bagi pembeli dalam mencari produk produk yang dibutuhkan. 

## 1.2 Konvensi Dokumen

Website yang akan dikembangkan adalah website untuk e-commerce fashion yang dapat digunakan oleh para kaum pria dan wanita untuk mencari, menemukan, dan membeli barang kebutuhan busana dan aksesoris pria dan wanita secara mudah dan efisien. Hasaris store dapat melakukan hal-hal berikut ini :
Pembeli dapat mencari dan memilih barang.
Pembeli dapat memasukkan produk ke keranjang.
Pembeli dapat mengetahui penilaian produk.
Pembeli dapat melihat data produk.
Pembeli dapat memilih metode pembayaran dengan menghubungi contacts.
Fasilitas login untuk admin dan pembeli.
Admin dapat mengelola produk, data user, dan data transaksi.
Admin dapat mengirim data transaksi kepada pembeli.
Admin dapat menambah dan menghapus user.
Admin dapat melihat detail pesanan pembeli.

## 1.3 Audiens Yang Dituju

Dokumen ini ditujukan untuk pengembang website e-commerce Business-to-Consumer (B2C) Hasaris store. SRS ini, dibagi menjadi beberapa bagian, antara lain :
Pengembang website yang ingin mencari referensi mengenai sistem e- commerce Business-to-Consumer (B2C).
Membantu menambah literatur dalam bidang web development.
Menambah wawasan dan informasi mengenai sistem e-commerce.
Dokumen pengajuan.

## 1.4. Lingkup Produk

Cakupan dari website Hasaris store ini terbilang sangat luas. mulai dari fashion baju, celana, sepatu, tas, jaket, aksesoris wanita dan pria. Jika dikelompokkan berdasarkan keseluruhan maka ruang lingkup Hasaris dapat dibagi menjadi :
1) Baju
2) Celana
3) Sepatu
4) Tas
Aksesoris wanita dan pria
Meskipun cakupan dari website Hasaris store ini cukup luas, namun, dapat membantu toko Hasaris membangun identitas merek yang kuat dan mengaitkannya dengan gaya, kualitas, dan kepercayaan diri dalam berpakaian untuk pria dan wanita. Ini membuat merek menjadi lebih mudah dikenali dan diingat oleh pelanggan.

## 1.5. Referensi

Dokumen ini merujuk pada hasil observasi yang berkaitan dengan kebutuhan dan mencakup data secara umum, diperlukannya dan penulis dokumen berdasarkan pada :
2021. Apa itu E-commerce? Berikut Pengertian, Jenis, serta Manfaatnya!
2018. DOKUMEN SPESIFIKASI KEBUTUHAN PERANGKAT LUNAK DAISY : Aplikasi Pembanding Wedding Organizer.
Widyahardh. Pengertian E – Commerce
2014. DOKUMEN SPESIFIKASI KEBUTUHAN PERANGKAT LUNAK : Taking Order Application for Sales (TOAS) untuk PT Fashion Eservice Indonesia. Universitas Negeri Malang.
	2012. Seminar Nasional Teknologi Informasi & Komunikasi Terapan 2012 	(Semantik 2012) : DOKUMENTASI SEBAGAI BAGIAN DARI 		PERANGKAT LUNAK 
<div align="center">

## Bab 2. Deskripsi Keseluruhan

</div>


## 2.1 Perspektif Produk

Sudah banyak website sejenis ini akan tetapi Hasaris store memiliki banyak penunjang di dalamnya seperti peningkatan keamanan bagi penggunanya, responsif terhadap berbagai perangkat, waktu muat yang cepat dan kinerja yang lancar, Desain visual dan estetika website yang menarik dan mencerminkan merek Hasaris store serta tampilan yang memudahkan para penggunanya. Website lain tidak memiliki keunggulan seperti yang dimiliki oleh Hasaris store ini, dimana website lain kebanyakan tampilannya membosankan dan tidak user friendly. koleksi produk hasaris store sangat beragam dan selaras dengan tren fashion terkini. Maka dari itu website Hasaris store ini dibuat agar dapat menciptakan suasana baru untuk website jual beli barang fashion serta pelanggan toko Hasaris.

## 2.2 Fungsi Produk

Seperti yang sudah dijelaskan sebelumnya banyak bisnis yang tidak hanya bergantung pada website E-commerce besar di Indonesia. Para penjual juga membutuhkan website E-commerce sendiri. Seperti Hasaris store memiliki fungsi utama yaitu menjual dan mempromosikan produk barang Fashion dengan jauh lebih mudah.

Dengan kendali penuh, maka bisnis yang akan dijalankan juga bisa lebih dikenal dan mampu menarik minat konsumen. Website Hasaris store dibuat secara user friendly agar mempermudah dalam meningkatkan pengalaman berkunjung pengguna.

## 2.3 Kelas dan Karakteristik Pengguna

Website Hasaris store memiliki beberapa tingkatan hak akses untuk setiap penggunanya antara lain :
Customer : Hak akses untuk pembeli
Seller / Admin : Hak akses untuk penjual
Karakteristik pengguna :
Customer : Dapat login dan melakukan transaksi jual beli seperti memasukan produk ke keranjang dan melakukan checkout. 
Seller / admin : Dapat mengakses halaman dashboard penjual yang berguna untuk mengupload produk yang ingin dijual dan melihat transaksi barang apa saja yang sudah di checkout customer dan dapat mengontrol semua hak akses pengguna.

## 2.4 Lingkungan Pengembangan

Website Hasaris store memiliki beberapa teknologi yang dipakai untuk mengembangkan website ini, antara lain :
Bahasa Pemrograman
HTML : HyperText Markup Language
Css
Javascript
Software Pengembangan
VSCode : Software Pemrograman

## 2.5 Kendala Desain dan Implementasi

Halangan atau tantangan dari website ini adalah perlu menggunakan jaringan internet 	untuk mengakses website ini, apabila tidak ada jaringan internet maka website ini 
tidak akan bekerja.

## 2.6 Dokumentasi Pengguna

SRS ini dibagi menjadi beberapa bagian, yaitu :
Pendahuluan yang berisi gambaran umum dari seluruh dokumen SRS. Pendahuluan SRS berisikan bagian-bagian berikut:
Tujuan Penulisan Dokumen
Konvensi Dokumen
Pembaca yang Dituju
Lingkup Produk
Referensi
Deskripsi umum perangkat lunak yang berisi penjelasan perangkat lunak secara umum. Dijelaskan melalui deskripsi umum sistem, fungsi produk, karakteristik pengguna, batasan, lingkungan operasi.
Kebutuhan Antarmuka Eksternal merincikan deskripsi masukan dan keluaran perangkat
lunak yang dispesifikasikan. Ada berbagai macam antarmuka eksternal, antara lain : antarmuka pengguna, antarmuka perangkat keras, antarmuka perangkat keras,
antarmuka komunikasi.
Fungsi Produk berisi fungsi utama dari perangkat lunak.
Kebutuhan Non Fungsional berisi bagian yang menspesifikasikan ukuran kuantitatif yang harus dipenuhi perangkat lunak.


## 2.7 Asumsi dan Dependensi

Asumsi:

Admin memiliki otoritas penuh dalam pendataan barang dan pengolahan orderan dari customer.
Admin harus mengetahui riset produk dan deskripsinya.
Website ini merupakan website yang bisa di akses dimana saja dan sistem operasi device manapun.

Dependensi:

Sistem informasi berbasis website ini dapat diakses jika terdapat koneksi internet saja.
Catatan produk akan diantar apabila customer mempersetujui harga ongkir sesuai dengan pihak ketiga yaitu perusahaan jasa pengantaran.
Pembayaran sudah terintegrasi dengan beberapa pihak

<div align="center">
	
## Bab 3. Persyaratan Antarmuka

</div>


## 3.1 Antarmuka Pengguna

Hasaris Store mengusung konsep desain yang ramah untuk digunakan oleh pengguna. Navigasinya cukup mudah dan pengguna tidak akan kesulitan dalam berpindah halaman. Warna dibuat agar tidak norak dan dibuat agar nyaman dimata.


## 3.2 Antarmuka Perangkat Keras

Adapun antarmuka perangkat keras yang digunakan untuk mengakses website Hasaris store antara lain:
Smartphone : Hardware untuk mengakses situs Hasaris store.
Monitor : Menampilkan halaman website.
Keyboard : Untuk memasukkan input ke website.
Mouse / trackpad : Untuk mempermudah navigasi pengguna.
Hasaris Store mengusung konsep desain yang ramah untuk digunakan oleh pengguna. Navigasinya cukup mudah dan pengguna tidak akan kesulitan dalam berpindah halaman. Warna dibuat agar tidak norak dan dibuat agar nyaman dimata.


## 3.3 Antarmuka Perangkat Lunak

Tampilan Beranda

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/144761618/0824b22b-63bd-4733-a245-71dd62c33bec)



Tampilan Category

![tampilanawal2category](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/144761618/69197538-9a17-4d55-8189-0418f9247ce4)

![category](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/144761618/7b25bfc6-6f66-405d-b1c4-e1a8392ce037)

![category2](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/144761618/669faa8b-5672-4478-aa14-353c07483fe5)


Tampilan Contact

![contact](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/144761618/a05a89a2-c7c9-4f15-b574-f0dad1b1e266)

Tampilan Login

![Screenshot (90)](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/144761618/45cd93a5-bad2-43b9-8d9f-0b502103cfca)

Tampilan Registrasi

![Screenshot (91)](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/144761618/6ce8b343-7030-4648-9fe1-b4f40dba4e12)


Tampilan Halaman Kedua

![Screenshot (92)](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/144761618/f8a33cea-2895-447e-90fe-61745d8c27ab)


Tampilan Product

![Screenshot (80)](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/144761618/e33ea017-51dd-46bf-adea-614aa8a29e5d)

![Screenshot (81)](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/144761618/ab65ecd4-9781-4648-9174-2a358f264824)

![Screenshot (82)](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/144761618/bda72844-9188-404d-be78-09377760e18a)

![Screenshot (83)](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/144761618/006888cf-5369-483c-a2c0-24c2a716ed00)

![Screenshot (85)](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/144761618/3fdc2c45-b5c5-41e4-b576-bd3299f5230c)

![Screenshot (99)](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/144761618/361200f0-ba66-4ebf-baf8-1f12ef9b3e7f)

![Screenshot (100)](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/144761618/6980be08-5adb-4bd7-88da-81725d7c5833)


![Screenshot (101)](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/144761618/f96ae28c-1c14-4488-8e10-a3f151ce8ef0)

![Screenshot (102)](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/144761618/6ab39337-ebad-4131-864c-ce61c848ae0c)

![Screenshot (103)](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/144761618/50f5fd7d-6a6d-4150-accb-60145608113c)




Tampilan Product Check Out

![Screenshot (86)](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/144761618/a9344f45-dac7-44ac-b9a8-90e646fdb112)

Tampilan About 

![Screenshot (93)](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/144761618/5ff673b9-8ee4-4a90-94e6-b2d4998cbd1a)

![Screenshot (93)](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/144761618/24c0e4b2-abac-46e5-b276-a2f615efc3af)


![Screenshot (96)](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/144761618/388147af-1b86-4cb9-9729-bd72da6fe2da)


Tampilan Contact

![Screenshot (87)](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/144761618/f26f5197-010c-4bdd-a97c-7fd1d4c3d3d2)

![Screenshot (88)](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/144761618/5df87ed2-097b-4ba8-b315-4306664e3cdc)


## 3.4 Antarmuka Komunikasi

Website Hasaris store ini membutuhkan laptop atau smartphone yang terhubung ke jaringan internet. TCP/IP digunakan sebagai standar komunikasi data yang dipakai dalam proses tukar menukar data antar perangkat yang terhubung dalam jaringan.
Fitur Sistem

<div align="center">

## Bab 4.Fitur Sistem

</div>


## 4.1 Deskripsi dan Prioritas

Fitur Fitur Menu Beranda
Fitur menu beranda merupakan fitur utama pada Website Hasaris store. Dengan fitur ini, customer dapat melihat beberapa tampilan, seperti rekomendasi produk paling laris dan produk terfavorit. Pada tampilan beranda juga ada beberapa pilihan kategori untuk customer.
Fitur Menu Produk
Fitur menu produk ini bertujuan untuk menampilkan produk-produk barang yang dijual di Hasaris store untuk customer. Pada fitur ini, customer dapat melihat berbagai macam produk barang fashion menarik disertai harga dan deskripsi produk.
Fitur Menu Keranjang 
Fitur menu Keranjang terdapat beberapa produk yang dimasukkan customer ke keranjang beserta detailnya. Jika ingin mengcheckout pesanan dapat mengisi shipping details seperti data diri, kurir, dan pembayaran.
Fitur Menu Checkout 
Fitur Menu Checkout akan menampilkan detail pesanan yang sudah di checkout, status pemesanan
Fitur Menu Login
Fitur menu login merupakan proses customer untuk mendapatkan hak akses.Dengan adanya fitur ini, customer dapat menggunakan hak akses lebih optimal.


## 4.2 Fitur Sistem

Login	: Masuk ke sistem Hasaris store jika sudah mendaftar.
Daftar	: Membuat akun jika belum mempunyai.
Dashboard	: Halaman yang bisa diakses oleh penjual atau admin untuk mengelola produk dan data transaksi.
Keranjang 	: Menambah produk ke keranjang yang nantinya akan dibeli.
Dashboard 	: Halaman yang bisa diakses oleh penjual atau admin untuk mengelola produk dan data transaksi
Tambah produk	: Fitur Admin Hasaris store untuk menambahkan produknya.
Transaksi	: Melihat data transaksi pembeli 
Fitur search 	: Mencari produk yang diinginkan

## 4.3 Persyaratan Fungsional

![image](https://github.com/hanifmhsunesa/PemwebFinalProjek/assets/124480469/1c4043c6-1c88-4f0c-8478-562ed6a1d4fd)

<div align="center">

## Bab 5. Persyaratan Fungsional Lainnya

</div>


## 5.1 Persyaratan Performa

Persyaratan hardware dan software :
Minimum windows 7 atau lebih
Google chrome atau browser versi terbaru
Akses internet

## 5.2 Persyaratan Keamanan Pengguna

Data diri dan password pengguna terjamin keamanannya karena tidak bisa diakses oleh sembarang orang dan password sudah di enkripsi.

## 5.3 Persyaratan Keamanan Website

Website sudah menggunakan domain.com dan SSL sebagai sertifikasi keamanan website agar tidak mudah diretas oleh pihak yang tidak bertanggung jawab.

## 5.5 Proses Bisnis

Dari banyaknya jenis proses bisnis yang ada, aktivitas transaksi antara penjual dan pembeli merupakan salah satu hal dasar yang harus dipahami.

Pada gambar diatas bisa dilihat bahwa pemilik toko Hasaris store yang ingin menawarkan barang yang dijualnya. Dengan bermodalkan sebuah website penjual dapat memberikan berbagai informasi yang berkaitan dengan produk yang ditawarkan. Sebagai calon pembeli, internet menyediakan akses yang luas dan bebas terhadap apa yang ingin diakses. Dalam Website E-Commerce Hasaris store ini, pemilik toko Hasaris menjadi admin atau seller yang memiliki dan memasarkan produknya. Setelah aktivitas pertukaran informasi dilakukan, proses bisnis selanjutnya adalah melakukan pemesanan produk yang telah disepakati. Kedua pihak yang bertransaksi harus melakukan aktivitas perjanjian tertentu, sehingga proses jual beli dapat dilakukan dengan sah, benar, dan aman.







Didalam proses bisnis ini, ada empat aliran entiti yang harus dikelola dengan baik :
Flow of Goods (Aliran Produk)
Flow of Information (Aliran Informasi)
Flow of Money (Aliran Uang)
Flow of Documents (Aliran Dokumen)

Fitur E-Commerce Hasaris store  harus dapat mensinkronisasikan keempat aliran diatas, sehingga proses transaksi dapat berjalan secara efisien, efektif, dan terkontrol dengan baik.

Persyaratan Keamanan Website

Website sudah menggunakan domain.com dan SSL sebagai sertifikasi keamanan website agar tidak mudah diretas oleh pihak yang tidak bertanggung jawab.

<div align="center">
	
## Bab 6. Persyaratan Lainnya

</div>



Lampiran A : Glosarium

![image](https://github.com/hanifmhsunesa/PemwebFinalProjek/assets/124480469/1446f890-ebdb-4712-b787-f46390d9cc16)


Lampiran B : Model Analisis
DFD Level 0

![image](https://github.com/hanifmhsunesa/PemwebFinalProjek/assets/124480469/4d8ec449-92ae-49d5-a269-7777c8e99d70)

DFD Level 1

![image](https://github.com/hanifmhsunesa/PemwebFinalProjek/assets/124480469/74af4a65-3245-44be-9949-2933228ecf2f)


Flowchart 

![image](https://github.com/hanifmhsunesa/PemwebFinalProjek/assets/124480469/bb6281cf-ff4e-450b-810e-5817b3d47327)

UML Activity Diagram Sistem Checkout

![image](https://github.com/hanifmhsunesa/PemwebFinalProjek/assets/124480469/a5fe43c9-7129-451a-b810-a62b3636cc9d)

UML Activity Diagram Sistem Login

![image](https://github.com/hanifmhsunesa/PemwebFinalProjek/assets/124480469/8b48bd9e-799f-4d85-b082-2786d824d594)

Use Case Diagram E-Commerce

![image](https://github.com/hanifmhsunesa/PemwebFinalProjek/assets/124480469/99ebb87a-bcef-41c2-a176-8a6511412291)

Lampiran C : Daftar Fitur Yang Akan Ditentukan
Pada lampiran ini berisi mengenai fitur-fitur yang belum ditentukan pada website Hasaris store, antara lain yaitu pembuatan IP agar website Hasaris store agar dapat digunakan pada aplikasi mobile, dan membuat Hasaris store menjadi aplikasi yang dapat digunakan pada android.

PENJELASAN SCRIPT PROGRAM

A. Laman Index

1. index.html

a) head

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/121718997/b67e28a8-84ed-41f5-aa8c-dc0f90d627f2)

1. `<!DOCTYPE html>`: Ini adalah deklarasi dokumen yang mengindikasikan bahwa halaman ini adalah dokumen HTML. Ini adalah elemen wajib yang ditempatkan di bagian atas dokumen HTML.
2. `<html lang="en">`: Ini adalah elemen root dari halaman HTML, yang menyatakan bahwa halaman ini ditulis dalam bahasa Inggris ("en" adalah kode bahasa Inggris). Semua elemen HTML akan berada di dalam elemen `<html>` ini.
3. `<head>`: Ini adalah bagian kepala dari dokumen HTML, yang berisi informasi-informasi terkait dengan halaman web, seperti metadata dan tautan ke berkas eksternal. Semua elemen dalam bagian `<head>` ini tidak akan ditampilkan di halaman web itu sendiri, tetapi digunakan untuk mengatur tampilan dan perilaku halaman.
•	`<meta charset="UTF-8">`: Ini adalah elemen meta yang menentukan pengkodean karakter yang digunakan oleh halaman web. UTF-8 adalah pengkodean karakter yang umum digunakan untuk mendukung berbagai karakter dari berbagai bahasa.
•	`<meta name="viewport" content="width=device-width, initial-scale=1.0">`: Ini adalah elemen meta yang mengatur tampilan halaman web di perangkat mobile. Dengan mengatur `viewport`, halaman akan menyesuaikan lebar tampilan dengan lebar perangkat dan mengatur tingkat pembesaran awal (scale) ke 1.0.
•	 `<title>HasarisStore</title>`: Ini adalah judul halaman web yang akan ditampilkan di tab browser. Isi dalam elemen `<title>` adalah "HasarisStore."
•	`<link rel="stylesheet" href="style.css">`: Ini adalah tautan (link) ke berkas eksternal dengan tipe "stylesheet" yang digunakan untuk memuat gaya (CSS) dari berkas "style.css." Ini memungkinkan halaman web untuk mengambil aturan gaya dari berkas eksternal ini, sehingga Anda dapat mengatur tampilan halaman dengan lebih terperinci.
•	`<link href="images/logo-removebg-preview.png" rel="icon">`: Ini adalah tautan ke berkas gambar yang akan digunakan sebagai ikon (favicon) untuk halaman web. Ikon ini akan muncul di tab browser ketika halaman web dibuka.

b) body

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/121718997/368d27fa-3043-445f-a07f-281ba534cd84)

1.	`<div class="header">`: Ini adalah div dengan kelas "header" yang berfungsi untuk mengelompokkan dan mengatur elemen-elemen yang terkait dengan bagian header dari halaman web.
2.	`<div class="container">`: Ini adalah div dengan kelas "container" yang digunakan untuk mengelompokkan dan mengatur konten dalam sebuah wadah atau kotak, biasanya untuk mengontrol lebar konten agar tidak terlalu lebar di layar besar.
3.	`<section id="home">`: Ini adalah elemen `<section>` dengan atribut "id" yang bernilai "home." Ini adalah bagian dari halaman yang ditandai sebagai "home" dan mungkin digunakan sebagai tanda tempat yang dapat diakses melalui tautan atau pengaturan CSS.
4.	`<div class="navbar">`: Ini adalah div dengan kelas "navbar" yang mengelompokkan elemen-elemen yang berhubungan dengan navigasi halaman web.
5.	`<div class="logo">`: Ini adalah div dengan kelas "logo" yang berisi gambar logo situs yang ditampilkan dengan lebar 125 piksel.
6.	`<nav>`: Ini adalah elemen `<nav>` yang umumnya digunakan untuk mengelompokkan tautan-tautan navigasi.
7.	`<ul>`: Ini adalah daftar yang disusun dalam elemen `<ul>` (unordered list). Daftar ini berisi beberapa tautan navigasi.
8.	`<li><a href="#home">Home</a></li>`: Ini adalah elemen daftar `<li>` yang berisi tautan `<a>` ke bagian halaman dengan id "home." Ini adalah tautan "Home" dalam menu navigasi.
9.	`<li><a href="#categories">Category</a></li>`: Ini adalah elemen daftar `<li>` yang berisi tautan `<a>` ke bagian halaman dengan id "categories." Ini adalah tautan "Category" dalam menu navigasi.
10.	`<li><a href="#contact">Contact</a></li>`: Ini adalah elemen daftar `<li>` yang berisi tautan `<a>` ke bagian halaman dengan id "contact." Ini adalah tautan "Contact" dalam menu navigasi.
11.	`<li><a href="login.html">Login</a></li>`: Ini adalah elemen daftar `<li>` yang berisi tautan `<a>` yang mengarahkan pengguna ke halaman "login.html" saat diklik. Ini adalah tautan "Login" dalam menu navigasi.
12.	`<div class="row">`: Ini adalah div dengan kelas "row" yang digunakan untuk mengatur elemen dalam baris.
13.	`<div class="col-2">`: Ini adalah div dengan kelas "col-2" yang mungkin digunakan untuk mengatur konten dalam dua kolom di dalam baris.
14.	`<h1>Give Your Workout <br> A New Style!</h1>`: Ini adalah elemen heading level 1 (h1) yang berisi teks. Teks ini digunakan untuk judul utama.
15.	`<p>Success is easy, what makes not successful is laziness</p>`: Ini adalah elemen paragraph (p) yang berisi teks yang mungkin berfungsi sebagai deskripsi atau kutipan.
16.	`<a href="login.html" class="btn">Explore Now &#8594;</a>`: Ini adalah tautan `<a>` dengan atribut `href` yang mengarahkan ke halaman "login.html" dan diberi kelas "btn," yang mungkin digunakan untuk membuat tautan terlihat seperti tombol.
17.	`<div class="col-2">`: Ini adalah div dengan kelas "col-2" yang mungkin digunakan untuk mengatur konten dalam kolom kedua di dalam baris.
18.	`<img src="images/lovepik-lovers-shopping-png-image_400680411_wh860-removebg-preview.png">`: Ini adalah elemen gambar `<img>` yang menampilkan gambar dari berkas "lovepik-lovers-shopping-png-image_400680411_wh860-removebg-preview.png."

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/121718997/2bd05cfa-065f-4435-9e02-eff757de8121)

1.	`</section>`: Ini adalah tag penutup untuk elemen `<section>`. Ini menandakan akhir dari bagian yang telah diberi id "home."
2.	`<section id="categories">`: Ini adalah elemen `<section>` yang memiliki id "categories." Ini adalah awal dari sebuah bagian dalam halaman yang berkaitan dengan kategori.
3.	`<div class="small-container">`: Ini adalah div dengan kelas "small-container" yang digunakan untuk mengatur konten dalam sebuah wadah dengan lebar yang lebih terbatas
4.	`<div class="row">`: Ini adalah div dengan kelas "row" yang digunakan untuk mengatur elemen dalam baris.
5.	`<div class="col-3">`: Ini adalah div dengan kelas "col-3," yang mungkin digunakan untuk mengatur konten dalam tiga kolom di dalam baris.
6.	`<img src="images/category-1.jpg">`: Ini adalah elemen gambar `<img>` yang menampilkan gambar dari berkas "category-1.jpg." Mungkin ini adalah representasi visual dari kategori produk.
7.	`</div>`: Ini adalah penutup untuk elemen div "col-3." (Kode yang serupa untuk gambar kategori "category-2.jpg" dan "category-3.jpg.")
8.	`<div class="small-container">`: Ini adalah div dengan kelas "small-container" yang mungkin digunakan untuk mengatur konten produk dalam wadah dengan lebar terbatas.
9.	`<h2 class="title">Featured Products</h2>`: Ini adalah elemen heading level 2 (h2) yang berisi teks "Featured Products." Ini mungkin adalah judul yang menandakan bahwa berikutnya akan ditampilkan produk-produk unggulan.

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/121718997/f1c4f2d2-9746-4794-b4be-a5bdbe6dda07)

1.	`<div class="row">`: Ini adalah div dengan kelas "row" yang digunakan untuk mengatur elemen dalam baris. Dalam konteks ini, setiap produk akan ditampilkan dalam kolom yang terletak dalam baris ini.
2.	`<div class="col-4">`: Ini adalah div dengan kelas "col-4," yang mungkin digunakan untuk mengatur konten produk dalam empat kolom berbeda. Ini mengindikasikan bahwa akan ada empat produk yang akan ditampilkan dalam satu baris.
3.	`<img src="images/product-1.jpg">`: Ini adalah elemen gambar `<img>` yang menampilkan gambar produk pertama dari berkas "product-1.jpg." Ini adalah gambar representasi produk.
4.	`<h4>Red Printed T-Shirt</h4>`: Ini adalah elemen heading level 4 (h4) yang berisi judul produk, dalam hal ini, "Red Printed T-Shirt."
5.	`<div class="rating">`: Ini adalah div dengan kelas "rating," yang mungkin digunakan untuk menampilkan peringkat atau ulasan produk.
6.	`<span class="star">&#9733;</span>`: Ini adalah elemen `<span>` dengan kelas "star" yang menampilkan karakter bintang (&#9733;) sebagai representasi peringkat produk. Dalam kasus ini, ada empat bintang yang menyatakan peringkat produk.
7.	`<span class="star">&#9734;</span>`: Ini adalah elemen `<span>` dengan kelas "star" yang menampilkan karakter bintang kosong (&#9734;) sebagai representasi peringkat produk. Ini menunjukkan bahwa peringkat produk ini tidak penuh (misalnya, empat bintang dari lima).
8.	`<p>$50.000</p>`: Ini adalah elemen paragraph (p) yang menampilkan harga produk, dalam hal ini, "$50.000."
9.	(Kode yang serupa digunakan untuk produk kedua dengan gambar "product-2.jpg," judul "Black Shoes," peringkat lima bintang, dan harga "$70.000.")

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/121718997/c6b110ce-6749-4ff4-bed3-011882fbd7ad)

1.	`</div>`: Ini adalah penutup untuk elemen div sebelumnya yang memiliki kelas "col-4." Elemen ini mengakhiri bagian yang menampilkan produk-produk.
2.	`<div class="offer">`: Ini adalah div dengan kelas "offer" yang mengelompokkan dan mengatur elemen-elemen yang terkait dengan penawaran khusus.
3.	`<div class="small-container">`: Ini adalah div dengan kelas "small-container" yang digunakan untuk mengatur konten penawaran khusus dalam sebuah wadah dengan lebar yang lebih terbatas.
4.	`<div class="row">`: Ini adalah div dengan kelas "row" yang digunakan untuk mengatur elemen dalam baris.
5.	`<div class="col-2">`: Ini adalah div dengan kelas "col-2" yang mungkin digunakan untuk mengatur konten dalam dua kolom di dalam baris.
6.	`<img src="images/exclusive.png" class="offer-img">`: Ini adalah elemen gambar `<img>` yang menampilkan gambar eksklusif (exclusive.png) yang mungkin merupakan gambar representasi dari penawaran khusus. Gambar ini diberi kelas "offer-img."
7.	`<div class="col-2">`: Ini adalah div dengan kelas "col-2" yang digunakan sebagai kolom kedua dalam baris.
8.	`<p>HasarisStore</p>`: Ini adalah elemen paragraph (p) yang berisi teks "HasarisStore." Mungkin ini adalah nama toko atau merek yang memberikan penawaran khusus.
9.	`<h1>Smart Band 4</h1>`: Ini adalah elemen heading level 1 (h1) yang berisi judul "Smart Band 4." Ini adalah judul penawaran khusus.

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/121718997/88298e78-c5b1-454e-b1d6-c37dae819941)

1.	`<section id="contact">`: Ini adalah elemen `<section>` yang memiliki id "contact." Ini menandakan awal dari bagian yang berisi informasi kontak.
2.	`<div class="box">`: Ini adalah div dengan kelas "box" yang mengelompokkan dan mengatur elemen-elemen yang terkait dengan informasi kontak.
3.	`<h2 class="title">Contact</h2>`: Ini adalah elemen heading level 2 (h2) yang berisi judul "Contact." Ini adalah judul untuk bagian informasi kontak.
4.	`<div class="col-5">`: Ini adalah div dengan kelas "col-5," yang mungkin digunakan untuk mengatur konten dalam lima kolom berbeda.
5.	`<div class="icon"></div>`: Ini adalah elemen div dengan kelas "icon," yang mungkin digunakan untuk menampilkan ikon yang sesuai dengan informasi kontak (misalnya, alamat, email, dan WhatsApp). Namun, dalam kode yang Anda berikan, tidak ada gambar atau ikon yang ditampilkan.
6.	`<h4>Address</h4>`: Ini adalah elemen heading level 4 (h4) yang berisi label "Address," yang mungkin mengindikasikan bahwa berikutnya akan ditampilkan alamat.
7.	`<p>Jln. Kentintang Universitas Negeri Surabaya</p>`: Ini adalah elemen paragraph (p) yang menampilkan alamat kontak.
8.	`<div class="footer">`: Ini adalah div dengan kelas "footer," yang mengelompokkan dan mengatur elemen-elemen yang terkait dengan bagian footer halaman.
9.	`<div class="socialicon">`: Ini adalah div dengan kelas "socialicon" yang mungkin digunakan untuk menampilkan ikon media sosial.
10.	`<a href=""><img src="images/Instagram-Icon.png" width="30px"></a>`: Ini adalah elemen tautan `<a>` yang mengarahkan ke tautan kosong (href="") dengan gambar ikon Instagram yang ditampilkan. Ikon tersebut memiliki lebar 30 piksel.
11.	`<div class="footerbottom">`: Ini adalah div dengan kelas "footerbottom" yang mungkin digunakan untuk menampilkan informasi hak cipta dan perancang halaman.
12.	`<p>copyright &copy;2023: Designed by <span class="designer">HasarisStore</span></p>`: Ini adalah elemen paragraph (p) yang menampilkan informasi hak cipta ("copyright") dengan tanda hak cipta (&copy;) untuk tahun 2023, serta keterangan bahwa halaman tersebut didesain oleh "HasarisStore."

B. style.css

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/121718997/942d684a-273c-4f61-a41c-9d4b0f01193f)

1. `*`: Ini adalah selektor universal yang berarti aturan gaya ini akan diterapkan pada semua elemen di halaman web.
2. `margin: 0;`, `padding: 0;`: Ini mengatur margin dan padding untuk semua elemen di halaman menjadi 0. Margin adalah ruang di sekitar elemen, sedangkan padding adalah ruang di sekitar konten elemen. Dengan mengatur nilai margin dan padding ke 0, kita menghilangkan ruang tambahan default yang biasanya ada pada elemen-elemen HTML. Ini membantu mengontrol dengan lebih baik tata letak elemen-elemen.
3. `box-sizing: border-box;`: Ini mengatur model kotak (box model) untuk elemen-elemen HTML. Dengan mengatur `box-sizing` menjadi "border-box," lebar dan tinggi elemen termasuk dalam perhitungan, yang berarti bahwa margin dan padding juga diakomodasi dalam lebar dan tinggi elemen. Ini membantu dalam menghindari ketidakcocokan ukuran elemen.
4. `html`: Ini adalah selektor untuk elemen `<html>`, yang mengatur aturan gaya khusus untuk elemen tersebut.
   - `font-size: 100%;`: Ini mengatur ukuran font elemen HTML menjadi 100% dari ukuran default. Ini adalah praktik umum untuk mengatur ukuran font dasar halaman ke ukuran yang konsisten dan dapat diubah dengan lebih mudah melalui CSS.
   - `scroll-behavior: smooth;`: Ini mengatur perilaku pengguliran (scrolling behavior) saat pengguna menggulir halaman. Nilai "smooth" memberikan efek animasi yang halus ketika halaman digulir, sehingga transisi antar bagian halaman menjadi lebih lancar.
   - `scroll-padding-top: 6rem;`: Ini mengatur jarak (padding) yang akan ditambahkan di atas elemen yang menjadi tujuan pengguliran saat menggunakan tautan navigasi dengan pengguliran halus. Dalam hal ini, jarak sebesar 6 rem (unit pengukuran berdasarkan ukuran font) ditambahkan di atas elemen tersebut. Ini memastikan bahwa elemen yang menjadi tujuan pengguliran akan muncul dengan jarak tertentu dari atas layar, sehingga kontennya tidak tersembunyi di bawah bilah navigasi.

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/121718997/869f4e5b-64ab-46bd-b28c-ef94bb408145)

1. `.navbar`: Ini adalah selektor kelas CSS yang mengatur aturan gaya untuk elemen dengan kelas "navbar," yang mungkin digunakan untuk menggambarkan bagian navigasi halaman web.
   - `display: flex;`: Ini mengubah elemen "navbar" menjadi elemen kontainer dengan tata letak fleksibel (flexbox), yang memudahkan pengaturan elemen-elemen di dalamnya dalam satu baris atau kolom.
   - `align-items: center;`: Ini mengatur elemen-elemen di dalam "navbar" agar berada di tengah secara vertikal, sehingga kontennya terpusat di tengah.
   - `padding: 15px;`: Ini memberikan padding sebesar 15 piksel di sekitar elemen "navbar," yang memberikan ruang antara isi "navbar" dan batasnya.
   - `background: radial-gradient(#ffd6d6, #ffd6d6);`: Ini mengatur latar belakang elemen "navbar" sebagai latar belakang dengan efek gradien radial dari warna #ffd6d6 ke warna #ffd6d6. Gradien ini menciptakan latar belakang berwarna yang mungkin cocok dengan desain situs.
   - `width: 93%;`: Ini mengatur lebar elemen "navbar" menjadi 93% dari lebar layar, sehingga elemen ini akan menjadi elemen yang agak lebih kecil dibandingkan dengan lebar layar.
   - `top: 0;`: Ini mengatur elemen "navbar" berada di bagian atas halaman web (posisi paling atas).
   - `z-index: 2;`: Ini mengatur tingkat z (z-index) elemen "navbar" menjadi 2, yang menentukan posisinya di atas elemen-elemen lain yang memiliki z-index lebih rendah.
   - `position: fixed;`: Ini mengunci elemen "navbar" di tempatnya sehingga tetap terlihat saat pengguna menggulir halaman. Ini adalah ciri khas elemen navigasi yang selalu terlihat di atas halaman.
2. `nav`: Ini adalah selektor elemen `<nav>`, yang mungkin digunakan untuk mengatur elemen navigasi di dalam "navbar."
   - `flex: 1;`: Ini mengatur elemen "nav" agar mengambil sebagian ruang yang tersisa dalam elemen "navbar" dengan tata letak fleksibel.
   - `text-align: right;`: Ini mengatur teks dalam elemen "nav" agar terletak di sebelah kanan elemen, sehingga elemen navigasi diarahkan ke kanan "navbar."
3. `nav ul`: Ini adalah selektor untuk elemen daftar tak terurut (unordered list) di dalam elemen "nav."
   - `float: right;`: Ini mengatur elemen daftar tak terurut agar berada di sebelah kanan elemen "nav."
4. `nav ul li`: Ini adalah selektor untuk elemen-elemen daftar dalam elemen daftar tak terurut.
   - `display: inline-block;`: Ini mengatur elemen-elemen daftar untuk ditampilkan dalam satu baris secara horizontal, sejajar.
   - `margin-right: 20px;`: Ini memberikan margin sebesar 20 piksel di sebelah kanan setiap elemen daftar, memberikan ruang antara elemen-elemen daftar.
5. `.navbar ul li a`: Ini adalah selektor kelas CSS yang mengatur aturan gaya untuk tautan (link) di dalam elemen daftar di "navbar."
   - `padding: 20px 20px;`: Ini memberikan padding 20 piksel di atas dan bawah serta 20 piksel di kiri dan kanan untuk tautan, menciptakan area yang lebih besar yang dapat diklik oleh pengguna.
6. `.navbar ul li a:hover`: Ini adalah selektor untuk tautan saat dihover (dihover adalah ketika kursor mouse berada di atas tautan).
   - `background-color: #daeaf6;`: Ini mengubah latar belakang tautan menjadi warna #daeaf6 ketika tautan dihover.
   - `color: #000000;`: Ini mengubah warna teks tautan menjadi hitam (#000000) ketika tautan dihover.

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/121718997/d0948324-d34c-4f98-a6a7-a55d3c6e2dbd)

1. `a`: Ini adalah selektor untuk elemen tautan (link) dalam dokumen.
   - `text-decoration: none;`: Ini menghapus dekorasi tautan standar, seperti garis bawah, yang biasanya muncul pada tautan.
   - `color: #555;`: Ini mengatur warna teks untuk tautan menjadi abu-abu (#555). Ini akan memengaruhi warna teks tautan dalam seluruh halaman.
2. `p`: Ini adalah selektor untuk elemen teks paragraf (paragraph) dalam dokumen.
   - `color: #555;`: Ini mengatur warna teks untuk paragraf menjadi abu-abu (#555). Ini akan memengaruhi warna teks paragraf dalam seluruh halaman.
3. `.container`: Ini adalah selektor untuk elemen dengan kelas "container," yang mungkin digunakan untuk mengelompokkan konten dalam suatu wadah.
   - `max-width: 1300px;`: Ini mengatur lebar maksimum elemen "container" menjadi 1300 piksel, yang berarti bahwa elemen ini tidak akan melebar lebih dari itu.
   - `margin: auto;`: Ini mengatur margin elemen "container" menjadi otomatis, sehingga elemen akan terpusat secara horizontal di tengah layar.
   - `padding-left: 25px;`, `padding-right: 25px;`: Ini memberikan padding 25 piksel di sisi kiri dan kanan elemen "container." Padding adalah ruang antara konten elemen dan batas elemen tersebut.
4. `.row`: Ini adalah selektor untuk elemen dengan kelas "row," yang mungkin digunakan untuk mengatur baris dalam tata letak halaman.
   - `display: flex;`: Ini mengubah elemen "row" menjadi elemen kontainer dengan tata letak fleksibel (flexbox), yang memudahkan pengaturan elemen-elemen dalam baris tersebut.
   - `align-items: center;`: Ini mengatur elemen-elemen dalam "row" agar berada di tengah secara vertikal.
   - `flex-wrap: wrap;`: Ini memungkinkan elemen-elemen dalam "row" untuk melilit ke baris baru jika tidak cukup lebar. Ini membantu responsivitas tata letak halaman.
   - `justify-content: space-around;`: Ini mengatur elemen-elemen dalam "row" untuk berjarak sekitar dengan ruang yang sama di sekitar mereka, menciptakan ruang yang merata di antara elemen-elemen tersebut.
5. `.col-2`: Ini adalah selektor untuk elemen dengan kelas "col-2," yang mungkin digunakan untuk mengatur kolom dalam tata letak halaman.
   - `flex-basis: 50%;`: Ini mengatur lebar dasar elemen "col-2" menjadi 50% dari lebar total "row." Dengan demikian, "col-2" akan mendapatkan setengah dari lebar "row."
   - `min-width: 300px;`: Ini mengatur lebar minimum untuk elemen "col-2" menjadi 300 piksel. Ini memastikan bahwa "col-2" tidak akan menjadi terlalu sempit jika layar lebih kecil.
6. `.col-2 img`: Ini adalah selektor untuk gambar (element `<img>`) yang berada di dalam elemen "col-2."
   - `max-width: 100%;`: Ini mengatur lebar maksimum gambar menjadi 100% dari lebar elemen "col-2," sehingga gambar akan mengikuti lebar elemen "col-2."
   - `padding: 50px 0;`: Ini memberikan padding sebesar 50 piksel di atas dan bawah gambar, memberikan ruang di atas dan di bawah gambar.
7. `.col-2 h1`: Ini adalah selektor untuk elemen heading level 1 (h1) yang berada di dalam elemen "col-2."
   - `font-size: 50px;`: Ini mengatur ukuran font h1 menjadi 50 piksel.
   - `line-height: 60px;`: Ini mengatur tinggi baris (line height) teks h1 menjadi 60 piksel, menciptakan jarak vertikal antar baris yang lebih besar.
   - `margin: 25px 0;`: Ini memberikan margin sebesar 25 piksel di atas dan bawah teks h1, memberikan ruang di atas dan di bawah teks tersebut.

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/121718997/b1d1e9a3-6da2-48dc-ab8f-aa86b8a23180)

1. `.btn`: Ini adalah selektor untuk elemen dengan kelas "btn," yang mungkin digunakan untuk menggambarkan tombol (button) dalam tata letak halaman.
   - `display: inline-block;`: Ini mengatur elemen "btn" sebagai elemen inline-block, yang memungkinkan elemen tersebut untuk berada dalam satu baris secara horizontal dan memiliki lebar sesuai kontennya.
   - `background: #ff523b;`: Ini mengatur latar belakang elemen "btn" menjadi warna merah (#ff523b).
   - `color: #fff;`: Ini mengatur warna teks pada elemen "btn" menjadi putih (#fff).
   - `padding: 8px 30px;`: Ini memberikan padding 8 piksel di atas dan bawah, serta 30 piksel di kiri dan kanan elemen "btn." Padding menciptakan ruang di sekitar teks dalam tombol.
   - `margin: 30px 0;`: Ini memberikan margin 30 piksel di atas dan bawah elemen "btn," menciptakan ruang di atas dan di bawah tombol dalam tata letak halaman.
   - `border-radius: 30px;`: Ini mengatur sudut elemen "btn" sehingga terlihat lebih bulat dengan radius sudut sebesar 30 piksel, menciptakan tampilan sudut yang melengkung.
2. `.btn:hover`: Ini adalah selektor untuk elemen "btn" ketika dihover (dihover adalah ketika kursor mouse berada di atas elemen).
   - `background: #563434;`: Ini mengubah latar belakang elemen "btn" menjadi warna merah tua (#563434) ketika tombol dihover. Ini memberikan umpan balik visual kepada pengguna ketika tombol dihover.
3. `.header`: Ini adalah selektor untuk elemen dengan kelas "header," yang mungkin digunakan untuk menggambarkan bagian kepala halaman.
   - `background: radial-gradient(#fff, #ffd6d6);`: Ini mengatur latar belakang elemen "header" sebagai latar belakang dengan efek gradien radial dari warna putih (#fff) ke warna abu-abu muda (#ffd6d6). Gradien ini menciptakan latar belakang dengan efek gradien yang mungkin cocok dengan desain bagian kepala halaman.
4. `.rating`: Ini adalah selektor untuk elemen dengan kelas "rating," yang mungkin digunakan untuk menampilkan peringkat atau rating.
   - `color: #ff523b;`: Ini mengatur warna teks dalam elemen "rating" menjadi merah (#ff523b), memberikan tampilan yang menonjol untuk elemen rating.
5. `.star`: Ini adalah selektor untuk elemen dengan kelas "star," yang mungkin digunakan untuk menampilkan bintang atau ikon peringkat.
   - `font-size: 24px;`: Ini mengatur ukuran font untuk elemen "star" menjadi 24 piksel, sehingga ikon peringkat akan terlihat lebih besar.
   - `display: inline-block;`: Ini mengatur elemen "star" agar ditampilkan dalam satu baris secara horizontal.
   - `margin-right: 5px;`: Ini memberikan margin sebesar 5 piksel di sebelah kanan elemen "star," menciptakan ruang di antara ikon peringkat.
6. `.categories`: Ini adalah selektor untuk elemen dengan kelas "categories," yang mungkin digunakan untuk menggambarkan bagian kategori pada halaman web.
   - `margin: 70px 0;`: Ini memberikan margin sebesar 70 piksel di atas dan bawah elemen "categories," menciptakan ruang di atas dan di bawah bagian kategori dalam tata letak halaman.

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/121718997/2da87351-c35c-41f3-91c4-f46fe6c3d8cd)

1. `.col-3`: Ini adalah selektor untuk elemen dengan kelas "col-3," yang mungkin digunakan untuk menggambarkan kolom dalam tata letak halaman.
   - `flex-basis: 30%;`: Ini mengatur lebar dasar elemen "col-3" menjadi 30% dari lebar total elemennya. Ini memberikan elemen "col-3" sebagian besar lebar dalam tata letak.
   - `min-width: 250px;`: Ini mengatur lebar minimum untuk elemen "col-3" menjadi 250 piksel, sehingga elemen ini tidak akan menjadi terlalu sempit bahkan jika lebar tampilan layar lebih kecil.
   - `margin-bottom: 30px;`: Ini memberikan margin sebesar 30 piksel di bawah elemen "col-3," menciptakan ruang antara kolom-kolom dalam tata letak.
2. `.col-3 img`: Ini adalah selektor untuk gambar (elemen `<img>`) yang berada di dalam elemen "col-3."
   - `width: 100%;`: Ini mengatur lebar gambar menjadi 100% dari lebar elemen "col-3," sehingga gambar akan mengikuti lebar elemen "col-3."
3. `.small-container`: Ini adalah selektor untuk elemen dengan kelas "small-container," yang mungkin digunakan untuk mengelompokkan konten dalam suatu wadah kecil.
   - `max-width: 1080px;`: Ini mengatur lebar maksimum elemen "small-container" menjadi 1080 piksel, yang berarti bahwa elemen ini tidak akan melebar lebih dari itu.
   - `margin: auto;`: Ini mengatur margin elemen "small-container" menjadi otomatis, sehingga elemen akan terpusat secara horizontal di tengah layar.
   - `padding: 25px;`, `padding-right: 25px;`: Ini memberikan padding 25 piksel di sisi kiri dan kanan elemen "small-container." Padding adalah ruang antara konten elemen dan batas elemen tersebut.
4. `.col-4`: Ini adalah selektor untuk elemen dengan kelas "col-4," yang mungkin digunakan untuk menggambarkan kolom dalam tata letak halaman.
   - `flex-basis: 25%;`: Ini mengatur lebar dasar elemen "col-4" menjadi 25% dari lebar total elemennya. Ini memberikan elemen "col-4" sebagian lebar dalam tata letak.
   - `padding: 10px;`: Ini memberikan padding sebesar 10 piksel di sekeliling elemen "col-4," menciptakan ruang antara elemen dan elemen-elemen lain di dalam kolom.
   - `min-width: 200px;`: Ini mengatur lebar minimum untuk elemen "col-4" menjadi 200 piksel, sehingga elemen ini tidak akan menjadi terlalu sempit bahkan jika lebar tampilan layar lebih kecil.
   - `margin-bottom: 50px;`: Ini memberikan margin sebesar 50 piksel di bawah elemen "col-4," menciptakan ruang antara kolom-kolom dalam tata letak.
   - `transition: transform 0.5s;`: Ini mengatur efek transisi yang akan terjadi saat elemen "col-4" mengalami perubahan transformasi. Dalam hal ini, elemen "col-4" akan mengalami transformasi dalam waktu 0,5 detik. Transformasi biasanya digunakan untuk animasi dan perubahan tampilan elemen saat interaksi pengguna.

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/121718997/f169f8c4-94ec-41a7-87e0-57067400fefa)

1. `.title`: Ini adalah selektor untuk elemen dengan kelas "title," yang mungkin digunakan untuk menggambarkan judul atau kepala dalam tata letak halaman.
   - `text-align: center;`: Ini mengatur teks dalam elemen "title" agar terpusat secara horizontal di tengah elemen.
   - `margin: 0 auto 80px;`: Ini memberikan margin 80 piksel di bawah elemen "title" dan mengatur margin horizontal ke otomatis. Margin ini menciptakan ruang antara elemen "title" dan elemen-elemen lain di bawahnya.
   - `position: relative;`: Ini mengatur posisi elemen "title" menjadi relatif terhadap posisinya yang sebenarnya dalam tata letak halaman. Ini akan memengaruhi elemen "title" dan elemen lain di dalamnya yang memiliki posisi absolut.
   - `line-height: 60px;`: Ini mengatur tinggi baris (line height) teks dalam elemen "title" menjadi 60 piksel, menciptakan jarak vertikal antar baris yang lebih besar.
   - `color: #555;`: Ini mengatur warna teks dalam elemen "title" menjadi abu-abu (#555).
2. `.title::after`: Ini adalah pseudo-elemen (::after) yang diterapkan pada elemen dengan kelas "title." Pseudo-elemen digunakan untuk menambahkan elemen tambahan ke dalam elemen utama.
   - `content: '';`: Ini menunjukkan bahwa pseudo-elemen ini akan menambahkan konten kosong.
   - `background: #ff523b;`: Ini mengatur latar belakang pseudo-elemen menjadi warna merah (#ff523b).
   - `width: 80px;`: Ini mengatur lebar pseudo-elemen menjadi 80 piksel.
   - `height: 5px;`: Ini mengatur tinggi pseudo-elemen menjadi 5 piksel, menciptakan elemen horizontal yang menjadi garis bawah pada elemen "title."
   - `border-radius: 5px;`: Ini mengatur sudut pseudo-elemen sehingga terlihat bulat dengan radius sudut sebesar 5 piksel.
   - `position: absolute;`: Ini mengatur pseudo-elemen sebagai elemen dengan posisi absolut, yang memungkinkan untuk menentukan posisi sesuai dengan elemen induknya.
   - `left: 50%;`: Ini mengatur posisi horizontal pseudo-elemen di tengah elemen "title."
   - `bottom: 0;`: Ini mengatur pseudo-elemen agar berada di bagian bawah elemen "title."
   - `transform: translate(-50%);`: Ini menggeser (translate) pseudo-elemen horizontal sejauh -50% dari lebar sendiri ke kiri, sehingga pseudo-elemen akan tepat di tengah elemen "title."
3. `h4`: Ini adalah selektor untuk elemen teks heading level 4 (h4) dalam tata letak halaman.
   - `color: #555;`: Ini mengatur warna teks pada elemen h4 menjadi abu-abu (#555).
   - `font-weight: normal;`: Ini mengatur tebal font h4 menjadi normal, menghilangkan tebal teks yang biasanya diberikan oleh elemen h4.
4. `.col-4`: Ini adalah selektor untuk elemen dengan kelas "col-4," yang mungkin digunakan untuk menggambarkan kolom dalam tata letak halaman.
   - `font-size: 14px;`: Ini mengatur ukuran font elemen "col-4" menjadi 14 piksel.
   - `.col-4:hover`: Ini adalah aturan gaya yang diterapkan pada elemen "col-4" ketika elemen ini dihover.
     - `transform: translateY(-5px);`: Ini mengubah tampilan elemen "col-4" dengan menggesernya ke atas sejauh -5 piksel saat dihover. Ini menciptakan efek visual naik sedikit saat interaksi pengguna terhadap elemen tersebut.

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/121718997/0025b2d8-1fa4-43df-bfbb-e46b642ef2ef)

1. `.col-4:hover`: Ini adalah aturan gaya yang diterapkan pada elemen "col-4" ketika elemen ini dihover.
   - `transform: translateY(-5px);`: Ini mengubah tampilan elemen "col-4" dengan menggesernya ke atas sejauh -5 piksel saat dihover. Ini menciptakan efek visual naik sedikit saat interaksi pengguna terhadap elemen tersebut.
2. `.offer`: Ini adalah selektor untuk elemen dengan kelas "offer," yang mungkin digunakan untuk menggambarkan suatu penawaran atau promosi.
   - `background: radial-gradient(#fff, #ffd6d6);`: Ini mengatur latar belakang elemen "offer" sebagai latar belakang dengan efek gradien radial dari warna putih (#fff) ke warna abu-abu muda (#ffd6d6). Gradien ini menciptakan latar belakang dengan efek gradien yang mungkin cocok dengan konten penawaran.
   - `margin-top: 80px;`: Ini memberikan margin sebesar 80 piksel di atas elemen "offer," menciptakan ruang antara elemen ini dan elemen-elemen di atasnya.
   - `padding: 30px 0;`: Ini memberikan padding 30 piksel di atas dan di bawah elemen "offer," memberikan ruang di atas dan di bawah elemen ini.
3. `.col-2 .offer-img`: Ini adalah selektor untuk elemen dengan kelas "offer-img" yang berada di dalam elemen dengan kelas "col-2."
   - `padding: 50px;`: Ini memberikan padding 50 piksel di sekeliling elemen "offer-img." Padding ini menciptakan ruang antara elemen "offer-img" dan elemen lain di dalamnya.
4. `.footer`: Ini adalah selektor untuk elemen dengan kelas "footer," yang mungkin digunakan untuk menggambarkan bagian bawah halaman web (footer).
   - `background: #111;`: Ini mengatur latar belakang elemen "footer" menjadi warna hitam (#111).
   - `font-size: 14px;`: Ini mengatur ukuran font dalam elemen "footer" menjadi 14 piksel.
   - `padding: 30px 0;`: Ini memberikan padding 30 piksel di atas dan di bawah elemen "footer," memberikan ruang di atas dan di bawah elemen ini.
   - `width: flex;`: Ini adalah nilai yang tidak valid untuk properti "width." Seharusnya nilai lebar ditentukan dalam satuan seperti piksel (px) atau persen (%). Properti "width" mengatur lebar elemen.
   - `justify-content: center;`: Ini mengatur konten dalam elemen "footer" untuk terpusat secara horizontal. Namun, properti "justify-content" biasanya digunakan dalam konteks flexbox atau tata letak berbasis flexbox. Jika Anda ingin mengatur posisi elemen dalam "footer," Anda mungkin perlu menggunakan tata letak flexbox.

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/121718997/89b1cf27-3834-4dc7-a95e-50f3e6b99645)

1. `.sosialicon`: Ini adalah selektor untuk elemen dengan kelas "sosialicon," yang mungkin digunakan untuk menggambarkan ikon media sosial atau tautan ke platform media sosial dalam footer.
   - `display: flex;`: Ini mengatur elemen-elemen dalam "sosialicon" agar menggunakan model tata letak flexbox. Ini memungkinkan elemen-elemen tersebut untuk meratakan dan mengatur tata letak secara horizontal.
   - `justify-content: center;`: Ini mengatur elemen-elemen dalam "sosialicon" agar terpusat secara horizontal dalam wadahnya.
2. `.sosialicon a`: Ini adalah selektor untuk tautan (elemen `<a>`) yang berada dalam elemen dengan kelas "sosialicon."
   - `text-decoration: none;`: Ini menghilangkan dekorasi tautan seperti garis bawah yang biasanya ada pada tautan.
   - `padding: 10px;`: Ini memberikan padding sebesar 10 piksel di sekeliling tautan, menciptakan ruang di sekitar teks atau ikon tautan.
   - `background-color: #fff;`: Ini mengatur latar belakang tautan menjadi warna putih (#fff).
   - `margin: 10px;`: Ini memberikan margin sebesar 10 piksel di sekeliling tautan, menciptakan ruang di antara tautan tersebut.
   - `border-radius: 50%;`: Ini mengatur sudut tautan sehingga terlihat bulat dengan radius sudut sebesar 50%, menciptakan tampilan tautan yang berbentuk bulat.
3. `.sosialicon a img`: Ini adalah selektor untuk gambar (elemen `<img>`) yang berada dalam tautan-tautan (elemen `<a>`) dalam "sosialicon."
   - `opacity: 0.9;`: Ini mengatur tingkat transparansi gambar menjadi 0.9 (90%), memberikan sedikit transparansi pada gambar.
4. `.sosialicon a:hover`: Ini adalah aturan gaya yang diterapkan pada tautan (elemen `<a>`) dalam "sosialicon" ketika tautan ini dihover.
   - `background-color: #111;`: Ini mengubah latar belakang tautan menjadi warna hitam (#111) saat tautan dihover. Ini memberikan efek visual perubahan warna saat tautan dihover.
   - `transition: 0.5s;`: Ini mengatur transisi (animasi) selama 0,5 detik saat tautan mengalami perubahan, seperti perubahan warna latar belakang saat dihover.
5. `.footerbottom`: Ini adalah selektor untuk elemen dengan kelas "footerbottom," yang mungkin digunakan untuk menggambarkan bagian bawah footer dalam halaman web.
   - `padding: 30px;`: Ini memberikan padding sebesar 30 piksel di sekeliling elemen "footerbottom," menciptakan ruang di sekitar kontennya.
   - `text-align: center;`: Ini mengatur konten dalam "footerbottom" agar terpusat secara horizontal.
6. `.footerbottom p`: Ini adalah selektor untuk elemen teks paragraf (elemen `<p>`) yang berada dalam "footerbottom."
   - `color: #fff;`: Ini mengatur warna teks dalam elemen paragraf menjadi putih (#fff), sehingga teks dalam elemen paragraf akan terlihat putih di atas latar belakang hitam.

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/121718997/7759dc88-01f5-4507-9363-8643aea1b6e6)

1. `.box .col-5`: Ini adalah selektor untuk elemen dengan kelas "col-5" yang berada dalam elemen dengan kelas "box."
   - `width: 25%;`: Ini mengatur lebar elemen "col-5" menjadi 25% dari lebar kontainernya. Dengan demikian, elemen "col-5" akan membagi lebar container menjadi 4 kolom sejajar, jika ada 4 elemen "col-5" dalam container tersebut.
   - `padding: 20px;`: Ini memberikan padding sebesar 20 piksel di sekeliling elemen "col-5." Padding menciptakan ruang di sekitar elemen tersebut.
   - `text-align: center;`: Ini mengatur teks dalam elemen "col-5" agar terpusat secara horizontal. Ini memengaruhi penempatan teks di dalam elemen tersebut.
   - `float: left;`: Ini mengatur elemen "col-5" agar mengapung ke sisi kiri. Ini memungkinkan elemen "col-5" berdampingan dengan elemen-elemen lain sejajar dengan sisi kiri.
2. `.box .col-5 h4`: Ini adalah selektor untuk elemen heading level 4 (h4) yang berada dalam elemen dengan kelas "col-5" yang juga berada dalam elemen dengan kelas "box."
   - `margin: 10px 0;`: Ini memberikan margin sebesar 10 piksel di atas dan di bawah elemen h4, menciptakan ruang di atas dan di bawah teks.
   - `color: #fff;`: Ini mengatur warna teks dalam elemen h4 menjadi putih (#fff).
3. `.box .col-5 p`: Ini adalah selektor untuk elemen teks paragraf (elemen `<p>`) yang berada dalam elemen dengan kelas "col-5" yang juga berada dalam elemen dengan kelas "box."
   - `color: #fff;`: Ini mengatur warna teks dalam elemen paragraf menjadi putih (#fff).


B. Laman login

1. login.html

a) head

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/40287d00-26a3-4af9-a82f-296c66f8540c)

1) `<!DOCTYPE html>`: adalah deklarasi dokumen yang menentukan jenis dokumen HTML yang digunakan (HTML5).
2) `<html lang="en">`: adalah elemen root (teratas) dari dokumen HTML yang menunjukkan dokumen yang dibuat dalam bahasa Inggris ("en").
3) `<head>`: adalah bagian kepala dokumen HTML yang berisi informasi tentang dokumen, seperti metadata, judul halaman, dan tautan ke file eksternal.
- `<meta charset="UTF-8">`: mengatur pengkodean karakter dokumen menjadi UTF-8, yang merupakan standar umum untuk pengkodean karakter dalam dokumen web.
- `<meta name="viewport" content="width=device-width, initial-scale=1.0">`: adalah elemen meta yang mengatur tampilan halaman web agar sesuai dengan lebar perangkat (device-width) dan skala awal (initial-scale) adalah 1.0. Ini penting untuk responsifitas desain web.
- `<link rel="stylesheet" href="login.css">`: adalah tautan ke file CSS eksternal dengan nama "login.css" yang digunakan untuk mengatur tampilan halaman.
4) `<title>Login</title>`: adalah elemen yang menentukan judul halaman web yang akan ditampilkan di tab peramban.

b) body

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/8b0cb72e-d66e-49b5-b8d0-3c810ee2503a)

1) `<body>`: adalah elemen yang berisi konten aktual dari halaman web.
2) `<div class="login-container">`: adalah div yang berfungsi sebagai wadah untuk seluruh konten login.
3) `<div class="login-frame">`: adalah div yang digunakan untuk elemen latar belakang dengan efek frame yang mengelilingi elemen-elemen login.
4) `<div class="login-content">`: adalah div yang berisi konten utama dari halaman login.
5) `<h2>Login</h2>`: adalah elemen heading level 2 (h2) yang menampilkan teks "Login".
6) `<div class="input-group">`: adalah div yang berisi elemen input untuk "Username".
7) `<label for="username">Username</label>`: adalah label yang menggambarkan input "Username" dan terkait dengan input tersebut menggunakan atribut for yang sesuai.
8) `<input type="text" id="username" name="username" required>: adalah elemen input teks dengan atribut type "text" dan atribut name "username". Atribut "required" menunjukkan bahwa input ini wajib diisi.
9) `<div class="input-group">`: adalah div yang berisi elemen input untuk "Password".
10) `<label for="password">Password</label>`: adalah label yang menggambarkan input "Password" dan terkait dengan input tersebut menggunakan atribut for yang sesuai.
11) `<input type="password" id="password" name="password" required>`: adalah elemen input sandi dengan atribut type "password". Atribut "required" menunjukkan bahwa input ini wajib diisi.
12) `<a href="product.html" class="register-link">Login</a>`: Ini adalah tautan yang mengarah ke "product.html" dengan teks "Login" yang digunakan sebagai tombol login. memiliki kelas "register-link" untuk mengatur gaya tombol.
13) `<a href="#" class="register-link">Registrasi</a>`: adalah tautan yang memiliki teks "Registrasi" dan juga memiliki kelas "register-link" untuk mengatur gaya tombol.
14) `<div class="login-image">`: adalah div yang berisi gambar yang digunakan sebagai ilustrasi dalam halaman login.
15) `<img src="images/logo-removebg-preview.png" alt="User Image">`: adalah elemen gambar yang menampilkan gambar dengan sumber (src) "images/logo-removebg-preview.png" dan teks alternatif (alt) "User Image".
	
2. login.css
   
a). body

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/9a656664-64ea-4461-850e-9f83dea8fa05)

1) `font-family: 'Arial', sans-serif;`: mengatur jenis font teks menjadi "Arial" atau font sans-serif sebagai font default jika "Arial" tidak tersedia di perangkat.
2) `background: linear-gradient(to right, #ffd6d6, #ffd6d6);`: membuat latar belakang memiliki gradien linier dari kiri ke kanan dengan warna awal (#ffd6d6 dan warna akhir #ffd6d6), yang pada dasarnya menghasilkan latar belakang berwarna merah muda.
3) `display: flex;`: mengubah perilaku tata letak elemen di dalam body menjadi flex, sehingga elemen-elemen dalam body dapat diatur menggunakan properti flex.
4) `justify-content: center;` dan `align-items: center;`: memusatkan elemen-elemen di dalam body baik secara horizontal maupun vertikal, sehingga semua elemen yang ada berada di tengah halaman.
5) `height: 100vh;`: Ini mengatur tinggi body (viewport height) menjadi 100% dari tinggi jendela browser, sehingga seluruh halaman akan ditampilkan pada satu layar.
6) `margin: 0;`: menghapus margin bawaan yang mungkin ada pada elemen body.

b) .login-container

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/6953a7f0-5648-4b6e-a01a-29df84a74e12)

1) `background-color: #fff;`: mengatur warna latar belakang dari kotak login menjadi putih (#fff).
2) `border-radius: 8px;`: membentuk sudut kotak login menjadi bentuk yang lebih bulat.
3) `box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);`: menambahkan bayangan ke kotak login untuk memberikan efek tiga dimensi.
4) `text-align: center;`: mengatur teks di dalam kotak login menjadi berada di tengah.
5) `padding: 20px;`: menambahkan jarak antara konten di dalam kotak login dengan batas kotak.
6) `position: relative;`: mengatur posisi kotak login sebagai relatif sehingga elemen-elemen lain dapat diatur berdasarkan posisi kotak ini.
7) `display: flex;` dan `align-items: center;`: mengatur tata letak elemen-elemen di dalam ".login-container" menggunakan flex.

c) .login-frame:

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/c3a2700c-1b77-46a3-8e03-9e764f3f67d4)

1) `position: absolute;`: mengatur posisi `.login-frame` sebagai absolut sehingga elemen ini dapat menggantung di atas ".login-container".
2) `top, left, right, bottom`: mengatur jarak dari elemen .login-container, yang membuat ".login-frame" terlihat lebih besar dan melebar di luar kotak login.
3) `border: 2px solid white;`: membuat garis luar dengan lebar 2px dan warna putih di sekitar kotak login.
4) `border-radius: 10px;`: membuat sudut elemen ".login-frame" menjadi bentuk yang lebih bulat.
5) `z-index: -1;` : mengatur elemen `.login-frame` berada pada lapisan di bawah elemen-elemen lain di halaman.

d) .login-content

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/f807c958-ca47-448d-acd0-a7fbfc635eda)

1) `flex: 1;`: membuat `.login-content` mengisi sebanyak mungkin ruang yang tersedia dalam ".login-container".
2) `text-align: left;`: mengatur teks di dalam `.login-content` menjadi rata kiri.
3) `padding: 20px;`: menambahkan jarak antara konten di dalam `.login-content` dengan batas `.login-content`.

e) h2:

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/124ed668-6f33-40b3-ac41-d4e7937b82c2)

1) `color: #ff6f61;`: mengatur warna teks elemen "h2" menjadi merah muda "#ff6f61".
2) `font-size: 24px;`: mengatur ukuran font teks elemen "h2" menjadi "24px".
3) `margin-bottom: 20px;`: Ini menambahkan jarak bawah di bawah elemen "h2" sejauh "20px".

f) .input-group:

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/d2658eab-3792-4490-9e4b-d5a3c748ddb2)

1) `margin-bottom: 20px;`: memberikan jarak bawah antara elemen-elemen yang memiliki kelas "input-group" sejauh 20px.
2) `text-align: left;`: mengatur teks di dalam elemen-elemen "input-group" agar rata kiri.

g) label:

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/86dc92a3-8cb2-411e-9d81-5f9d523daa30)

1) `display: block;`: mengubah elemen label menjadi blok, sehingga label akan ditampilkan dalam baris yang berbeda.
2) `font-size: 14px;`: mengatur ukuran font teks label menjadi 14px.
3) `color: #333;`: mengatur warna teks label menjadi abu-abu tua (#333).
4) `margin-bottom: 5px;`: memberikan jarak bawah antara elemen-elemen label dan elemen-elemen input sejauh 5px.
5) `font-weight: bold;`: membuat teks label menjadi tebal (bold).

h) input[type="text"], input[type="password"]:

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/b2d98de8-c26e-4545-a383-0590ab4ed2d9)

1) Ini adalah aturan gaya untuk elemen input dengan tipe "text" dan "password".
2) `width: 100%;`: membuat input tipe teks dan sandi memenuhi lebar parent elemennya (".input-group").
3) `padding: 10px;`: memberikan jarak dalam input sejauh 10px di sekitar kontennya.
4) `border: none;`: menghilangkan border (garis tepi) dari elemen input.
5) `border-bottom: 2px solid #ff6f61;`: menambahkan border bawah dengan lebar 2px dan warna merah muda (#ff6f61) pada elemen input.
6) `background: transparent;`: membuat latar belakang elemen input menjadi transparan.
7) `outline: none;`: menghilangkan outline (garis pinggiran) pada elemen input saat elemen tersebut dalam fokus.
8) `color: #333;`: mengatur warna teks dalam input menjadi abu-abu tua (#333).
9) `font-size: 16px;`: mengatur ukuran font teks dalam input menjadi 16px.
10) `transition: border-bottom-color 0.3s ease-in-out;`: mengatur efek transisi pada perubahan warna border bawah ketika elemen input berfokus dan tidak berfokus.

i) input[type="text"]:focus, input[type="password"]:focus:

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/a0da3ebb-36b0-4516-8f0e-d7fd8b31b5d8)

1) Ini adalah aturan gaya yang berlaku ketika elemen input tipe teks atau sandi sedang dalam fokus (kursor berada di dalamnya).
2) `border-bottom-color: #ff9191;`: mengubah warna border bawah elemen input menjadi merah muda yang lebih terang (#ff9191) saat elemen tersebut dalam fokus.
   
j) button:

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/14886b77-7fda-4999-b9c9-fc0c2a581be9)

1) `background-color: #ff6f61;`: mengatur warna latar belakang tombol menjadi merah muda (#ff6f61).
2) `color: #fff;`: mengatur warna teks tombol menjadi putih.
3) `padding: 12px 24px;`: mengatur jarak antara konten dalam tombol dan batas tombol.
4) `border: none;`: menghilangkan border (garis tepi) tombol.
5) `border-radius: 25px;`: memberikan sudut tombol bentuk yang lebih bulat.
6) `cursor: pointer;`: mengubah ikon kursor saat di atas tombol, menunjukkan bahwa itu adalah elemen yang dapat diklik.
7) `font-weight: bold;`: membuat teks pada tombol menjadi tebal (bold).
8) `font-size: 16px;`: mengatur ukuran font teks tombol menjadi 16px.
9) `transition: background-color 0.3s ease-in-out;`: mengatur efek transisi pada perubahan warna latar belakang tombol saat tombol dihover.

k) button:hover:

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/80865fea-ca5f-4805-9e61-eee00655f972)

1) Ini adalah aturan gaya yang berlaku saat tombol sedang dihover (kursor berada di atasnya).
2) `background-color: #ff9191;`: mengubah warna latar belakang tombol menjadi merah muda yang lebih terang (#ff9191) saat tombol dihover.
   
l) .login-image:

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/bedb6f14-cf20-491f-94ee-21bd74543f6e)

1) `flex: 1;`: membuat elemen dengan kelas "login-image" mengisi sebanyak mungkin ruang yang tersedia dalam parent (".login-container").
2) `text-align: center;`: mengatur teks di dalam elemen "login-image" agar berada di tengah.
   
m) .login-image img:

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/bf15854e-396f-4c8c-8632-cc071df0040d)


1) Ini adalah aturan gaya yang berlaku pada elemen gambar yang berada di dalam elemen dengan kelas "login-image".
2) `max-width: 100%;`: mengatur lebar maksimum gambar menjadi 100% dari lebar parent (".login-image").
3) `height: auto;`: menjaga aspek rasio gambar saat gambar diperbesar atau diperkecil.
4) `border-radius: 8px;`: memberikan sudut gambar bentuk yang lebih bulat.

n) .register-link:

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/6a9604c2-65da-43ab-b209-36c53c028837)


1) `background-color: #ff6f61;`: mengatur warna latar belakang tautan dengan kelas "register-link" menjadi merah muda (#ff6f61).
2) `color: #fff;`: mengatur warna teks tautan menjadi putih.
3) `padding: 12px 24px;`: mengatur jarak antara konten dalam tautan dan batas tautan.
4) `border: none;`: menghilangkan border (garis tepi) tautan.
5) `border-radius: 25px;`: memberikan sudut tautan bentuk yang lebih bulat.
6) `cursor: pointer;`: mengubah ikon kursor saat di atas tautan, menunjukkan bahwa itu adalah elemen yang dapat diklik.
7) `font-weight: bold;`: membuat teks pada tautan menjadi tebal (bold).
8) `font-size: 16px;`: mengatur ukuran font teks tautan menjadi 16px.
9) `text-decoration: none;`: enghilangkan garis bawah pada tautan.
10) `display: inline-block;`: membuat tautan menjadi elemen inline-block sehingga dapat diatur seperti blok, namun tetap mempertahankan aliran inline.

o) .register-link:hover 

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/7faf5448-b5f5-461b-a9f4-41a4c4d5b9c0)

1) `.register-link:hover`: adalah selector CSS untuk memilih tautan dengan kelas "register-link" ketika tautan tersebut sedang dalam kondisi dihover, artinya ketika pengguna mengarahkan kursor mouse ke atas tautan tersebut.
2) `background-color: #ff9191;`: adalah peraturan gaya yang diterapkan ketika tautan "register-link" dalam keadaan dihover. Ini mengubah warna latar belakang tautan menjadi merah muda yang lebih terang (#ff9191) saat pengguna mengarahkan kursor mouse ke atasnya.

C. Laman Registrasi 

1. registrasi.html

a) head

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/526c20a2-a62d-4c51-aed5-d06969f194fd)

1) `<!DOCTYPE html>`: adalah deklarasi untuk mengidentifikasi tipe dokumen HTML yang digunakan oleh halaman.
2) `<html lang="en">`: adalah elemen root atau akar yang menandakan dimulainya dokumen HTML. Atribut lang="en" menunjukkan bahwa bahasa yang digunakan dalam dokumen ini adalah bahasa Inggris.
3) `<head>`: Bagian ini berisi informasi tentang halaman, seperti metadata dan tautan ke file eksternal, yang biasanya tidak terlihat oleh pengguna ketika mengunjungi halaman web.
4) `<meta charset="UTF-8">`: Mengatur karakter encoding halaman web ke UTF-8, yang mendukung karakter internasional.
5) `<meta name="viewport" content="width=device-width, initial-scale=1.0">`: adalah tag meta yang digunakan untuk mengoptimalkan tampilan halaman web pada perangkat berbasis ponsel dan tablet.
6) `<link rel="stylesheet" href="login.css">`: adalah tautan ke file CSS eksternal (login.css) yang digunakan untuk mengatur tampilan halaman.
7) `<link href="images/logo-removebg-preview.png" rel="icon">`: menentukan favicon, gambar kecil yang ditampilkan di tab browser.
8) `<title>`: menentukan "Registrasi" sebagai judul halaman web yang akan ditampilkan di tab browser.

b) body

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/4f312f16-4247-4ea5-8e85-50e374b794f0)

"body": adalah elemen yang berisi konten yang akan ditampilkan kepada pengguna di halaman web.

1) `<div class="login-container">`: adalah kontainer utama untuk seluruh konten halaman registrasi.
2) `<div class="login-frame">` dan `<div class="login-content">`: adalah dua elemen div yang mungkin digunakan untuk mengelompokkan konten dan tampilan halaman.
3) `<h2>Registrasi</h2>`: adalah judul halaman yang ditampilkan kepada pengguna.
4) Elemen-elemen `<div class="input-group">` digunakan untuk mengelompokkan label dan input form untuk username, email, password, dan konfirmasi password.
5) Elemen-elemen `<label>` digunakan untuk memberikan label pada input form.
6) Elemen-elemen `<input>` digunakan untuk memasukkan informasi seperti username, email, dan password.
7) `<a href="login.html" class="register-link">Daftar</a>` adalah tautan (link) yang mengarah ke halaman "login.html" dengan teks "Daftar," mungkin digunakan untuk membawa pengguna ke halaman login.
8) `<div class="login-image">` berisi gambar profil atau logo yang akan ditampilkan di samping konten form registrasi.

2. registrasi.css

a) "body"
	adalah gaya yang diterapkan ke elemen <body> halaman web.
 
![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/9f144a6a-7c1c-44f4-a883-b15668e0392f)

1) `font-family: 'Arial', sans-serif;`: Mengatur jenis font teks pada halaman web ke "Arial" atau ke font sans-serif yang umum.
2) `background: linear-gradient(to right, #ffd6d6, #ffd6d6);`: Mengatur latar belakang halaman web dengan efek gradien linier dari kiri ke kanan, dengan dua warna yang sama (#ffd6d6) sehingga latar belakang memiliki warna yang seragam.
3) `display: flex;`: Menggunakan tampilan fleksibel pada elemen body, yang memudahkan pengaturan tata letak elemen di dalamnya.
4) `justify-content: center;`: Mendata elemen-elemen di dalam body secara horizontal, sehingga elemen-elemen berada di tengah halaman.
5) `align-items: center;`: Mendata elemen-elemen di dalam body secara vertikal, sehingga elemen-elemen berada di tengah halaman secara vertikal.
6) `height: 100vh;`: Mengatur tinggi body menjadi 100% dari tinggi tampilan (viewport height), sehingga body akan mengisi seluruh tinggi tampilan.

b) ".login-container"
	adalah gaya yang diterapkan pada elemen dengan kelas "login-container."
 
![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/f36950f3-aa6f-4957-8c31-747b3917021f)

1) `.login-container`: adalah gaya yang diterapkan pada elemen dengan kelas "login-container."
2) `background-color: #fff;`: Mengatur latar belakang elemen ini menjadi putih.
3) `border-radius: 8px;`: Memberikan elemen sudut yang melengkung (border radius) sebesar 8 piksel.
4) `box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);`: Memberikan bayangan (shadow) pada elemen, sehingga terlihat lebih mendalam.
5) `text-align: center;`: Mengatur teks di dalam elemen ini menjadi terpusat.
6) `padding: 20px;`: Memberikan ruang tambahan (padding) sebesar 20 piksel di sekitar elemen.
7) `position: relative;`: Mengatur posisi elemen ini sebagai relatif terhadap posisi normalnya.
8) `display: flex;`: Menggunakan tampilan fleksibel pada elemen, yang memungkinkan penggunaan flex pada cabang elemen.

c) ".login-frame"
	adalah gaya yang diterapkan pada elemen dengan kelas "login-frame."
 
 ![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/a7df8dbc-e97b-4ecb-add4-43a126a101c2)
 
1) `position: absolute;`: Mengatur posisi elemen ini sebagai elemen dengan posisi absolut (di luar aliran dokumen normal).
2) `top`, `left`, `right`, `bottom`: Memberikan elemen ini jarak dari sisi atas, kiri, kanan, dan bawah dengan nilai -10 piksel, menciptakan efek border di sekitar elemen.
3) `border: 2px solid white;`: Mengatur border elemen dengan ketebalan 2 piksel dan warna putih.
4) `border-radius: 10px;`: Memberikan sudut yang melengkung pada border elemen sebesar 10 piksel.
5) `z-index: -1;`: Mengatur elemen ini memiliki z-index -1, sehingga berada di bawah elemen-elemen lain di halaman.

d) ".login-content"
	adalah gaya yang diterapkan pada elemen dengan kelas "login-content."

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/fe63196a-2f7f-4557-a93c-6c1eb30e8a4d)

1) `flex: 1;`: Membuat elemen ini mengisi sebanyak mungkin ruang yang tersedia di dalam ."login-container".
2) `text-align: left;`: Mengatur teks di dalam elemen ini menjadi rata kiri.
3) `padding: 20px;`: Memberikan ruang tambahan (padding) sebesar 20 piksel di sekitar elemen.

 e) ".h2"
 	adalah gaya yang diterapkan pada elemen "h2", yang merupakan judul di dalam ".login-content".

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/01f299fe-95ff-4638-a12c-8d0ad99f3daf)

1) `color: #ff6f61;`: Mengatur warna teks judul menjadi merah muda.
2) `font-size: 24px;`: Mengatur ukuran font judul menjadi 24 piksel.
3) `margin-bottom: 20px;`: Memberikan margin bawah sebesar 20 piksel pada judul.

f) ".input-group"
	adalah gaya yang diterapkan pada elemen dengan kelas "input-group," yang digunakan untuk mengelompokkan label dan input form.

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/cf947d91-2aab-41a5-838f-0b0cd9c4b9e4)

1) `margin-bottom: 20px;`: Memberikan margin bawah sebesar 20 piksel pada setiap grup input.

g) "label"
	adalah gaya yang diterapkan pada elemen-elemen "label".

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/d681a841-8c6e-42d7-9a2b-8318842ea14a)

1) `display: block;`: Mengubah tampilan elemen label menjadi tampilan blok, sehingga masing-masing label dan input form akan ada di baris yang terpisah.
2) `font-size: 14px;`: Mengatur ukuran font label menjadi 14 piksel.
3) `color: #333;`: Mengatur warna teks label menjadi abu-abu.
4) `margin-bottom: 5px;`: Memberikan margin bawah sebesar 5 piksel pada label.
5) `font-weight: bold;`: Mengatur teks label menjadi tebal.

h) `input[type="text"]`, `input[type="email"]`, `input[type="password"]`, `input[type="date"]`
	adalah gaya yang diterapkan pada elemen input dengan jenis tertentu (text, email, password, date).

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/ed9ab85c-2a28-487b-b00f-28a8617d2a34)

1) `width: 100%;`: Mengatur lebar input menjadi 100% dari lebar elemen yang mengandungnya.
2) `padding: 10px;`: Memberikan padding sebesar 10 piksel pada input.
3) `border: none;`: Menghilangkan border bawaan pada input.
4) `border-bottom: 2px solid #ff6f61;``: Menambahkan border bawah sebesar 2 piksel pada input dengan warna merah muda.
5) `background: transparent;`: Mengatur latar belakang input menjadi transparan.
6) `outline: none;`: Menghilangkan garis luar (outline) pada saat input fokus.
7) `color: #333;`: Mengatur warna teks input menjadi abu-abu.
8) `font-size: 16px;`: Mengatur ukuran font input menjadi 16 piksel.
9) `transition: border-bottom-color 0.3s ease-in-out;`: Menerapkan efek transisi (transition) pada perubahan warna border bawah saat input berfokus.

i) `input[type="text"]:focus`, `input[type="email"]:focus`, `input[type="password"]:focus`, `input[type="date"]:focus`: adalah gaya yang diterapkan pada input saat mendapatkan fokus.

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/02f2bdee-b1bf-4f20-8edf-75cca44a1884)

1) `border-bottom-color: #ff9191;`: Mengubah warna border bawah input menjadi merah muda yang lebih terang saat input berfokus.

j) "button" 
	adalah gaya yang diterapkan pada elemen-elemen tombol.

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/dce8a7cf-87f1-497c-a3e1-93ebb42a8b50)

1) `background-color: #ff6f61;`: Mengatur warna latar belakang tombol menjadi merah muda.
2) `color: #fff;`: Mengatur warna teks tombol menjadi putih.
3) `padding: 12px 24px;`: Memberikan padding sebesar 12 piksel di atas dan bawah serta 24 piksel di sisi kiri dan kanan tombol.
4) `border: none;`: Menghilangkan border pada tombol.
5) `border-radius: 25px;`: Memberikan sudut yang sangat melengkung (border radius) pada tombol sebesar 25 piksel.
6) "cursor: pointer;": Mengubah kursor menjadi tanda panah (pointer) saat pengguna mengarahkan kursor ke tombol.
7) `font-weight: bold;`: Mengatur teks tombol menjadi tebal.
8) `font-size: 16px;`: Mengatur ukuran font teks tombol menjadi 16 piksel.
9) `transition: background-color 0.3s ease-in-out;`: Menerapkan efek transisi pada perubahan warna latar belakang tombol saat disorot.

k) "button:hover"
	adalah gaya yang diterapkan pada tombol saat tombol tersebut disorot (hover).

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/490e85b1-5f7b-459a-b458-73f23743ec38)

1) `background-color: #ff9191;`: Mengubah warna latar belakang tombol menjadi merah muda yang lebih terang saat tombol disorot.

l) ".login-image" 
	adalah gaya yang diterapkan pada elemen dengan kelas "login-image."

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/e4246f78-5b57-4653-96dc-b9557c8cc9d2)

1) `flex: 1;`: Membuat elemen ini mengisi sebanyak mungkin ruang yang tersedia di dalam .login-container.
2) `text-align: center;`: Mengatur teks di dalam elemen ini menjadi terpusat.

 m) ".login-image img"
 	adalah gaya yang diterapkan pada elemen gambar di dalam ".login-image".

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/055d5536-0f5d-45b0-b054-dd3562d180b7)

1) `max-width: 100%;`: Mengatur lebar gambar agar tidak melebihi lebar elemen yang mengandungnya.
2) `height: auto;`: Mengatur tinggi gambar agar sesuai dengan aspek rasio aslinya.
3) `border-radius: 8px;`: Memberikan sudut yang melengkung pada gambar sebesar 8 piksel.

n) `.register-link`
	adalah gaya yang diterapkan pada elemen dengan kelas "register-link,"  adalah tautan (link) untuk melakukan registrasi.

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/8adab3af-da81-465c-a689-99c6221e698a)

1) `background-color: #ff6f61;`: Mengatur warna latar belakang tautan menjadi merah muda.
2) `color: #fff;`: Mengatur warna teks tautan menjadi putih.
3) `padding: 12px 24px;`: Memberikan padding sebesar 12 piksel di atas dan bawah serta 24 piksel di sisi kiri dan kanan tautan.
4) `border: none;`: Menghilangkan border pada tautan.
5) `border-radius: 25px;`: Memberikan sudut yang sangat melengkung (border radius) pada tautan sebesar 25 piksel.
6) `cursor: pointer;`: Mengubah kursor menjadi tanda panah (pointer) saat pengguna mengarahkan kursor ke tautan.
7) `font-weight: bold;`: Mengatur teks tautan menjadi tebal.
8) `font-size: 16px;`: Mengatur ukuran font teks tautan menjadi 16 piksel.
9) `text-decoration: none;`: Menghilangkan dekorasi tautan seperti garis bawah atau garis coret.
10) `display: inline-block;`: Mengatur tautan agar ditampilkan sebagai elemen blok.
11) `margin-top: 10px;`: Memberikan margin atas sebesar 10 piksel pada tautan.
 
E) Contact Kedua

1) contact.html

a) head

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/42f97385-0844-4703-9c5f-8d9f32096fa5)

1) "!DOCTYPE html": adalah deklarasi dokumen yang memberi tahu browser bahwa halaman web akan menggunakan versi HTML5.
2) "html lang="en"": mengindikasikan bahwa bahasa dokumen ini adalah bahasa Inggris.
3) "head": Bagian "head" dari halaman web berisi informasi tentang dokumen, seperti metadata dan tautan ke berkas-berkas luar, seperti CSS (Cascading Style Sheets) dan ikon favicon.
4) (meta charset="UTF-8"): mengatur karakter encoding (pemetaan karakter) untuk dokumen menjadi UTF-8.
5) (meta name="viewport" content="width=device-width, initial-scale=1.0"): adalah tag meta yang mengatur tampilan halaman web agar responsif pada perangkat seluler dengan menyesuaikan lebar (width) ke lebar perangkat (device-width) dan skala awal (initial-scale) adalah 1.0.
6) "title"HasarisStore"/title": mengatur judul halaman web, yang akan ditampilkan pada tab browser.
7) (link rel="stylesheet" href="halaman_kedua.css"): adalah tautan ke berkas CSS eksternal yang digunakan untuk memformat tampilan halaman web.
8) (link href="images/logo-removebg-preview.png" rel="icon"): mengaitkan gambar sebagai favicon, yang akan muncul di tab browser.

b) body

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/87979ab8-00b5-44bf-9612-105698402824)

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/6e4eddd9-95dc-4742-8a0c-525275089932)

1. "body": adalah bagian utama dari halaman web yang akan ditampilkan kepada pengguna.
	- (div class="header"): adalah div (elemen blok) dengan kelas "header" yang umumnya digunakan untuk bagian atas halaman web, berisi logo, navigasi, dan elemen header lainnya.
	-  (section id="home"): adalah elemen "section" dengan ID "home" yang digunakan untuk merinci bagian tertentu dari halaman web. Biasanya digunakan dalam mengorganisasi konten.
	- (div class="navbar"): adalah div dengan kelas "navbar" yang berisi navigasi situs web.
	- (div class="logo"): adalah div dengan kelas "logo" yang berisi logo situs web.
	- (nav): adalah elemen navigasi yang berisi daftar tautan ke halaman lain dalam situs.
	- "ul": adalah daftar tak terurut (unordered list) yang berisi tautan navigasi.
	- "li": adalah elemen daftar (list item) yang berisi tautan ke halaman lain.
	- (div class="row"): adalah div dengan kelas "row" yang digunakan untuk mengatur konten dalam baris.
	- (div class="col-2"): adalah div dengan kelas "col-2" yang digunakan untuk mengatur konten dalam dua kolom.
	- "h1" dan "p": adalah elemen heading dan paragraf yang digunakan untuk menampilkan judul dan teks pada halaman.
	- (img src="images/slide.png"): adalah elemen gambar yang menampilkan gambar "slide.png" pada halaman.
2. (div class="footer"): adalah div dengan kelas "footer" yang mewakili bagian bawah halaman web.
	- (div class="sosialicon"): adalah div yang mungkin digunakan untuk menampilkan ikon-ikon media sosial.
	- (div class="footerbottom"): adalah div dengan kelas "footerbottom" yang berisi informasi hak cipta dan pengarang situs.
	- (p)copyright &copy;2023: Designed by (span class="designer")HasarisStore(/span)(/p): adalah elemen paragraf yang berisi informasi hak cipta dan pengarang situs.
	- (/body): Menandai akhir dari elemen body, yang menutup semua konten utama halaman web.
	- (/html): Menandai akhir dari elemen HTML, menutup seluruh dokumen HTML.

2) halaman_kedua.css

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/9f57c209-9f8e-4aa1-976f-bd7641349660)

1) '*': adalah selector universal yang memilih semua elemen di halaman web.
2) 'margin: 0;': Menghapus margin (ruang kosong) dari semua elemen.
3) 'padding: 0;': Menghapus padding (ruang dalam elemen) dari semua elemen.
4) 'box-sizing: border-box;': Mengatur model kotak elemen (box model) menjadi "border-box," sehingga lebar dan tinggi elemen sekarang mencakup padding dan border, bukan hanya kontennya. Ini membantu dalam mengatur elemen dengan lebih baik dalam desain responsif.

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/bb078e19-3db8-4e89-88e9-cfae07c5e3b7)

1) '.navbar': adalah selector yang memilih elemen dengan kelas "navbar" di halaman web Anda.
2) 'display: flex;': Mengatur elemen dengan kelas "navbar" untuk menggunakan model tata letak flex, yang memungkinkan tata letak elemen menjadi flexbox. Ini berguna untuk menyusun elemen-elemen dalam baris secara horizontal.
3) 'align-items: center;': Membuat elemen dengan kelas "navbar" untuk secara vertikal terpusat (center) dalam kontainernya.
4) 'padding: 20px;': Memberikan padding sebesar 20 piksel di sekitar elemen dengan kelas "navbar."

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/249da4d4-162f-4e2a-b8ad-f6972a7f07d1)

1) 'nav' : adalah selector yang memilih elemen 'nav' di halaman web.
2) 'flex: 1;' : Memberikan elemen 'nav' fleksibilitas sehingga akan memanfaatkan sebanyak mungkin ruang yang tersedia dalam elemen dengan kelas "navbar."
3) 'text-align: right;' : Mengatur teks dalam elemen 'nav' agar diberi rata kanan (kanan).

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/20dbb4d9-a9e6-4df9-918d-e89514947999)

1) 'nav ul': adalah selector yang memilih elemen <ul> yang berada dalam elemen "nav".
	- 'display: inline-block;': Mengubah elemen "ul" menjadi inline-block, sehingga daftar tautan akan ditampilkan secara horizontal.
  	- 'list-style-type: none;': Menghilangkan jenis daftar (bullet points) dari daftar tautan.
2) 'nav ul li': adalah selector yang memilih elemen-elemen "li" yang berada dalam elemen "ul" di dalam elemen "nav".
  	- 'display: inline-block;': Mengubah elemen-elemen "li" menjadi inline-block sehingga tautan akan ditampilkan secara horizontal.
   	- margin-right: 20px;: Memberikan margin sebesar 20 piksel di sebelah kanan setiap elemen "li".

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/7a321ce6-c8a5-4260-acd6-4d7b237f8560)

1) '.navbar ul li a:hover': adalah selector yang mengatur tampilan tautan saat kursor mouse mengarah ke atasnya (hover).
	- 'background-color: #daeaf6;': Mengubah warna latar belakang tautan menjadi biru muda saat kursor mouse di atasnya.
	- 'color: #000000;': Mengubah warna teks tautan menjadi hitam saat kursor mouse di atasnya.

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/d9195088-7a5f-467f-acf8-3fb4fe7c7144)

1) 'a': adalah selector yang memilih semua elemen `(a) (tautan) di halaman web.
2) 'text-decoration: none;': Menghilangkan dekorasi bawaan tautan, seperti garis bawah.
3) 'color: #555;': Mengatur warna teks tautan menjadi abu-abu (#555).
4) 'p': adalah selector yang memilih semua elemen `(p) (paragraf) di halaman web.
	- 'color: #555;': Mengatur warna teks paragraf menjadi abu-abu (#555).

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/de491f9a-b2fd-40d8-9cdf-41c150fd722b)

1) '.col-2': adalah selector yang memilih elemen dengan kelas "col-2."
	- 'flex-basis: 50%;': Memberikan elemen dengan kelas "col-2" fleksibilitas sehingga akan mengambil setengah dari lebar yang tersedia dalam kontainernya.
	- min-width: 300px;: Menentukan lebar minimum elemen dengan kelas "col-2" agar tidak menyusut terlalu sempit.
2) '.col-2 img': adalah selector yang memilih gambar yang berada dalam elemen dengan kelas "col-2."
	- 'max-width: 100%;': Mengatur gambar agar tidak melebihi lebar elemen yang memuatnya.
	- 'padding: 50px 0;': Memberikan padding sebesar 50 piksel di atas dan bawah gambar.
3) '.col-2 h1': adalah selector yang memilih elemen heading (h1) yang berada dalam elemen dengan kelas "col-2."
	- 'font-size: 50px;': Mengatur ukuran font menjadi 50 piksel.
  	- 'line-height: 60px;': Mengatur tinggi baris menjadi 60 piksel.
  	- 'margin: 25px 0;': Memberikan margin sebesar 25 piksel di atas dan bawah teks heading.

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/20be2153-7c70-40f7-a22d-56c1a3fb5b19)

1) '.container': adalah selector yang memilih elemen dengan kelas "container."
2) 'max-width: 1300px;': Mengatur lebar maksimum elemen dengan kelas "container" menjadi 1300 piksel.
3) 'margin: auto;': Memberikan margin otomatis ke kanan dan kiri elemen dengan kelas "container" untuk menjaga kontennya tetap di tengah.
4) 'padding-left: 25px; padding-right: 25px;': Memberikan padding sebesar 25 piksel di sisi kiri dan kanan elemen.

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/714e1f5d-7e57-4e28-a0aa-32a4c3c59310)

1) '.row': adalah selector yang memilih elemen dengan kelas "row."
	- 'display: flex;': Mengatur elemen dengan kelas "row" agar menggunakan model tata letak flex.
	- 'align-items: center;': Membuat elemen dengan kelas "row" secara vertikal terpusat.
	- flex-wrap: wrap;: Mengizinkan elemen-elemen dalam elemen dengan kelas "row" untuk mengalir ke baris baru jika Butuh lebih banyak ruang:
  	- justify-content: space-around;: Mengatur penyebaran elemen-elemen dalam elemen dengan kelas "row" sehingga mereka akan terbagi dengan sejumlah ruang yang sama di sekitarnya.

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/67c06cc5-0618-49f7-b8b3-541a4bf57915)

1) '.header': adalah selector yang memilih elemen dengan kelas "header."
	- 'background: radial-gradient(#fff, #ffd6d6);': Mengatur latar belakang elemen dengan efek gradient radial dari putih ke warna merah muda terang.
2) '.categories': adalah selector yang memilih elemen dengan kelas "categories."
	- 'margin: 70px 0;': Memberikan margin sebesar 70 piksel di atas dan bawah elemen dengan kelas "categories."

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/94d760da-6eb3-422a-88d6-ef77b3eca76d)

1) '.footer': adalah selector yang memilih elemen dengan kelas "footer."
2) 'background: #111;': Mengatur latar belakang elemen footer menjadi warna hitam (#111).
3) 'font-size: 14px;': Mengatur ukuran font menjadi 14 piksel untuk teks di dalam footer.
4) 'padding: 30px 0;': Memberikan padding sebesar 30 piksel di atas dan bawah elemen footer.
5) 'width: flex;': Mengubah elemen footer menjadi elemen flex untuk tata letak yang lebih fleksibel.
6) 'justify-content: center;': Membuat elemen footer secara horizontal terpusat.

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/18f7e9ea-0b64-44f5-8365-d3d68ed48831)

1) '.sosialicon a:hover': adalah selector yang mengatur tampilan ikon sosial saat kursor mouse mengarah ke atasnya (hover).
2) 'background-color: #111;': Mengubah warna latar belakang ikon menjadi hitam (#111) saat kursor mouse berada di atasnya.
3) 'transition: 0.5s;': Mengatur transisi berkecepatan 0,5 detik untuk perubahan warna latar belakang.

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/b6f6cdaf-20cc-4197-bd06-8614f90472a5)

1) '.footerbottom': adalah selector yang memilih elemen dengan kelas "footerbottom."
	- 'padding: 30px;': Memberikan padding sebesar 30 piksel pada elemen dengan kelas "footerbottom."
	- text-align: center;: Mengatur teks di dalam elemen footerbottom agar diberi rata tengah secara horizontal.
2) '.footerbottom p': adalah selector yang memilih elemen paragraf yang berada dalam elemen dengan kelas "footerbottom."
	- color: #fff;: Mengatur warna teks paragraf menjadi putih (#fff).

D) Halaman Kedua

E) Product

1. Product.html

![producthtml1](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/144761618/8b32ff9d-a2b0-4379-afae-da94e1d4c87a)


1) `<!DOCTYPE html>`: adalah deklarasi tipe dokumen yang mendefinisikan bahwa halaman ini adalah dokumen HTML.
2) `<html lang="en">`: adalah elemen root atau akar dari dokumen HTML dan menunjukkan bahwa dokumen ini menggunakan bahasa Inggris (dalam kode ini).
3) `<head>`: adalah bagian kepala dokumen HTML yang biasanya berisi informasi tentang halaman seperti tautan ke stylesheet, ikon situs, meta informasi, dll.
4) `<meta charset="UTF-8">`: mendefinisikan karakter encoding dokumen sebagai UTF-8, yang digunakan untuk mengatur bagaimana karakter diinterpretasikan dalam halaman.
5) `<meta name="viewport" content="width=device-width, initial-scale=1.0">`: adalah meta tag yang mengatur tampilan situs agar sesuai dengan lebar perangkat (responsif) dan tingkat zoom awal adalah 1.0.
6) '<title>HasarisStore</title>': Ini adalah judul halaman web yang akan ditampilkan di tab peramban saat halaman dimuat.
7) `<link rel="stylesheet" href="product.css">`: adalah tautan ke file CSS bernama "product.css," yang akan digunakan untuk mengatur tampilan dan gaya halaman.
8) `<link href="images/logo-removebg-preview.png" rel="icon">`: adalah tautan ke gambar yang akan digunakan sebagai ikon situs (favicon) yang akan ditampilkan di tab peramban.
9) `<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">`: adalah tautan ke file CSS dari Font Awesome yang mengandung ikon yang dapat digunakan di halaman web.
10) `<body>`: adalah elemen yang mengandung konten utama halaman web yang akan ditampilkan kepada pengguna.
11) `<div class="header">`: adalah div (divisi) yang digunakan untuk mengelompokkan elemen-elemen yang merupakan header halaman.
12) `<div class="container">`: adalah div yang mengelompokkan konten dalam header ke dalam suatu wadah atau kontainer.
13) `<div class="navbar">`: adalah div yang mengandung elemen-elemen yang biasanya ditemukan di bilah navigasi situs web.
14) `<div class="logo">`: adalah div yang berisi gambar logo situs web.
15) `<nav>`: adalah elemen navigasi yang mengandung daftar tautan navigasi.
16) `<ul>`: adalah daftar tidak terurut (unordered list) yang berisi tautan-tautan menu.
17) `<li>`: adalah elemen daftar (list item) yang mengandung tautan menu.
18) `<a id="cart-icon" href="#cart">`: adalah tautan dengan ID "cart-icon" yang mengarah ke elemen dengan ID "cart." Ini digunakan untuk mengimplementasikan fungsi keranjang belanja pada situs web.
19) `<img src="images/cart.png" width="30px" height="30px" alt="cart">`: adalah gambar ikon keranjang yang akan ditampilkan di tautan keranjang.

2. Product.css

3. product.javascript


F) Halaman Contact

1) contact.html

a) Deklarasi Dokumen HTML dan Metadata

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/6c9eca40-2975-468a-b40f-3df2f5aaf2c0)

1) `<!DOCTYPE html>`: adalah deklarasi tipe dokumen HTML yang digunakan.
2) `<html lang="en">`: Elemen root yang menunjukkan bahasa dokumen adalah bahasa Inggris.
3) `<meta charset="UTF-8">`: Pengaturan pengkodean karakter untuk dokumen HTML (UTF-8 adalah pengkodean Unicode yang umum digunakan).
4) `<meta name="viewport" content="width=device-width, initial-scale=1.0">`: Meta tag yang mengatur tampilan halaman untuk perangkat seluler dan perangkat dengan resolusi berbeda.
5) `<link rel="stylesheet" href="contact.css">`: Menghubungkan file CSS eksternal dengan halaman.
6) `<link href="images/logo-removebg-preview.png" rel="icon">`: Mengatur ikon situs web (favicon).
7) `<title>Contact Us</title>`: Judul halaman yang akan ditampilkan di tab browser.

b) Header dan Navigasi

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/42ba4ba6-08a5-4305-950e-882d156ad2c4)

1) `<body>`: adalah elemen yang mencakup seluruh konten yang akan ditampilkan di halaman web, mulai dari bagian atas hingga bagian bawah.
2) `<div class="header">`: adalah div (elemen divisi) yang mengelompokkan seluruh konten bagian atas halaman, seperti logo dan menu navigasi.
3) `<div class="container">`: adalah div yang mengelompokkan elemen-elemen dalam header. Biasanya digunakan untuk mengatur tampilan dan tata letak elemen-elemen tersebut.
4) `<div class "navbar">': adalah div yang mengelompokkan elemen-elemen yang berhubungan dengan navigasi, seperti logo dan menu.
5) `<div class="logo">`: adalah div yang berisi gambar logo situs web. Gambar logo diambil dari "images/logo-removebg-preview.png" dengan lebar 125 piksel
6) `<nav>`: adalah elemen yang mendefinisikan area menu navigasi situs web.
7) `<ul>`: adalah daftar tidak terurut (unordered list) yang berisi daftar tautan menu.
8) `<li><a href="halaman_kedua.html">Home</a></li>`: adalah item daftar yang berisi tautan "Home" yang mengarahkan ke "halaman_kedua.html". Item-item berikutnya seperti "Products," "About," dan "Contact" juga menggunakan format yang sama.

c)  Informasi Kontak

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/90f917eb-0519-472c-a7fb-6264b5cf66b4)

1) `<h2 class="title"> Contact Us</h2>`: adalah elemen judul (heading) level 2 (h2) dengan kelas "title". Ini menampilkan judul "Contact Us". Biasanya digunakan untuk memberikan judul atau pengumuman yang menonjol.
2) `<div class="offer">`: adalah div yang mengelompokkan elemen-elemen dalam bagian "Contact Us".
4) `<div class="contact-info">`: adalah div yang mengelompokkan elemen-elemen informasi kontak. Ini mungkin digunakan untuk menampilkan alamat, nomor telepon, dan alamat email.
5) `<div class="contact-item">`: adalah div yang mengelompokkan setiap item informasi kontak, seperti alamat, nomor telepon, dan alamat email.
6) `<i class="fas fa-map-marker-alt"></i>`: adalah elemen ikon yang menggunakan ikon dari Font Awesome. Ini menggambarkan ikon alamat (map marker).
7) '<p>Jln. Kentintang Universitas Negeri Surabaya</p>`: adalah elemen paragraf (p) yang menampilkan alamat, dalam hal ini, "Jln. Kentintang Universitas Negeri Surabaya".
8) `<i class="fas fa-phone"></i>`: adalah elemen ikon yang menggambarkan ikon telepon.
9) `<p>0882003365621</p>`: adalah elemen paragraf yang menampilkan nomor telepon, disini bernoor "0882003365621".
10) `<i class="fas fa-envelope"></i>: adalah elemen ikon yang menggambarkan ikon email.
11) `<p>hasaristore@gmail.com</p>`: adalah elemen paragraf yang menampilkan alamat email, disini menggunakan email "hasaristore@gmail.com".

d) Formulir Kontak
![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/e727a24e-12c8-4e62-b678-e5d96c38f05f)

1) `<h2 class="title"> Contact Form</h2>`: adalah elemen judul (heading) level 2(h2) dengan kelas "title". Ini menampilkan judul "Contact Form". Biasanya digunakan untuk menunjukkan bahwa bagian berikutnya akan berisi formulir kontak
2) `<div class="offer">`: adalah div yang mengelompokkan elemen-elemen dalam bagian "Contact Form". Ini mungkin digunakan untuk menampilkan berbagai jenis tawaran atau informasi lainnya.
3) `<form action="#" method="post">`: adalah elemen formulir HTML. Atribut action dan method menentukan apa yang terjadi ketika formulir dikirim. action="#" berarti formulir akan mengirimkan data ke halaman yang sama (current page) dan menggunakan metode HTTP POST.
4) `<div class="form-group">`: adalah div yang mengelompokkan setiap elemen dalam formulir yang memiliki label.
5) `<label for="name">Name</label>`: adalah label yang terkait dengan elemen input "Name". Label ini digunakan untuk memberi tahu pengguna bahwa input ini dimaksudkan untuk memasukkan nama.
6) `<input type="text" id="name" name="name" required>`: adalah elemen input teks yang digunakan untuk memasukkan nama. Atribut id digunakan untuk mengaitkan label dengan input, dan atribut name digunakan untuk mengidentifikasi input saat data dikirim. Atribut required menunjukkan bahwa input ini harus diisi.
7) `<label for="email">Email</label>`: adalah label yang terkait dengan elemen input "Email". Label ini digunakan untuk memberi tahu pengguna bahwa input ini dimaksudkan untuk memasukkan alamat email.
8) `<input type="email" id="email" name="email" required>`: adalah elemen input email yang digunakan untuk memasukkan alamat email. Atribut id digunakan untuk mengaitkan label dengan input, dan atribut name digunakan untuk mengidentifikasi input saat data dikirim. Atribut required menunjukkan bahwa input ini harus diisi, dan tipe email memvalidasi bahwa yang dimasukkan adalah alamat email yang valid.
9) `<label for="message">Message</label>`: adalah label yang terkait dengan elemen textarea "Message". Label ini digunakan untuk memberi tahu pengguna bahwa input ini dimaksudkan untuk memasukkan pesan atau pesan.
10) `<textarea id="message" name="message" rows="4" required></textarea>`: adalah elemen textarea yang digunakan untuk memasukkan pesan atau pesan. Atribut id digunakan untuk mengaitkan label dengan textarea, dan atribut name digunakan untuk mengidentifikasi input saat data dikirim. Atribut required menunjukkan bahwa textarea ini harus diisi. Atribut rows menentukan jumlah baris yang akan ditampilkan pada textarea.
11) `<button type="submit">Send</button>`: adalah tombol yang digunakan untuk mengirimkan formulir. Ketika tombol "Send" ini ditekan oleh pengguna, formulir akan diirimkan ke lokasi yang ditentukan dalam atribut action pada elemen `<form>`.

e) Footer dan Media Sosial

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/52800393-95a7-42a6-b79d-491519ca8939)


1) `<div class="footer">`: adalah div yang mengelompokkan elemen-elemen footer situs web. Footer biasanya digunakan untuk menampilkan informasi tambahan atau tautan penting di bagian bawah halaman web.
2) `<div class="sosialicon">`: adalah div yang mengelompokkan tautan ke ikon-ikon media sosial.
3) `<a href=""><img src="images/Instagram-Icon.png" width="30px"></a>`: adalah tautan (anchor) tanpa teks yang mengarahkan ke halaman kosong (href=""). Di dalamnya terdapat elemen gambar (img) yang menampilkan ikon Instagram dengan lebar 30 piksel. Ini sama dengan yang sebelumnya, tetapi dengan ikon-ikon untuk platform media sosial lainnya seperti Facebook, Twitter, dan YouTube.
4) `<div class="footerbottom">`: Ini adalah div yang mungkin digunakan untuk menampilkan informasi tambahan di bagian bawah footer.
5) `<p>copyright &copy;2023: Designed by <span class="designer">HasarisStore</span></p>`: adalah elemen paragraf (p) yang berisi informasi hak cipta dan informasi desainer situs web. Tanda hak cipta © dan tahun "2023" ditampilkan bersama dengan nama desainer "HasarisStore" yang diapit oleh elemen span dengan kelas "designer".

2) contact.css

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/def673db-e321-45fb-aba3-8341adf2fa8d)

1) `*`: adalah selektor universal yang memengaruhi semua elemen di halaman. Ini digunakan untuk mengatur gaya elemen secara global.
2) `margin: 0`; menghilangkan margin (mengatur margin ke nol) untuk semua elemen, sehingga tidak ada jarak di sekitar elemen-elemen.
3) `padding: 0`; menghilangkan padding (mengatur padding ke nol) untuk semua elemen.
4) `box-sizing`: border-box; mengatur model kotak elemen sehingga lebar dan tinggi elemen termasuk padding dan border, bukan hanya kontennya.
5) `font-family`: 'Arial', sans-serif; mengatur jenis font yang akan digunakan oleh semua teks dalam halaman. Font utamanya adalah 'Arial', dengan cadangan 'sans-serif' jika 'Arial' tidak tersedia.

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/124480469/37cbba59-e55b-46db-b6bb-6025bbe11127)

1) `.navbar`: adalah selektor untuk elemen yang memiliki kelas "navbar." Ini mengatur gaya untuk elemen navbar di halaman web.
   - `display: flex`; membuat elemen navbar menjadi flex container, yang memungkinkan elemen-elemen anak di dalamnya untuk menjadi flex items. Ini sering digunakan untuk membuat tata letak yang responsif.
   - `align-items: center`; mengatur elemen anak di dalam navbar agar berada di tengah secara vertikal, sehingga mereka akan sejajar secara vertikal.
   - `padding: 20px`; menambahkan padding sebesar 20 piksel ke semua sisi elemen navbar, memberikan jarak di sekitarnya.
2) `nav`: adalah selektor untuk elemen `<nav>`.
   - `flex: 1`; memberikan elemen `<nav>` fleksibilitas sebagian besar dari ruang yang tersedia dalam elemen navbar. Ini berguna untuk mengisi ruang yang tersedia secara dinamis.
   - `text-align: righ`t; mengatur teks di dalam elemen `<nav>` agar rata kanan, sehingga tautan dan teks lainnya akan berada di sisi kanan elemen tersebut.
3) `nav ul`: adalah selektor untuk elemen ul (daftar tak terurut) yang berada di dalam elemen navbar.
   - `display: inline-block`; membuat daftar tak terurut tampil dalam satu baris secara horizontal, bukan dalam satu kolom vertikal seperti biasanya.
   - `list-style-type: none`; menghilangkan tanda pengenal (bullet point) default yang biasanya ada pada daftar tak terurut.
4) `nav ul li`: adalah selektor untuk elemen-elemen li (item daftar) yang berada di dalam elemen ul.
   - `display: inline-block`; membuat item daftar tampil secara horizontal, berdampingan satu sama lain di baris yang sama.
   - `margin-right: 20px`; menambahkan margin sebesar 20 piksel di sisi kanan setiap item daftar, memberikan jarak antara item daftar.
5) `.navbar ul li a`: adalah selektor untuk tautan (anchor) yang berada di dalam elemen-elemen li dalam navbar.
   - `padding: 20px 20px`; memberikan padding sebesar 20 piksel pada sisi atas dan bawah, serta 20 piksel pada sisi kiri dan kanan tautan, memberikan tampilan yang luas dan nyaman.
   - `display: inline-block`; membuat tautan tampil sebagai blok dalam elemen li.
   - `text-decoration: none`; menghilangkan dekorasi tautan seperti garis bawah.
   - `color: #555`; mengatur warna teks tautan menjadi abu-abu tua (#555).
6) `.navbar ul li a:hover`: adalah aturan gaya yang berlaku ketika tautan navbar dihover (kursor berada di atasnya).
   - `background-color: #daeaf6`; mengubah latar belakang tautan menjadi biru muda (#daeaf6) ketika dihover, memberikan respons visual kepada pengguna.
   - `color: #000000`; mengubah warna teks tautan menjadi hitam (#000000) ketika dihover, memberikan kontras yang lebih baik.


G) Halaman About

1) about.html

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/121718997/f9b681dc-82e2-48a0-9e26-c366a4027b3b)

1.	`<!DOCTYPE html>`: Ini adalah deklarasi DOCTYPE HTML yang digunakan untuk menentukan jenis dokumen HTML yang digunakan, dalam hal ini, HTML versi 5 (HTML5). Ini adalah bagian yang mendefinisikan tipe dokumen dan diperlukan dalam setiap halaman HTML.
2.	`<html lang="en">`: Ini adalah elemen pembuka dari dokumen HTML. Elemen ini menunjukkan bahwa ini adalah dokumen HTML dan juga mengatur atribut `lang` ke "en" (Inggris) untuk menunjukkan bahasa yang digunakan dalam halaman.
3.	`<head>`: Ini adalah elemen kepala (head) dari dokumen HTML. Bagian ini berisi informasi tentang dokumen, seperti metadata dan tautan ke berkas-berkas lain yang diperlukan oleh halaman web. Semua elemen dalam bagian `<head>` tidak akan ditampilkan pada halaman web itu sendiri.
4.	`<meta charset="UTF-8">`: Ini adalah elemen meta yang mengatur karakter set dokumen HTML ke UTF-8, yang merupakan karakter set umum yang mendukung berbagai karakter dan simbol dalam bahasa manusia.
5.	`<meta name="viewport" content="width=device-width, initial-scale=1.0">`: Ini adalah elemen meta yang digunakan untuk mengatur tampilan responsif pada perangkat bergerak. Atribut `content` mengindikasikan agar lebar tampilan mengikuti lebar perangkat (`width=device-width`) dan tingkat zoom awal adalah 1.0 (`initial-scale=1.0`).
6.	`<title>HasarisStore</title>`: Ini adalah elemen judul halaman (title). Judul ini akan ditampilkan di bilah judul browser dan digunakan sebagai judul tab ketika halaman web dibuka.
7.	`<link rel="stylesheet" href="about.css">`: Ini adalah elemen tautan stylesheet (CSS) yang menghubungkan halaman HTML ini dengan berkas CSS yang disebut "about.css." Berkas CSS ini akan digunakan untuk mengatur tampilan dan gaya halaman web.
8.	`<link href="images/logo-removebg-preview.png" rel="icon">`: Ini adalah elemen tautan ikon (favicon). Ini menghubungkan halaman web dengan berkas gambar "logo-removebg-preview.png" yang akan digunakan sebagai ikon yang ditampilkan di bilah judul browser atau tab halaman web. Ikon ini adalah representasi visual singkat dari halaman web atau merek.

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/121718997/97d4df3f-5cd4-42c7-bfe9-2b293a1b52c5)

1.	`<div class="header">`: Ini adalah elemen div dengan kelas "header." Elemen ini mungkin digunakan untuk mengelompokkan dan menggambarkan elemen-elemen yang termasuk dalam header halaman web, seperti logo dan menu navigasi.
2.	`<div class="container">`: Ini adalah elemen div dengan kelas "container." Elemen ini mungkin digunakan untuk mengelompokkan elemen-elemen dalam header ke dalam suatu wadah atau kontainer, yang bisa membantu mengatur tata letak dan ruang di dalam header.
3.	`<section id="home">`: Ini adalah elemen section dengan atribut `id` "home." Elemen section ini digunakan untuk membagi halaman web menjadi bagian-bagian yang berbeda dan mungkin digunakan untuk menggambarkan bagian "home" dari halaman web.
4.	`<div class="navbar">`: Ini adalah elemen div dengan kelas "navbar." Elemen ini mungkin digunakan untuk menggambarkan menu navigasi atau bar navigasi halaman web. Navigasi ini akan berisi tautan-tautan ke halaman lain dalam situs web.
5.	`<div class="logo">`: Ini adalah elemen div dengan kelas "logo." Elemen ini mungkin digunakan untuk menggambarkan logo atau gambar merek. Logo ini akan muncul di bagian atas header.
6.	`<img src="images/logo-removebg-preview.png" width="125px">`: Ini adalah elemen gambar (img) yang digunakan untuk menampilkan gambar logo. Atribut `src` mengarahkan ke berkas gambar "logo-removebg-preview.png," dan atribut `width` mengatur lebar gambar menjadi 125 piksel.
7.	`<nav>`: Ini adalah elemen nav yang digunakan untuk menggambarkan elemen navigasi. Di dalamnya akan ada tautan-tautan menu navigasi.
8.	`<ul>`: Ini adalah elemen ul (unordered list) yang digunakan untuk membuat daftar yang tidak terurut. Di dalamnya akan ada elemen-elemen li (list item) yang berisi tautan menu.
9.	`<li><a href="halaman_kedua.html">Home</a></li>`: Ini adalah elemen li yang berisi tautan (a) ke halaman kedua dengan teks "Home." Ini adalah salah satu item menu navigasi.
10.	`<li><a href="product.html">Products</a></li>`: Ini adalah elemen li yang berisi tautan ke halaman "Products" dalam situs web dengan teks "Products."
11.	`<li><a href="about.html">About</a></li>`: Ini adalah elemen li yang berisi tautan ke halaman "About" dengan teks "About."
12.	`<li><a href="contact.html">Contact</a></li>`: Ini adalah elemen li yang berisi tautan ke halaman "Contact" dengan teks "Contact."

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/121718997/9b5be015-192d-4253-a942-5d19a7734355)

1.	`</section>`: Ini adalah penutup dari elemen `<section>` yang mungkin digunakan untuk menandai akhir dari bagian "home" atau sebelumnya di halaman web. Ini menunjukkan bahwa elemen-elemen berikutnya termasuk dalam bagian "About."
2.	`<h2 class="title"> About</h2>`: Ini adalah elemen heading level 2 (h2) dengan kelas "title" yang berisi teks "About." Elemen ini digunakan untuk menampilkan judul "About" di halaman web, dan kelas "title" mungkin digunakan untuk memberikan aturan gaya tertentu pada judul.
3.	`<div class="offer">`: Ini adalah elemen div dengan kelas "offer." Elemen ini mungkin digunakan untuk menggambarkan bagian konten yang berhubungan dengan penawaran atau deskripsi mengenai situs web.
4.	`<div class="small-container">`: Ini adalah elemen div dengan kelas "small-container." Elemen ini mungkin digunakan untuk mengelompokkan konten-konten dalam suatu kontainer kecil yang membatasi lebar konten untuk tampilan yang lebih teratur.
5.	`<div class="row">`: Ini adalah elemen div dengan kelas "row." Elemen ini mungkin digunakan untuk menggambarkan baris (row) dari elemen-elemen yang akan ditampilkan dalam halaman "About."
6.	`<div class="col-2">`: Ini adalah elemen div dengan kelas "col-2." Elemen ini mungkin digunakan untuk menggambarkan kolom pertama dari dua kolom yang akan menampilkan konten dalam halaman "About."
7.	`<img src="images/lovepik-lovers-shopping-png-image_400680411_wh860-removebg-preview.png" class="Ofter-img">`: Ini adalah elemen gambar (img) dengan atribut `src` yang mengarahkan ke berkas gambar "lovepik-lovers-shopping-png-image_400680411_wh860-removebg-preview.png." Elemen ini mungkin digunakan untuk menampilkan gambar yang mendukung konten "About," dan memiliki kelas "Ofter-img."
8.	`<div class="col-2">`: Ini adalah elemen div dengan kelas "col-2," yang merupakan kolom kedua dari dua kolom yang digunakan untuk menampilkan konten dalam halaman "About."
9.	`<h1>Dress to Impress with Hasarisstore</h1>`: Ini adalah elemen heading level 1 (h1) yang berisi teks "Dress to Impress with Hasarisstore." Ini adalah judul atau pernyataan utama yang mungkin menjadi fokus dari konten "About."
10.	`<p>Sebuah website untuk pengguna yang sedang mencari barang kebutuhan fashion Pria dan Wanita ...</p>`: Ini adalah elemen teks paragraf (p) yang berisi deskripsi atau penjelasan tentang situs web. Paragraf ini menjelaskan tujuan dan konteks dari situs web, seperti produk yang ditawarkan dan manfaatnya bagi pengguna.

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/121718997/bdd416b5-d78c-46df-9f0a-ab3f4cd2eed3)

1.	`<h2 class="title"> Profil</h2>`: Ini adalah elemen heading level 2 (h2) dengan kelas "title" yang berisi teks "Profil." Elemen ini digunakan untuk menampilkan judul "Profil" di halaman web, dan kelas "title" mungkin digunakan untuk memberikan aturan gaya tertentu pada judul.
2.	`<div class="profil">`: Ini adalah elemen div dengan kelas "profil." Elemen ini mungkin digunakan untuk menggambarkan bagian konten yang berhubungan dengan profil atau informasi mengenai individu-individu tertentu.
3.	`<div class="small-container">`: Ini adalah elemen div dengan kelas "small-container." Elemen ini mungkin digunakan untuk mengelompokkan konten-konten dalam suatu kontainer kecil yang membatasi lebar konten untuk tampilan yang lebih teratur.
4.	`<div class="row">`: Ini adalah elemen div dengan kelas "row." Elemen ini mungkin digunakan untuk menggambarkan baris (row) dari elemen-elemen yang akan menampilkan profil individu-individu.
5.	`<div class="col-3">`: Ini adalah elemen div dengan kelas "col-3," yang mungkin digunakan untuk menggambarkan tiga kolom yang akan menampilkan profil individu-individu.
6.	`<img src="images/anisa.jpg">`: Ini adalah elemen gambar (img) dengan atribut `src` yang mengarahkan ke berkas gambar "anisa.jpg." Elemen ini mungkin digunakan untuk menampilkan gambar individu pertama.
7.	`<h2>Ihda Anisa Ulfa</h2>`: Ini adalah elemen heading level 2 (h2) yang berisi nama "Ihda Anisa Ulfa." Elemen ini digunakan untuk menampilkan nama individu pertama.
8.	`<img src="images/hanif.jpg">`: Ini adalah elemen gambar (img) dengan atribut `src` yang mengarahkan ke berkas gambar "hanif.jpg." Elemen ini mungkin digunakan untuk menampilkan gambar individu kedua.
9.	`<h2>Hanif Ihsan Alim A</h2>`: Ini adalah elemen heading level 2 (h2) yang berisi nama "Hanif Ihsan Alim A." Elemen ini digunakan untuk menampilkan nama individu kedua.
10.	`<img src="images/nuris.jpg">`: Ini adalah elemen gambar (img) dengan atribut `src` yang mengarahkan ke berkas gambar "nuris.jpg." Elemen ini mungkin digunakan untuk menampilkan gambar individu ketiga.
11.	`<h2>Nurissa’idah</h2>`: Ini adalah elemen heading level 2 (h2) yang berisi nama "Nurissa’idah." Elemen ini digunakan untuk menampilkan nama individu ketiga.

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/121718997/f75a1327-405c-4031-a988-013e5dfa81b3)

1.	`<div class="footer">`: Ini adalah elemen div dengan kelas "footer." Elemen ini mewakili bagian footer halaman web. Footer adalah bagian terakhir dari halaman web yang biasanya berisi informasi tambahan seperti tautan, kontak, atau hak cipta.
2.	`<div class="sosialicon">`: Ini adalah elemen div dengan kelas "sosialicon." Meskipun dalam kode yang Anda berikan elemen ini tampak kosong, biasanya, elemen seperti ini akan digunakan untuk menampilkan ikon atau tautan ke akun media sosial atau platform lain yang terkait dengan situs web. Elemen ini mungkin digunakan untuk menggambarkan tautan sosial.
3.	`<div class="footerbottom">`: Ini adalah elemen div dengan kelas "footerbottom." Elemen ini mewakili bagian bawah footer, yang biasanya berisi informasi hak cipta, informasi desainer situs web, atau tautan ke halaman terkait.
4.	`<p>copyright &copy;2023: Designed by <span class="designer">HasarisStore</span></p>`: Ini adalah elemen paragraf (p) yang berisi informasi hak cipta dan informasi desainer situs web. Simbol "&copy;" mewakili tanda hak cipta, dan tahun "2023" menunjukkan tahun berlakunya hak cipta. Selanjutnya, ada teks "Designed by" yang diikuti oleh elemen span dengan kelas "designer" yang mungkin berisi nama desainer atau perusahaan yang merancang situs web (dalam hal ini, "HasarisStore").
5.	`</div>`: Ini adalah penutup dari elemen "footer," yang menandai akhir dari bagian footer pada halaman web.
6.	`<!--------- footer -------->`: Ini adalah komentar HTML yang digunakan untuk memberikan catatan atau penjelasan tambahan kepada pengembang atau pihak lain yang melihat kode. Dalam hal ini, komentar ini menandakan bahwa ini adalah bagian "footer."
7.	`</body>`: Ini adalah penutup dari elemen `<body>`, yang menunjukkan akhir dari konten utama halaman web.
8.	`</html>`: Ini adalah penutup dari elemen `<html>`, yang menandakan akhir dari dokumen HTML.

2) about.css

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/121718997/60397dbf-7f28-4de4-8049-2b008b71b993)

1. `*`: Ini adalah pemilih universal dalam CSS, yang berarti aturan yang didefinisikan di bawah ini akan berlaku untuk semua elemen dalam halaman web.
2. `margin: 0;`, `padding: 0;`: Ini mengatur margin dan padding untuk semua elemen menjadi 0. Ini digunakan untuk menghilangkan margin dan padding bawaan yang biasanya diterapkan oleh browser pada elemen-elemen HTML. Ini membantu mengatur tampilan elemen-elemen secara konsisten.
3. `box-sizing: border-box;`: Ini mengatur model kotak (box model) untuk semua elemen dalam halaman web menjadi "border-box." Dalam model kotak ini, lebar dan tinggi elemen mencakup padding dan batas (border), sehingga memudahkan perhitungan ukuran elemen.
4. `.navbar`: Ini adalah selektor kelas yang menggambarkan elemen dengan kelas "navbar." Aturan CSS di bawah ini akan berlaku untuk elemen yang memiliki kelas ini.
5. `display: flex;`: Ini mengatur tampilan elemen dengan kelas "navbar" menjadi tampilan fleksibel. Tampilan fleksibel memungkinkan elemen-elemen anak di dalamnya untuk diatur dalam suatu baris atau kolom dan dapat diatur ulang sesuai kebutuhan tampilan.
6. `align-items: center;`: Ini mengatur elemen-elemen di dalam "navbar" untuk selalu berada di tengah vertikal (vertically center). Ini berlaku untuk elemen-elemen yang menjadi anak dari elemen dengan kelas "navbar."
7. `padding: 20px;`: Ini mengatur padding (jarak antara konten dan batas elemen) untuk elemen dengan kelas "navbar" sebesar 20 piksel.
8. `nav`: Ini adalah selektor elemen yang menggambarkan elemen "nav" (navigasi) dalam halaman web.
9. `flex: 1;`: Ini mengatur elemen "nav" untuk memanfaatkan fleksibilitas tampilan yang telah diatur oleh elemen dengan kelas "navbar." Ini mengalokasikan ruang yang tersisa dalam elemen "navbar" kepada elemen "nav."
10. `text-align: right;`: Ini mengatur teks dalam elemen "nav" agar terletak di sebelah kanan elemen tersebut. Ini akan memengaruhi tampilan tautan navigasi di dalam elemen "nav" dengan posisi kanan.

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/121718997/2df3b437-334d-4251-af88-3e8d5fee44cd)

1. `nav ul`: Ini adalah selektor CSS yang menargetkan elemen "ul" (unordered list) yang berada dalam elemen "nav." Aturan-aturan CSS di bawah ini akan berlaku untuk elemen "ul" dalam navigasi.
2. `display: inline-block;`: Ini mengatur elemen "ul" agar ditampilkan dalam blok inline. Ini mengubah perilaku elemen "ul" dari tampilan blok (block) menjadi tampilan inline, sehingga daftar item dalam navigasi akan ditampilkan secara horizontal.
3. `list-style-type: none;`: Ini menghilangkan tanda bullet (tanda titik atau tanda lain) yang biasanya muncul di depan daftar item dalam elemen "ul." Dengan mengatur ini menjadi "none," tanda bullet tidak akan ditampilkan.
4. `nav ul li`: Ini adalah selektor CSS yang menargetkan elemen "li" (list item) yang berada dalam elemen "ul" dalam navigasi.
5. `display: inline-block;`: Ini mengatur elemen "li" agar ditampilkan dalam blok inline, yang sama seperti pada elemen "ul." Ini menjadikan daftar item dalam navigasi tampil secara horizontal.
6. `margin-right: 20px;`: Ini mengatur jarak (margin) sebesar 20 piksel di sisi kanan dari setiap daftar item. Ini memberikan ruang antara setiap item dalam navigasi.
7. `.navbar ul li a`: Ini adalah selektor yang menargetkan tautan (elemen "a") yang berada dalam elemen "li" dalam elemen "ul" yang berada dalam elemen dengan kelas "navbar."
8. `padding: 20px 20px;`: Ini mengatur padding sebesar 20 piksel di atas dan bawah, serta 20 piksel di sebelah kiri dan kanan dari setiap tautan. Ini memberikan ruang di sekitar tautan dalam navigasi.
9. `display: inline-block;`: Ini mengatur tautan agar ditampilkan sebagai blok inline, yang sama seperti pada elemen "ul" dan "li." Ini memungkinkan tautan untuk tampil secara horizontal.
10. `.navbar ul li a:hover`: Ini adalah selektor yang menargetkan tautan ketika pengguna mengarahkan kursor mouse ke atasnya (ketika tautan dalam keadaan "hover")
11. `background-color: #daeaf6;`: Ini mengatur latar belakang tautan ketika pengguna mengarahkan kursor mouse ke atasnya menjadi warna #daeaf6.
12. `color: #000000;`: Ini mengatur warna teks tautan ketika pengguna mengarahkan kursor mouse ke atasnya menjadi hitam (#000000).

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/121718997/59d07baf-3c57-44fe-9930-a19ca46ecf62)

1. `a`: Ini adalah pemilih CSS yang menargetkan tautan (link) dalam halaman web.
   - `text-decoration: none;`: Ini menghilangkan dekorasi tautan seperti garis bawah (underline). Ini membuat tautan menjadi teks biasa tanpa garis bawah.
   - `color: #555;`: Ini mengatur warna teks tautan menjadi #555, yang merupakan kode warna abu-abu tua.
2. `p`: Ini adalah pemilih CSS yang menargetkan elemen-elemen paragraf (p) dalam halaman web.
   - `color: #555;`: Ini mengatur warna teks elemen paragraf menjadi #555, yang juga merupakan kode warna abu-abu tua.
3. `container`: Ini adalah pemilih CSS yang menargetkan elemen dengan kelas "container."
   - `max-width: 1300px;`: Ini mengatur lebar maksimum elemen dengan kelas "container" menjadi 1300 piksel. Ini dapat digunakan untuk mengendalikan lebar konten dalam halaman web.
   - `margin: auto;`: Ini mengatur elemen dengan kelas "container" agar berada di tengah halaman web secara horizontal dengan menggunakan margin otomatis di kiri dan kanan.
   - `padding-left: 25px;` dan `padding-right: 25px;`: Ini mengatur padding sebesar 25 piksel di sebelah kiri dan kanan elemen dengan kelas "container." Padding adalah jarak antara konten dan batas elemen.
4. `row`: Ini adalah pemilih CSS yang menargetkan elemen dengan kelas "row."
   - `display: flex;`: Ini mengatur elemen dengan kelas "row" agar menggunakan tampilan fleksibel, yang memungkinkan pengaturan tata letak yang lebih fleksibel dalam konteks elemen ini.
   - `align-items: center;`: Ini mengatur elemen-elemen dalam kelas "row" agar selalu berada di tengah vertikal. Ini berguna untuk pengaturan vertikal dalam tata letak.
   - `flex-wrap: wrap;`: Ini mengatur elemen-elemen dalam kelas "row" agar bisa dibungkus ke baris berikutnya jika lebarnya melebihi ruang yang tersedia.
   - `justify-content: space-around;`: Ini mengatur elemen-elemen dalam kelas "row" agar tersusun dengan jarak sekitar yang merata di sekitar mereka. Ini dapat digunakan untuk membuat ruang di antara elemen-elemen.
5. `.col-2`: Ini adalah pemilih CSS yang menargetkan elemen dengan kelas "col-2."
   - `flex-basis: 50%;`: Ini mengatur lebar dasar elemen dengan kelas "col-2" menjadi 50% dari lebar container induknya.
   - `min-width: 300px;`: Ini menetapkan lebar minimum elemen dengan kelas "col-2" menjadi 300 piksel. Ini memastikan bahwa elemen ini tidak akan lebih sempit dari 300 piksel.
6. `.col-2 img`: Ini adalah pemilih CSS yang menargetkan gambar yang berada di dalam elemen dengan kelas "col-2."
   - `max-width: 100%;`: Ini memastikan bahwa gambar di dalam elemen "col-2" tidak akan melebihi lebar elemen tersebut. Ini membantu menjaga gambar agar tetap responsif.
   - `padding: 50px 0;`: Ini mengatur padding sebesar 50 piksel di atas dan bawah gambar. Ini memberikan ruang antara gambar dan elemen-elemen lain di sekitarnya.
7. `.col-2 h1`: Ini adalah pemilih CSS yang menargetkan elemen berjudul (heading) yang berada di dalam elemen dengan kelas "col-2."
   - `font-size: 50px;`: Ini mengatur ukuran font elemen berjudul menjadi 50 piksel.
   - `line-height: 60px;`: Ini mengatur tinggi baris (line-height) elemen berjudul menjadi 60 piksel. Ini memengaruhi jarak antara baris dalam teks.
   - `margin: 25px 0;`: Ini mengatur margin sebesar 25 piksel di atas dan bawah elemen berjudul. Ini memberikan ruang di atas dan di bawah teks judul.

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/121718997/5675d702-68c8-4f70-a6db-dc134aaefd7a)

1. `.header`: Ini adalah pemilih CSS yang menargetkan elemen dengan kelas "header."
   - `background: radiSal-gradient(#fff, #ffd6d6);`: Ini mengatur latar belakang elemen dengan kelas "header" menggunakan gradient radial. Gradient ini berubah dari putih (#fff) di tengah ke merah muda (#ffd6d6) di luar. Ini menciptakan efek latar belakang yang menarik pada elemen "header."
2. `.categories`: Ini adalah pemilih CSS yang menargetkan elemen dengan kelas "categories."
   - `margin: 70px 0;`: Ini memberikan margin sebesar 70 piksel di atas dan di bawah elemen dengan kelas "categories." Ini memberikan ruang di atas dan di bawah elemen ini dalam halaman web.
3. `.col-3`: Ini adalah pemilih CSS yang menargetkan elemen dengan kelas "col-3."
   - `flex-basis: 30%;`: Ini mengatur lebar dasar elemen dengan kelas "col-3" menjadi 30% dari lebar container induknya.
   - `min-width: 250px;`: Ini menetapkan lebar minimum elemen dengan kelas "col-3" menjadi 250 piksel. Ini memastikan bahwa elemen ini tidak akan lebih sempit dari 250 piksel.
   - `margin-bottom: 30px;`: Ini memberikan margin sebesar 30 piksel di bawah elemen "col-3." Ini menciptakan jarak vertikal antara elemen "col-3."
4. `.col-3 img`: Ini adalah pemilih CSS yang menargetkan gambar yang berada di dalam elemen dengan kelas "col-3."
   - `width: 100%;`: Ini mengatur lebar gambar agar mencapai 100% lebar elemen "col-3." Ini memastikan gambar mengisi elemen sepenuhnya.
   - `border-radius: 100%;`: Ini mengatur sudut-sudut gambar sehingga menjadi bulat. Ini menciptakan efek gambar bulat.
   - `filter: grayscale(100%);`: Ini menerapkan efek grayscale (skala abu-abu) pada gambar dengan tingkat 100%. Ini mengubah gambar menjadi hitam-putih saat elemen "col-3" dimuat.
5. `.col-3:hover img`: Ini adalah pemilih CSS yang mengatur tampilan gambar ketika pengguna mengarahkan kursor mouse ke elemen "col-3."
   - `filter: grayscale(0);`: Saat pengguna mengarahkan kursor ke elemen "col-3," filter grayscale dihapus, sehingga gambar menjadi berwarna. Ini menciptakan efek interaktif yang mengubah gambar dari hitam-putih menjadi berwarna saat dihover.
6. `.col-3 h2`: Ini adalah pemilih CSS yang menargetkan elemen-elemen judul (heading) h2 dalam elemen dengan kelas "col-3."
   - `text-align: center;`: Ini mengatur teks dalam elemen h2 agar menjadi pusat (teks rata tengah). Ini mengubah tata letak teks ke pusat dalam elemen "col-3."

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/121718997/bc8d3576-1a0e-44b4-9bea-cbbabd9694a8)

1. `.small-container`: Ini adalah pemilih CSS yang menargetkan elemen dengan kelas "small-container."
   - `max-width: 1080px;`: Ini mengatur lebar maksimum elemen dengan kelas "small-container" menjadi 1080 piksel. Ini membantu mengontrol lebar elemen agar tidak terlalu lebar.
   - `margin: auto;`: Ini mengatur elemen dengan kelas "small-container" agar berada di tengah halaman web secara horizontal dengan menggunakan margin otomatis di kiri dan kanan.
   - `padding: 25px;` dan `padding-right: 25px;`: Ini mengatur padding sebesar 25 piksel di sekeliling elemen dengan kelas "small-container," serta padding sebesar 25 piksel di sisi kanan elemen tersebut. Padding adalah jarak antara konten dan batas elemen.
2. `.title`: Ini adalah pemilih CSS yang menargetkan elemen dengan kelas "title."
   - `text-align: center;`: Ini mengatur teks dalam elemen dengan kelas "title" agar rata tengah (horizontal). Ini membuat teks berada di tengah elemen.
   - `margin: 0 auto 80px;`: Ini mengatur margin elemen "title" menjadi 0 di atas dan bawah serta 80 piksel di sisi kiri dan kanan. Ini memberikan jarak di atas dan bawah elemen dan menjaga elemen berada di tengah halaman.
   - `position: relative;`: Ini mengatur posisi elemen "title" menjadi relatif terhadap posisi aslinya dalam tata letak dokumen.
   - `line-height: 60px;`: Ini mengatur tinggi baris (line-height) elemen "title" menjadi 60 piksel. Ini memengaruhi jarak antara baris dalam teks.
   - `color: #555;`: Ini mengatur warna teks dalam elemen "title" menjadi #555, yang merupakan kode warna abu-abu tua.
3. `.title::after`: Ini adalah pemilih CSS yang menargetkan pseudo-element "::after" dalam elemen dengan kelas "title." Pseudo-element ini digunakan untuk membuat elemen tambahan setelah elemen "title."
   - `content: '';`: Ini menentukan konten dari pseudo-element "::after," yang dalam hal ini kosong.

   - `background: #ff523b;`: Ini mengatur latar belakang pseudo-element "::after" menjadi warna merah (#ff523b).
   - `width: 80px;` dan `height: 5px;`: Ini mengatur lebar dan tinggi pseudo-element "::after."
   - `border-radius: 5px;`: Ini mengatur sudut-sudut pseudo-element "::after" sehingga menjadi bulat
   - `position: absolute;`: Ini mengatur posisi pseudo-element "::after" menjadi absolut, yang memungkinkan pengaturan posisinya secara bebas.
   - `left: 50%;` dan `bottom: 0;`: Ini mengatur posisi pseudo-element "::after" di tengah horizontal elemen "title" dan di bagian bawah elemen tersebut.
   - `transform: translate(-50%);`: Ini mengubah posisi horizontal pseudo-element "::after" sedemikian rupa sehingga tetap berada di tengah elemen "title."
4. `.offer` dan `.profil`: Ini adalah pemilih CSS yang menargetkan elemen dengan kelas "offer" dan "profil."
   - `background: radial-gradient(...)`: Ini mengatur latar belakang elemen dengan kelas "offer" dan "profil" menggunakan efek gradient radial. Ini menciptakan latar belakang berbentuk gradient yang dapat berubah-ubah warnanya tergantung pada nilai-nilai gradient yang Anda tentukan.

![image](https://github.com/22091397020HanifIhsanAlimAkbar/PemwebFinalProjek/assets/121718997/177b5857-8fef-4553-90ca-953cbcd78c7b)

1. `.col-2 .offer-img`: Ini adalah pemilih CSS yang menargetkan elemen dengan kelas "offer-img" yang berada dalam elemen dengan kelas "col-2."
   - `padding: 50px;`: Ini memberikan elemen dengan kelas "offer-img" padding sebesar 50 piksel. Padding adalah jarak antara konten elemen dan batasnya. Dalam hal ini, ini menciptakan ruang ekstra di sekitar elemen "offer-img."
2. `.footer`: Ini adalah pemilih CSS yang menargetkan elemen dengan kelas "footer."
   - `background: #111;`: Ini mengatur latar belakang elemen "footer" menjadi warna gelap (#111).
   - `font-size: 14px;`: Ini mengatur ukuran font teks dalam elemen "footer" menjadi 14 piksel.
   - `padding: 30px 0;`: Ini memberikan padding sebesar 30 piksel di atas dan bawah elemen "footer." Ini menciptakan jarak di atas dan di bawah elemen "footer."
   - `width: flex;`: Ini adalah nilai yang tidak valid. Kemungkinan maksudnya adalah `display: flex;`, yang mengatur elemen "footer" agar menggunakan model tata letak flexbox.
   - `justify-content: center;`: Ini mengatur konten di dalam elemen "footer" agar berada di tengah horizontal elemen. Ini adalah salah satu properti tata letak yang digunakan dalam tata letak flexbox.
3. `.sosialicon`: Ini adalah pemilih CSS yang menargetkan elemen dengan kelas "sosialicon."
   - `display: flex;`: Ini mengatur elemen "sosialicon" agar menggunakan model tata letak flexbox. Ini memungkinkan elemen-elemen di dalamnya untuk tertata dalam baris secara horizontal.
   - `justify-content: center;`: Ini mengatur elemen-elemen dalam "sosialicon" agar berada di tengah horizontal elemen "footer."
4. `.sosialicon a:hover`: Ini adalah pemilih CSS yang menargetkan tautan (elemen "a") dalam elemen dengan kelas "sosialicon" ketika pengguna mengarahkan kursor mouse ke atasnya (ketika tautan dalam keadaan "hover").
   - `background-color: #111;`: Ini mengatur latar belakang tautan saat di-hover menjadi warna gelap (#111).
   - `transition: 0.5s;`: Ini mengatur transisi (animasi) dengan durasi 0.5 detik ketika pengguna mengarahkan kursor mouse ke tautan. Ini menciptakan efek perubahan warna latar belakang yang halus saat tautan di-hover.
5. `.footerbottom`: Ini adalah pemilih CSS yang menargetkan elemen dengan kelas "footerbottom."
   - `padding: 30px;`: Ini memberikan elemen "footerbottom" padding sebesar 30 piksel. Ini menciptakan jarak di sekitar elemen ini.
6. `.footerbottom p`: Ini adalah pemilih CSS yang menargetkan elemen-elemen paragraf (p) dalam elemen dengan kelas "footerbottom."
   - `color: #fff;`: Ini mengatur warna teks dalam elemen-elemen paragraf menjadi putih (#fff).


