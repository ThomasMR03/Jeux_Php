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

</body>
</html>