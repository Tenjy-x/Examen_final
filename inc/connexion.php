<?php
    ini_set('display_errors', 1);
    if($bdd = mysqli_connect('localhost' , 'root' , '' , 'Exam_final')){
    }
    else{
        echo 'Erreur';
    }
?>