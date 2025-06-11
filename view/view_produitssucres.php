<?php

$imageCanistrelli = "./src/images/sucres/CANISTRELLI.jpg";
$imageMiel = "./src/images/sucres/MIELS.jpg";
$imageConfitures = "./src/images/sucres/CONFITURES.jpg";
$imageThes = "./src/images/sucres/THES__TISANES.jpg";
$imagePrepa = "./src/images/sucres/PREPA GATEAUX.jpg";
$imageCedrat = "./src/images/sucres/CEDRATS.jpg";

?>
<main>
    <h1>Epicerie Fine - Produits Corses</h1>
    <h2>Gamme Sucrée</h2>
    <div>
        <section>
            <p>Pour tous les gourmands, une large gamme de produits corses ! A déguster ou à offrir...<br>
            Uniquement des producteurs artisanaux et locaux pour des produits de qualité que nous choisissons avec attention.</p>
        </section>
    </div>
    <div>
        <img src="<?php echo $imageCanistrelli?>" alt="">
        <section>
            <h3>Canistrelli</h3>
            <p>Plusieurs artisans, du traditionnel au Vin Blanc ou à l'Anis au plus hardi Romarin ou Miel Poivre des Moines</p>
        </section>
    </div>
    <div>
        <section>
            <h3 class="m-droite">Miels</h3>
            <p class="m-droite">Des petites productions artisanales pour des miels de qualité<br>
            Châtaignier, Toutes fleurs, Arbouse...</p>
        </section>
        <img src="<?php echo $imageMiel?>" alt="">
    </div>
    <div>
        <img src="<?php echo $imageConfitures?>" alt="">
        <section>
            <h3>Confitures</h3>
            <p>Des classiques Clémentine ou Châtaigne aux plus inventives Citron jaune et Safran sans oublier la gelée d'immortelle...<br>
            Elaborées uniquement avec des fruits et fleurs récoltés en Corse, elles égayeront vos petits déjeuners et vos goûters.</p>
        </section>
    </div>
    <div>
        <section>
            <h3 class="m-droite">Thés & Tisanes</h3>
            <p class="m-droite">Une jolie gamme de produits déclinés en bio.</p>
        </section>
        <img src="<?php echo $imageThes?>" alt="">
    </div>
    <div>
        <img src="<?php echo $imagePrepa?>" alt="">
        <section>
            <h3>Préparations à gâteaux</h3>
            <p>Un petit coup de pouce à ceux qui veulent s'essayer à quelques spécialités corses...</p>
        </section>
    </div>
    <div>
        <section>
            <p class="m-droite">Et le Cédrat du Cap Corse !<br>
            Décliné en Confitures, Confits, Canistrelli, Liqueurs...</p>
        </section>
        <img src="<?php echo $imageCedrat?>" alt="">
    </div>
</main>
