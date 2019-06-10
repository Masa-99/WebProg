<?php
include_once ("mysql.php");

//Getting value of "search" variable from "script.js".
if (isset($_GET['search'])) {
    //Search value assigning to $Name variable.
       $Name = $_GET['search'];
    //Search query.
       $sql = "SELECT ArtikelName FROM Artikel WHERE ArtikelName LIKE ? LIMIT 5";
       $statement = $pdo -> prepare($sql);
       $statement -> execute(array('%' . $_GET['search'] . '%'));

       $result = $statement->fetchAll(PDO::FETCH_ASSOC);
       $JSON = json_encode($result);

       echo $JSON;
}
 ?>