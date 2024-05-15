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
		<h1>Završeni su svi radovi na sanaciji i opremanju daruvarskog borilišta Sokol</h1>
        <div class="vijesti">
        <img src="img/razgledavanje.jpg">
        <p>Završili su svi radovi na sanaciji i opremanju daruvarskog borilišta „Sokol“ za šport i rekreaciju djece, mladih, rekreativaca, umirovljenika i osoba s invaliditetom te je isti spreman za aktivno korištenje.</p>
        <p>Naime, ukupna vrijednost projekta iznosi skoro milijun kuna, a zajednički ga financiraju Ministarstvo turizma i sporta sa oko pola milijuna kuna, Savez Čeha sa 200 tisuća kuna i Grad Daruvar sa 231.752,73 kuna.</p>
        <p>Drago mi je da se Sokolu vraća stari sjaj te da će ga djeca, mladi, rekreativci i svi građani Daruvara moći koristiti prvenstveno za sve sportske aktivnosti, ali isto tako, postoji mogućnost, s obzirom da je postavljeno 1.300 sjedalica, korištenja za kulturne i umjetničke manifestacije - rekao nam je gradonačelnik Daruvara, Damir Lneniček.</p>
        <p>Inače, izvođač radova bila je tvrtka EDEL SPORT d.o.o. iz Zagreba, koju zastupa direktor Igor Gavranović, a radovi koji su ukupno trajali oko tri mjeseca obuhvaćali su uređenje drenaže i betonsko-asfaltne podloge borilišta, nivelaciju borilišta, popravak i čišćenje betonskih tribina te izgradnju betonskog zaštitnog zida oko borilišta.
        Osim toga, oblaganje zaštitnog zida radi zaštite od ozljeda, postavljanje mekane dvoslojne specijalne podloge na borilište, iscrtavanje crta na borilištu za pojedine sportove primjerice nogomet, rukomet ili odbojku, postavljanje novih golova i koševa, postavljanje novih električnih instalacija i rasvjete te postavljanje stolica na tribine.</p>
        <p>Radovi su trebali biti prije mjesec dana gotovi, a s obzirom da se gumirani materijal može postavljati samo kada je suho i sunčano, zbog kiše se to ipak produžilo. Bez obzira na to, drago mi je da su radovi završeni i da već u subotu imamo pravo otvaranje i kvalitetno korištenje Sokola kroz projekt Aktivna Hrvatska - istaknuo je Damir Lneniček.</p>
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