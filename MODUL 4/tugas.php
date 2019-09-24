<?php
$budaya = 
[
	[
		"nama" 			=> "Rumah Honai",
		"penjelasan"	=> 
							"Honai terbentuk seperti jamur dengan ketinggian sekitar 4m. Rumah itu luasnya sekitar12-16m. Dahulu anak laki laki diwajibkan berjaga jaga di Honai dari malam hingga pagi hari, sedangkan anak perempuan/para gadis boleh tidur di Honai secara berkelompok.",

		"daerah"		=> "Papua",
		"kategori"		=> "rumah adat",
		"gambar"		=> "papua.jpg"
	],
	[
		"nama" 			=> "pencak silat",
		"penjelasan"	=> 
							"Silat berasal dari budaya Suku Melayu, yaitu penduduk pesisir Sumatra dan semenanjung Malaka. Perkembangan dan penyebaran silat secara historis mulai tercatat ketika penyebarannya banyak dipengaruhi oleh kaum Ulama, seiiring dengan penyebaran agama Islam pada abad ke-14 di Nusantara",
		"daerah"		=> "indonesia",
		"kategori"		=> "seni bela diri",
		"gambar"		=> "silat.jpg"
	],
	[
		"nama" 			=> "tari jaipong",
		"penjelasan"	=> 
							"Jaipongan terlahir melalui proses kreatif dari tangan dingin H Suanda sekitar tahun 1976 di Karawang, jaipongan merupakan garapan yang menggabungkan beberapa elemen seni tradisi karawang seperti pencak silat, wayang golek, topeng banjet, ketuk tilu dan lain-lain. ",
		"daerah"		=> "jawa barat",
		"kategori"		=> "tarian tradisional",
		"gambar"		=> "jaipong.jpg"
	],
	[
		"nama" 			=> "keroncong tugu",
		"penjelasan"	=> 
							" Keroncong Tugu merupakan peninggalan penjajahan Portugis yang masih ada hingga sekarang. Keroncong Tugu merupakan  musik yang di bentuk  oleh sekelompok orang Portugis. Kelompok orang tersebut pada waktu itu dalam keadaan di kucilkan oleh pemerintahan Hindia Belanda. Untuk menghibur diri , mereka membentuk kelompok musik yang di beri nama Keroncong Tugu.",
		"daerah"		=> "jakarta",
		"kategori"		=> "musik tradisional",
		"gambar"		=> "tugu.jpg"
	],
	[
		"nama" 			=> "gamelan",
		"penjelasan"	=> 
							"Gamelan Jawa adalah ensembel musik yang biasanya menonjolkan metalofon, gambang, gendang, dan gong. Musik yang tercipta pada Gamelan Jawa berasal dari paduan bunyi gong, kenong dan alat musik Jawa lainnya. Irama musik umumnya lembut dan mencerminkan keselarasan hidup, sebagaimana prinsip hidup yang dianut pada umumnya oleh masyarakat Jawa.",
		"daerah"		=> "jawa",
		"kategori"		=> "alat musik tradisional",
		"gambar"		=> "gamelan.jpg"
	],
	[
		"nama" 			=> "batik",
		"penjelasan"	=> 
							"Batik adalah kain bergambar yang pembuatannya secara khusus dengan menuliskan atau menerakan malam pada kain itu, kemudian pengolahannya diproses dengan cara tertentu yang memiliki ciri khas Batik Indonesia.",
		"daerah"		=> "indonesia",
		"kategori"		=> "kain/pakaian tradisional",
		"gambar"		=> "batik.jpg"
	],
	[
		"nama" 			=> "keris",
		"penjelasan"	=> 
							"Keris adalah senjata tikam golongan belati (berujung runcing dan tajam pada kedua sisinya) dengan banyak fungsi budaya yang dikenal di kawasan Nusantara bagian barat dan tengah. Bentuknya khas dan mudah dibedakan dari senjata tajam lainnya karena tidak simetris di bagian pangkal yang melebar, seringkali bilahnya berkelok-kelok, dan banyak di antaranya memiliki pamor (damascene),",
		"daerah"		=> "jawa",
		"kategori"		=> "senjata tradisional",
		"gambar"		=> "keris.jpg"
	],
	[
		"nama" 			=> "wayang",
		"penjelasan"	=> 
							"Wayang adalah seni pertunjukkan asli Indonesia yang berkembang pesat di Pulau Jawa dan Bali. Pertunjukan ini juga populer di beberapa daerah seperti Sumatera dan Semenanjung Malaya juga memiliki beberapa budaya wayang yang terpengaruh oleh kebudayaan Jawa dan Hindu.",
		"daerah"		=> "jawa",
		"kategori"		=> "seni pertunjukan tradisional",
		"gambar"		=> "wayang.jpg"
	],
	[
		"nama" 			=> "semur",
		"penjelasan"	=> 
							"Semur adalah hidangan daging rebus dari Indonesia yang diolah dalam kuah berwarna coklat pekat yang terbuat dari kecap manis, bawang merah, bawang bombay, pala dan cengkeh.",
		"daerah"		=> "banten",
		"kategori"		=> "makanan tradisional",
		"gambar"		=> "semur.jpg"
	],
	[
		"nama" 			=> "ngaben",
		"penjelasan"	=> 
							"ngaben merupakan upacara pembakaran atau kremasi jenazah umat Hindu di Bali. Untuk melaksanakan upacara Ngaben ini, keluarga dari jenazah tersebut akan membuat “bade dan lembu” untuk tempat jenazah yang akan dibawa.",
		"daerah"		=> "bali",
		"kategori"		=> "upacara adat",
		"gambar"		=> "ngaben.jpg"
	],
];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tugas 2</title>
	 <link rel="stylesheet" type="text/css"  href="../ssets/css/bootstrap.css">
	  <link rel="stylesheet" type="text/css"  href="../assets/css/style3.css">
</head>
<body>
	<div class="container">
				<h1>Budaya Daerah di Indonesia</h1>
		<table class="table">
	 <thead class="thead-dark">
			<tr class="bg-warning">
					<th>NO</th>
					<th>NAMA</th>
					<th>PENJELASAN</th>
					<th>DAERAH</th>
					<th>KATEGORI</th>
					<th>CONTOH GAMBAR</th>
			</tr>
</thead>
			<?php $i = 1; ?>
			<?php foreach ($budaya as $b) : ?>
<tbody>
			<tr>
					<td class="table-primary"><?php echo $i++; ?></td>
					<td class="bg-primary"><?php echo $b["nama"]; ?></td>
					<td class="bg-info"><?php echo $b["penjelasan"]; ?></td>
					<td class="table-success"><?php echo $b["daerah"]; ?></td>
					<td class="bg-primary"><?php echo $b["kategori"]; ?></td>
					<td class="table-success"><img src="assets/img/<?php echo $b["gambar"]; ?>" class="rounded float-left" alt="..."></td>
			</tr>
</tbody>
			<?php endforeach ; ?>
</table>
</div>
</body>
</html>