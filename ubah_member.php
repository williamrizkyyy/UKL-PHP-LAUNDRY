<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <?php 
    include "koneksi.php";
    $qry_get_member=mysqli_query($conn,"select * from member where id_member = '".$_GET['id_member']."'");
    $dt_member=mysqli_fetch_array($qry_get_member);
    ?>
    <h3>Ubah member</h3>
    <form action="proses_ubah_member.php" method="post">
        <input type="hidden" name="id_member" value="<?=$dt_member['id_member']?>">
        Nama member :
        <input type="text" name="nama_member" value="<?=$dt_member['nama_member']?>" class="form-control">
        Alamat :
        <input type="text" name="alamat" value="<?=$dt_member['alamat']?>" class="form-control">
        Jenis Kelamin :
        <select name="jk"  value="<?=$dt_member['jk']?>" class="form-control">
            <option></option>
            <option value="Laki-Laki">LAKI-LAKI</option>
            <option value="Perempuan">PEREMPUAN</option> 
        </select>
         Kota:
        <input type="text" name="kota" value="<?=$dt_member['kota']?>" class="form-control"> 
         Telepon:
        <input type="text" name="telp" value="<?=$dt_member['telp']?>" class="form-control"> 
        

        <input type="submit" name="simpan" value="Ubah member" class="btn btn-primary">
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>