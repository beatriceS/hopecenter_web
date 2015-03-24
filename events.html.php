<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Upcoming Events</title>
<?php include "includes/fonts.php" ?>
<?php include "includes/stylesheet.php" ?>
</head>

<body>
<div id="container">
	<?php include "includes/header.php" ?>
	<!--start home_content-->
    <div id="about_content">
    
    <div id="background_heading">
    <h2> Upcoming Events </h2>
    </div>
<div style="clear:both;"></div> 
    
    <?php foreach ($titles as $key=>$value): ?>
    <div class="events_data">
            <div class="event_dates">
            <p class="months"><?php echo $months[$key]; ?></p>
            <p class="dates"><?php echo $dates[$key]; ?></p>
            <p class="days"><?php echo $days[$key]; ?></p>
            </div>      
            <div class="event_contents">
            <h4><?php echo htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); ?></h4>
            <p><?php echo $contents[$key]; ?></p>

            </div>
    </div>
	<?php endforeach; ?>
    <div style="clear:both;"></div>
    
    

    <!-- ------------------------------------------------------------------- -->
    <div style="clear:both;"></div>
    </div> <!--close about_content-->
    <?php include "includes/footer.php" ?>
</div> <!--closing id container-->
</body>
</html>