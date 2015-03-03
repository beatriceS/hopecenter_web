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
        <label for="joketext">Type your joke here:</label>
        <textarea id="joketext" name="joketext" rows="3" cols="40"></textarea>
      </div>
      <div><input type="submit" value="Add"></div>
    </form>
    </div> <!--close events_content-->
    <?php include "includes/footer.php" ?>
</div> <!--closing id container-->
</body>
</html>