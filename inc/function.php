<?php
    function inscription($bdd, $nom, $date_naissance, $email, $ville, $mdp, $image_membre) {
        $sql = "INSERT INTO Exam_Membres (nom, date_naissance, email, ville, mdp, image_membre) VALUES ('%s','%s' , '%s', '%s', '%s', '%s')";
        $sql = sprintf($sql , $nom, $date_naissance, $email, $ville, $mdp, $image_membre);
        $result = mysqli_query($bdd, $sql);
        return $result;
    }

    function liste_objets_et_emprunts($bdd, $id_membre) {
    $sql = "SELECT o.nom_objet, o.id_objet, e.date_retour
            FROM Exam_Objet o
            LEFT JOIN Exam_Emprunt e ON o.id_objet = e.id_objet
            WHERE o.id_membre = '$id_membre'";
    // echo $sql;
    $result = mysqli_query($bdd, $sql);
    $liste = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $liste[] = $row;
    }
    return $liste;
}