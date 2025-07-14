<?php
    function inscription($bdd, $nom, $date_naissance, $email, $ville, $mdp, $image_membre) {
        $sql = "INSERT INTO Exam_Membres (nom, date_naissance, email, ville, mdp, image_membre) VALUES ('%s','%s' , '%s', '%s', '%s', '%s')";
        $sql = sprintf($sql , $nom, $date_naissance, $email, $ville, $mdp, $image_membre);
        $result = mysqli_query($bdd, $sql);
        return $result;
    }

    function liste_objet($bdd, $id_membres){
        $sql = "SELECT * FROM Exam_Objet JOIN Exam_Membres ON Exam_Objet.id_membre = Exam_Membres.id_membre WHERE Exam_Membres.id_membre = '$id_membres'";
        echo $sql;
        $result = mysqli_query($bdd, $sql);
        return $result;
    }