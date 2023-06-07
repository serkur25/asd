<?php 
$servername = "localhost";
$username = "serkur";
$password = "190525";
$dbname = "film_onerileri";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Bağlantı kontrolü yapalım
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Veritabanından verileri çekelim
$sql = "SELECT film_adi, yonetmen, yapim_yili, aciklama, puan FROM filmler";
$result = mysqli_query($conn, $sql);

// Verileri tablo şeklinde ekrana yazdıralım
if (mysqli_num_rows($result) > 0) {
    echo "<table><tr><th>Film Adı</th><th>Yönetmen</th><th>Yapım Yılı</th><th>Açıklama</th><th>Puan</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row["film_adi"]."</td><td>".$row["yonetmen"]."</td><td>".$row["yapim_yili"]."</td><td>".$row["aciklama"]."</td><td>".$row["puan"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Bağlantıyı kapatalım
mysqli_close($conn);
?>
