<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namaPerusahaan = $_POST["nama_perusahaan"];
    $bidangUsaha = $_POST["bidang_usaha"];
    $deskripsiLowongan = $_POST["deskripsi_lowongan"];
    $kualifikasiLowongan = $_POST["kualifikasi_lowongan"];
    $kategoriLowongan = $_POST["kategori_lowongan"];
    $tanggalDateline = $_POST["tanggal_dateline"];
    $kontakPerson = $_POST["kontak_person"];
    $email = $_POST["email"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "uts";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    $sql = "INSERT INTO lowongan (nama_perusahaan, bidang_usaha, deskripsi_lowongan, kualifikasi_lowongan, kategori_lowongan, tanggal_dateline, kontak_person, email)
            VALUES ('$namaPerusahaan', '$bidangUsaha', '$deskripsiLowongan', '$kualifikasiLowongan', '$kategoriLowongan', '$tanggalDateline', '$kontakPerson', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Lowongan berhasil disimpan.";
        header("Location: pasangloker.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>