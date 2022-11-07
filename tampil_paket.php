<?php
include "header.php"

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title></title>
</head>
<body>
    <h3>Paket</h3>
    <button><a href="tambah_paket.php">Tambah</a></button>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th><th>NAMA PAKET</th>
                <th>HARGA</th><th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
            $qry_paket=mysqli_query($conn,"select * from paket");
            $no=0;
            while($data_paket=mysqli_fetch_array($qry_paket)){
            $no++;?>
            <tr>
            <td><?=$no?></td>
            <td><?=$data_paket['nama_paket']?></td> 
            <td><?=$data_paket['harga']?></td>
            <td><a href="ubah_paket.php?id_paket=<?=$data_paket['id_paket']?>" class="btn btn-success">Ubah</a> | 
            <a href="hapus_paket.php?id_paket=<?=$data_paket['id_paket']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
            </tr>
            <?php 
            }   
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php
include "footer.php"
?>
