<!DOCTYPE html>
<html>
<head>
	<title>Les tableaux</title>
</head>
<body>

<div>
	<?php
	$tab = array("Janvier", "Fevrier", "Mars", "Julien", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre");
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
	$tableau= array( 
[02]=> "Aisne" ,
[59]=> "Nord" ,
[60]=> "Oise" ,
[62]=> "Pas-de-Calais" ,
[80]=> "Somme"
);
?>
</div>

</body>
</html>