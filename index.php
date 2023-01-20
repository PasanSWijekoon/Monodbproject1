<?php
require_once __DIR__ . '/vendor/autoload.php';

$connection = new MongoDB\Client( 'mongodb+srv://Optimusprime:FS5454$$$#e44dd@cluster0.b4lnu9g.mongodb.net/?retryWrites=true&w=majority');


$connection->db1->student->insertOne(

 [
    'username' => 'pasan',
    'email' => 'pasan@gmail.com',
    'name' => 'pasan',
 ]
 
 );
?>