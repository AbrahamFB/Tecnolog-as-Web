<?php
	$numero= $_GET["num"];

	if (($numero % 5 == 0) && ($numero % 7 == 0)){
		echo "<p>El número ", $numero, " es múltiplo de 5 y 7.</p>";
	}
	else{
		echo "<p>El número ", $numero, " no es múltiplo de 5 y 7.</p>";
	}
?>