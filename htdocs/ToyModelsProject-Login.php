<?php 
session_start();
include_once ("mysql.php");
?>



<!doctype html>
<html lang="en">
<script src="JavaScript/validation.js"></script>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="CSS/TMP-Login.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
	<header>
		<section class="logo" id="logo" align="center">
			<a href="ToyModelsProject-Home.php">
				<img class="logo-img" src="Img/logo.png" alt="Logo" height="120" width="120" />
			</a>
		</section>
	</header>
	<main>
		<!--Login Form-->
		<section id="registCustomer" class="loginCustomer">
			<h1>Login</h1>

			<?php 
			if(isset($_GET['login'])) {
				if(empty($_SESSION['loggedin'])) {	
				$_SESSION['loggedin'] = $_POST['kID'];
				}
			$KundenID = $_POST['kID'];
			
			$statement = $pdo->prepare("select * from kunden where KundenNr = :KundenNr "); 
			$result = $statement->execute(array('KundenNr' => $KundenID ));
			$user = $statement->fetch();													
			if($user !== false) {
				die('<p>Login erfolgreich. Weiter zu <a href="ToyModelsProject-Home.php">internen Bereich</a></p>');
			}
			else {
				$errorMessage = "<p>KundenID ist ungültig</p>";
			}

			if(isset($errorMessage)) {
				echo $errorMessage;
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

			}


			?>

			<form action="?login=1" name="login" method = "post" onsubmit="return validateFormLogin()">
			<p><label><b>KundenID: </b>
						<input maxlength="3" type="text" placeholder="KundenID eingeben" name="kID" ></label>
				</p>
				<input type="submit" value="Login">
			</form>

			<input type="checkbox" checked="checked" name="remember"> Remember me
			<br>
			<br>
			<br>
			<label>Noch keinen Account? <a href="ToyModelsProject-Register.php"><button type="submit">Hier</button></a>
				registrieren</label>
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
			</p>
			<p>ToyModelsProject &copy; 2019</p>
		</section>
</body>

</html>