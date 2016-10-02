<?php
$server = 'localhost';
$username = 'pkazakova_com';
$password = '960205';
$database = 'pkazakova_com';

//connection to the database, if not - catch the error and execute 'connection failed'
//PDO secure way to connect
try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}

