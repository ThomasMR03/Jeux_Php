<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Super Global</title>
</head>
<body>

/* Exo 1 */
<div>
	<p> <?php echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";?> </p>
	<p> <?php echo $_SERVER["REMOTE_ADDR"]; ?> </p>
	<p> <?php echo $_SERVER['SERVER_NAME']; ?> </p>
</div>

/* Exo 2 */
<div>
	<?php
	$_SESSION['nom'] = "Millien";
	$_SESSION['prenom'] = "Thomas";
	$_SESSION['age'] = 21;
	echo '<br /><a href="super_global2.php">Super Global 2</a>';
	?>
</div>

</body>
</html>