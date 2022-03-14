<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Shopping | Cahaya Arzeti</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="row">
        <div class="col-md-8">
            <h4>Online Shopping</h4>
            <hr>
            <form method="GET">
                <div class="form-group row">
                    <label for="name" class="col-4 col-form-label">Customer :</label>
                    <div class="col-8">
                        <input id="name" name="pembeli" placeholder="Customer Name" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Product Choice :</label>
                    <div class="col-8">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="inlineCheckbox1" value="TV" name="barang">TV
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="inlineCheckbox2" value="Kulkas" name="barang">KULKAS
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="inlineCheckbox2" value="Mesin Cuci" name="barang">MESIN CUCI
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-4 col-form-label">Total :</label>
                    <div class="col-8">
                        <input id="name" name="jumlah" placeholder="Total Product" type="number" class="form-control">
                    </div>
                </div>
                <di v class="form-group row">
                    <div class="offset-4 col-8">
                        <input type="submit" value="checkout" name="bayar" class="btn-success px-3 py-1">
                    </div>
                </di>
            </form>
            <?php
            $proses = isset($_GET['bayar']) ? $_GET['bayar'] : ' ';
            $customer = isset($_GET['pembeli']) ? $_GET['pembeli'] : ' ';
            $produk = isset($_GET['barang']) ? $_GET['barang'] : ' ';
            $jumlah = isset($_GET['jumlah']) ? $_GET['jumlah'] : ' ';
            $harga = $jumlah;

            echo "Customer Name : $customer";
            echo "<br>Product Choice : $produk";
            echo "<br>Total : $jumlah";
          

            if($produk == "TV"){
                echo "<br>Total Price : " . $jumlah * 4200000 ;
            }
            elseif($produk == "Kulkas"){
                echo "<br>Total Price : " . $jumlah * 3100000 ;
            }
            elseif($produk == "Mesin Cuci"){
                echo "<br>Total Price : " . $jumlah * 3800000 ;
            }
            ?>
        </div>
        <div class="col-md-4">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active">Price list</a>
                <div class="list-group-item">
                    TV : 4.200.000
                </div>
                <div class="list-group-item">
                    KULKAS : 3.100.000
                </div>
                <div class="list-group-item justify-content-between">
                    MESIN CUCI : 3.800.000
                </div> <a href="#" class="list-group-item list-group-item-action active justify-content-between">Prices are subject to change at any time</a>
            </div>
        </div>
    </div>
    </div>
</body>
</html>