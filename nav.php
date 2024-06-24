<!DOCTYPE html>
<html lang="en">

<head>

  <title>SMPN 160 JAKARTA</title>

  <link rel="shortcut icon" href="favicon.ico">  <!-- link untuk icon web -->

  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap" rel="stylesheet"> <!-- link ke gfonts  -->

  <link rel="stylesheet" href="./assets/css/style.css"> <!-- link file css -->

</head>

<body>
<!-- membuat arr asosiatif -->
<?php
$menuItems = [
  "Home" => "index.php",
  "Visi & Misi" => "vismis.php",
  "Kepsek & Staff" => "kepstaf.php",
  "Galeri Kegiatan" => "galeri.php"
];
?>
<nav class="navbar" data-navbar>
  <ul class="navbar-list">
    <!-- loop iterasi arr -->
    <?php
    foreach ($menuItems as $name => $url) { //menyimpan key name value url
      echo "<li class='nv'><a href='$url' class='navbar-link'>$name</a></li>"; // menyimpan var name -> HTML nav
    }
    ?>
  </ul>
</nav>
</body>
</html>
