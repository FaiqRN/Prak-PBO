<?php
function set_flashdata($key = "", $value = "")
{
    if (!empty($key) && !empty($value)) {
        $_SESSION['flashdata'][$key] = $value;
        return true;
    }
    return false;
}

function get_flashdata($key = "")
{
    if (!empty($key) && isset($_SESSION['flashdata'][$key])) {
        $data = $_SESSION['flashdata'][$key];
        unset($_SESSION['flashdata'][$key]);
        return $data;
    } else {
        echo "<script>alert('Flash Message: {$key} is not defined.');</script>";
    }
}

function pesan($key = "", $pesan = "")
{
    if ($key == "sukses") {
        set_flashdata('sukses', "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
            <strong>Berhasil! </strong> {$pesan}
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>");
    } elseif ($key == "gagal") {
        set_flashdata('danger', "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>Gagal! </strong> {$pesan}
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>");
    } elseif ($key == "peringatan") {
        set_flashdata('warning', "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>Peringatan! </strong> {$pesan}
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>");
    }
}
?>
