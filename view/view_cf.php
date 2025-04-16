<?php

$imageCharcuterie = "./src/images/cf/CHARCUTERIE.jpg";
$imageFigatteli = "./src/images/cf/FIGATELLI.jpg";
$imageFromages = "./src/images/cf/FROMAGES.jpg";
$imageBrocciu = "./src/images/cf/BROCCIU.jpg";
?>
<main>
    <h1>Epicerie Fine - Produits Corses</h1>
    <h2>Charcuterie & Fromages</h2>
    <div>
        <img src="<?php echo $imageCharcuterie?>" alt="">
        <section>
            <p>Nous avons choisi pour vous une charcuterie 100% artisanale.<br>
            L'élevage des porcs et sa production se passent à San Lorenzo en Castagniccia.<br>
            Lonzu, Coppa, Saucisses, Prizuttu pour vous régaler...</p>
        </section>
    </div>
    <div>
        <section>
            <p class="m-droite">Et en saison, les Figatteli bien sûr !</p>
        </section>
        <img src="<?php echo $imageFigatteli?>" class="m-droite taille20" alt="">
    </div>
    <div>
        <img src="<?php echo $imageFromages?>" class="" alt="">
        <section>
            <p class="m-gauche">Nous aimons à rencontrer les producteurs de fromages.<br>
            Nous les sélectionnons avec soin pour votre plus grand plaisir, majoritairement sur le Cap Corse.<br>
            Ainsi, nous vous proposons des fromages affinés de Brebis et de Chèvre, des tommes, des yaourts de Brebis.</p>
        </section>
    </div>
    <div>
        <section>
            <p class="m-droite">Et du brocciu en saison !</p>
        </section>
        <img src="<?php echo $imageBrocciu?>" class="taille20" alt="">
    </div>
</main>
