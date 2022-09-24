<?php
include 'connect.php';

try{
    $id = $_POST['patientid'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];

    $sql2 = "UPDATE patients SET patient_name = '$name', patient_age = '$age',
    patient_address = '$address' WHERE patient_id = $id";

    $stmt2 = $conn->prepare($sql2);
    $stmt2->execute();
    echo "Record Updated Successfully";
} catch (PDOException $e) {
    die("ERROR: Unable to execute $sql2. " . $e->getMessage());
}



header("Location: index.php");
exit();