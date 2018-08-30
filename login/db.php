<?php
/* Database connection settings */
$host = 'localhost';
$user = 'jay';
$pass = '';
$db = 'accounts';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
