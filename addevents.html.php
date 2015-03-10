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
    <div id="cms_content">
        <p><a href="?addevent">Add New Events</a></p>
            <strong><p>Event Calendar</p></strong>
            
            <?php foreach ($titles as $key=>$value): ?>
                <div id="event_calendars">
                <p>
                    <?php echo $days[$key]; ?> <?php echo $months[$key]; ?> <?php echo $dates[$key]; ?>
                </p>
                </div>
                <div id="event_contents">
                <h4>
                    <?php echo htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); ?>
                </h4>
                <p>
                    <?php echo $contents[$key]; ?>
                </p>
                <form action="?" method="post">
                <input type="submit" name="action" value="Edit">
                <input type="submit" name="action" value="Delete">
                </form>
                </div>
            
            
            <?php endforeach; ?>
            
            
    </div> <!--close events_content-->
    <?php include "includes/footer.php" ?>
</div> <!--closing id container-->
</body>
</html>