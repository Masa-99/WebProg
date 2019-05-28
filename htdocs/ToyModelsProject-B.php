<?php  include_once ("mysql.php");
session_start();?>
<!doctype html>
<html lang="en">

<head>
    <title>Bought</title>
    <meta charset="UTF-8" />
    <link href="CSS/ToyModelsProject.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<header class="header">
	<!--logo-->
	<a href="toymodelsproject-home.php"><img class="logo-img" src="img/logo.png" alt="logo" height="60"
			width="80" /></a>
</header>
<main>
        <section>
        <h1>Einkauf abgeschlossen</h1>
		<?php
date_default_timezone_set("Europe/Berlin");

$ID_Available = false;
$error = false;
$KundenID = $_SESSION['loggedin'];
$ShippingDate = time() + (7 * 24 * 60 * 60);
$Today = time();

while(!$ID_Available ) 
{
  $min = 10000;
  $max = 10999;
  $AuftragsID = mt_rand($min, $max);

  //Überprüfe, dass die AuftragsID noch nicht genutzt wurde
  if(!$error) { 
	$statement = $pdo->prepare("SELECT * FROM auftraege WHERE AuftragsNR = :AuftragsNr ");
	$result = $statement->execute(array('AuftragsNr' => $AuftragsID ));
	$auftrag = $statement->fetch();
	//Diese AuftragsID ist noch nicht vergeben
	if($auftrag == false) { 
	  $ID_Available = true;
	}
  }
}
echo "<p align = 'center'>Bestelltermin: " . date('d-m-Y', $Today) . "</p>";
echo "<p align = 'center'>Liefertermin: " . date('d-m-Y', $ShippingDate) . "</p>";
echo "<p align = 'center'>Plantermin: " . date('d-m-Y', $ShippingDate) . "</p>";
echo "<p align='center'>KundenNr: " . $KundenID . "</p>";
echo "<p align='center'>Auftragsnummer: " . $AuftragsID . "</p>";

if(!$error) {
	$statement = $pdo->prepare("INSERT INTO auftraege(AuftragsNr,Auftragsdatum,Plantermin,KundenNr) VALUES (:AuftragsNr, :Auftragsdatum, :Plantermin, :KundenNr)");
	$result = $statement->execute(array('AuftragsNr' => $AuftragsID,'Auftragsdatum' => date('d-m-Y', $Today),'Plantermin' => date('d-m-Y', $ShippingDate), 'KundenNr' => $KundenID));
	if($result) {
		echo 'Deine Bestellung wurde erfolgreich getätigt.';
		$showFormular = false;
	} else {
		echo 'Bei der Bestellung ist leider ein Fehler aufgetreten<br>';
	}
	}
		unset($_SESSION['cart']);
		?>
        <button type="submit" align="center"><a href="ToyModelsProject-Home.php">Zurück zur Hauptseite</a> </button>
        </section>
</main>
	<footer class="footer">
		<section class="footer-right">

			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-instagram"></i></a>

		</section>
		<section class="footer-left">

			<p class="footer-links">
				<a href="ToyModelsProject-Impressum.php">Impressum</a>
				•
				<a href="ToyModelsProject-About.php">About</a>
			</p>
			<p>ToyModelsProject &copy; 2019</p>
		</section>
</body>

</html>