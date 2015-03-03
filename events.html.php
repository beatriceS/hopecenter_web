<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>HCOC: Events</title>
</head>

<body>
<div id="container">
	<?php include "includes/header.php" ?>
	<!--start home_content-->
    <div id="events_content">
	<strong><p>Event Calendar</p></strong>
    <?php foreach ($titles as $title): ?>
      <blockquote>
        <p>
          <?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>
        </p>
      </blockquote>
    <?php endforeach; ?>
    <!-- ------------------------------------------------------------------- -->
    <?php foreach ($contents as $content): ?>
      <blockquote>
        <p>
          <?php echo htmlspecialchars($content, ENT_QUOTES, 'UTF-8'); ?>
        </p>
      </blockquote>
    <?php endforeach; ?>
    </div> <!--close events_content-->
    <?php include "includes/footer.php" ?>
</div> <!--closing id container-->
</body>
</html>