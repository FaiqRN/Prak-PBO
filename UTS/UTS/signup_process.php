<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  
  $servername = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "uts";

  $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
  if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
  }

  $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
  
  if ($conn->query($sql) === TRUE) {
    echo "Pendaftaran berhasil. Silakan login.";
    header("Location: login.html");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
} else {
  echo "Password tidak cocok.";
}
?>