<?php

include_once("../includes/connect.php");

if (isset($_POST['Volgende'])) {
    $sql = "INSERT INTO situatie (situatie_beschrijving) VALUES (:situatie_beschrijving)";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":situatie_beschrijving", $_POST['situatie_beschrijving']);
    $stmt->execute();

    header("Location: http://localhost/ResQ/verzonden.php");
    exit();
}