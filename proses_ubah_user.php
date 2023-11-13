<?php
if($_POST){
    $id_user=$_POST['id_user'];
    $nama_user=$_POST['nama_user'];
    $jk_user=$_POST['jk_user'];
    $alamat_user=$_POST['alamat_user'];
    $telepon_user=$_POST['telepon_user'];
    $username=$_POST['username'];
    $password= $_POST['password'];
    $role= $_POST['role'];
    if(empty($nama_user)){
        echo "<script>alert('nama user tidak boleh kosong');location.href='tambah_user.php';</script>";

    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_user.php';</script>";
    } else {
        include "koneksi.php";
        if(empty($password)){
            $update=mysqli_query($conn,"update user set nama_user='".$nama_user."',jk_user='".$jk_user."', alamat_user='".$alamat_user."', telepon_user='".$telepon_user."', username='".$username."', role='".$role."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update user');location.href='tampil_user.php';</script>";
            } else {
                echo "<script>alert('Gagal update user');location.href='ubah_user.php?id_user=".$id_user."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update user set nama_user='".$nama_user."',jk_user='".$jk_user."', alamat_user='".$alamat_user."', telepon_user='".$telepon_user."', username='".$username."', password='".md5($password)."', role='".$role."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update user');location.href='tampil_user.php';</script>";
            } else {
                echo "<script>alert('Gagal update user');location.href='ubah_user.php?id_user=".$id_user."';</script>";
            }
        }
        
    } 
}
?>
