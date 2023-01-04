<?php
include("functions.php");
echo '<!doctype html>';
echo '<html>';
echo '<head>';
echo '<meta charset="utf-8">';
echo '<title>Home</title>';
echo '<link rel="stylesheet" href="assets/css/bootstrap.css">';
echo '<link rel="stylesheet" href="assets/css/basic.css">';
echo '<style>';
	echo '#container{ padding: 10px;}';
echo '</style>';
echo '<script src="assets/js/hover.js"></script>';
echo '<script src="assets/js/validation.js"></script>';
echo '</head>';
	echo '<body>';
		echo '<div id="page-inner">';
		include("navigation.php");
			if(isset($_GET['page']) && $_GET['page'] != ""){
				$page=$_GET['page'];
				switch($page){
					case "work":
						include("work.php");
						break;
					case "school":
						include("school.php");
						break;
					case "contact":
						include("contact.php");
						break;
					default:
						include("home.php");
						break;
				}
			}
			else{
				include("home.php");
			}
		echo '</div>';
	echo '</body>';
echo '</html>';
?>