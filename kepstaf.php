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

        <!-- bagian kepsek dan staff -->
        <section class="section service">
            <div class="container">

            <p class="section-subtitle" id="service-label" style="padding-top: 35px;">Berkenalan</p>

            <h2 class="h2 section-title">
                Kepala Sekolah & Guru/Staff
            </h2>

            <ul class="grid-list">

            <li>

    <div class="service-card">

        <div style="display: flex;justify-content: center;align-items: center;" class="staf">
        <img src="./assets/images/kepsek.jpg" width="143" height="143">
        </div>

        <h3 class="h4 card-title">Pak Sadono M.Pd</h3>

        <p class="card-text">
        Kepala Sekolah
        </p>

    </div>

    </li>

    <li>

      <div class="service-card">

          <div style="display: flex;justify-content: center;align-items: center;" class="staf">
          <img src="./assets/images/BuLungu.jpg" width="100" height="100">
          </div>

          <h3 class="h4 card-title">Ibu Lungu S.Pd</h3>

          <p class="card-text">
          Guru IPS
          </p>

      </div>

      </li>

      <li>

    <div class="service-card">

        <div style="display: flex;justify-content: center;align-items: center;" class="staf">
        <img src="./assets/images/PakVeri.jpg" width="80" height="75">
        </div>

        <h3 class="h4 card-title">Pak Veri S.Pd</h3>

        <p class="card-text">
        Guru MTK
        </p>

    </div>

    </li>

    <li>

      <div class="service-card">

          <div style="display: flex;justify-content: center;align-items: center;" class="staf">
          <img src="./assets/images/PakManoviyadi.jpg" width="80" height="75">
          </div>

          <h3 class="h4 card-title">Pak Manoviyadi S.Pd</h3>

          <p class="card-text">
          Guru PJOK
          </p>

      </div>  

      </li>

      <li>
        <div class="service-card">

            <div style="display: flex;justify-content: center;align-items: center;" class="staf">
            <img src="./assets/images/PakSenianto.jpg" width="80" height="75">
            </div>

            <h3 class="h4 card-title">Pak Senianto S.Pd</h3>

            <p class="card-text">
            Guru PPKN
            </p>

        </div>

        </li>

        <li>

          <div class="service-card">

              <div style="display: flex;justify-content: center;align-items: center;" class="staf">
              <img src="./assets/images/bambang.jpg" width="80" height="85">
              </div>

              <h3 class="h4 card-title">Pak Bambang S.Pd</h3>

              <p class="card-text">
              Guru TIK
              </p>

          </div>

          </li>

          <li>

            <div class="service-card">

                <div style="display: flex;justify-content: center;align-items: center;" class="staf">
                <img src="./assets/images/sri.jpg" width="80" height="30">
                </div>

                <h3 class="h4 card-title">Ibu Sri S.Pdi</h3>

                <p class="card-text">
                Guru Agama
                </p>

            </div>

            </li>

            <li>

              <div class="service-card">

                  <div style="display: flex;justify-content: center;align-items: center;" class="staf">
                  <img src="./assets/images/Junaidi.jpg" width="80" height="75">
                  </div>

                  <h3 class="h4 card-title">Bapak Junaidi S.Pd</h3>

                  <p class="card-text">
                  Guru BK
                  </p>

              </div>

              </li>

            </ul>
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