<?php
    $id_membre = $_SESSION['user']['id_membre'];
    $donnes = liste_objet($bdd,$id_membre);
?>
<div class="conteiner">
    <h2>Voici la liste des objets</h2>
    <?php while ($data = mysqli_fetch_assoc($donnes)) { ?>
        <p><?php echo $data['nom_objet'] ?></p>
     <?php }
    ?>
</div>