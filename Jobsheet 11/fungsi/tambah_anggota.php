<?php

session_start();
if (!empty($_SESSION['username'])) {

    require '../config/koneksi.php';
    require '../fungsi/pesan_kilat.php';
    require '../fungsi/anti_injection.php';


    if (!empty($_GET['anggota'])) {

        $username = antiinjection($koneksi, $_POST['username']);
        $password = antiinjection($koneksi, $_POST['password']);
        $level = antiinjection($koneksi, $_POST['level']);
        $jabatan = antiinjection($koneksi, $_POST['jabatan']);
        $nama = antiinjection($koneksi, $_POST['nama']);
        $jenis_kelamin = antiinjection($koneksi, $_POST['jenis_kelamin']);
        $alamat = antiinjection($koneksi, $_POST['alamat']);
        $no_telp = antiinjection($koneksi, $_POST['no_telp']);

      
        $salt = bin2hex(random_bytes(16));

        $combined_password = $salt . hash('sha256', $salt . $password);

        $hashed_password = password_hash($combined_password, PASSWORD_BCRYPT);


        $query1 = "INSERT INTO user (username, password, salt, level) VALUES ('$username', '$hashed_password', '$salt', '$level')";
        if (mysqli_query($koneksi, $query1)) {

            $last_id = mysqli_insert_id($koneksi);

            $query2 = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp, user_id, jabatan_id) VALUES ('$nama', '$jenis_kelamin', '$alamat', '$no_telp', '$last_id', '$jabatan')";
            if (mysqli_query($koneksi, $query2)) {
    
                pesan('success', 'Berhasil Tambahkan Anggota');
            } else {

                pesan('warning', 'Gagal Menambahkan Anggota Tetapi Data Login Tersimpan Karena: ' . mysqli_error($koneksi));
            }
        } else {

            pesan('danger', 'Gagal Menambahkan Anggota Karena: ' . mysqli_error($koneksi));
        }

        header('Location: ./index.php?page=anggota');

        exit();
    }
}
?>