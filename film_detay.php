<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <link rel="stylesheet" href="navbar.css" type="text/css">
     <link rel="stylesheet" href="filmdetay.css" type="text/css">
    <title>Film Öneri Sitesi</title>
      <style >
       
     </style>
  </head>
  
  <header>
      <nav class="navbar">
        <div class="navbar__logo">
          <a href="#">Logo</a>
        </div>
        <ul class="navbar__list">
          <li class="navbar__item"><a href="#">Ana Sayfa</a></li>
          <li class="navbar__item"><a href="#">Filmler</a></li>
          <li class="navbar__item"><a href="#">Hakkımızda</a></li>
        </ul>
      </nav>
    </header>
<div class="film-detay">
<?php
include 'db_connect.php';
$conn = mysqli_connect($db_localhost, $db_username, $db_password, $db_name);
if (!$conn) {
  die("Bağlantı hatası: " . mysqli_connect_error());
}

// Seçilen filmin ID'sini al
$film_id = $_GET['film_id'];

// Veritabanından filmi seç
$sql = "SELECT film_adi, yonetmen, yapim_yili, aciklama, puan, resim_url, fragman_url FROM filmler WHERE id = $film_id";
$result = mysqli_query($conn,$sql);

// Verileri ekrana yazdır
while($row = mysqli_fetch_assoc($result)) {
  echo "<h2>".$row['film_adi']."</h2>";
  echo "<p><strong>Yönetmen:</strong> ".$row['yonetmen']."</p>";
  echo "<p><strong>Açıklama:</strong> ".$row['aciklama']."</p>";
  echo "<p><strong>Yapım Yılı:</strong> ".$row['yapim_yili']."</p>";
  echo "<p><strong>Puan:</strong> ".$row['puan']."</p>";
  echo "<img src='".$row['resim_url']."' alt='".$row['film_adi']."'>";
  echo "<p><strong>Fragman:</strong> <a href='".$row['fragman_url']."' target='_blank'>Fragmanı izle</a></p>";

}
?>
</div>