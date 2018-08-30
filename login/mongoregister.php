<?php
require '../vendor/autoload.php';
//making a connection
$client = new MongoDB\Client("mongodb://localhost:27017");

//selecting a database
// $db = $m->medical;

//select a collection
$collection = $client->medical->customer;
//$collection = $db->customer;

$FirstName=$_POST['firstname'];
$LastName=$_POST['lastname'];
$Email=$_POST['email'];
$Password=$_POST['password'];
$Age=$_POST['age'];
$Gender=$_POST['gender'];
$Contact=$_POST['contact'];


// inserting data from the register form

$newcust = $collection->insertOne([
    'firstname' => $FirstName,
    'lastname' => $LastName,
    'email' => $Email,
    'password' => $Password,
    'age' => $Age,
    'gender' => $Gender,
    'contact' => $Contact
]);

header("location: index1.php");

?>