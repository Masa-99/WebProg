<?php  include_once ("mysql.php");?>
<!doctype html>
<html lang="en">
<link href="CSS/ToyModelsProject.css" rel="stylesheet">

<?php
session_start();

if(empty($_SESSION['cart'])) {	
$_SESSION['cart'] = array();
}
 
array_push($_SESSION['cart'],strval($_GET['id'])); //Add IDs to array
?>
<section class="flexitem" align="center">
    <p>Produkt wurde in den Warenkorb gelegt.</p>
    <button><a href="ToyModelsProject-Warenkorb.php">Weiter zum Warenkorb</a></button> <br>
    <button><a href="ToyModelsProject-Home.php">Weiter shoppen</a></button>
</section>