<?php
$koneksi = mysqli_connect("localhost", "root", "", "inventory") or die("Gagal Koneksi Database");

$ID_barang = $_GET['ID_barang'];
$query = "SELECT * FROM barang WHERE ID_barang = '$ID_barang'";

$data = mysqli_query($koneksi, $query) or die("Gagal Menampilkan" . $query);
$sql = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- title icon -->
    <link rel="icon" href="https://cdn.discordapp.com/attachments/813500727199662181/1186858813479977000/chara_stand_1103_000002.png?ex=6594c767&is=65825267&hm=832074d357dc38d25c1f5c09ea9d0412dd455509196de965cc0436b3e0598992&" type="image/css">

</head>

<body style="background-color: #f3f3f3;">
    <!-- navbar -->
    <nav class="navbar bg-dark bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                </svg>
                Update Data
            </a>
        </div>
    </nav>

    <!-- content -->
    <div class="container mt-3" style="background-color: #b3b3b3; border-radius: 5px;">
        <h2 style="color: white;">Barang</h2>
        <!-- button back -->
        <a href="index.php"><button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z" />
                </svg> Back to home</button></a>

        <table class="table table-striped table-hover mt-3">

            <!-- data dikirim ke act_update2.php -->
            <form action="act_update.php" method="POST">
                <tr>
                    <td><label>ID Barang : </label></td>
                    <td><input type="text" name="ID_barang" readonly placeholder="ID_barang" autofocus value="<?php echo $sql['ID_barang']; ?>" /></td>
                </tr>

                <tr>
                    <td><label>Nama Barang : </label></td>
                    <td><input type="text" name="Nama_barang" placeholder="Nama_barang" autofocus value="<?php echo $sql['Nama_barang']; ?>" /></td>
                </tr>

                <tr>
                    <td><label>Jenis Barang : </label></td>
                    <td><input type="text" name="Jenis_barang" placeholder="Jenis_barang" autofocus value="<?php echo $sql['Jenis_barang']; ?>" /></td>
                </tr>

                <tr>
                    <td><label>Bentuk Barang : </label></td>
                    <!-- <td><input type="text" name="Bentuk_barang" readonly placeholder="Bentuk_barang" autofocus value="" /></td> -->
                    <td>
                        <?php
                        $koneksi = mysqli_connect("localhost", "root", "", "inventory") or die("Gagal Koneksi Database");
                        $query = "select * from bentuk_barang";
                        $data = mysqli_query($koneksi, $query) or die("Gagal query" . $query);
                        ?>
                        <select name="Bentuk_barang">
                            <option value="">
                                Pilih Jenis Bentuk
                            </option>

                            <?php
                            while ($v = mysqli_fetch_array($data)) : ?>
                                <option value="<?php echo $v['ID_bentuk']; ?>">
                                    <?php echo $v['Nama_bentuk']; ?>
                                </option>
                            <?php endwhile; ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td><label>Stok : </label></td>
                    <td><input type="text" name="Stok" placeholder="Stok" autofocus value="<?php echo $sql['Stok']; ?>" /></td>
                </tr>

                <tr>
                    <td><label>Kadaluarsa : </label></td>
                    <td><input type="date" name="Kadaluarsa" placeholder="Kadaluarsa" autofocus value="<?php echo $sql['Kadaluarsa']; ?>" /></td>
                </tr>

                <tr>
                    <!-- button submit -->
                    <td colspan="4" style="text-align:center;">
                        <input class="btn btn-primary" type="submit" name="submit" value="Submit" onclick="return Confirm('Apakah data akan disimpan?')">
                    </td>
                </tr>
            </form>
        </table>
    </div>

    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>