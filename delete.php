<?php
include 'connection.php';

$ptid = $_GET['patientid'];
try{
    //sql to delete record
    $sql = "DELETE FROM patients WHERE patientid = $ptid";
    $stmt = $conn->prepare($sql);

    $stmt->execute();
} catch (PDOException $e) {
    die("ERROR: $sql. " . $e->getMessage());
}

header("Location: index.php");
exit();