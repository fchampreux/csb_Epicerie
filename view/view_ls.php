<?php

$imageLiqueursHaut = "./src/images/ls/LIQUEUR HAUT.jpg";
$imageLiqueursBas = "./src/images/ls/LIQUEUR BAS.jpg";
$imageRhum = "./src/images/ls/RHUMS.jpg";
$imageCave = "./src/images/ls/CAVE.jpg";

?>
<main>
    <h1>Epicerie Fine - Produits Corses</h1>
    <h2>Vins & Spiritueux</h2>
    <div>
        <img src="<?php echo $imageCave?>" class="taille20" alt="">
        <section>
            <p>Nous vous proposons une large gamme de vins corses, de toutes les régions vinicoles de notre belle île.<br>
            Nous pourrons vous conseiller selon vos goûts et vos envies.<br>
            Uniquement fabriqués en Corse, notre gamme vous éveillera les papilles !</p>
        </section>
    </div>
    <div>
        <section>
            <p class="m-droite">Muscats, Wisky, Cap Corse...</p>
        </section>
        <img src="<?php echo $imageLiqueursHaut?>" class="m-droite" alt="">
    </div>
    <div>
        <img src="<?php echo $imageLiqueursBas?>" class="" alt="">
        <section>
            <p>Liqueurs Cédrats du Cap Corse</p>
        </section>
    </div>
    <div>
        <section>
            <p class="m-droite">Rhum arrangés Otta</p>
        </section>
        <img src="<?php echo $imageRhum?>" class="m-droite" alt="">
    </div>
</main>
