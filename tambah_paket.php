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
        <h3> Tambah Paket </h3>
<form action="proses_tambah_paket.php" method="post">
                <label>Nama Paket:</label>
                <input type="text" name = "nama_paket" class="form-control">
                <label>Harga:</label>
                <input type="text" name = "harga" class="form-control">
                
</div>
            
            <button type="submit" class="btn btn-default">Tambah</button>
             
        </form>
</body>
</html>
<?php