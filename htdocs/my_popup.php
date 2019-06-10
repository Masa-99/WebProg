<?php  include_once ("mysql.php");
	session_start();
?>
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
			<table>
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