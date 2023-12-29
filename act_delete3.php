<?php
    $koneksi = mysqli_connect("localhost","root","","inventory") or die ("Gagal Koneksi Database");
    $ID_bentuk = $_GET['ID_bentuk'];
    $query = "delete from bentuk_barang where ID_bentuk = '$ID_bentuk'";
    $sql = mysqli_query($koneksi, $query) or die ("Gagal input" . $query);
    header("location:index.php");
?>