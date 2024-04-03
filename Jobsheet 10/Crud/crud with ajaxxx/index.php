<?php include('auth.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo $_SESSION['csrf_token']; ?>">
    <meta name="viewport" content="<?=$_SESSION['csrf_token'] ?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <title>Data Anggota</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php" style="color: #ffffff;">
            CRUD Dengan Ajax
        </a>
        </div>
    </nav>

    <div class="container">
        <h2 align="center" style="margin:30px;">Data Anggota</h2>

        <form method="post" class="form-data" id="form-data">
            <div class="row">
                <div class="col-sm-9">
                    <div class="form-group">
                        <label for="id">Nama</label>
                        <input type="hidden" name="id" id="id">
                        <input type="text" name="nama" id="nama" class="form-control" required="true">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Jenis Kelamin</label><br>
                        <input type="radio" name="jenis_kelamin" id="jenkel1" value="L" required="true"> Laki-laki
                        <input type="radio" name="jenis_kelamin" id="jenkel2" value="P"> Perempuan
                    </div>
                    <p class="text-danger" id="err_jenis_kelamin"></p>
                </div>
            </div>
        
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control" required="true"></textarea>
        </div>
        <div class="form-group">
            <label for="no_telp">No Telepon</label>
            <input type="number" name="no_telp" id="no_telp" class="form-control" required="true">
        </div>
        <div class="form-group">
            <button type="button" name="simpan" id="simpan" class="btn btn-primary">
                <i class="fa fa-save"></i> Simpan
            </button>
        </div>
        </form>

        <div class="data"></div>
    </div>
    
    <div class="text-center">
        <?php echo date('Y'); ?> Copyright: <a href="https://google.com/">Desain Dan Pemrograman Web</a>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    "Csrf-Token": $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.data').load("data.php");
            $("#simpan").click(function() {
                var data = $('#form-data').serialize();
                var jenkel = $('input[name="jenis_kelamin"]:checked').val();
                var nama = $('#nama').val();
                var alamat = $('#alamat').val();
                var no_telp = $('#no_telp').val();

                if (!nama) {
                    $("#err_nama").html("Nama Harus Diisi");
                } else {
                    $("#err_nama").html("");
                }

                if (!alamat) {
                    $("#err_alamat").html("Alamat Harus Diisi");
                } else {
                    $("#err_alamat").html("");
                }

                if (!jenkel) {
                    $("#err_jenis_kelamin").html("Jenis Kelamin Harus Dipilih");
                } else {
                    $("#err_jenis_kelamin").html("");
                }

                if (!no_telp) {
                    $("#err_no_telp").html("No Telepon Harus Diisi");
                } else {
                    $("#err_no_telp").html("");
                }

                if (nama && alamat && jenkel && no_telp) {
                    $.ajax({
                        type: 'POST',
                        url: "form_action.php",
                        data: data,
                        success: function() {
                            $('#data').load("data.php");
                            $('#form-data')[0].reset();
                        },
                        error: function(response) {
                            console.log(response);
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>