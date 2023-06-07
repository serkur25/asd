<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resimler.css" type="text/css"> 
    <link rel="stylesheet" href="aksiyonfilmleri.css" type="text/css"> 
    <link rel="stylesheet" href="navbar.css" type="text/css">
    <title>Aksiyon Filmleri</title>
  </head>
  <body>
      <header>
      <nav class="navbar">
        <div class="navbar__logo">
          <a href="#">Logo</a>
        </div>
        <ul class="navbar__list">
          <li class="navbar__item"><a href="index.html">Ana Sayfa</a></li>
          <li class="navbar__item"><a href="#">Filmler</a></li>
          <li class="navbar__item"><a href="#">Hakkımızda</a></li>
        </ul>
      </nav>
    </header>
    <h2>Aksiyon Filmleri</h2>
    <div class="film-listesi">
    <?php
    include 'db_connect.php';
    $conn = mysqli_connect($db_localhost, $db_username, $db_password, $db_name);
    if (!$conn) {
      die("Bağlantı hatası: " . mysqli_connect_error());
    }
    
    $sql = "SELECT id, film_adi, yonetmen, yapim_yili, aciklama, puan, resim_url FROM filmler WHERE tur='aksiyon'";
    $result = mysqli_query($conn,$sql);
      
    // Veritabanından filmleri çek
    while($row = mysqli_fetch_assoc($result)) {
      // Film bilgilerini HTML bloğuna yerleştir
      $html = "<div class='film'>";
      $html .= "<div class='film-baslik'>";
      $html .= "<a href='film_detay.php?film_id=".$row['id']."'><img src='".$row['resim_url']."' alt='".$row['film_adi']."'></a>";
      $html .= "</div>";
      $html .= "<div class='film-aciklama'>";
      $html .= "<h3>".$row['film_adi']."</h3>";
      $html .= "<p>".$row['aciklama']." <a href='film_detay.php?film_id=".$row['id']."#more'>Daha fazlası için tıklayın</a></p>";

      $html .= "</div>";
      $html .= "</div>";
     
      // HTML bloğunu ekrana yazdır
      echo $html;
    }
    ?>
    </div>
               
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
