<?php 
	$aseanawal = [

		"Indonesia" => "D.K.I Jakarta", "Singapura" => "Singapura", "Malaysia" => "Kuala Lumpur", "Brunei" => "Bandar Seri Begawan", "Thailand" => "Bangkok", "Laos" => "Vientiane", "Filipina" => "Manila", "Myanmar" => "Naypydaw"
	];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan 3</title>
</head>
<body>
		<h1>Daftar Negara ASEAN dan Ibukota : </h1>
		<ul>
			<?php foreach ($aseanawal as $awal => $ibukota ) : ?>
				<li>
					<?php 

						echo "$awal : $ibukota" 

					?>
				</li>
			<?php endforeach; ?>
		</ul>
</body>
</html>