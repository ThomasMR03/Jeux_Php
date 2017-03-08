<!DOCTYPE html>
<html>
<head>
	<title>Les boucles</title>
</head>
<body>

<div>
	<?php
$var = 0;
while ($var <= 10) {
	echo "$var";
	$var++;
}
?>
</div>

<div>
	<?php
$var = 0;
$var2 = 49;
while ($var <= 20){
	print($var * $var2);
	$var++;
}
?>
</div>

<div>
	<?php
$var = 0;
$var2 = 30;
while ($var >= 10){
	print($var * $var2);
	$var--;
}
?>
a corriger exo 3
</div>

<div>
	<?php
	$var = 1;
	while ($var <= 10){
		print($var);
		$var++;
}
?>
a corriger exo 4
</div>

<div>
	<?php
$var = "On y arrive presque ! ";
for ($i=1; $i < 15 ; $i++) { 
	echo "$var";
}
?>
</div>

<div>
	<?php
	$var = "C'est presque bon ! ";
	for ($i=20; $i > 0 ; $i--) { 
		echo "$var";
	}
	?>
</div>

<div>
	<?php
	$var = "On tient le bon bout ! ";
	for ($i=1; $i < 100 ; $i+= 15) { 
	echo "$var";
	}
	?>
</div>

</body>
</html>
