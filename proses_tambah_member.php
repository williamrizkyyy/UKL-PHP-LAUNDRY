<?php
if($_POST){
    $nama_member = $_POST['nama_member'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $telp = $_POST['telp'];
    $kota=$_POST['kota'];
    if(empty($nama_member)){
        echo "<script>alert('nama member tidak boleh kosong');location.href='tambah_member.php';</script>";
    } elseif(empty($alamat)){
        echo "<>alert('alamat tidak boleh kosong');location.href='tambah_member.php';</script>";
    } elseif(empty($jk)){
        echo "<>alert('jenis kelamin tidak boleh kosong');location.href='tambah_member.php';</script>";
    } elseif(empty($telp)){
        echo "<>alert('telp tidak boleh kosong');location.href='tambah_member.php';</script>";
     } elseif(empty($kota)){
        echo "<>alert('kota tidak boleh kosong');location.href='tambah_member.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into member(nama_member,alamat,jk,telp,kota) value ('".$nama_member."','".$alamat."','".$jk."','".$telp."','".$kota."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan member');location.href='tampil_member.php';</script>";
        } else {
             echo "<script>alert('Gagal menambahkan member');location.href='tampil_member.php';</script>";
        }
    }

 
}
?>