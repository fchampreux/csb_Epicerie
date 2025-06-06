<?php

$imageShop = "./src/images/header/shop.jpg";
$imageFruitsLégumes = "./src/images/header/fruitslégumes.jpg";
$imageCharcuterie = "./src/images/header/charcuterie.jpg";
$imageAlcool = "./src/images/header/vins.jpg";
$imageSucres = "./src/images/header/sucres.jpg";
$imageSales = "./src/images/header/sales.jpg";
$imageIntimu = "./src/images/header/intimu.jpg";
$imageSouvenirs = "./src/images/header/SYLVAIN.jpg";
$imageProduitsLa = "./src/images/header/dela.jpg";
$imageEvenements = "./src/images/header/agenda.jpg";
$imageContact = "./src/images/header/contact.jpg";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $title?>">
    <link rel="stylesheet" href="./src/style/style.css">
    <link rel="stylesheet" href="./src/style/<?php echo $ajout?>.css">
    <script type="text/javascript" src="./src/script/script.js" defer></script>
    <title><?php echo $title?></title>
</head>
<body class="bg">
    <?php
    if ($title == "Présentation"){
        echo '
    <header class="container">
        <input type="radio" name="slider" id="item-1">
        <input type="radio" name="slider" id="item-2">
        <input type="radio" name="slider" id="item-3">
        <input type="radio" name="slider" id="item-4">
        <input type="radio" name="slider" id="item-5">
        <input type="radio" name="slider" id="item-6">
        <input type="radio" name="slider" id="item-7">
        <input type="radio" name="slider" id="item-8">
        <input type="radio" name="slider" id="item-9" checked>
        <input type="radio" name="slider" id="item-10">
        <input type="radio" name="slider" id="item-11">
        <div class="cards">
            <label class="card" for="item-1" id="song-1">
                <img src="'.$imageShop.'" alt="song">
            </label>
            <label class="card" for="item-2" id="song-2">
                <img src="'.$imageFruitsLégumes.'" alt="song">
            </label>
            <label class="card" for="item-3" id="song-3">
                <img src="'.$imageCharcuterie.'" alt="song">
            </label>
            <label class="card" for="item-4" id="song-4">
                <img src="'.$imageAlcool.'" alt="song">
            </label>
            <label class="card" for="item-5" id="song-5">
                <img src="'.$imageSucres.'" alt="song">
            </label>
            <label class="card" for="item-6" id="song-6">
                <img src="'.$imageSales.'" alt="song">
            </label>
            <label class="card" for="item-7" id="song-7">
                <img src="'.$imageIntimu.'" alt="song">
            </label>
            <label class="card" for="item-8" id="song-8">
                <img src="'.$imageSouvenirs.'" alt="song">
            </label>
            <label class="card" for="item-9" id="song-9">
                <img src="'.$imageProduitsLa.'" alt="song">
            </label>
            <label class="card" for="item-10" id="song-10">
                <img src="'.$imageEvenements.'" alt="song">
            </label>
            <label class="card" for="item-11" id="song-11">
                <img src="'.$imageContact.'" alt="song">
            </label>
        </div>
        <div class="link-container">
            <div class="content">
                <div class="info-container" id="test">
                    <label class="info">
                        <div class="link"><a href="./controller_presentation.php">Présentation</a></div>
                    </label>
                    <label class="info">
                        <div class="link"><a href="./controller_alimentation.php">Alimentation</a></div>
                    </label>
                    <label class="info">
                        <div class="link"><a href="./controller_cf.php">Charcuterie et Fromages</a></div>
                    </label>
                    <label class="info">
                        <div class="link"><a href="./controller_ls.php">Vins & Spriritueux</a></div>
                    </label>
                    <label class="info">
                        <div class="link"><a href="./controller_produitssucres.php">Gamme Sucrée</a></div>
                    </label>
                    <label class="info">
                        <div class="link"><a href="./controller_produitssales.php">Gamme Salée</a></div>
                    </label>
                    <label class="info">
                        <div class="link"><a href="./controller_cosmetiques.php">Cosmétiques</a></div>
                    </label>
                    <label class="info">
                        <div class="link"><a href="./controller_souvenirs.php">Souvenirs</a></div>
                    </label>
                    <label class="info">
                        <div class="link"><a href="./controller_produitsdela.php">Produits de Là</a></div>
                    </label>
                    <label class="info">
                        <div class="link"><a href="./controller_evenements.php">Évènements</a></div>
                    </label>
                    <label class="info">
                        <div class="link"><a href="./controller_contact.php">Nous Contacter</a></div>
                    </label>
                </div>
            </div>
        </div>
        <div class="dot-container">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
            <span class="dot" onclick="currentSlide(7)"></span>
            <span class="dot" onclick="currentSlide(8)"></span>
            <span class="dot" onclick="currentSlide(9)"></span>
            <span class="dot" onclick="currentSlide(10)"></span>
            <span class="dot" onclick="currentSlide(11)"></span>
        </div>';
    }else{
        echo '
    <header class="container-autre">
        <a href="./controller_presentation.php" onclick="headerToggle">Présentation</a>
        <a href="./controller_alimentation.php">Alimentation</a>
        <a href="./controller_cf.php">Charcuterie et Fromages</a>
        <a href="./controller_ls.php">Vins & Spriritueux</a>
        <a href="./controller_produitssucres.php">Gamme Sucrée</a>
        <a href="./controller_produitssales.php">Gamme Salée</a>
        <a href="./controller_cosmetiques.php">Cosmétiques</a>
        <a href="./controller_souvenirs.php">Souvenirs</a>
        <a href="./controller_produitsdela.php">Produits de Là</a>
        <a href="./controller_evenements.php">Évènements</a>
        <a href="controller_contact.php">Nous Contacter</a>';
    }
    ?>
    </header>
