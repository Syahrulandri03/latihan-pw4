<?php 

		$asean = [
			
			["Negara" => "Indonesia", 
			 "Ibukota" => "D.K.I Jakarta",
			 "No" => "+62"
			],

			["Negara" => "Singapura", 
			 "Ibukota" => "Singapura",
			 "No" => "+65"
			],

			["Negara" => "Malaysia", 
			 "Ibukota" => "Kuala Lumpur",
			 "No" => "+60"
			],

			["Negara" => "Indonesia", 
			 "Ibukota" => "D.K.I Jakarta",
			 "No" => "+62"
			],

			["Negara" => "Brunei", 
			 "Ibukota" => "Bandar Seri Begawan",
			 "No" => "+673"
			],

			["Negara" => "Thailand", 
			 "Ibukota" => "Bangkok",
			 "No" => "+66"
			],

			["Negara" => "Laos", 
			 "Ibukota" => "Vientiane",
			 "No" => "+856"
			],

			["Negara" => "Filipina", 
			 "Ibukota" => "Manila",
			 "No" => "+63"
			],

			["Negara" => "Myanmar", 
			 "Ibukota" => "Naypydaw",
			 "No" => "+95"
			],
	];
			
?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan 4</title>
</head>
<body>
	<table border="2" cellspacing="1" cellpadding="3">
				<tr>
					<th>Negara</th>
					<th>Ibukota</th>
					<th>Kode Telepon</th>
				</tr>
		<?php foreach ($asean as $asia) : ?>
				<tr>
					<td><?php echo $asia["Negara"] ?></td>
					<td><?php echo $asia["Ibukota"] ?></td>
					<td><?php echo $asia["No"] ?></td>
				</tr>
		<?php endforeach ; ?>
</table>
</body>
</html>