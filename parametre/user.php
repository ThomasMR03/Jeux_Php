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
echo $_POST['nom'] ;
echo $_POST['prenom'];
?>
</div>