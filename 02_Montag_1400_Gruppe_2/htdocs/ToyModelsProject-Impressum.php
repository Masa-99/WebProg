<?php  include_once ("mysql.php");

			session_start();
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
?>
<!doctype html>
<html lang="en">

<head>
	<title>Impressum</title>
	<meta charset="UTF-8" />
	<link href="CSS/ToyModelsProject.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<header>
		<!--Logo-->
		<section class="logo" id="logo" align="center">
			<a href="ToyModelsProject-Home.html">
				<img class="logo-img" src="Img/logo.png" alt="Logo" height="80" width="80" />
			</a>
			<h1>ToyModels Online-Shop</h1>
		</section>
	</header>
	<!-- Creating Navigationbar-->
	<nav>
		<ul id="navigation">
			<h1>Navigation</h1>
			<!--SearchBar-->
			<li>
				<form action="ToyModelsProject-SearchResults.html" class="Searchbar">
					<input type="text" placeholder="...">
					<button type="submit" value="Submit">
						<Search>&#128269;
					</button>
				</form>
			</li>
			<li><a href="ToyModelsProject-Home.html">Home</a>
			</li>
			<li><a href="ToyModelsProject-Category.html">Kategorie</a>
				<ul id="submenu">
					<li><a tabindex="0" href="ToyModelsProject-Automobile.html">Automobile</a></li>
					<li><a tabindex="0" href="ToyModelsProject-Flugzeuge.html">Flugzeuge</a></li>
					<li><a tabindex="0" href="ToyModelsProject-Eisenbahnen.html">Eisenbahnen</a></li>
					<li><a tabindex="0" href="ToyModelsProject-Schiffe.html">Schiffe</a></li>
				</ul>
			</li>
			<li><a href="ToyModelsProject-Warenkorb.html">Warenkorb</a>
			</li>
			<li><a href="ToyModelsProject-Login.html">Login</a>
			</li>
		</ul>
	</nav>
	<main>

		<section id="impressum" align="center">
			<h1>Impressum</h1>
			<p>Technische Hochschule Nürnberg</p>
			<p>Keßlerplatz 12</p>
			<p>90489 Nürnberg</p>
			<p>Tel. 0911-5880-0</p>
			<p>Fax 0911-5880-8309</p>
			<!--Links for Impressum-->
			<p><a href="info@th-nuernberg.de">E-Mail: info@th-nuernberg.de</a></p>
			<P><a href="https://www.th-nuernberg.de/">Internet: www.th-nuernberg.de</a></p>
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
</body>

</html>