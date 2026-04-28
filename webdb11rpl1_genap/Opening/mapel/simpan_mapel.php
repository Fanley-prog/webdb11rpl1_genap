<?php
include "koneksi.php";
$kode_mapel=$_POST['kode_mapel'];
$nama_mapel=$_POST['nama_mapel'];
if(isset($_POST['simpan'])){
    $sqls="insert into mapel values('$kode_mapel','$nama_mapel')";
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
