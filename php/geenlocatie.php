<?php

include_once("../includes/connect.php");

if (isset($_POST['submit'])) {
    $sql = "INSERT INTO geenverbindinglocatie (geenverbindinglocatieid, locatie, foto) VALUES (:situatie_beschrijving, :locatie, :foto)";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":situatie_beschrijving", $_POST['situatie_beschrijving']);
    $stmt->bindParam(":locatie", $_POST['locatie']);
    $stmt->bindParam(":foto", $_POST['foto']);
    $stmt->execute();

    header("Location: http://localhost/ResQ/beschrijfsituatie.php");
    exit();
}