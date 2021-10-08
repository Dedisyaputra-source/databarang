<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Form Data barang</title>
</head>

<body>
    <style>
        .card {
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }
    </style>
    <div class="container mt-3">
        <div class="row">
            <div class="col col-md-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title text-center">
                            <h3>Form Data Barang</h3>
                        </div>
                        <form action="action.php" method="POST">
                            <div class="form-group">
                                <label for="namabarang" class="form-label">Nama Barang:</label>
                                <input type="text" name="namabarang" id="namabarang" class="form-control" placeholder="masukkan nama barang" required>
                            </div>
                            <div class="form-group">
                                <label for="jumlahbarang" class="form-label">Jumlah barang:</label>
                                <input type="number" name="jumlahbarang" id="jumlahbarang" class="form-control" placeholder="jumlah barang" required>
                            </div>
                            <div class="form-group">
                                <label for="harga-barang" class="form-label">harga barang:</label>
                                <input type="number" name="hargabarang" id="hargabarang" class="form-control" placeholder="jumlah barang" required>
                            </div>
                            <div class="mt-3">
                                <input type="submit" value="submit" class="btn btn-primary" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>