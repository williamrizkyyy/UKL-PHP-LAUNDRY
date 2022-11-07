<?php
include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<div class="container">
        <h3> Tambah Member </h3>
<form action="proses_tambah_member.php" method="post">
                <label>Nama Member:</label>
                <input type="text" name = "nama_member" class="form-control">
                <label>Alamat:</label>
                <input type="text" name = "alamat" class="form-control">
                Jenis Kelamin : 
         <select name="jk" class="form-control">
            <option></option>
            <option value="Laki-Laki">LAKI-LAKI</option>
            <option value="Perempuan">PEREMPUAN</option>           
        </select>
                <label>Telepon:</label>
                <input type="number" name="telp" class="form-control">
                 <label>Kota:</label>
                <input type="text" name = "kota" class="form-control">
                

</div>
            
            <button type="submit" class="btn btn-default">Tambah</button>
             
        </form>
</body>
</html>
<?php