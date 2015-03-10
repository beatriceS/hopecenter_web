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
    
    
    <?php foreach ($titles as $key=>$value): ?>
    	<div id="event_dates">
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
        </div>
	<?php endforeach; ?>
    
    <!-- ------------------------------------------------------------------- -->
    
    </div> <!--close events_content-->
    <?php include "includes/footer.php" ?>
</div> <!--closing id container-->
</body>
</html>