<?php  

if (isset($_GET['developerName'])) {
	echo "<h2>Developer Name: " .$_GET['developerName'] . "</h2>";
}

if (isset($_GET['experienceLevel'])) {
	echo "<h2>The experience level: " .$_GET['experienceLevel'] . "</h2>";	
}

?>
