<?php
$host = "localhost";
$username = "root";
$password = "root";
$database = "prakwebdb";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

echo "Koneksi berhasil";

$sql = "CREATE TABLE IF NOT EXISTS user (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabel user berhasil dibuat";
} else {
    echo "Error: " . mysqli_error($conn);
}
$username = "Admin";
$password = password_hash("12345anjay", PASSWORD_DEFAULT);
$sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil dimasukkan ke tabel user";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>