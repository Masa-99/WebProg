<?php  include_once ("mysql.php");?>

<!doctype html>
<html lang="en">
<script src="basket.js"></script>
<head>
	<title>Warenkorb</title>
	<!--setting charset and viewport-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="CSS/TMP-Shoppingcart.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<header class="header">
	<!--logo-->
	<a href="toymodelsproject-home.php"><img class="logo-img" src="img/logo.png" alt="logo" height="60"
			width="80" /></a>
</header>

<body>
	<main class="main_shoppingcart">
		<!--warenkorbanzeige-->
		<section class="col-3 basket" id="basket">
			<h1>Warenkorb:</h1>
			<p class="shoppingcartdescripton">
				lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
				labore et
				dolore magna aliquyam erat, sed diam voluptua.
				at vero eos et accusam et justo duo dolores et ea rebum. stet clita kasd gubergren, no sea takimata
				sanctus est
				lorem ipsum dolor sit amet.lorem ipsum dolor sit
				amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
				aliquyam
				erat, sed diam voluptua. at vero eos et accusam et
				justo duo dolores et ea rebum. stet clita kasd gubergren, no sea takimata sanctus est lorem ipsum dolor
				sit
				amet.
			</p>
			<p class="shoppingcartdescripton">
				lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
				labore et
				dolore magna aliquyam erat, sed diam voluptua.
			</p>
			<table id="customer_products">
				<tr>
					<th class="t_img">Vorschau</th>
					<th class="t_desc">Name</th>
					<th class="t_price">Preis</th>
					<th class="t_id">ArtikelNr. </th>
					<th class="t_id">Anzahl </th>
					<th class="t_id">Gesamt </th>
				</tr>
				
<?php
session_start();
$Gesamtpreis = 0;
$Preis = 0;
if(isset($_SESSION['cart'])) {
	$whereIn = "'".implode("','", $_SESSION['cart'])."'"; //Verbindet Array-Elemente zu einem String
	
	$sql = 
    "SELECT Artikel.ArtikelName as an, Artikel.Listenpreis as al, Artikel.ArtikelNr as anr
	FROM Artikel
	WHERE ArtikelNr IN ($whereIn);";
	
	
	foreach($pdo->query($sql) as $row){
		echo '<tr id="'.$row["anr"].'" >' . 
			'<td>' . '<img src="img/car1.jpg" alt="modelimg" height="200" width="350" />' . '</td>' . 
			'<td>' . '<label class="name">' . $row["an"] . '</label>' . '</td>' . 
			'<td>' . '<input type="number" class="price" readonly value=' . $row['al'] . ' class="readonly"/>' . '</td>' . 
			'<td>' . '<label class="nummer">' . $row["anr"] . '</label>' . '</td>' .
			'<td>' . '<input type="number" class="quantity" value="1" min="0" onchange="calc(\''.$row["anr"].'\')" />' . '</td>' . 
			'<td>' . '<input type="number" class="total" readonly value=' . $row['al'] . ' class="readonly"/>' . '</td>' . 
	 	'<tr>';

	 $Preis = $row['al'];
	 $Gesamtpreis = $Gesamtpreis + $Preis;
}
}
//Expire the session if user is inactive for 30
			//minutes or more.
			$expireAfter = 5;
 
			//Check to see if our "last action" session
			//variable has been set.
			if(isset($_SESSION['last_action'])){
    
			//Figure out how many seconds have passed
			//since the user was last active.
			$secondsInactive = time() - $_SESSION['last_action'];
    
			//Convert our minutes into seconds.
			$expireAfterSeconds = $expireAfter * 60;
    
			//Check to see if they have been inactive for too long.
			if($secondsInactive >= $expireAfterSeconds){
			//User has been inactive for too long.
			//Kill their session.
			unset($_SESSION["loggedin"]);
			echo "You have been logged out";
			}
    
			}
 
			//Assign the current timestamp as the user's
			//latest activity
			$_SESSION['last_action'] = time();
		echo '<tr>' . 
			'<td>' . '</td>' . 
			'<td>' . '</td>' . 
			'<td>' . '</td>' . 
			'<td>' . '</td>' .
			'<td>' . '<p > Gesamtpreis: </p>' .  '</td>' . 
			'<td>' . '<input type="text" id="total" readonly value=' . $Gesamtpreis . ' class="readonly"/>' . '</td>' . 
	 '<tr>';

?>

			</table>
			
			<?php 
			if(isset($_SESSION['loggedin'])){
			echo "<p align = center>You are logged in</p>";
			echo "<form action='Toymodelsproject-B.php'>
				<button class='buy_button' type='submit' value='submit' onclick='printfunction()' >Kaufen</button>
				</form>";
			}
			else{
			echo "<p align = center>You are not logged in. Please log in <a href='ToyModelsProject-Login.php'>here</a> to proceed order</p>";
			}	
			
			?>
			<button class="print_button" onclick="printfunction()">Bestellung drucken</button>

			<section id="ad_products" class="products">
				<img src="img/car3.jpg" alt="modelimg" height="150" width="250" />
				<p>
					lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
					labore et
					dolore magna aliquyam erat, sed diam voluptua.
					at vero eos et accusam et justo duo dolores et ea rebum. stet clita kasd gubergren, no sea takimata
					sanctus
					est lorem ipsum dolor sit amet.
				</p>
				<img src="img/car3.jpg" alt="modelimg" height="150" width="250" />
				<p>
					lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
					labore et
					dolore magna aliquyam erat, sed diam voluptua.
					at vero eos et accusam et justo duo dolores et ea rebum. stet clita kasd gubergren, no sea takimata
					sanctus
					est lorem ipsum dolor sit amet.
				</p>
				<img src="img/car3.jpg" alt="modelimg" height="150" width="250" />
				<p>
					lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
					labore et
					dolore magna aliquyam erat, sed diam voluptua.

				</p>
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
				<a href="ToyModelsProject-Impressum.html">Impressum</a>
				•
				<a href="ToyModelsProject-About.html">About</a>
			</p>
			<p>ToyModelsProject &copy; 2019</p>
		</section>
	</footer>

</body>

</html>