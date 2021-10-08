<?php
if (isset($_POST['submit'])) {
    $namaBarang = $_POST['namabarang'];
    $jumlahBarang = $_POST['jumlahbarang'];
    $hargaBarang = $_POST['hargabarang'];
} else {
    echo 'data tidak dikenali';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Data Barang</title>
</head>

<body>
    <style>
        .card {
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 10px;

        }
    </style>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <table align="center">
                    <tr align="center">
                        <th colspan="3">
                            <h3>Data Barang</h3>
                        </th>
                    </tr>
                    <tr align="center">
                        <th>Nama Barang </th>
                        <th>Jumlah Barang </th>
                        <th>Harga Barang </th>
                    </tr>
                    <tr align="center">
                        <td><?= $namaBarang; ?></td>
                        <td><?= $jumlahBarang; ?></td>
                        <td><?= $hargaBarang; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>