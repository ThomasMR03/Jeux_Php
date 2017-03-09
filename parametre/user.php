<?php
if (isset($_GET['nom'])) {
	echo $_GET['nom'];
}else{
echo "Cette variable n'existe pas </br>";
}
?>
<?php
if (isset($_GET['prenom'])) {
	echo $_GET['prenom'];
}else{
echo "Cette variable n'existe pas";
}
?>
<div>
<?php
if (isset($_POST['civilite'])) {
	echo $_POST['civilite'];
}else{
echo "Cette variable n'existe pas </br>";
}
?>
<?php
if (isset($_POST['nom'])) {
	echo $_POST['nom'];
}else{
echo "Cette variable n'existe pas </br>";
}
?>
<?php
if (isset($_POST['prenom'])) {
	echo $_POST['prenom'];
}else{
echo "Cette variable n'existe pas";
}
?>
</div>

<?php if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['civilite']) && isset($_POST['fichier'])) : ?>
	Bonjour, <?= $_POST['civilite'];?> <?= $_POST['nom']; ?> <?= $_POST['prenom']; ?> 
	<?php
	$fichier = explode('.',$_POST['fichier']);
	if ($fichier[1] == 'pdf') {
		echo $_POST['fichier'];
	}
	?>
<?php else : ?>
	<div>
<link href="../css/bootstrap.css" rel="stylesheet">
<form action="user.php" method="POST" enctype="multipart/form-data">
<select name="civilite">
<option value="Monsieur"> Mr </option>
<option value="Madame"> Mme </option>
</select>
 <p>Votre nom : <input type="text" name="nom" /></p>
 <p>Votre prenom : <input type="text" name="prenom" /></p>
 <p><input type="file" name="fichier"></p>
 <p><input class="btn btn-danger" type="submit" value="OK"></p>

</form>
</div>
<?php endif; ?>