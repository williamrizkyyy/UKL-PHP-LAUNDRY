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
    <h3>Daftar Member</h3>
    <button><a href="tambah_member.php">Tambah</a></button>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th><th>NAMA MEMBER</th><th>ALAMAT</th>
                <th>GENDER</th><th>TELEPON</th><th>KOTA</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
            $qry_member=mysqli_query($conn,"select * from member");
            $no=0;
            while($data_member=mysqli_fetch_array($qry_member)){
            $no++;?>
            <tr>
            <td><?=$no?></td>
            <td><?=$data_member['nama_member']?></td> 
            <td><?=$data_member['alamat']?></td> 
            <td><?=$data_member['jk']?></td>
            <td><?=$data_member['telp']?></td>
            <td><?=$data_member['kota']?></td>
            <td><a href="ubah_member.php?id_member=<?=$data_member['id_member']?>" class="btn btn-success">Ubah</a> | 
            <a href="hapus_member.php?id_member=<?=$data_member['id_member']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
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
