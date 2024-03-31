<?php
include "koneksi.php";

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$query = "SELECT * FROM user WHERE username='$username'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE username='$username'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        if ($username == 'admin' && $password == '123') {
            include "homeAdmin.php";
            exit();
        } else if ($username == 'guest' && $password == '234') {
            include "homeGuest.php";
            exit();
        } else {
            echo "Password atau level akses salah. Silahkan <a href='loginForm.html'>Login kembali</a>";
        }
    } else {
        echo "Username tidak ditemukan. Silahkan <a href='loginForm.html'>Login kembali</a>";
    }
}


mysqli_close($connect);
?>