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
	var_dump($tab[3]);
	?>
</div>

<div>
	<?php
	var_dump($tab[4]);
	?>
</div>

</body>
</html>