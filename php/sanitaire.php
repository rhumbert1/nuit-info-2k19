<html>
<head><meta http-equiv="refresh" content="0.1; URL=https://rhumbert1.github.io/devis-ms/formulaires/formulaire%20infos%20perso.html"></head>
<?php

$host='localhost';
$username='root';
$password='';
$db_name='devisms';
$table='infos_sanitaire';

$type=$_POST['type'];
$puissance=$_POST['puissance'];
$marque=$_POST['marque'];
$annee=$_POST['annee'];

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$connection= mysqli_connect($host, $username, $password, $db_name);
if (!$connection)
{
  die ('Could not connect:' .mysqli_connect_error($connection));
}

mysqli_select_db($connection, $db_name);

$test=mysqli_query($connection, "INSERT INTO $table (type, puissance, marque, annee)
VALUES ('$type', '$puissance', '$marque', '$annee')");

mysqli_close($connection);

?>
</html>
