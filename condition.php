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

<div>
	<?php
				$magnitude = 9;
				switch ($magnitude) {
					case '1':
						echo ' Micro-séisme impossible à ressentir.';
						break;
					case '2':
						echo ' Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
						break;
					case '3':
						echo 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
						break;
					case '4':
						echo 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
						break;
					case '5':
						echo 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
						break;
					case '6':
						echo ' Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
						break;
					case '7':
						echo 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
						break;
					case '8':
						echo 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
						break;
					case '9':
						echo 'Séisme capable de tout détruire sur une très vaste zone.';
						break;
				}
			?>
</div>

<div>
	<?php
				$maVariable = "homme";
				if($maVariable != 'Homme'){
					echo 'C\'est un développeur !';
				}else{
					echo 'C\'est une développeuse !';
				}
			?>
</div>

<div>
	<?php
				$maVariable=false;
				if($maVariable == false){
					echo "C'est pas bon !";
				}else{
					echo "C'est ok !";
				}
			?>
</div>

<div>
	<?php
				$monAge = 21;
				if($monAge >= 18){
					echo 'Tu es majeur';
				}else{
					echo "Tu n'es pas majeur";
				}
			?>
</div>

<div>
	<?php
				$maVariable=true;
				if($maVariable){
					echo "C'est ok !";
				}else{
					echo "C'est pas bon !";
				}
			?>
</div>

<footer>
	
</footer>

</body>
</html>