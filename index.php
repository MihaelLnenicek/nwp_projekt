<?php 
	
	define('__APP__', TRUE);
	
    session_start();
	
	include ("konekcija.php");
	
    if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
	if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }

    if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }
	
	if (!isset($menu)) { $menu = 1; }
	
    include_once("funkcije.php");
	
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
		<div'; if ($menu > 1) { print ' class="hero-subimage"'; } else { print ' class="hero-image"'; }  print '></div>
		<nav>';
			include("menu.php");
		print '</nav>
	</header>
	<main>';
		if (isset($_SESSION['message'])) {
			print $_SESSION['message'];
			unset($_SESSION['message']);
		}

	if (!isset($menu) || $menu == 1) { include("home.php"); }
	
    else if ($menu == 2) { include("rezervacija.php"); }

	else if ($menu == 3) { include("vijesti.php"); }
	
	else if ($menu == 4) { include("kontakt.php"); }
	
	else if ($menu == 5) { include("o_nama.php"); }
	
	else if ($menu == 6) { include("registracija.php"); }
	
	else if ($menu == 7) { include("prijava.php"); }
	
	else if ($menu == 8) { include("admin.php"); }

	else if ($menu == 9) { include("vrijeme.php"); }
	
	print '
	</main>
    <footer>
		<p>Copyright &copy; ' . date("Y") . ' Mihael Lneniček </p>
	</footer>
</body>
</html>';
?>