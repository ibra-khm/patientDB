<?php
include 'connection.php';

try{
    $sql= "INSERT INTO patients (patient_name, patient_age, patient_address)
    VALUES (:name, :age, :address)";
    $stmt = $conn->prepare($sql);

    $stmt->bindp(':name', $_POST['name']);
    $stmt->bindp(':age', $_POST['age']);
    $stmt->bindp(':address', $_POST['address']);

    $stmt->execute();
    header("Location: addpatient.php");
} catch (PDOException $e) {
    die("ERROR: Unable to execute $sql. " . $e->getMessage());
}

