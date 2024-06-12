<!DOCTYPE html>
<html>

<head>

  <title>SMPN 160 JAKARTA</title>

  <link rel="shortcut icon" href="favicon.ico">  <!-- link untuk icon web -->

  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap" rel="stylesheet"> <!-- link ke gfonts  -->

  <link rel="stylesheet" href="./assets/css/style.css"> <!-- link file css -->

</head>
<body>
  
  <header class="header" data-header>

    <div class="container"> <!-- membuat navbar -->

      <a href="#" class="logo">
        <h4 style="color: white;">SMPN 160 JAKARTA</h4>
      </a>
      
      <?php include 'nav.php'; ?> <!-- Menyertakan file nav.php -->

      <a href="kontak.php" class="btn btn-primary">Kontak</a>
    </div>

  </header>

  <main>
    <article>

      <!-- bagian hero -->
      <section class="section hero" style="background-image: url('./assets/images/hero-bg.jpg')"> <!-- bg img -->
        
        <div class="container"> <!-- isi konten hero -->
          <div class="hero-content">

            <h1 class="h1 hero-title">Sekolah Unggul,
              Maju dan Takwa</h1>

            <p class="hero-text">
              SMPN 160 Jakarta merupakan sekolah menengah pertama yang unggul dalam prestasi, maju dalam kreasi, iman dan takwa menyertai
            </p>

            <div class="btn-wrapper">

              <a href="kontak.php" class="btn btn-outline">Kontak Kami</a>

            </div>

          </div>

          <div class="hero-slider" data-slider> <!-- img slide -->

            <div class="slider-inner">
              <ul class="slider-container" data-slider-container>

                <li class="slider-item"> <!-- img pertama -->
                  <figure class="img-holder" style="--width: 575; --height: 550;">
                    <img src="./assets/images/logo.jpg" width="575" height="550" class="img-cover">
                  </figure>
                </li>

                <li class="slider-item"> <!-- img kedua -->
                  <div class="hero-card">
                    <figure class="img-holder" style="--width: 575; --height: 550;">
                      <img src="./assets/images/slide2.jpg" width="575" height="550" alt="hero banner"
                        class="img-cover">
                    </figure>

                    <a href="https://youtu.be/JOLrjlzclFw?si=x3gXf5YVqBkgDlQ0"><button class="play-btn"> <!-- btn play -->
                    <i class="fa-solid fa-play"></i>
                    </button></a>
                  </div>
                </li>

                <li class="slider-item"><!-- img ketiga -->
                  <figure class="img-holder" style="--width: 575; --height: 550;">
                    <img src="./assets/images/slide3.jpg" width="575" height="550" class="img-cover">
                  </figure>
                </li>

              </ul>
            </div>

            <button class="slider-btn prev" data-slider-prev> <!-- btn back -->
            <i class="fa-solid fa-arrow-left-long"></i>
            </button>

            <button class="slider-btn next" aria-label="slide to next" data-slider-next> <!-- btn next -->
            <i class="fa-solid fa-arrow-right-long"></i>
            </button>

          </div>
        </div>
      </section>

      <!-- bagian about -->
      <section class="about" id="about">
        <div class="container">

          <figure class="about-banner"> <!-- img about -->
            <img src="./assets/images/about-banner.png" width="800" height="580" class="w-100">
          </figure>

          <div class="about-content"> <!-- isi about -->
            <p class="section-subtitle" id="about-label">Kenapa harus 160 ?</p>

            <h2 class="h2 section-title">
              Tentang Kami
            </h2>

            <ul>
              <li class="about-item">
                <div class="accordion-card expanded" data-accordion>
                  <h3 class="card-title">
                    <button class="accordion-btn" data-accordion-btn>
                      <i class="fa-solid fa-chevron-down"></i>
                      <spna class="span h5">Berlokasi Di</spna>
                    </button>
                  </h3>
                  <p class="accordion-content">
                    Jl. SMP 160 No. 31 TMII, Ceger, Cipayung, Jakarta Timur
                  </p>
                </div>
              </li>

              <li class="about-item">
                <div class="accordion-card" data-accordion>
                  <h3 class="card-title">
                    <button class="accordion-btn" data-accordion-btn>
                      <i class="fa-solid fa-chevron-down"></i>
                      <spna class="span h5">Sejarah Singkat</spna>
                    </button>
                  </h3>
                  <p class="accordion-content">
                   Pendidikan merupakan investasi jangka panjang yang hasilnya tidak dapat dirasakan secara instan,sehingga sekolah sebagai ujung tombak dilapangan harus memiliki arah pengembangan jangka panjang dengan tahapan pencapaiannya yang jelas dan tetap mengakomodir tuntutan permasalahan faktual kekinian yang ada di masyarakat.
                  </p>
                </div>
              </li>

            </ul>
          </div>
        </div>
      </section>

      <!-- bagian stats -->
      <section class="stats" style="margin-top: 150px;" id="data">
        <div class="container">

          <ul class="stats-card has-bg-image" style="background-image: url('./assets/images/stats-bg.jpg')">

            <li> <!-- bagian guru -->
              <p class="card-text"> 
                <span class="h1">35</span>
                <spna class="span">Guru</spna>
              </p>
            </li>

            <li> <!-- bagian siswa laki -->
              <p class="card-text">
                <span class="h1">279</span>
                <spna class="span">Siswa Laki Laki</spna>
              </p>
            </li>

            <li> <!-- bagian siswa cewe -->
              <p class="card-text">
                <span class="h1">267</span>
                <spna class="span">Siswa Perempuan</spna>
              </p>
            </li>

            <li> <!-- bagian rombongan -->
              <p class="card-text">
                <span class="h1">18</span>
                <spna class="span">Rombongan Belajar</spna>
              </p>
            </li>

          </ul>
        </div>
      </section>

      <!-- bagian berita -->
      <section class="section project" id="berita">
        <div class="container">

          <p class="section-subtitle" id="project-label">Berita Terbaru</p>

          <h2 class="h2 section-title">
            Lihat berita terbaru kami
          </h2>

          <ul class="grid-list">

            <li>
              <div class="project-card"> <!-- berita 1 -->
               
                <figure class="card-banner img-holder" style="--width: 560; --height: 350;">
                  <img src="./assets/images/kelulusan.jpg" width="560" height="350" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">PENGUMUMAN KELULUSAN TAHUN PELAJARAN 2021-2022</a>
                  </h3>

                  <p class="card-text">
                   Selamat siang dan salam sejahtera untuk semua, Peserta didik, Orangtua/Wali SMP Negeri 160 Jakarta, Berdasarkan hasil Rapat Pleno Dewan Guru,tentang Kelulusan Peserta Didik kls IX Tahun Pelajaran 2021/2023 bertempat di SMP Negeri 160 Jakarta, Nomor Surat : 200/-1.851.521 Pada Hari Jumat, 3 juni 2023 Pukul 14.00 ( WIB )
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <i class="fa-regular fa-calendar"></i>
                      <time class="meta-text" datetime="2023-06-01">1 Juni 2023</time>
                    </li>
                  </ul>
                </div>
              </div>
            </li>

            <li>
              <div class="project-card"> <!-- berita 2 -->

                <figure class="card-banner img-holder" style="--width: 560; --height: 350;">
                  <img src="./assets/images/berita2.jpg" width="560" height="350" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Presiden Jokowi: Kesehatan & pendidikan pondasi hadapi era persaingan</a>
                  </h3>

                  <p class="card-text">
                    Presiden Joko Widodo (Jokowi) menyatakan bahwa kesehatan dan pendidikan menjadi pondasi untuk menghadapi era persaingan antarnegara yang semakin ketat. "Jangan melupakan yang namanya gizi, jangan lupakan pendidikan karena itu merupakan pondasi yang kita perlukan dalam rangka menghadapi kompetisi atau persaingan antarnegara nantinya," kata Presiden Jokowi
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <i class="fa-regular fa-calendar"></i>

                      <time class="meta-text" datetime="2023-06-20">20 Juni 2023</time>
                    </li>
                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="project-card"> <!-- berita 3 -->

                <figure class="card-banner img-holder" style="--width: 560; --height: 350;">
                  <img src="./assets/images/berita3.jpg" width="560" height="350" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Assesmen Sumatif Sekolah (ASS) 2023</a>
                  </h3>

                  <p class="card-text">
                    Asesmen adalah proses pengumpulan dan pengolahan informasi untuk mengetahui kebutuhan belajar, perkembangan, dan pencapaian hasil belajar peserta didik, yang hasilnya kemudian digunakan sebagai bahan refleksi serta landasan untuk meningkatkan mutu pembelajaran
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <i class="fa-regular fa-calendar"></i>

                      <time class="meta-text" datetime="2023-08-20">20 September 2023</time>
                    </li>
                  </ul>

                </div>

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

      <!-- bagian kanan -->
      <ul class="footer-list">

        <li>
          <p class="h4 footer-list-title">Lebih Lanjut</p>
        </li>

        <li>
          <a href="#about" class="footer-link">Tentang Kami</a>
        </li>

        <li>
          <a href="#data" class="footer-link">Data</a>
        </li>

        <li>
          <a href="#berita" class="footer-link">Berita</a>
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