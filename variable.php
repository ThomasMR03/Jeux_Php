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
			echo "$km";
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

echo "$string </br> $float </br> $int </br> $booleans"; ?>
</div>
	
<div>
	<?php $int = NULL;

echo "$int";

$int = 30;
echo "</br> $int"; ?>
</div>

<div>
	<?php
$nom2 = "ROMERO Thomas";
echo "Bonjour $nom2, comment va tu ?";
?>
</div>

<div>
	<?php
$nom3 = "MILLIEN";
$prenom2 = "Thomas";
$age2 = 21;

echo " Bonjour $nom3 $prenom2, tu as $age2 ans !"; ?>
</div>

<div>
	<?php $addition = 3+4;
			$multiplication = 5*20;
			$division = 45/5;
			echo '<p>3+4 = '.$addition.'</p>','<p>5x20 = '.$multiplication.'</p>','<p>45/5 = '.$division.'</p>'; ?>
</div>

<footer>
	
</footer>
</head>
<body>

</body>
</html>
