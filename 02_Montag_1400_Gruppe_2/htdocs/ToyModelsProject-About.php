<?php  include_once ("mysql.php");?>
<!doctype html>
<html lang="en">

<head>
	<title>About</title>
	<meta charset="UTF-8" />
	<link href="ToyModelsProject.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<main>
		<!-- Creating Navigationbar-->
        <nav>
            <ul>
                <h1>Navigation</h1>
                <!--SearchBar-->
                <li>
                    <form action="ToyModelsProject-SearchResults.php" class="Searchbar">
                        <input type="text" placeholder="...">
                        <button type="submit" value="Submit">
                            <Search>&#128269;
                        </button>
                    </form>
                </li>
                <li><a href="ToyModelsProject-Home.php">Home</a>
                </li>
                <li><a href="ToyModelsProject-Category.php">Kategorie</a>
                    <ul id="submenu">
                        <li><input type= "submit" value="Automobile"></input></li>
                        <li><input type= "submit" value="Flugzeuge"></input></li>
                        <li><input type= "submit" value="Eisenbahnen"></input></li>
                        <li><input type= "submit" value="Schiffe"></input></li>
                    </ul>
                </li>
                <li><a href="ToyModelsProject-Warenkorb.php">Warenkorb <img align="right"src="Img/shoppingcart.jpg" width="20" height="20"></img></a>
                </li>
                <li><a href="ToyModelsProject-Login.php">Login</a>
                </li>
            </ul>
        </nav>
		<h1 align="center">Über</h1>
		<section class="flex-container">
			<article align="center" class="flexitem">
				<h1>Geschichte</h1>
				<p>
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
					labore
					et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
					rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
					ipsum
					dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
					dolore
					magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
					Stet
					clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
					amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
					aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
					clita
					kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
					<br>
					Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum
					dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
					praesent
					luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet,
					consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
					aliquam
					erat volutpat.
					<br>
					Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
					aliquip
					ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse
					molestie
					consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio
					dignissim
					qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
					<br>
					Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim
					placerat
					facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
					euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
					nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
					<br>
					Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum
					dolore eu feugiat nulla facilisis.
				</p>
			</article>

			<article align="center" class="flexitem">
				<p>
					<h1>Team</h1>
					Herr Skibin
					<br>
					Herr Ihsan
					<br>
					Frau Sarschar
				</p>
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