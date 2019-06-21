<html>
<head><meta http-equiv="refresh" content="0.1; URL=http://localhost:8060/ContactFrom_v3/"></head>
<?php

$host='localhost';
$username='root';
$password='';
$db_name='devisms';
$table='test';

$date1=date('Y/m/d');
$gender=$_POST['gender'];
$name=$_POST['name'];
$surname=$_POST['surname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$adresse=$_POST['adresse'];
$city=$_POST['city'];
$postal=$_POST['postal'];
$service=$_POST['service'];
$message=$_POST['message'];

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

//echo $date . $name . $email . $adresse . $service . $message;

$connection= mysqli_connect($host, $username, $password, $db_name);
if (!$connection)
{
  die ('Could not connect:' .mysqli_connect_error($connection));
}

mysqli_select_db($connection, $db_name);

$test=mysqli_query($connection, "INSERT INTO $table (date, gender, name, surname, email, phone, adresse, city, postal, service, message)
VALUES ('$date1', '$gender', '$name', '$surname', '$email', '$phone', '$adresse', '$city', '$postal', '$service', '$message')");

mysqli_close($connection);

?>
</html>
