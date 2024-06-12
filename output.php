<!DOCTYPE html>
<html lang="en">

<head>

  <title>SMPN 160 JAKARTA</title>

  <link rel="shortcut icon" href="favicon.ico">  <!-- link untuk icon web -->

  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap" rel="stylesheet"> <!-- link ke gfonts  -->

  <link rel="stylesheet" href="./assets/css/style.css"> <!-- link file css -->

</head>
<body>
<?php
$nama=$_POST['nama'];
$email=$_POST['email'];
$telp=$_POST['telp'];
$pesan=$_POST['pesan'];
?>
<header class="header" data-header style="background-color: var(--navot);">

    <div class="container" >

      <a href="#" class="logo">
        <h4 style="color: white;">SMPN 160 JAKARTA</h4>
      </a>

    </div>
  </header>

  <main>
    <article>

      <!-- bagian visi misi -->
      <section class="section feature">
        <div class="container">

          <div class="feature-content">

            <p class="section-subtitle" id="feautre-label">Pesan Pesan</p>

            <table border=1 width="750px" height="400px" style="border-color: #5A72A0;">
                <tr>
                    <td style="padding-left: 20px; border-color: #5A72A0;">Nama</td><td align="center"><?php echo $nama; ?></td>
                </tr>

                <tr>
                    <td style="padding-left: 20px;">Email</td><td align="center"><?php echo $email; ?></td>
                </tr>
                
                <tr>
                    <td style="padding-left: 20px;">No Telepon</td><td align="center"><?php echo $telp; ?></td>
                </tr>

                <tr>
                    <td style="padding-left: 20px;">Pesan</td><td align="center"    ><?php echo $pesan; ?></td>
                </tr>
            </table>

        </div>
      </section>
    </body>
</html>