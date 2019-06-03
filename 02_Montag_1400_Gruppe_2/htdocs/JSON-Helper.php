<?php
 include_once ("mysql.php");
                    $statement = $pdo->prepare("SELECT * FROM artikel;");
                    $statement -> execute();
                    $json_array = array();
                    $json_array = $statement->fetchAll();
                    echo json_encode($json_array);
                    //echo "<pre>";
                    //print_r($json_array);
                    //echo "</pre>";
?>