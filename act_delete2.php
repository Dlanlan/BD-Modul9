<?php
    $koneksi = mysqli_connect("localhost","root","","inventory") or die ("Gagal Koneksi Database");
    $ID_pegawai = $_GET['ID_pegawai'];
    $query = "delete from pegawai where ID_pegawai = '$ID_pegawai'";
    $sql = mysqli_query($koneksi, $query) or die ("Gagal input" . $query);
    header("location:index.php");
?>