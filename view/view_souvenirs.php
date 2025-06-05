<?php

$imageSylvain = "./src/images/souvenirs/SYLVAIN.jpg";
$imageJeanLuc = "./src/images/souvenirs/JEAN-LUC.jpg";

?>
<main>
    <h1>Souvenirs</h1>
    <div>
        <section>
            <p>Nous avons la chance d'avoir au village deux artisans créateurs !<br>
            Pour rapporter un souvenir de Canari...</p>
        </section>
    </div>
    <div>
        <img src="<?php echo $imageSylvain?>" class="" alt="">
        <section>
            <p>Sylvain qui travaille le bois et le liège avec beaucoup d'imagination.<br>
            Magnets, portes-clés, dessous de verre... vous surprendront !</p>
        </section>
    </div>
    <div>
        <section>
            <p class="m-droite">Jean-Luc, quant à lui, exerce ses talents sur le verre.<br>
            Pour votre plus grand plaisir, vous découvrirez bijoux et portes-clés.</p>
        </section>
        <img src="<?php echo $imageJeanLuc?>" class="m-droite taille30" alt="">
    </div>
</main>
