<html>
<head><meta http-equiv="refresh" content="0.1; URL=http://localhost:8060/Formulaire%20Infos%20Perso/index.html"></head>
<?php

$host='localhost';
$username='root';
$password='';
$db_name='devisms';
$table='infos_ventil';

$type=$_POST['type'];
$debit=$_POST['debit'];
$marque=$_POST['marque'];
$annee=$_POST['annee'];

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$connection= mysqli_connect($host, $username, $password, $db_name);
if (!$connection)
{
  die ('Could not connect:' .mysqli_connect_error($connection));
}

mysqli_select_db($connection, $db_name);

$test=mysqli_query($connection, "INSERT INTO $table (type, debit, marque, annee)
VALUES ('$type', '$debit', '$marque', '$annee')");

mysqli_close($connection);

?>
</html>
