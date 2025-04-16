<?php

$imageContact = "./src/images/contact/CONTACT.jpg";

?>
<main>
    <h1>Contact</h1>
    <div>
        <section>
            <p>Vous pouvez nous passer commande des produits corses qui vous plaisent et, selon leur disponibilité, nous vous les expédions par colis postal en remplissant le formulaire ci-dessous.</p>
        </section>
    </div>
    <div>
        <!--- https://www.youtube.com/watch?v=0X0kovjzLrw --->
        <form action="" method="post">
            <label for="name">Nom :</label>
            <input class="form-control" type="text" name="name" id="name">
            <label for="email">E-mail :</label>
            <input class="form-control" type="text" name="email" id="email">
            <label for="commentaire">Commentaire :</label>
            <textarea class="form-control" name="commentaire" id="commentaire" rows="5"></textarea>
            <input type="submit" name="submitEnvoi" value="Envoyer">
        </form>
        <img src="<?php echo $imageContact?>" alt="">
    </div>
    <h2>Mairie de Canari</h2>
    <div>
        <section>
            <p>Pour connaître un peu mieux le village : <a href="http://www.canarivillage.com/" target="_blank">Mairie de Canari</a></p>
        </section>
    </div>
    <h2>Gites de Canari à proximité</h2>
    <div>
        <section>
            <p>Gite 1 : <a href="https://www.gites-de-france.com/fr/corse/haute-corse/le-59871-20g59871" target="_blank">Appartement de 82 m² au 1er étage</a></p>
            <p>Gite 2 : <a href="https://www.gites-de-france.com/fr/corse/haute-corse/le-59872-20g59872" target="_blank">Appartement de 53 m² sur 2 niveaux</a></p>
        </section>
    </div>
</main>
