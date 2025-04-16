<?php

$imageIntimu = "./src/images/cosmetiques/INTIMU.jpg";
$imageTest = "https://agence-communication.re/wp-content/uploads/2023/06/couleur-noire-signification-1.jpg";

?>
<main>
    <h1>Epicerie Fine - Produits Corses</h1>
    <h2>Cosmétiques</h2>
    <div>
        <section>
            <p>Une belle et large gamme de produits cosmétiques et d'hygiène de grande qualité.<br>
            Chacun trouvera celui qui répond le mieux à ses attentes et ses besoins.</p>
        </section>
    </div>
    <div>
        <img src="<?php echo $imageIntimu?>" alt="">
        <section>
            <h3>Intimu</h3>
            <p>Huiles essentielles bio et Produits cosmétiques naturels.<br>
            Élaborés à partir de plantes aromatiques endémiques corses.<br>
            De beaux produits !</p>
        </section>
    </div>
    <div>
        <section>
            <h3 class="m-droite">Savonnerie Du Nebbiu</h3>
            <p class="m-droite">Savons et produits d'hygiène artisanaux.<br>
            Que des très jolis produits à offrir ou à s'offrir.</p>
        </section>
        <img src="<?php echo $imageTest?>" class="m-droite" alt="">
    </div>
    <div>
        <img src="<?php echo $imageTest?>" alt="">
        <section>
            <h3>Les Fruits De La Montagne Corse</h3>
            <p>Produits cosmétiques bio créés à partir de leur production de plantes médicinales et aromatiques.<br>
            Pour une beauté naturelle.</p>
        </section>
    </div>
</main>
