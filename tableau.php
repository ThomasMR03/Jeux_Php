<!DOCTYPE html>
<html>
<head>
	<title>Les tableaux</title>
</head>
<body>

<div>
	<?php
	$tab = array("Janvier ", "Fevrier ", "Mars ", "Julien ", "Mai ", "Juin ", "Juillet ", "Aout ", "Septembre ", "Octobre ", "Novembre ", "Decembre ");
	var_dump($tab);

	?>
</div>

<div>
	<?php
	var_dump($tab[2]);
	?>
</div>

<div>
	<?php
	var_dump($tab[5]);
	?>
</div>

<div>
	<?php
	$tableau = array( 
02 => "Aisne",
59 => "Nord",
60 => "Oise",
62 => "Pas-de-Calais",
80 => "Somme"
);
?>
</div>

<div>
	<?php
	var_dump($tableau[59]);
	?>
</div>

<div>
	<?php
	$tableau[] = array(51 => "Reims");
	print_r($tableau);
	?>
</div>

<div>
	<?php
	foreach ($tab as $value) {
		print_r($value);
	}
	?>
</div>

<div>
	<?php
		print_r($tableau);
	?>
</div>

<div>
	<?php
	foreach ($tableau as $key => $value) {
		print_r("Le " .$key." ,correspond à " .$value. ".</br>");
	}
	?>
</div>

</body>
</html>