<?php
    $koneksi = mysqli_connect("localhost","root","","inventory") or die ("Gagal Koneksi Database");
    $ID_bentuk = $_POST['ID_bentuk'];
    $Nama_bentuk = $_POST['Nama_bentuk'];
    
    $query = "insert into bentuk_barang values('$ID_bentuk', '$Nama_bentuk')";
    $sql = mysqli_query($koneksi, $query) or die("Gagal input".$query);
    header("location:index.php");
?>