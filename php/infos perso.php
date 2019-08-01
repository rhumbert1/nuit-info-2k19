<html>
<head><meta http-equiv="refresh" content="0.1; URL=https://rhumbert1.github.io/devis-ms/index.html"></head>
<?php

$host='localhost';
$username='user';
$password='k48n4INqzpNU0UGr';
$db_name='devisms';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$connection= mysqli_connect($host, $username, $password, $db_name);
if (!$connection)
{
  die ('Could not connect:' .mysqli_connect_error($connection));
}

mysqli_select_db($connection, $db_name);


$table='client';

$a=mysqli_query($connection, "SELECT MAX(id) FROM 'client'");
$id_client=$a+1;
$last_name=$_POST['last_name'];
$first_name=$_POST['first_name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$city=$_POST['city'];
$zip=$_POST['zip'];

mysqli_query($connection, "INSERT INTO $table (id_client, last_name, first_name, email, phone, address, city, zip)
VALUES ('$id_client', '$last_name', '$first_name', '$email', '$phone', '$address', '$city', '$zip')");

$table='equipement';

$b=mysqli_query($connection, "SELECT MAX(id) FROM 'equipement'");
$id_equipement=$b+1
$duree=$_SESSION['duree'];
$type=$_SESSION['type'];
$install_type=$_SESSION['install_type'];
$puissance=$_SESSION['puissance'];
$marque=$_SESSION['marque'];
$annee=$_SESSION['annee'];
$nbr=$_SESSION['nbr'];

mysqli_query($connection, "INSERT INTO $table (id_equipement, duree, type, install_type, puissance, marque, annee, nbr)
VALUES ('$id_equipement', '$duree', '$type', '$install_type', '$puissance', '$marque', '$annee', '$nbr')");


$table='client-equipement';

$c=mysqli_query($connection, "SELECT MAX(id) FROM 'client-equipement'");
$id=$c+1;

mysqli_query($connection, "INSERT INTO $table (id, id_client, id_equipement) VALUES ('$id', '$id_client', '$id_equipement')");


$table='devis';

$date=date('Y/m/d');
$duree=$_SESSION['duree'];
$infos=$id;

mysqli_query($connection, "INSERT INTO $table (date, duree, infos) VALUES ('$date', '$duree', '$infos')");

mysqli_close($connection);

session_unset();
session_destroy();
?>
</html>
