<?php
if (isset($_GET["nom"]) &&
    isset($_GET["cognoms"]) &&
    isset($_GET["email"]) &&
    isset($_GET["missatge"])){

        $nom = $_GET["nom"];
        $cognom = $_GET["cognoms"];
        $email = $_GET["email"];
        $missatge = $_GET["missatge"];

        echo "Missatge rebut, ".$nom.". Gracies per contacte. Et respondrem a ".$email;
    } else {
        echo "Fallo";
    }
?>