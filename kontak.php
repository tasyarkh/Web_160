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

      <!-- bagian kontak -->
      <section style="padding-top: 10%; padding-bottom: 5%;">

        <div class="container">
          
            <!-- isi contact -->
            <div class="contact">

              <h3>Kontak Kami | SMPN 160 Jakarta</h3>
        
              <!-- form kontak -->
              <form id="contact-form" action="#" method="POST">
        
                <p>
                  <label>Nama</label>
                  <input type="text" name="nama" id="nama" required>
                </p>

                <p>
                  <label>Email</label>
                  <input type="email" name="email" id="email" required>
                </p>
        
                <p>
                  <label>Nomor Telepon</label>
                  <input type="text" name="telp" id="telp">
                </p>
        
                <p class="full">
                  <label>Pesan</label>
                  <textarea name="pesan" rows="5" id="pesan"></textarea>
                </p>
        
                <p class="full"> 
                  <button style="background-color: var(--navot);" onClick="alert('Pesan Anda Sudah Terkirim')">Kirim</button>
                </p>
        
              </form>

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