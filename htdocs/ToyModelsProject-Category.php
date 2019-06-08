<?php  include_once ("mysql.php");?>
<!doctype html>
<html lang="en">

<head>
	<title>Kategorien</title>
	<meta charset="UTF-8" />
	<link href="CSS/ToyModelsProject.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="padding-bottom:80px;">
	<main>
		<header>
			<section align="center">
				<!--Logo-->
				<a href="ToyModelsProject-Home.html">
					<img class="logo-img" src="Img/logo.png" alt="Logo" height="80" width="80" />
				</a>
			</section>
			<!--Login Form-->
			<section id="loginCustomer">
				<label><b align="center">Login:</b>
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
		<!--Kategorie Auswahl-->
		<section align="center">
			<h2>Kategorie Auswahl</h2>
			<select>
				<option value="volvo">Automobile</option>
				<option value="saab">Eisenbahnen</option>
				<option value="opel">Schiffe</option>
				<option value="audi">Flugzeuge</option>
			</select>
		</section>
		<section class="flexbox" align="center">
			<!--Articles-->
			<article class="flexitem">
				<img id="article-picture" src="Img/car1.jpg" alt="ModelImg" height="200" width="350" />
				<p>
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
					ut
					labore et dolore magna aliquyam erat, sed diam voluptua.
					At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
					takimata
					sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit
					amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
					magna
					aliquyam erat, sed diam voluptua. At vero eos et accusam et
					justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
					ipsum
					dolor
					sit amet.
				</p>
				<label><b>Preis:</b> 45&euro;</label>
				<input type="number" name="quantity" min="1" max="20" placeholder="Anzahl">
				<button type="submit">In den Warenkorb</button>
			</article>
			<article class="flexitem">
				<img id="article-picture" src="Img/car2.jpg" alt="ModelImg" height="200" width="350" />
				<p>
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
					ut
					labore et dolore magna aliquyam erat, sed diam voluptua.
					At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
					takimata
					sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit
					amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
					magna
					aliquyam erat, sed diam voluptua. At vero eos et accusam et
					justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
					ipsum
					dolor
					sit amet.
				</p>
				<label><b>Preis:</b> 15&euro;</label>
				<input type="number" name="quantity" min="1" max="20" placeholder="Anzahl">
				<button type="submit">In den Warenkorb</button>
			</article>
			<article class="flexitem">
				<img id="article-picture" src="Img/car3.jpg" alt="ModelImg" height="200" width="350" />
				<p>
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
					ut
					labore et dolore magna aliquyam erat, sed diam voluptua.
					At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
					takimata
					sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit
					amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
					magna
					aliquyam erat, sed diam voluptua. At vero eos et accusam et
					justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
					ipsum
					dolor
					sit amet.
				</p>
				<label><b>Preis:</b> 12&euro;</label>
				<input type="number" name="quantity" min="1" max="20" placeholder="Anzahl">
				<button type="submit">In den Warenkorb</button>
			</article>
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