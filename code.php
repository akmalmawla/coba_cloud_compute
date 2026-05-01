<?php
include "koneksi.php";

$jobs = mysqli_query($conn, "SELECT * FROM jobs");
$news = mysqli_query($conn, "SELECT * FROM news");
$gallery = mysqli_query($conn, "SELECT * FROM gallery");
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desa Wisata Nglanggeran</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="style.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>

<header>
  <h2>Desa Wisata Nglanggeran</h2>
  <nav>
    <a href="#">Home</a>
    <a href="#">Profil</a>
    <a href="#">Wisata</a>
    <a href="#">Kontak</a>
  </nav>
</header>

<section class="hero">
  <div class="hero-content">
    <h1>Desa Nglanggeran, Desa Wisata Berbasis Alam</h1>
    <p>Eksplorasi keindahan, budaya, dan kehidupan lokal</p>
  </div>
</section>

<!-- SEJARAH -->
<section id="sejarah">
  <div class="section-title">
    <h2>Sejarah Desa</h2>
  </div>

  <div class="about">
    <img src="Gunung1.jpg" alt="">
    <p>
      Sebelum 2007 terjadi kevakuman pengelolaan saat setelah terjadi gempa 26 Mei 2006 hingga ditahun 2007, dan karang taruna mulai lagi muncul kepermukaan untuk melakukan pengelolaan kawasan wisata dengan pendampingan dari dinas Budpar Gunungkidul sejak tahun 2007. Dibuatlah sebuah lembaga BPDW (Badan Pengelola Desa Wisata) yang melibatkan dari seluruh komponen masyarakat dari Ibu PKK, Kelompok Tani, Pemerintah Desa dan juga pemuda karang taruna.
    </p>
    <p>
      Setelah terbentuk BPDW disepakati dan ditetapkan untuk pengelola teknis lapangan adalah pemuda-pemudi karang taruna selaku pengelola Kawasan Ekowisata Gunung Api Purba. Dengan mendapatkan beberapa pelatihan dari Dinas Budpar Gunungkidul dan Dinas Pariwisata DIY serta adanya beberapa SDM dari pengurus yang menempuh pendidikan di perguruan tinggi maka perkembangan wisata di Desa Nglanggeran bisa dikatakan memiliki perkembangan positif yang signifikan.
    </p>
  </div>
</section>

<section id="visi" class="section white">
  <h2 class="center">Visi & Misi</h2>

  <div class="card">
    <h3>Visi</h3>
    <p>“Menjadikan Kawasan Ekowisata Gunung Api Purba Nglanggeran menjadi kawasan wisata unggulan berwawasan lingkungan berbasis masyarakat”</p>
  </div>

  <div class="card">
    <h3>Misi</h3>
    <ul>
      <li>1. Meningkatkan SDM dan pengelolaan Kawasan Ekowisata Gunung Api Purba</li>
      <li>2. Membangun dan meningkatkan kesadaran peduli lingkungan</li>
      <li>3. Menggalang kemitraan dengan berbagai pihak yang berkompeten dalam masalah kepariwisataan dan aktivis peduli lingkungan</li>
    </ul>
  </div>
</section>

<!-- STRUKTUR -->
<section id="struktur" class="section center">
  <h2>Struktur Organisasi</h2>
  <img src="struktur.png" class="struktur">
</section>

<!-- LOWONGAN -->
<section class="section white center">
  <h2>Info Loker</h2>
  <div class="swiper swiperLowongan">
    <div class="swiper-wrapper">
      <?php while($job = mysqli_fetch_assoc($jobs)): ?>
        <div class="swiper-slide">
          <div class="job-card" style="background-image:url('<?= $job['image'] ?>')">
            <div class="job-overlay">
              <h3><?= $job['title'] ?></h3>
              <!-- Menggunakan ?? untuk handle error Undefined Key -->
              <p class="job-type"><?= $job['TYPE'] ?? 'Staff' ?></p>
              <p class="job-contact"><?= $job['contact'] ?></p>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
    <!-- Navigasi -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
</section>

<!-- BERITA -->
<section class="section center">
  <h2>Tentang Kami</h2>
  <div class="swiper swiperBerita">
    <div class="swiper-wrapper">
      <?php while($n = mysqli_fetch_assoc($news)): ?>
        <div class="swiper-slide">
          <div class="news-card" style="background-image:url('<?= $n['image'] ?>')">
            <div class="news-overlay">
              <h3><?= $n['title'] ?></h3>
              <p class="date"><?= $n['date'] ?></p>
              <p class="desc"><?= $n['type'] ?></p>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
</section>

<!-- Galeri -->
<section id="galeri" class="section white center">
  <h2>Galeri wisata desa asri</h2>

  <div class="swiper swiperGaleri">
    <div class="swiper-wrapper">
      <?php while($g = mysqli_fetch_assoc($gallery)): ?>
        <div class="swiper-slide">
          <div class="gallery-card" style="background-image:url('<?= $g['image'] ?>'); margin: 0 auto;">
            <div class="gallery-overlay">
              <p><?= $g['name'] ?></p>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
    
    <!-- Navigasi Slider -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
</section>

<!-- PETA -->
<section id="peta">
  <div class="section-title">
    <h2>Kunjungi Kami Disini...</h2>
  </div>
  <iframe 
    src="https://www.google.com/maps?q=Gunung+Api+Purba+Nglanggeran&output=embed"
    loading="lazy">
  </iframe>
</section>

<footer>
  <p>© 2026 Inf_uin-suka/kel_5</p>
</footer>
<!-- SWIPER JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  // Inisialisasi Slider Lowongan
  new Swiper(".swiperLowongan", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
    pagination: { el: ".swiper-pagination", clickable: true },
    breakpoints: {
      1024: { slidesPerView: 1.5 } // Tampilan layar besar
    }
  });

  // Inisialisasi Slider Berita
  new Swiper(".swiperBerita", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
    pagination: { el: ".swiper-pagination", clickable: true }
  });
    new Swiper(".swiperGaleri", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
    pagination: { el: ".swiper-pagination", clickable: true },
  });
</script>
</body>
</html>