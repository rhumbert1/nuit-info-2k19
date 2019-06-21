<html>
<head><meta http-equiv="refresh" content="0.1; URL=index.html"></head>
<?php

$host='localhost';
$username='root';
$password='';
$db_name='devisms';
$table='infos_perso';

$date=date('Y/m/d');
$name=$_POST['name'];
$first_name=$_POST['first_name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$connection= mysqli_connect($host, $username, $password, $db_name);
if (!$connection)
{
  die ('Could not connect:' .mysqli_connect_error($connection));
}

mysqli_select_db($connection, $db_name);

$test=mysqli_query($connection, "INSERT INTO $table (date, name, first_name, email, phone, address)
VALUES ('$date', '$name', '$first_name', '$email', '$phone', '$address')");

mysqli_close($connection);

?>
</html>
