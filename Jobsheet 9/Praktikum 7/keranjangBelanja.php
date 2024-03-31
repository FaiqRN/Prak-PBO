<!DOCTYPE html>
<html>
<head>
    <title>Keranjang Belanja</title>
</head>
<body>
    <h2>KERANJANG BELANJA</h2>
    <?php
    $beliNovel = isset($_COOKIE['beliNovel']) ? $_COOKIE['beliNovel'] : 0;
    $beliBuku = isset($_COOKIE['beliBuku']) ? $_COOKIE['beliBuku'] : 0;

    echo "Jumlah Novel: " . $beliNovel . "<br>";
    echo "Jumlah Buku: " . $beliBuku . "<br>";
    ?>
</body>
</html>
