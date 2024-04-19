<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_perusahaan_organisasi = $_POST["nama_perusahaan"];
    $bidang_usaha = $_POST["bidang_usaha"];
    $alamat_kantor = $_POST["alamat_kantor"];
    $kontak_person = $_POST["kontak_person"];
    $no_telp = $_POST["no_telp"];
    $email = $_POST["email"];
    $alamat_web = $_POST["alamat_web"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "uts";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    $sql = "INSERT INTO mitra (nama_perusahaan_organisasi, bidang_usaha, alamat_kantor, kontak_person, no_telp, email, alamat_web)
        VALUES ('$nama_perusahaan_organisasi', '$bidang_usaha', '$alamat_kantor', '$kontak_person', '$no_telp', '$email', '$alamat_web')";
        if ($conn->query($sql) === TRUE) {
            echo "Data berhasil disimpan";
            header("Location:form-mitra.html");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
    $conn->close();
}
?>