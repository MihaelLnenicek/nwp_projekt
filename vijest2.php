<?php 

print '
<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="style.css">
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="description" content="some description">
        <meta name="keywords" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
		
		<title>Sokol</title>
	</head>
<body>
	<header>
		<div'; print ' class="hero-subimage"';  print '></div>
		<nav>';
			include("menu.php");
		print '</nav>
	</header>
	<main>';
    print'
		<h1>U Daruvaru održana 6. Smotra manjinskog stvaralaštva Bjelovarsko-bilogorske županije</h1>
        <div class="vijesti">
        <img src="img/smotra.jpg">
        <p>Na stadionu ”Sokol” u Daruvaru u nedjelju je održana 6. Smotra manjinskog stvaralaštva Bjelovarsko-bilogorske županije pod pokroviteljstvom Županije i župana Marka Marušića koji je tu vrijednu manifestaciju i službeno otvorio. Na 6. Smotri manjinskog stvaralaštva nacionalne manjine predstavile su svoje bogatstvo kroz gastronomsku ponudu te kulturno-umjetnički program, a sve s ciljem promoviranja zajedništva i multikulturalnosti u našoj županiji.</p>
        <p>Domaćin ovogodišnje smotre bilo je Vijeće srpske nacionalne manjine, a pored njih predstavili su se i predstavnici češke, mađarske, romske, albanske, njemačke i austrijske nacionalne manjine te KUD Palična iz Severina.</p>
        </div>
        ';
	
	print '
	</main>
    <footer>
		<p>Copyright &copy; ' . date("Y") . ' Mihael Lneniček </p>
	</footer>
</body>
</html>';
?>