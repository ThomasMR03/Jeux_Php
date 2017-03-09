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

/* Exo 3 */
<?php
$temps = 365*24*3600;
setcookie("connexion", time() + $temps);
if (isset($_POST['login']) && isset($_POST['password'])){
$_COOKIE['connexion'] = $_POST['login'];
$_COOKIE['connexion'] = $_POST['password'];
}
?>
<div>
	<link href="css/bootstrap.css" rel="stylesheet">
	<form action="" method="POST">
 	<p>Votre Login : <input type="text" name="login" /></p>
 	<p>Votre mot de passe : <input type="text" name="password" /></p>
 	<p><input class="btn btn-danger" type="submit" value="OK"></p>
	</form>

	<?php echo $_POST['login']; ?>
	<?php echo $_POST['password']; ?>
</div>

</body>
</html>