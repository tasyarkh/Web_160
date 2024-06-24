<!DOCTYPE html>
<html lang="en">

<head>

  <title>SMPN 160 JAKARTA</title>

  <link rel="shortcut icon" href="favicon.ico">  <!-- link untuk icon web -->

  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap" rel="stylesheet"> <!-- link ke gfonts  -->

  <link rel="stylesheet" href="./assets/css/style.css"> <!-- link file css -->

</head>

<body>

  <header class="header" data-header style="background-color: var(--navot); position: fixed;">

    <div class="container" >

      <a href="#" class="logo">
        <h4 style="color: white;">SMPN 160 JAKARTA</h4>
      </a>

      <?php include 'nav.php'; ?> <!-- Menyertakan file nav.php -->

      <a href="kontak.php" class="btn btn-primary">Kontak</a>

    </div>
  </header>

  <main>
    <article>

      <!-- bagian visi misi -->
      <section class="section feature">
        <div class="container">

          <div class="feature-content">

            <p class="section-subtitle" id="feautre-label" style="padding-top: 35px;">Apa Visi & Misi Kami ?</p>

            <!-- bagian visi -->
            <h2 class="h2 section-title">
              Visi
            </h2>

            <p class="section-text">
              Visi ini menjiwai warga sekolah untuk selalu mewujudkannya setiap saat dan berkelanjutan dalam mencapai tujuan sekolah.Indikator pencapaian visi sebagai berikut.
            </p>

            <!-- isi visi -->
            <ul class="feature-list">

              <li>

                <div class="feature-card">

                  <div class="card-icon">
                    <i class="fa-solid fa-check-double"></i>
                  </div>

                  <span class="span">
                    Meningkatkan perolehan kejuaraan bidang akademik..
                  </span>

                </div>

              </li>

              <li>

                <div class="feature-card">

                  <div class="card-icon">
                    <i class="fa-solid fa-check-double"></i>
                  </div>

                  <span class="span">
                    Meningkatkan perolehan kejuaraan non akademik.
                  </span>

                </div>

              </li>

              <li>

                <div class="feature-card">

                  <div class="card-icon">
                    <i class="fa-solid fa-check-double"></i>
                  </div>

                  <span class="span">
                    Meningkatkan life skill peserta didik.
                  </span>

                </div>

              </li>

              <li>
                
                <div class="feature-card">

                  <div class="card-icon">
                    <i class="fa-solid fa-check-double"></i>
                  </div>

                  <span class="span">
                    Mewujudkan disiplin tinggi.
                  </span>

                </div>

              </li>

            </ul>
          </div>

          <!-- bagian misi -->
          <div class="feature-content">
            
            <h2 class="h2 section-title" style="padding-top: 50px;">
              Misi
            </h2>

            <p class="section-text">
              Misi Dari SMPN 160 Jakarta agar menciptakan sekolah idaman yang menghasilkan lulusan  berwawasan global, memiliki kecerdasan majemuk berdasarkan Imtaq dan Ipteks yaitu :
            </p>

            <ul class="feature-list">

              <li>

                <div class="feature-card">

                  <div class="card-icon">
                    <i class="fa-solid fa-thumbtack"></i>
                  </div>

                  <span class="span">
                    Menjalankan ibadah sesuai dengan agama yang dianutnya.
                  </span>

                </div>

              </li>

              <li>

                <div class="feature-card">

                  <div class="card-icon">
                    <i class="fa-solid fa-thumbtack"></i>
                  </div>

                  <span class="span">
                    Menciptakan lingkungan sekolah yang asri, aman dan nyaman.
                  </span>

                </div>

              </li>

              <li>

                <div class="feature-card">

                  <div class="card-icon">
                    <i class="fa-solid fa-thumbtack"></i>
                  </div>

                  <span class="span">
                    Mengembangkan budi pekerti peserta didik yang ramah dan santun dengan membudayakan 5 S (Senyum, Sapa, Salam, Sopan, Santun)
                  </span>

                </div>

              </li>

              <li>

                <div class="feature-card">

                  <div class="card-icon">
                    <i class="fa-solid fa-thumbtack"></i>
                  </div>

                  <span class="span">
                    Mengaktifkan MGMP Sekolah untuk berbagi praktik baik.
                  </span>
                </div>

              </li>

            </ul>

          </div>
        </div>
      </section>

  <!-- bagian footer -->
  <footer class="footer">
    <div class="container grid-list">
      
      <!-- bagian kiri -->
      <div class="footer-brand"> 
        
        <p class="footer-text"> <!-- text cp -->
          &copy; 2024 SMPN 160 Jakarta
        </p>
        
        <ul class="social-list"> <!-- list sosmed -->

          <li>
            <a href="https://www.tiktok.com/@osismpk160jkt" class="social-link">
            <i class="fa-brands fa-tiktok"></i>
            </a>
          </li>

          <li>
            <a href="https://www.instagram.com/osismpk160jkt/" class="social-link">
            <i class="fa-brands fa-instagram"></i>
            </a>
          </li>

          <li>
            <a href="https://www.youtube.com/channel/UCyXSfZb3hd4YIobVeCkYPJw" class="social-link">
            <i class="fa-brands fa-youtube"></i>
            </a>
          </li>

        </ul>

      </div>

      <!-- bagian info -->
      <ul class="footer-list">

        <li>
          <p class="h4 footer-list-title">Info Kami</p>
        </li>

        <li>
          <address class="footer-text">
            Jl. SMP 160 No. 31 TMII, Ceger, Cipayung, Jakarta Timur
          </address>
        </li>

        <li>
          <a href="mailto:info@smpn160jkt.sch.id" class="footer-link">info@smpn160jkt.sch.id</a>
        </li>

        <li>
          <a href="tel:(021)8441330" class="footer-link">(021)8441330</a>
        </li>

      </ul>

    </div>
  </footer>

  <!-- file js -->
  <script src="./assets/js/script.js"></script>

  <!-- file icon -->
  <script src="https://kit.fontawesome.com/a7eea6a2cd.js" crossorigin="anonymous"></script>
  

</body>
</html>