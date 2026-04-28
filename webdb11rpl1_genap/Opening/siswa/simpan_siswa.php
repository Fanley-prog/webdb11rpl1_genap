<?php
include "koneksi.php";
$nis=$_POST['nis'];
$nama_siswa=$_POST['nama_siswa'];
$alamat_siswa=$_POST['alamat_siswa'];
if(isset($_POST['simpan'])){
    $sqls="insert into siswa values('$nis','$nama_siswa','$alamat_siswa')";
    $simpan=mysqli_query($koneksi,$sqls);
    $hasil=mysqli_affected_rows($koneksi);
    if($hasil>0){
        echo "<script>alert('Data Berhasil Disimpan')</script>";
    }else{
        echo "<script>alert('Data Gagal Disimpan')</script>";
    }
}
?>
<meta http-equiv="refresh" content="1;url=input_siswa.php">
