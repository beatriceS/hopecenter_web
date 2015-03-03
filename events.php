<?php
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=hcoc_web', 'hcoc2015', 'password');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include 'includes/error.html.php';
  exit();
}

try
{
  $sql = 'SELECT * FROM events';
  $result = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching events: ' . $e->getMessage();
  include 'includes/error.html.php';
  exit();
}

while ($row = $result->fetch())
{
  $days[] = $row['day'];
  $dates[] = $row['date'];
  $months[] = $row['month'];
  $titles[] = $row['title'];
  $contents[] = $row['content'];
  
}

include 'events.html.php';
?>