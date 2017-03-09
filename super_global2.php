<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Super Global 2</title>
</head>
<body>

<p> <?php echo $_SESSION['nom']; ?> </p>
<p> <?php echo $_SESSION['prenom']; ?> </p>
<p> <?php echo $_SESSION['age']; ?> </p>

<?php echo '<br /><a href="super_global.php">Super Global</a>'; ?>

</body>
</html>