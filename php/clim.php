<html>
<head><meta http-equiv="refresh" content="0.1; URL=https://rhumbert1.github.io/devis-ms/formulaires/formulaire%20infos%20perso.html"></head>
<?php

$host='localhost';
$username='root';
$password='';
$db_name='devisms';
$table='infos_clim';

$duree=$_POST['duree'];
$install_type=$_POST['install_type']
$type=$_POST['type'];
$debit=$_POST['debit'];
$marque=$_POST['marque'];
$annee=$_POST['annee'];
$nbr=$_POST['nbr'];

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$connection= mysqli_connect($host, $username, $password, $db_name);
if (!$connection)
{
  die ('Could not connect:' .mysqli_connect_error($connection));
}

mysqli_select_db($connection, $db_name);

$test=mysqli_query($connection, "INSERT INTO $table (duree, install_type, type, debit, marque, annee, nbr)
VALUES ('$duree', '$install_type', '$type', '$debit', '$marque', '$annee', '$nbr')");

mysqli_close($connection);

?>
</html>
