<?php
include 'connection.php';

$ptid = $_REQUEST['patientid'];

$sql1 = "SELECT * FROM patients WHERE patientid=$ptid";
$stmt1 = $conn->prepare($sql1);
$stmt1->execute();
$patients = $stmt1->fetch();

