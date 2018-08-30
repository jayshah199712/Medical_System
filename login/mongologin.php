<?php
session_start();
require '../vendor/autoload.php';

$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->medical->customer;

//$FirstName=$_POST['firstname'];
//$LastName=$_POST['lastname'];
$Email=$_POST['email'];
$Password=$_POST['password'];
//$Age=$_POST['age'];
//$Gender=$_POST['gender'];
//$Contact=$_POST['contact'];

$result = $collection->find( [ 'email' => $Email ] );
$object=$result->toArray();

// var_dump($object);

// printf($object["firstname"]);
if($object!=NULL){
foreach($object as $document) {
    if($document['password']==$Password){
    $username=$document['firstname']  . " " .   $document['lastname'];
    $_SESSION['username']=$username;
    $_SESSION['email']=$Email;
    header("location:../index.php");
    //echo "Welcome" . " " . $_SESSION['username'];
    }
    else{
        printf("Wrong Password");
    }
}
}

?>
