<?php
    $id_objet = $_GET['num'];
    $fiche = fiche_objet($bdd, $id_objet);
?>
<div class="row">
    <div class="col-lg-6 ms-auto mt-3">
        <div class="row">
            <div class="col-lg-8">
                <h1 class = "fs-3">Fiche de l'objet<span class="badge text-bg-danger p-2 fs-6">For sale</span></h1>
                <p class = "card-text fs-6"><i class = "bi bi-geo-alt-fill"></i><?php echo $fiche['adresse']?></p>
            </div>
            <div class="col-4 ms-auto">
                <p class = " fw-bold fs-4 d-flex justify-content-end text-danger"><i class = "bi bi-currency-dollar"></i><?php echo $fiche['prix']?></p>
                <p class = "d-flex justify-content-end"><i class = "bi bi-currency-dollar"></i>1,200/sq ft</p>
            </div>
        </div>
        <div class="row gallery bg-light mt-4 shadow">
            <h2 class = "fs-5 p-2">Gallery</h2>
                <hr class = "custom col-2"></hr>
            <img src="../assets/images/villa.png" height = "500" alt="">
        </div>
</div>
