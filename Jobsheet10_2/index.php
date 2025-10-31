<?php
include 'auth.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>">
    <title>Data Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="#" style="color: #fff;">CRUD dengan Ajax</a>
    </nav>

    <div class="container">
        <div align="center" style="margin: 30px;">
            <h2>Data Anggota</h2>
        </div>

        <form method="post" id="form-data">
            <div class="form-row">
                <div class="form-group col-lg-6">
                    <label for="nama">Nama</label>
                    <input type="hidden" name="id" id="id">
                    <input type="text" name="nama" id="nama" class="form-control" required="true">
                    <p class="text-danger" id="err_nama"></p>
                </div>
                <div class="form-group col-lg-6">
                    <label for="jenis_kelamin">Jenis Kelamin</label><br>
                    <input type="radio" name="jenis_kelamin" id="jenkel1" value="L" required="true"> Laki-Laki
                    <input type="radio" name="jenis_kelamin" id="jenkel2" value="P"> Perempuan
                    <p class="text-danger" id="err_jenis_kelamin"></p>
                </div>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" required="true"></textarea>
                <p class="text-danger" id="err_alamat"></p>
            </div>

            <div class="form-group">
                <label for="no_telp">No Telepon</label>
                <input type="text" name="no_telp" id="no_telp" class="form-control" required="true">
                <p class="text-danger" id="err_no_telp"></p>
            </div>

            <div class="form-group">
                <button type="button" id="simpan" class="btn btn-primary">
                    <i class="fa fa-save"></i> Simpan
                </button>
            </div>
        </form>

        <div class="data"></div>
    </div>

    <div class="text-center">
        <p><?php echo date('Y'); ?> &copy; <a href="https://google.com/">Desain dan Pemrograman Web</a></p>
    </div>

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            // Token Keamanan
            $.ajaxSetup({
                headers: {
                    'CsrfToken': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.data').load('data.php');
        });

        $("#simpan").click(function(){
    var data = $(".form-data").serialize();
    var jenkel1 = document.getElementById("jenkel1").value;
    var jenkel2 = document.getElementById("jenkel2").value;
    var nama = document.getElementById("nama").value;
    var alamat = document.getElementById("alamat").value;
    var no_telp = document.getElementById("no_telp").value;

    if (nama=="") {
        document.getElementById("err_nama").innerHTML = "Nama Harus Diisi";
    } else {
        document.getElementById("err_nama").innerHTML = "";
    }

    if (alamat=="") {
        document.getElementById("err_alamat").innerHTML = "Alamat Harus Diisi";
    } else {
        document.getElementById("err_alamat").innerHTML = "";
    }

    if (document.getElementById("jenkel1").checked==false && document.getElementById("jenkel2").checked==false) {
        document.getElementById("err_jenis_kelamin").innerHTML = "Jenis Kelamin Harus Dipilih";
    } else {
        document.getElementById("err_jenis_kelamin").innerHTML = "";
    }

    if (no_telp=="") {
        document.getElementById("err_no_telp").innerHTML = "No Telepon Harus Diisi";
    } else {
        document.getElementById("err_no_telp").innerHTML = "";
    }

    if (nama!="" && alamat!="" && (document.getElementById("jenkel1").checked==true || document.getElementById("jenkel2").checked==true) && no_telp!="") {
        $.ajax({
            type: 'POST',
            url: 'form_action.php',
            data: data,
            success: function(response) {
                $('.data').load("data.php");
                document.getElementById("id").value = "";
                document.getElementById("form-data").reset();
            },
            error: function(response){
                console.log(response.responseText);
            }
        });
    }
    });
    </script>
</body>
</html>
