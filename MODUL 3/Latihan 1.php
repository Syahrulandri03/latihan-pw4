<!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan 3a</title>
 	<style>
 		.ganti-style {
 			font-size: 28px;
 			font-family: arial;
 			color: #1A0547;
 			font-style: italic;
 			border: 2px;
 		}
 </style>
 </head>
 <body>	
					<?php 
					 		$tulisan = "Hello World! Here I Come!";
						    $kelas = "ganti-style";
								function ganti_style($tulis, $kls) {
									echo "<div class= $kls>$tulis</div>";
						}
									echo ganti_style($tulisan ,$kelas);
					 ?>

 </body>
 </html>