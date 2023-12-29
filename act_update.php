<?php
    $koneksi = mysqli_connect("localhost","root","","inventory") or die ("Gagal Koneksi Database");
    $ID_barang = $_POST['ID_barang'];
    $Nama_barang = $_POST['Nama_barang'];
    $Jenis_barang = $_POST['Jenis_barang'];
    $Bentuk_barang = $_POST['Bentuk_barang'];
    $Stok = $_POST['Stok'];
    $Kadaluarsa = $_POST['Kadaluarsa'];
    
    $query = "update barang set ID_barang = '$ID_barang', Nama_barang = '$Nama_barang', Jenis_barang = '$Jenis_barang', Bentuk_barang = '$Bentuk_barang', Stok = '$Stok', Kadaluarsa = '$Kadaluarsa' where ID_barang = '$ID_barang'";

    $sql = mysqli_query($koneksi, $query) or die("Gagal input".$query);
    header("location:index.php");
?>