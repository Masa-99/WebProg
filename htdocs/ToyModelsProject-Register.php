<?php  
session_start();
include_once ("mysql.php");?>
<!doctype html>
<html lang="en">

<script src="JavaScript/validation.js"></script>

<head>
  <title>Registeren</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="CSS/TMP-Register.css" rel="stylesheet">
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
    <!-- Registrieren Form-->
    <section id="registCustomer" class="registCustomer">

    <?php
    if(isset($_GET['regist'])) {
      $error = false;
      $ID_Available = false;

     
      // vergebe zufällig id zwischen 100 und 999, die noch zu haben ist
      while(!$ID_Available ) 
      {
        $min = 100;
        $max = 999;
        $KundenID = mt_rand($min, $max);

        //Überprüfe, dass die KundenID noch nicht registriert wurde
        if(!$error) { 
          $statement = $pdo->prepare("SELECT * FROM kunden WHERE KundenNr = :KundenNr ");
          $result = $statement->execute(array('KundenNr' => $KundenID ));
          $user = $statement->fetch();
          //Diese KundenID ist noch nicht vergeben
          if($user == false) { 
            $ID_Available = true;
          }
        }
      }
      
      $Name = $_POST['name'];
      $Surname = $_POST['surname'];
      $Company = $_POST['company'];
      $Street = $_POST['street'];
      $Location = $_POST['location'];
      $PLZ = $_POST['plz'];
      $Country = $_POST['country'];
      $Tel = $_POST['tele'];

      //Keine Fehler, wir können den Nutzer registrieren
        if(!$error) {    
        
        $statement = $pdo->prepare("INSERT INTO kunden (KundenNr,Firma,Nachname,Vorname,Telefon,Strasse,Ort,PLZ,Land) VALUES (:KundenNr, :Firma, :Nachname, :Vorname, :Telefon, :Strasse, :Ort, :PLZ, :Land)");
        $result = $statement->execute(array('KundenNr' => $KundenID ,'Firma' => $Company,'Nachname' => $Name,'Vorname' => $Surname,'Telefon' => $Surname,'Strasse' => $Street,'Ort' => $Location,'PLZ' => $PLZ,'Land' => $Country));
        
        // echo $result ? 'true' : 'false' . "<br/>";

        if($result) {        
            echo 'Du wurdest erfolgreich registriert. <a href="ToyModelsProject-Login.php">Zum Login</a>';
            echo 'Deine KundenID ist ' . $KundenID;
            $showFormular = false;
        } else {
            echo 'Beim Abspeichern ist leider ein Fehler aufgetreten<br>';
        }
    }
    }
    ?>

      <form action="?regist=1" name="Registrieren" method = "post" onsubmit="return validateFormRegist()">
        <h1>Registrieren</h1>
        <p><label><b>Geschlecht:</b> </label>
          <select name="Geschlecht" class="select_sex">
            <option value="w">Weiblich</option>
            <option value="m">Männlich</option>
            <option value="r">Roboter</option>
            <option value="n">Normal</option>
          </select>
        </p>
        <p><label for="name"><b>Name: </b><input type="text" placeholder="Nachname eingeben" name="name" maxlength="50"
              ></label></p>
        <p><label for="surname"><b>Vorname: </b><input type="text" placeholder="Vorname eingeben" name="surname" maxlength="50"
              ></label></p>
        <p><label for="birthday"><b>Geburtstag: </b><input type="date" placeholder="Geburtstag eingeben(optinal) "
              ></label></p>
        <p><label for="Firma"><b>Firma: </b><input type="text" placeholder="Firma eingeben " name="company" maxlength="80"
              ></label></p>
        <p><label for="Strasse"><b>Strasse: </b><input type="text" placeholder="Strasse eingeben " name="street" maxlength="80"
              ></label></p>
        <p><label for="Ort"><b>Ort: </b><input type="text" placeholder="Ort eingeben " name="location" maxlength="80"
              ></label></p>
        <p><label for="PLZ"><b>PLZ: </b><input type="text" placeholder="PLZ eingeben " name="plz" maxlength="10"
              ></label></p>
        <p><label for="Land"><b>Land: </b><input type="text" placeholder="Land eingeben " name="country" maxlength="50"
              ></label></p>
        <p><label for="tele"><b>TelefonNr: </b><input type="tel" placeholder="Telefonnummer eingeben " name="tele" maxlength="15"
              ></label></p>
        <label class="container" id="agb">AGB: Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
          eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
          justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit
          amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
          labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
          rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor
          sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
          aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
          gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
          Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu
          feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril
          delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
          sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
          Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
          commodo consequat. Duis autem
          <input type="checkbox" checked="checked" required>
          <span class="checkmark"></span>
        </label>

        <label class="container">Newsletter: Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
          eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
          justo duo dolores et ea rebum. Stet
          Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
          commodo consequat. Duis autem
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
        <button type="submit" value="Submit">Registrieren</button>
      </form>
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