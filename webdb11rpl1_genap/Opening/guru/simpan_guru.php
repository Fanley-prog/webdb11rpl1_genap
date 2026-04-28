<?php
include "koneksi.php";
$nip=$_POST['nip'];
$nama_guru=$_POST['nama_guru'];
$tempat_lahir=$_POST['tempat_lahir'];
$tgl_lahir=$_POST['tgl_lahir'];
$alamat=$_POST['alamat'];
if(isset($_POST['simpan'])){
    $sqls="insert into guru values('$nip','$nama_guru','$tempat_lahir','$tgl_lahir','$alamat')";
    $simpan=mysqli_query($koneksi,$sqls);
    $hasil=mysqli_affected_rows($koneksi);
    if($hasil>0){
        echo "<script>alert('Data Berhasil Disimpan')</script>";
    }else{
        echo "<script>alert('Data Gagal Disimpan')</script>";
    }
}
?>
<meta http-equiv="refresh" content="1;url=input_guru.php">
