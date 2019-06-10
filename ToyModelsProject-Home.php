<?php  include_once ("mysql.php");
	session_start();
?>
<!doctype html>
<html lang="en">
	
	<head>
		<title>Home</title>
		<meta charset="UTF-8" />
		<link href="CSS/ToyModelsProject.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="index.js"></script>
		<script src="Javascript/popup.js" defer></script>
	</head>
	
	<body>
		<template id="my-popup">
			<li id="cart-button">
				<a href="ToyModelsProject-Warenkorb.php">Warenkorb <img align="right"src="Img/shoppingcart.jpg" width="20" height="20"></img>
				</a>
				<!--Warenkorb Hover-->
				<section class="cart-dropdown">
					<style>
						.cart-dropdown {
						display: none;
						position: absolute;
						background-color: #f9f9f9;
						min-width: 160px;
						box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
						padding: 12px 16px;
						z-index: 3;
						top: 300px;
						left: 100%;
						}
						#cart-button  a, .submenu input {
						text-align: left;
						padding: 10px 10px;
						color: black;
						text-decoration: none;
						display: block;
						list-style-type: none;
						border: 0;
						}
						
						#cart-button  a:hover, a:focus .cart-dropdown {
						color: #ffffff;
						background-color: #7c7e7cd0;
						text-decoration: underline;    
						position: center;
						display:block;
						}
						
						#cart-button:hover .cart-dropdown {
						display: block;
						}
						
						#cartlabelid label{
						padding-right:50px;
						padding-left:50px;
						}
						
						tr:not(#carttr), .flexitem {
						width: 300px;
						height: auto;
						margin-left: 20%;
						font-size: 12px;
						margin-top: 10px;
						box-sizing: border-box;
						float: left;
						cursor: pointer;
						padding: 10px;
						text-align: center;
						content: center;
						}
						
					</style>
					<table >
						<?php
							if(isset($_SESSION['cart'])) {
								$whereIn = "'".implode("','", $_SESSION['cart'])."'"; //Verbindet Array-Elemente zu einem String
								
								$sql = 
								"SELECT Artikel.ArtikelName as an, Artikel.Listenpreis as al, Artikel.ArtikelNr as anr
								FROM Artikel
								WHERE ArtikelNr IN ($whereIn);";
								
								
								foreach($pdo->query($sql) as $row){
									echo '<tr id="carttr" >' . 
									'<td>' . '<label for="cartlabel">' . $row["an"] . '</label>' . '</td>' . 
									'<td id="cartlabelid">' . '<label>' . $row["anr"] . '</label>' . '</td>' .
									'<td>' . '<label for="cartlabel">' . $row["al"] . '€ </label>' . '</td>' . 	
									'<tr>';
								}
							}
						?>
					</table>
				</section>
			</li>
		</template>
		<main>
			<header>
				<!--Logo-->
				<section class="logo" id="logo" align="center">
					<a href="ToyModelsProject-Home.php">
						<img class="logo-img" src="Img/logo.png" alt="Logo" height="80" width="80" />
					</a>
					<h1>ToyModels Online-Shop</h1>
				</section>
				<!--Login Form-->
				<section id="loginCustomer">
					<label><b>Login:</b>
					</label>
					<br>
					<label for="kID"><b>KundenID: </b>
					</label>
					<input type="password" placeholder="KundenID eingeben" name="kID" required>
					<br>
					<button type="submit">Login</button>
					<label>
					<input type="checkbox" checked="checked" name="remember">Remember me</label>
				</section>
			</header>
			<!-- Creating Navigationbar-->
			<nav>
				<ul>
					<h1>Navigation</h1>
					<!--SearchBar-->
					<li>
						<form method = "post" class="Searchbar">
							<input type="text" name ="search" placeholder="...">
							<button type="submit" value="Submit">
								<Search>&#128269;
								</button>
							</form>
						</li>
						<li id="nav-link" ><a  href="ToyModelsProject-Home.php">Home</a>
						</li>
						<li id="nav-link"><a id="nav-link" href="ToyModelsProject-Home.php">Kategorieauswahl</a>
							<ul id="submenu">
								<form align="center" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
									<select name="formFahrzeug">
										<option>Alle</option>
										<optgroup label="Autos">
											<option value="Classic Cars">Klassisch</option>
											<option value="Vintage Cars">Vintage</option>
											<option value="Street Cars">Straße</option>
										</optgroup>
										<option value="Planes">Flugzeuge</option>
										<option value="Ships">Schiffe</option>
										<option value="Trains">Eisenbahnen</option>
										<option value="Motorcycles">Motorräder</option> 
										<option value="Trucks and Buses">Trucks und Busse</option>
									</select>
									<input type="submit" name="formSubmit" value="Auswählen">
									<input type="submit" name="formReset" value="Zurücksetzen">
								</form>
							</ul>
						</li>
						<my-popup>
						</my-popup>
						
						<li id="nav-link" ><a href="ToyModelsProject-Login.php">Login</a>
						</li>
					</ul>
				</nav>
				
				<!--Slider-->
				<section class="slider-holder" id="sideshow" align="center">
					<span id="slider-image-1"></span>
					<span id="slider-image-2"></span>
					<span id="slider-image-3"></span>
					<section class="image-holder">
						<a href="ToyModelsProject-Category.php" />
						<img src="Img/car2.jpg" class="slider-image" />
					</a>
					<a href="ToyModelsProject-Category.php" />
					<img src="Img/car1.jpg" class="slider-image" />
				</a>
                <a href="ToyModelsProject-Category.php" />
                <img src="Img/car3.jpg" class="slider-image" />
			</a>
		</section>
		<section class="button-holder">
			<a href="#slider-image-1" class="slider-change"></a>
			<a href="#slider-image-2" class="slider-change"></a>
			<a href="#slider-image-3" class="slider-change"></a>
		</section>
	</section>
	
	<!--Articles-->
	
	<section class="flex-container">
        <table border ="0" >
			<?php
				if(isset($_POST['formSubmit'])){
					$aFahrzeug = $_POST['formFahrzeug'];
					if(isset($aFahrzeug) && !isset($_POST['formReset'])) {
						$sql = "SELECT artikel.artikelname as an,
						artikel.artikelnr as anr,
						artikel.beschreibung as ab,
						artikel.listenpreis as al,
						warengruppen.gruppenname as wg
						from artikel inner join warengruppen on artikel.gruppennr = warengruppen.gruppennr
						where warengruppen.gruppenname = '$aFahrzeug'";  
					}     
				}
				//Search
				else if(isset($_POST['search'])) {
					$searchq = $_POST['search'];
					$searchq = preg_replace("#[^0-9a-z]#i","",$searchq); //filter symbols
					
					$sql = "SELECT artikel.artikelname as an,
					artikel.artikelNr as anr,
					artikel.beschreibung as ab,
					artikel.listenpreis as al,
					warengruppen.gruppenname as wg
					from artikel inner join warengruppen on artikel.gruppennr =
					warengruppen.gruppennr WHERE ArtikelName LIKE '%$searchq%'";
					$res = $pdo -> query($sql);
					
					//check if results found
					if($res -> rowCount() == 0){
						echo "<p align = center>Keine Artikel gefunden!</p>";
					}
				}
				else {
					$sql = "SELECT artikel.artikelname as an,
					artikel.artikelNr as anr,
					artikel.beschreibung as ab,
					artikel.listenpreis as al,
					warengruppen.gruppenname as wg
					from artikel inner join warengruppen on artikel.gruppennr = warengruppen.gruppennr";
				}
				
				foreach($pdo->query($sql) as $row){
					echo 
					'<tr id=article> ' .
					'<td>' .
					'<img src = "Img/car1.jpg"/>' . '<br>' .
					'<label id="artikelName">' . $row["an"] . '</label>' . '<br>' .
					'<label id="beschreibung">' . $row["ab"] . '</label>' . '<br>' .
					'<label>' . $row["al"] . "&euro;" . '</label>' . '<br>' .
					'<label>' . $row["wg"] . '</label>' . '<br>' .
					'<a href="ToyModelsProject-Add-to-cart.php?id=' . $row["anr"] . '">
					<button>In den Warenkorb</button></a>' . 
					'</td>' .
					'</tr>';
				}
				if(isset($_SESSION['loggedin'])){
					echo "<p align = center>You are logged in</p>";
				}
				else{
					echo "<p align = center>You are not logged in</p>";
				}	
				
				//Expire the session if user is inactive for 5
				//minutes or more.
				$expireAfter = 5;
				
				if(isset($_SESSION['last_action'])){
					
					//Figure out how many seconds have passed
					//since the user was last active.
					$secondsInactive = time() - $_SESSION['last_action'];
					
					$expireAfterSeconds = $expireAfter * 60;
					
					//Check to see if they have been inactive for too long.
					if($secondsInactive >= $expireAfterSeconds){
						//User has been inactive for too long.
						//Kill their session.
						unset($_SESSION["loggedin"]);
						echo "<p align = center>You have been logged out</p>";
					}
					
				}
				
				//Assign the current timestamp as the user's
				//latest activity
				$_SESSION['last_action'] = time();
			?>
		</table>
	</section>
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