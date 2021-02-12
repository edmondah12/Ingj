<?php
//lidhja ne datazen dbprojekti dhe mesazhi nese deshton lidhja.
$servername= "localhost";
$dBUsername= "root";
$dBPassword= "";
$dBName= "foodworld";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn){
    die("Connection Failed:".mysqli_connect_error());
}