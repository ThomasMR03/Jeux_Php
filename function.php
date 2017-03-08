<!DOCTYPE html>
<html>
<head>
	<title>Les fonctions</title>
</head>
<body>

<div>
	<?php
	function true ($var, $var2){
	if ($var == $var2)
		return (TRUE);
}
	?>
</div>

<div>
	<?php
	function chaine ($var){
		$var = "Bonjour";
		return ($var);
	}
	?>
</div>

<div>
	<?php
	function concat ($var, $var2){
		$var = "coucou";
		$var2 = "salut";
		return ($var . $var2);
	}
	?>
</div>

<div>
	<?php
	$var = 10;
	$var2 = 12;
	function nombre ($var, $var2){
		if ($var > $var2) {
			return ($var);
		}
		if ($var < $var2) {
			return ($var);
		}
		if ($var = $var2) {
			return ($var);
		}
	}
	?>
</div>

<div>
	<?php
	$var = "Bonjour";
	$var2 = 10;
	function concat2 ($var, $var2){
		return ($var . $var2);
	}
	?>
</div>

<div>
	<?php
	$nom = "Millien";
	$prenom = "Thomas";
	$age = 21;
	function message ($nom, $prenom, $age){
		return ("Bonjour," +$nom+ +$prenom+", tu as" +$age+ "ans !");
	}
	?>
</div>

</body>
</html>