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
    <h1>Ljetna malonogometna liga "Dva finala"</h1>
    <div class="vijesti">
    <img src="img/vijest3.jpg">
    <p>Na stadionu ”Sokol” u Daruvaru u srijedu s početkom u 19:00 počinje Ljetna malonogometna liga "Dva finala". Prijave traju do 13. lipnja, izvlačenje skupina održati će se u Caffe baru "Bohemia" Daruvar na Gradskoj tržnici. Izvlačenje počinje u 19:00 te su do tog vremena moguće prijave.</p>
    <p>Nagradni fond za veliko finale je 10.000,00 kn, dok za malo finale je 5.000,00 kn. Malo finale igra se za ekipe koje ispadnu iz glavnog natjecanja te im se tako daje prilika za osvajanje utješne nagrade.</p>
    <p>Igra se 5 + 1 i dopušteno je maskimalno 10 igrača, za svakog dodatnog igrača plaća se dodatnih 200 kn. Kotizacija po ekipi je 1.000,00. Ulaz za igrače je besplatan dok za naviače je 10 kn.</p>
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