<?php
if (get_magic_quotes_gpc())
{
  $process = array(&$_GET, &$_POST, &$_COOKIE, &$_REQUEST);
  while (list($key, $val) = each($process))
  {
    foreach ($val as $k => $v)
    {
      unset($process[$key][$k]);
      if (is_array($v))
      {
        $process[$key][stripslashes($k)] = $v;
        $process[] = &$process[$key][stripslashes($k)];
      }
      else
      {
        $process[$key][stripslashes($k)] = stripslashes($v);
      }
    }
  }
  unset($process);
}

if (isset($_GET['addevent']))
{
  include 'addform.html.php';
  exit();
}

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

if (isset($_POST['contents']))
{
  try
  {
    $sql = 'INSERT INTO events SET
        month = :month,
		date = :date,
		day = :day,
		title = :title,
		content = :content';
    $s = $pdo->prepare($sql);
	$s->bindValue(':month', $_POST['months']); // these should be plurals to match form posts
	$s->bindValue(':date', $_POST['dates']);
	$s->bindValue(':day', $_POST['days']);
	$s->bindValue(':title', $_POST['titles']);
    $s->bindValue(':content', $_POST['contents']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error adding submitted event: ' . $e->getMessage();
    include 'includes/error.html.php';
    exit();
  }
  /*
  try
  {
    $sql = 'UPDATE events SET
        month = :month,
		date = :date,
		day = :day,
		title = :title,
		content = :content,
		WHERE id = :id';
    $s = $pdo->prepare($sql);
	$s->bindValue(':id', $_POST['id']);
	$s->bindValue(':month', $_POST['month']);
	$s->bindValue(':date', $_POST['date']);
	$s->bindValue(':day', $_POST['day']);
	$s->bindValue(':title', $_POST['title']);
    $s->bindValue(':content', $_POST['content']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error adding submitted event: ' . $e->getMessage();
    include 'includes/error.html.php';
    exit();
  }
  */
  try
  {
    $sql = 'DELETE FROM events WHERE id = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error deleting event.';
    include 'error.html.php';
    exit();
  }


  header('Location: .');
  exit();
}

try
{
  $sql = 'SELECT * FROM events ORDER BY id DESC';
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

include 'addevents.html.php';
