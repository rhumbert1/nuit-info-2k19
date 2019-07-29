<html>
<head><meta http-equiv="refresh" content="0.1; URL=https://rhumbert1.github.io/devis-ms/formulaires/formulaire%20infos%20perso.html"></head>
<?php
session_start();

$_SESSION['duree']=$_POST['duree'];
$_SESSION['type']=$_POST['type'];
$_SESSION['install_type']=$_POST['install_type'];
$_SESSION['puissance']=$_POST['puissance'];
$_SESSION['marque']=$_POST['marque'];
$_SESSION['annee']=$_POST['annee'];
$_SESSION['nbr']=$_POST['nbr'];

?>
</html>
