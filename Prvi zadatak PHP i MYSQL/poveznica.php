<?php
print '
<!DOCTYPE html>
<html>
	<head>
		
		<!-- CSS -->
		<link rel="stylesheet" href="style.css">
		<!-- End CSS -->
		<!-- meta elements -->
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="description" content="Mateo Maslac">
        <meta name="keywords" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
		<title>Mateova stranica</title>
	</head>
<body>
	<header>
		<nav>
		
			<ul>
			  <li><a href="index.php?menu=1">Naslovna</a></li>
			  <li><a href="onama.php?menu=2">O nama</a></li>
			  <li><a href="ligaprvaka.php?menu=3">Liga prvaka</a></li>
			  <li><a href="kontakt.php?menu=4">Kontakt</a></li>
			  <li><a href="galerija.php?menu=5">Galerija</a></li>
			</ul>
		</nav>
	</header>
	<main>';
	
	if (!isset($_GET['menu']) || $_GET['menu'] == 1) { include("naslovna.php"); }
	
	else if ($_GET['menu'] == 2) { include("onama.php"); }
	
	else if ($_GET['menu'] == 3) { include("ligaprvaka.php"); }
	
	else if ($_GET['menu'] == 4) { include("kontakt.php"); }
	
	else if ($_GET['menu'] == 5) { include("galerija.php"); }
	
	
	print '
	</main>
	<footer>
		<p> Mateo Maslac  2019 <a href="https://github.com/mmaslac/Projektni-zadatak-PHP"><img src="img/GitHub.png" title="Github" alt="Github"></a></p>
	</footer>
</body>
</html>';
?>