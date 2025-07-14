<?php
    function inscription($bdd, $nom, $date_naissance, $email, $ville, $mdp, $image_membre) {
        $sql = "INSERT INTO Exam_Membres (nom, date_naissance, email, ville, mdp, image_membre) VALUES ('%s','%s' , '%s', '%s', '%s', '%s')";
        $sql = sprintf($sql , $nom, $date_naissance, $email, $ville, $mdp, $image_membre);
        $result = mysqli_query($bdd, $sql);
        return $result;
    }