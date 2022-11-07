<?php
if($_POST){
    $nama_paket=$_POST['nama_paket'];
    $harga=$_POST['harga'];

    if(empty($nama_paket)){
        echo "<script>alert('nama paket tidak boleh kosong');location.href='ubah_paket.php?id_paket=".$_POST['id_paket']."';</script>";

    } elseif(empty($harga)){
        echo "<script>alert('harga tidak boleh kosong');location.href='ubah_paket.php?id_paket=".$_POST['id_paket']."';</script>";

    } else {
        include "koneksi.php";
            $update=mysqli_query($conn,"update paket set nama_paket='".$nama_paket."', harga='".$harga."' where id_paket = '".$_POST['id_paket']."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update paket');location.href='tampil_paket.php';</script>";
            } else {
                echo "<script>alert('Gagal update paket');location.href='ubah_paket.php?id_paket=".$_POST['id_paket']."';</script>";
            }
        }
        
    }
?>