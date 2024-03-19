<?php
require_once './modls/db/Product.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <header>
        <div class="container">
            <h1>Cani e Gatti</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <h2>Per Cani</h2>
                <?php foreach ($productsForDog as $productForDog) : ?>
                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="<?= $productForDog->img ?>" alt="Card image cap">
                            <div class="card-body">
                                <ul>
                                    <li>
                                        <h5 class="card-title"><?= $productForDog->nameProduct ?></h5>
                                    </li>
                                    <li>
                                        Tipo di prodotto: <?= $productForDog->typeProduct ?>
                                    </li>
                                    <li>
                                        Per: <?= $productForDog->typeOfAnimal ?> <i class="<?= $productForDog->icon ?>"></i>
                                    </li>
                                    <li>
                                        Prezzo: <?= $productForDog->price ?>€
                                    </li>
                                    <li>
                                        Peso: <?= $productForDog->weight ?>kg
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-primary">Go buy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <h2>Per Gatti</h2>
                <?php foreach ($productsForcat as $productForCat) : ?>
                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="<?= $productForCat->img ?>" alt="Card image cap">
                            <div class="card-body">
                                <ul>
                                    <li>
                                        <h5 class="card-title"><?= $productForCat->nameProduct ?></h5>
                                    </li>
                                    <li>
                                        Tipo di prodotto: <?= $productForCat->typeProduct ?>
                                    </li>
                                    <li>
                                        Per: <?= $productForCat->typeOfAnimal ?> <i class="<?= $productForCat->icon ?>"></i>
                                    </li>
                                    <li>
                                        Prezzo: <?= $productForCat->price ?>€
                                    </li>
                                    <li>
                                        Peso: <?= $productForCat->weight ?>kg
                                    </li>
                                    <li>
                                    <li>
                                        <a href="#" class="btn btn-primary">Go buy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </main>

</body>

</html>

<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        background-color: orange;
    }

    ul {
        list-style: none;
    }

    /* Stile generale per il titolo principale */
    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    /* Stile per il titolo secondario */
    h2 {
        margin-top: 40px;
        text-align: center;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        /* Aggiungi uno spazio di 20px tra le colonne */
    }

    .card {
        margin-bottom: 20px;
        display: flex;
        flex-direction: column;
        height: 100%;
        /* Fai in modo che le card occupino tutta l'altezza disponibile */
        padding: 1rem;
    }

    .card-body {
        flex-grow: 1;
        /* Fa espandere il corpo della card per occupare lo spazio rimanente */
    }


    /* Stile per le immagini all'interno delle card */
    .card-img-top {
        width: 100%;
        height: auto;
    }

    /* Stile per i titoli delle card */
    .card-title {
        font-size: 1.2rem;
        font-weight: bold;
    }

    /* Stile per gli elementi di lista all'interno delle card */
    .card-body ul {
        padding-left: 0;
        margin-bottom: 10px;
    }

    /* Stile per gli elementi di lista all'interno delle card */
    .card-body ul li {
        margin-bottom: 8px;
    }

    /* Stile per il pulsante all'interno delle card */
    .card-body .btn {
        width: 100%;
        text-align: center;
    }

    /* Stile per i link all'interno del pulsante */
    .card-body .btn a {
        color: #fff;
        text-decoration: none;
    }

    /* Stile per il background del pulsante */
    .card-body .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    /* Stile per il colore del testo all'interno del pulsante al passaggio del mouse */
    .card-body .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
</style>