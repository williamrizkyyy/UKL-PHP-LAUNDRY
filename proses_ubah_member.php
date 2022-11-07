<?php
if($_POST){
    $nama_member=$_POST['nama_member'];
    $alamat=$_POST['alamat'];
    $jk=$_POST['jk'];
    $kota=$_POST['kota'];
    $telp=$_POST['telp'];

    if(empty($nama_member)){
        echo "<script>alert('nama member tidak boleh kosong');location.href='ubah_member.php?id_member=".$_POST['id_member']."';</script>";

    } elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='ubah_member.php?id_member=".$_POST['id_member']."';</script>";
    } elseif(empty($jk)){
        echo "<script>alert('jenis kelamin tidak boleh kosong');location.href='ubah_member.php?id_member=".$_POST['id_member']."';</script>";
    } elseif(empty($kota)){
        echo "<script>alert('kota tidak boleh kosong');location.href='ubah_member.php?id_member=".$_POST['id_member']."';</script>";
    } elseif(empty($telp)){
        echo "<script>alert('telp tidak boleh kosong');location.href='ubah_member.php?id_member=".$_POST['id_member']."';</script>";


    } else {
        include "koneksi.php";
            $update=mysqli_query($conn,"update member set nama_member='".$nama_member."', alamat='".$alamat."', jk='".$jk."', kota='".$kota."', telp='".$telp."' where id_member = '".$_POST['id_member']."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update member');location.href='tampil_member.php';</script>";
            } else {
                echo "<script>alert('Gagal update buku');location.href='ubah_member.php?id_member=".$_POST['id_member']."';</script>";
            }
        }
        
    }
?>