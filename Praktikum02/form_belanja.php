<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <form class="w-75 mt-5 mx-auto p-4 border shadow-sm" method="GET" action="form_belanja.php">
        <h2>Belanja Online</h2>
        <hr />
        <div class="container px-3">
            <div class="form-group row">
                <label for="custname" class="col-4 col-form-label">Customer</label>
                <div class="col-8">
                    <input name="customer_name" id="custname" placeholder="Masukan nama customer" type="text" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Pilih produk</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input value="TV" name="produk" id="TV" type="radio" class="custom-control-input" required>
                        <label for="TV" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input value="Kulkas" name="produk" id="Kulkas" type="radio" class="custom-control-input" required>
                        <label for="Kulkas" class="custom-control-label">Kulkas</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input value="Mesin Cuci" name="produk" id="Mesin Cuci" type="radio" class="custom-control-input" required>
                        <label for="Mesin Cuci" class="custom-control-label">Mesin Cuci</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                <div class="col-8">
                    <input name="jumlah" id="jumlah" placeholder="Jumlah beli" type="number" min=0 class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                </div>
            </div>
            <div class="form-group">
                <p class="my-1">List Harga</p>
                <ol>
                    <li>TV: 2.500.000</li>
                    <li>Kulkas: 3.500.000</li>
                    <li>Mesin Cuci: 5.500.000</li>
                </ol>
            </div>
        </div>
    </form>

    <?php
    if (isset($_GET['submit'])) {

        //variabel untuk menyimpan data
        $custname = $_GET['customer_name'];
        $produk = $_GET['produk'];
        $jumlah = $_GET['jumlah'];

        switch ($produk) {
            case "TV":
                $total = $jumlah * 2500000;
                break;
            case "Kulkas":
                $total = $jumlah * 3500000;
                break;
            case "Mesin Cuci":
                $total = $jumlah * 5500000;
                break;

        }

        //tampilkan data dari variabel
        echo 'Nama customer: ' . $custname, '<br>';
        echo 'Produk pilihan: ' . $produk, '<br>';
        echo 'Jumlah beli: ' . $jumlah, '<br>';
        echo 'Total belanja: ' . $total, '<br>';
    }
    ?>

</body>

</html>