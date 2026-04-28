<?php
include "koneksi.php";
$id=$_POST['id'];
$nis=$_POST['id'];
$kode_mapel=$_POST['kode_mapel'];
$nip=$_POST['nip'];
$nilai=$_POST['nilai'];
if(isset($_POST['simpan'])){
    $sqls="insert into nilai values('$id','$nis','$kode_mapel','$nip','$nip')";
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
if(isset($_post['simpan'])){
    $sqls="insert into nilai values ('$nis', $dll)";
    $simpan=mysqli_query($koneksi,$sqls);
    $hasil=mysqli_affected_rows($koneksi);
    if($hasil>0){
        echo <script>alert('')
    }
}