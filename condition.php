<!DOCTYPE html>
<html>
<head>
	<title>Condition</title>
</head>
<body>

<header>
	
</header>

<div>
	<?php
	$age = 21;
	if ($age < 18)
		echo "Vous êtes mineur !";
	if ($age > 18)
		echo "Vous êtes majeur !";
	?>
</div>

<div>
	<?php
	$ifeasy = true;
	if ($ifeasy == false) {
		echo "C'est facile !";
		}else{
			echo "C'est difficile !";
	}
	?>
</div>

<div>
	<?php
	$age = 21;
	$genre = "homme";

	if ($age >= 18){
		echo "Vous êtes un $genre majeur";
	}else{
		echo "Vous êtes un $genre mineur";
	}
	?>
</div>

<footer>
	
</footer>

</body>
</html>