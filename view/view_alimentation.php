<?php

$imagePain = "";
$imageSaleUn = "./src/images/alimentation/SALES.jpg";
$imageSaleDeux = "./src/images/alimentation/SALES 2.jpg";
$imageFruitsLégumes = "./src/images/alimentation/FRUITS & LEGUMES.jpg";
$imageFrais = "./src/images/alimentation/PRODUITS FRAIS.jpg";
$imageDejeuner = "./src/images/alimentation/PETIT DEJ.jpg";
$imageFriandises = "./src/images/alimentation/FRIANDISES.jpg";
$imageSeche  = "./src/images/alimentation/EPICERIE SECHE.jpg";
$imageAnimaux = "./src/images/alimentation/ANIMAUX.jpg";
$imageBoisson = "./src/images/alimentation/BOISSONS.jpg";
$imageBoissonFraiche = "./src/images/alimentation/BOISSONS FRAICHES.jpg";
$imageHygiene  = "./src/images/alimentation/DROGUERIE & HYGIENE.jpg";
$imageTest = "https://agence-communication.re/wp-content/uploads/2023/06/couleur-noire-signification-1.jpg";

?>
<main>
    <h1>Alimentation</h1>
    <div>
        <section>
            <p>Notre petite épicerie vous propose (presque) tout ce dont vous avez besoin pour passer un agréable séjour à Canari sans être obligé de prendre votre voiture pour faire vos courses !</p>
        </section>
    </div>
    <div>
        <img src="<?php echo $imageTest?>" class="taille15" alt="">
        <section>
            <p>Du pain et des viennoiseries tous les matins d'ouverture.<br>
            Livrés de la Boulangerie de Macinaggio (voir orthographe!)</p>
        </section>
    </div>
    <div>
        <section>
            <p class="m-droite">Tous les jeudis, des salés... </p>
        </section>
        <img src="<?php echo $imageSaleUn?>" class="m-droite taille30" alt="">
        <img src="<?php echo $imageSaleDeux?>" class="m-droite taille15" alt="">
    </div>
    <div>
        <img src="<?php echo $imageFruitsLégumes?>" class="" alt="">
        <section>
            <p>Fruits & Légumes</p>
        </section>
    </div>
    <div>
        <section>
            <p class="m-droite">Produits Frais</p>
        </section>
        <img src="<?php echo $imageFrais?>" class="m-droite" alt="">
    </div>
    <div>
        <img src="<?php echo $imageDejeuner?>" class="taille15" alt="">
        <img src="<?php echo $imageFriandises?>" class="taille15" alt=""></section>
        <section>
            <p>Petit déjeuner & Friandises</p>
        </section>
    </div>
    <div>
        <section>
            <p class="m-droite">Epicerie sèche</p>
        </section>
        <img src="<?php echo $imageSeche?>" class="m-droite taille15" alt="">
        <img src="<?php echo $imageAnimaux?>" class="m-droite taille15" alt="">
    </div>
    <div>
        <img src="<?php echo $imageBoisson?>" class="taille15" alt="">
        <img src="<?php echo $imageBoissonFraiche?>" class="taille20" alt=""></section>
        <section>
            <p>Boissons</p>
        </section>
    </div>
    <div>
        <section>
            <p class="m-droite">Droguerie & Hygiène</p>
        </section>
        <img src="<?php echo $imageHygiene?>" class="m-droite" alt="">
    </div>
    <div>
        <img src="<?php echo $imageTest?>" class="" alt="">
        <section>
            <p>Produits animaux</p>
        </section>
    </div>
</main>
