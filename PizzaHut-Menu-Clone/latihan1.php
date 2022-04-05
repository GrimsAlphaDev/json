<?php
$data = file_get_contents("data/pizza.json");
$menu = json_decode($data, true);

$menu = $menu["menu"];
// var_dump($menu);
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Grims Hut</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark 
    bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" width="120">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="row mt-3">
            <div class="col">
                <h1>All Menu</h1>
            </div>
        </div>

        <div class="row">
            <?php foreach ($menu as $item) : ?>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <img src="img/menu/<?= $item['gambar'] ?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?= $item['nama'] ?></h5>
                             <p class="card-text"><?= $item['deskripsi'] ?></p>
                            <h5 class="card-title">Rp.
                                <?= number_format($item['harga']) ?>
                            </h5>
                            <a href="#" class="btn btn-primary">Pesan</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>