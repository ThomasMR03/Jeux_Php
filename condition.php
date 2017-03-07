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

<footer>
	
</footer>

</body>
</html>