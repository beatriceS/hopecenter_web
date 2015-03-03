<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>HCOC: Add Events</title>
</head>

<body>
<div id="container">
	<?php include "includes/header.php" ?>
	<!--start home_content-->
    <div id="addevents_content">
        <p><a href="?addevent">Add New Events</a></p>
            <strong><p>Event Calendar</p></strong>
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