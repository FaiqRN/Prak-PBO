<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "uts";

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $username = $row['username'];
        if (isset($_POST['remember'])) {
            setcookie('username', $username, time() +  60, '/');
        }
        header("Location: index.html");
        exit();
    } 
    else {
        echo "Username atau password salah.";
    }

    $conn->close();
}
?>