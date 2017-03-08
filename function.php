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

</body>
</html>