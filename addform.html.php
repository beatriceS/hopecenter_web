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
    <div id="addform_content">
        <form action="?" method="post">
      <div>
      	<!--<label for="days" class="label">Day: </label>-->
      	<input name="days" type="text" class="required" id="days" title="Event's day.">
      </div>
      
      <div>
      	<!--<label for="months" class="label">Month: </label>-->
      	<input name="months" type="text" class="required" id="months" title="Event's month.">
      </div>
      
      <div>
      	<!--<label for="dates" class="label">Date: </label>-->
      	<input name="dates" type="text" class="required" id="dates" title="Event's date.">
      </div>
      
      <div>
      	<!--<label for="titles" class="label">Title: </label>-->
      	<input name="titles" type="text" class="required" id="titles" title="Event's Title.">
      </div>
      
      <div>
        <label for="contents">Description:</label>
        <textarea id="contents" name="contents" rows="3" cols="40"></textarea>
      </div>
      <div><input type="submit" value="Add New Event"></div>
    </form>
    </div> <!--close events_content-->
    <br><br>
    <div id="back_admin">
    <a href="admin.php"> Back to Admin Page </a>
    </div>
    <br><br>
    <?php include "includes/footer.php" ?>
</div> <!--closing id container-->
</body>
</html>