<?php

$host='localhost';
$username='root';
$password='';
$db_name='devisms';
$table='test';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$connection= mysqli_connect($host, $username, $password, $db_name);
if (!$connection)
{
  die ('Could not connect:' .mysqli_connect_error($connection));
}

mysqli_select_db($connection, $db_name);

$test=mysqli_query($connection, "SELECT * FROM $table");

while ($row = $test->fetch_array())
{
  $rows[] = $row;
}

foreach ($rows as $row)
{
  echo "Date : " . $row['date'] . "<br/>";
  echo "Nom : " . $row['name'] . "<br/>";
  echo "Prénom : " . $row['first_name'] . "<br/>";
  echo "Email : " . $row['email'] . "<br/>";
  echo "Téléphone : " . $row['phone'] . "<br/>";
  echo "Adresse : " . $row['address'] . "<br/><br/>";
}

$test->close();
mysqli_close($connection);

?>
