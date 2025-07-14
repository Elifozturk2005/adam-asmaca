<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adam_asmaca";

// Bağlantıyı kur
$conn = new mysqli($servername, $username, $password, $dbname);

// Hata kontrolü
if ($conn->connect_error) {
  die("Bağlantı hatası: " . $conn->connect_error);
}

$isim = $_POST['isim'];
$skor = $_POST['skor'];

$sql = "INSERT INTO skorlar (isim, skor) VALUES ('$isim', $skor)";
if ($conn->query($sql) === TRUE) {
  echo "Skor kaydedildi!";
} else {
  echo "Hata: " . $conn->error;
}

$conn->close();
?>
