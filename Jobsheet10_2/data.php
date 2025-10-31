<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Alamat</td>
            <td>No Telp</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php
        include 'koneksi.php';
        $no = 1;
        $query = "SELECT * FROM anggota ORDER BY id DESC";
        $result = pg_query($conn, $query);

        if (!$result) {
            die("Query gagal: " . pg_last_error($conn));
        }

        if (pg_num_rows($result) > 0) {
            while ($row = pg_fetch_assoc($result)) {
                $id = $row['id'];
                $nama = $row['nama'];
                $jenis_kelamin = ($row['jenis_kelamin'] == 'L') ? 'Laki-Laki' : 'Perempuan';
                $alamat = $row['alamat'];
                $no_telp = $row['no_telp'];
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $nama; ?></td>
            <td><?php echo $jenis_kelamin; ?></td>
            <td><?php echo $alamat; ?></td>
            <td><?php echo $no_telp; ?></td>
            <td>
                <button id="<?php echo $id; ?>" class="btn btn-success btn-sm edit_data">
                    <i class="fa fa-edit"></i> Edit
                </button>
                <button id="<?php echo $id; ?>" class="btn btn-danger btn-sm hapus_data">
                    <i class="fa fa-trash"></i> Hapus
                </button>
            </td>
        </tr>
        <?php
            }
        } else {
        ?>
        <tr>
            <td colspan="7">Tidak ada data ditemukan</td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
});

function reset() {
    document.getElementById("err_nama").innerHTML = "";
    document.getElementById("err_jenis_kelamin").innerHTML = "";
    document.getElementById("err_alamat").innerHTML = "";
    document.getElementById("err_no_telp").innerHTML = "";
}

$(document).on('click', '.hapus_data', function() {
    var id = $(this).attr('id');
  
    $.ajax({
        type: 'POST',
        url: 'hapus_data.php',
        data: { id: id },
        success: function() {
            // Gunakan callback function dari .load() untuk memastikan DataTables diinisialisasi ulang
            $('.data').load('data.php', function() {
                // Saat load selesai, script di data.php akan dieksekusi, termasuk initializeDataTable()
                alert('Data berhasil dihapus!');
            });
        },
        error: function(response) {
            console.log(response.responseText);
        }
    });
});

$(document).on('click', '.edit_data', function() {
    $('html, body').animate({ scrollTop: 0 }, 'slow');
    var id = $(this).attr('id');
    var csrf_token = $('meta[name="csrf-token"]').attr('content'); // ambil token dari meta tag

    $.ajax({
        type: 'POST',
        url: 'get_data.php',
        data: { id: id },
        dataType: 'json',
        beforeSend: function(xhr) {
            xhr.setRequestHeader('Csrf-Token', csrf_token); // kirim token di header
        },
        success: function(response) {
            if (response.error) {
                console.log(response.error);
                alert(response.error);
                return;
            }

            reset();
            $('html, body').animate({ scrollTop: 30 }, 'slow');
            document.getElementById("id").value = response.id;
            document.getElementById("nama").value = response.nama;
            document.getElementById("alamat").value = response.alamat;
            document.getElementById("no_telp").value = response.no_telp;

            if (response.jenis_kelamin == "L") {
                document.getElementById("jenkel1").checked = true;
            } else {
                document.getElementById("jenkel2").checked = true;
            }
        },
        error: function(response) {
            console.log("AJAX Error:", response.responseText);
        }
    });
});

</script>