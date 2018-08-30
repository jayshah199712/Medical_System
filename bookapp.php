<?php
require './vendor/autoload.php';
session_start();
//making a connection
$client = new MongoDB\Client("mongodb://localhost:27017");

//selecting a database
// $db = $m->medical;

//select a collection
$collection = $client->medical->appointment;

$fullname=$_POST['pname'];

$Email=$_SESSION['email'];

$Gender=$_POST['pgender'];

$Age=$_POST['p_age'];

$symptoms=$_POST['symptoms'];

$date=(string)$_POST['appdate'];

$time=(string)$POST['apptime'];

$doctor=$POST['Doctors'];


if(isset($_SESSION['email'])){
    $newcust = $collection->insertOne([
        'PatientName' => $fullname,
        'Email' => $Email,
        'Gender' => $Gender,
        'Age' => $Age,
        'Symptoms' => $symptoms,
        'Date' => $date,
        'Time' => $time,
        'Doctor' => $doctor
    ]);
    header("location: doctor.php");   
}
else{
    header("location:./login/index1.php");
}