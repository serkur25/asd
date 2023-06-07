
<?php
$db_localhost = "localhost"; // sunucu adı
$db_username = "serkur"; // kullanıcı adı
$db_password = "190525"; // şifre
$db_name = "film_onerileri"; // veritabanı adı

$conn = mysqli_connect($db_localhost, $db_username, $db_password, $db_name);

// Bağlantı kontrolü yapın
if (!$conn) {
  die("Bağlantı hatası: " . mysqli_connect_error());
}
?>
