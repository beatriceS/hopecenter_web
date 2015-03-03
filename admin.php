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

if (isset($_POST['content']))
{
  try
  {
    $sql = 'INSERT INTO events SET
        content = :content,
        date = CURDATE()';
    $s = $pdo->prepare($sql);
    $s->bindValue(':content', $_POST['content']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error adding submitted event: ' . $e->getMessage();
    include 'includes/error.html.php';
    exit();
  }

  header('Location: .');
  exit();
}

try
{
  $sql = 'SELECT content FROM events';
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
  $jokes[] = $row['content'];
}

include 'addevents.html.php';
