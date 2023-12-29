<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- title icon -->
    <link rel="icon" href="https://cdn.discordapp.com/attachments/813500727199662181/1183597012801830954/chara_stand_1108_110801.png?ex=6592241e&is=657faf1e&hm=5e2ab2ce060f1aa9e4c0c2f23e284153abd42627de999be59c00abdafef7b895&" type="image/css">

</head>

<body style="background-color: #f3f3f3;">
    <!-- navbar -->
    <nav class="navbar bg-dark bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                </svg>
                Add Data
            </a>
        </div>
    </nav>

    <!-- content -->
    <div class="container mt-3" style="background-color: #b3b3b3; border-radius: 5px;">
        <h2 style="color: white;">Pegawai</h2>
        <!-- button add -->
        <a href="index.php"><button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z" />
                </svg> Back to home</button></a>

        <table class="table table-striped table-hover mt-3">

            <!-- data dikirim ke act_input.php -->
            <form action="act_input2.php" method="POST">
                <tr>
                    <td><label>ID Pegawai : </label></td>
                    <td><input type="text" name="ID_pegawai" placeholder="ID_pegawai"></td>
                </tr>

                <tr>
                    <td><label>Nama Pegawai : </label></td>
                    <td><input type="text" name="Nama_pegawai" placeholder="Nama_pegawai"></td>
                </tr>

                <tr>
                    <td><label>Alamat : </label></td>
                    <td><input type="text" name="Alamat" placeholder="Alamat"></td>
                </tr>

                <tr>
                    <td><label>No Telp : </label></td>
                    <td><input type="text" name="Nomor_telepon" placeholder="Nomor_telepon"></td>
                </tr>

                <tr>
                    <td><label>Mengambil Barang : </label></td>
                    <!-- <td><input type="text" name="ID_barang" placeholder="ID_barang"></td> -->
                    <td>
                        <?php
                        $koneksi = mysqli_connect("localhost", "root", "", "inventory") or die("Gagal Koneksi Database");
                        $query = "select * from barang";
                        $data = mysqli_query($koneksi, $query) or die("Gagal query" . $query);
                        ?>
                        <select name="ID_barang">
                            <option value="">
                                Pilih Barang
                            </option>
                            <?php
                            while ($v = mysqli_fetch_array($data)) : ?>
                                <option value="<?php echo $v['ID_barang']; ?>">
                                    <?php echo $v['Nama_barang']; ?>
                                </option>
                            <?php endwhile; ?>
                        </select>
                    </td>
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