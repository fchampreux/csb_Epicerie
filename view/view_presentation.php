<?php

$imageRoute = "./src/images/presentation/ROUTE.jpg";
$imageDevant = "./src/images/presentation/DEVANT EPICERIE.jpg";
$imageEntree = "./src/images/presentation/ENTREE EPICERIE.jpg";
$imageTerrasse  = "./src/images/presentation/TERRASSE.jpg";
$imageVueTerrasse  = "./src/images/presentation/VUE TERRASSE.jpg";

?>
<main>
    <h1>Présentation</h1>
    <div>
        <img src="<?php echo $imageRoute?>" alt="">
        <section>
            <p>C'est par une magnifique route que vous arriverez à Canari, sur la côte ouest du Cap Corse.<br>
            Joli village accroché à la montagne, vous vous y baladerez avec plaisir pour y découvrir ses 12 hameaux et ses vues magiques et insaisissables.<br>
            Ses deux marines, Canelle et Scala, petits coins de paradis, vous offriront des baignades dans une eau limpide.</p>
        </section>
    </div>
    <div>
        <section>
            <p class="m-droite">A l'entrée du village de Canari, vous retrouverez notre petite épicerie.<br>
            Ouverte à l'année, nous vous accueillons :<br>
            De Novembre à Mars, du lundi au samedi de 08h30 à 12h30<br>
            De Avril à Octobre, du lundi au samedi de 08h30 à 12h30 et de 17h à 19h30<br>
            Les mois de juillet et août, tous les jours de 08h30 à 13h et de 17h30 à 20h00 (fermeture le lundi après-midi)</p>
        </section>
        <img src="<?php echo $imageDevant?>" class="m-droite" alt="">
    </div>
    <div>
        <img src="<?php echo $imageEntree?>" alt="">
        <section>
            <h3>Notre histoire</h3>
            <p>Nathalie & Pierre. Arrivés des Pyrénées Atlantiques, nous avons repris cette jolie petite épicerie en février 2019, que nous avons renommé Épicerie D'ici et là.<br>
            Pour nous, ce n'était pas juste reprendre un commerce, c'était faire perdurer et exister une épicerie de village et bien sûr créer et maintenir le lien social avec un lieu ouvert à l'année.<br>
            Le côté Alimentation Générale vous apporte les indispensables du quotidien.<br>
            Et l’Épicerie Fine vous propose de découvrir de nombreux produits corses.<br>
            Nous favorisons au maximum les circuits courts, rencontrons les producteurs et choisissons avec soin les produits artisanaux que nous vous proposons.</p>
        </section>
    </div>
    <div>
        <section>
            <p>Par ailleurs, nous vous proposons des boissons chaudes et fraîches.<br>
            Vous pourrez vous installer sur la terrasse... Pour taper la causette et profiter de la vue imprenable !</p>
        </section>
        <img src="<?php echo $imageTerrasse?>" class="m-droite" alt="">
    </div>
    <img src="<?php echo $imageVueTerrasse?>" alt="">
</main>
