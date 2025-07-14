<?php

?>
<div class="container">
    <h2 class="text-center mt-5">INSCRIPTION</h2>
    <form action="traitement_login.php" method="post" class="mt-4" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type= "email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="mb-3">
            <label for="date_naissance" class="form-label">Date de Naissance</label>
            <input type="date" class="form-control" id="date_naissance" name="date_naissance" required>
        </div>
        <div class="mb-3">
            <label for="ville" class="form-label">Ville</label>
            <input type="text" class="form-control" id="ville" name="ville" required>
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Genre</label>
            <input type="texte" class="form-control" id="genre" name="genre" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3">
            <label for="image_membre" class="form-label">Image Membre</label>
            <input type="file" class="form-control" id="image_membre" name="photo" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <a href="modal.php?page=inscription">INSCRIPTION</a>
</div>