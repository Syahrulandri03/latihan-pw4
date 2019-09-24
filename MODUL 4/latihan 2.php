<?php 
	$aseanawal = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];
?>


<!DOCTYPE html>
<html>
<head>
	<title>Latihan 2</title>
</head>
<body>
		<h1>Daftar Negara ASEAN awal :</h1>
	<ul>
		<?php foreach ($aseanawal as $awal ) : ?>
			<li>
				<?php 
					echo $awal ; 

				?>
			</li>
		<?php endforeach; ?>
	</ul>

		<?php $aseanbaru = array_push($aseanawal, "Laos","Filipina", "Myanmar" ); ?>

		<h1>Daftar Negara ASEAN baru :</h1>
	<ul>
		<?php foreach ($aseanawal as $awal ): ?>
			<li>
				<?php 
					echo $awal ; 

				?>
			</li>
		<?php endforeach; ?>
	</ul>
</body>
</html>