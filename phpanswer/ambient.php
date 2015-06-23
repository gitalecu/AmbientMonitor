<?php
$t = base_convert(rand(15,24), 10, 10);
$h = base_convert(rand(20,60), 10, 10);
//header ("Content-Type:text/xml");
//header('Content-Type: application/json');
echo ("myCB({'temperature':");
		echo($t);
		echo(",'humidity':");
		echo($h);
		echo("})");
?>
