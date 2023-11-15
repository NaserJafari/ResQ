<?php

include_once("../includes/connect.php");

if (isset($_POST['submit'])) {
    $sql = "INSERT INTO welverbindinglocatie (locatie) VALUES (:locatie)";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":locatie", $_POST['locatie']);
    $stmt->execute();

    header("Location: http://localhost/ResQ/beschrijfsituatie.php");
    exit();
}