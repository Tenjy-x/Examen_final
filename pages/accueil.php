<?php
    $id_membre = $_SESSION['user']['id_membre'];
    $liste = liste_objets_et_emprunts($bdd, $id_membre);
?>
<div class="conteiner">
    <style>

    </style>
    <div class="accueil-container">
        <h2>Voici la liste des objets</h2>
        <?php foreach ($liste as $objet) { ?>
            <div class="objet-item">
                <?php echo $objet['nom_objet']; ?>
                <?php if ($objet['date_retour']) { ?>
                    <span class="objet-emprunt"> — Emprunté, retour le <?php echo $objet['date_retour']; ?></span>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</div>