<?php
    $id_membre = $_SESSION['user']['id_membre'];
    $liste = liste_objets_et_emprunts($bdd, $id_membre);
?>
<div class="container">
    <div class="row">
        <form action="traitement_upload.php"  enctype="multipart/form-data">
            <input type="file" name="photo" id="">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
    <div class="accueil-container">
        <h2>Voici la liste des objets</h2>
        <?php foreach ($liste as $objet) { ?>
            <div class="objet-item">
                <a href="modal?fiche.php&num=<?php echo $objet['id_objet']?>"><?php echo $objet['nom_objet']; ?></a>
                <?php if ($objet['date_retour']) { ?>
                    <span class="objet-emprunt"> — Emprunté, retour le <?php echo $objet['date_retour']; ?></span>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</div>