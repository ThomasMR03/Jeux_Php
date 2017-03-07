<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8">
<head>
<link rel="stylesheet" type="text/css" href="style.css">
	<title>Exo</title>
<header>
	
</header>

<div>
	<?php
		$nom ="MILLIEN";
		$prenom = "Thomas";
		$age = "21";
		echo "$nom, $prenom, $age"; ?>
</div>

<div>
	<?php $km = 1;
			echo " </br> $km";
			$km = 3;
			echo "</br> $km";
			$km = 125;
			echo "</br> $km";?>
</div>

<div>
	<?php $string = "Bonjour";

$float = 0.2345;

$int = 15;

$booleans = true;

echo " </br> $string </br> $float </br> $int </br> $booleans"; ?>
</div>
	
<div>
	<?php $int = NULL;

echo "</br> $int";

$int = 30;
echo "</br> $int"; ?>
</div>

<div>
	<?php
$nom2 = "ROMERO Thomas";
echo "<p> Bonjour $nom2, comment va tu ? </p>";
?>
</div>

<div>
	<?php
$nom3 = "MILLIEN";
$prenom2 = "Thomas";
$age2 = 21;

echo " Bonjour $nom3 $prenom2, tu as $age2 ans !"; ?>
</div>

<footer>
	
</footer>
</head>
<body>

</body>
</html>
