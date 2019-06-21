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
  echo "Genre : " . $row['gender'] . "<br/>";
  echo "Nom : " . $row['name'] . "<br/>";
  echo "Prénom : " . $row['surname'] . "<br/>";
  echo "Email : " . $row['email'] . "<br/>";
  echo "Téléphone : " . $row['phone'] . "<br/>";
  echo "Adresse : " . $row['adresse'] . "<br/>";
  echo "Ville : " . $row['city'] . "<br/>";
  echo "Code postal : " . $row['postal'] . "<br/>";
  echo "Service : " . $row['service'] . "<br/>";
  echo "Message : " . $row['message'] . "<br/><br/>";
}

$test->close();
mysqli_close($connection);

?>
