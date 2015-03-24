<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to Hope Center of Christ</title>
	
    <?php include "includes/fonts.php" ?>
    <?php include "includes/stylesheet.php" ?>
    
    <script>
	(function(d, s, id) {
  	var js, fjs = d.getElementsByTagName(s)[0];
  	if (d.getElementById(id)) return;
  	js = d.createElement(s); js.id = id;
  	js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=894510517237655&version=v2.0";
  	fjs.parentNode.insertBefore(js, fjs);
	}
	(document, 'script', 'facebook-jssdk'));
	</script>
    
    <!-- SLIDER -->
	<link rel="stylesheet" href="js/flexslider.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="js/jquery.flexslider.js"></script>

	<!-- FLEXSLIDER -->
	<script>
 	$(window).load(function() {
    	$('.flexslider').flexslider();
  	});
	</script>

</head>

<body>

<div id="container">
	<?php include "includes/header.php" ?>
	<!--start home_content-->
    <div style="clear:both;"></div>
    <div id="home_content">
    <!-- *********** -->
	<!-- FLEXSLIDER -->
	<!-- *********** -->
	<div id="flex">
		<div class="flexslider">
            <ul class="slides">
                <li>
                    <img src="images/slider_01.png" alt="" />
                </li>
                <li>
                    <img src="images/slider_02.png" alt="" />
                </li>
                <li>
                    <img src="images/slider_03.png" alt="" />
                </li>
                <li>
                    <img src="images/slider_04.png" alt="" />
                </li>
                <li>
                    <img src="images/slider_05.png" alt="" />
                </li>
  			</ul>
		</div>
	</div>
    <div style="clear:both;"></div>
	<!-- ************** -->
	<!-- FLEXSLIDER END -->
	<!-- ************** -->
    
    <div id="index_content">
    <div id="index_left">
        <div id="current_series">
            <h3> Current Message </h3>
        	<img src="images/current_series.png">
        </div>
        
        <div id="latest_video">
            <h3> Latest Video </h3>
            <div id="youtube_video">
            <!-- YOUTUBE ADD LINK HERE GO TO YOUTUBE PAGE - EMBED - COPY PASTE THE iframe code - TAKE OUT THE WIDTH AND HEIGHT -->
            <iframe width="" height="" src="https://www.youtube.com/embed/0M_hJc1IzsY" frameborder="0" allowfullscreen></iframe>
            <!-- YOUTUBE ADD LINK HERE -->
            </div>
        </div>
        <div style="clear:both;"></div>
        <div id="news_signup">
			<a href="sign_up.php"><img src="images/subscribe.png"></a>
        </div>
    </div> <!--close index_left-->
    <div id="index_right">
        <div id="fb-root">
        	<div class="fb-like-box" data-href="https://www.facebook.com/HopeCenterOc?ref=br_tf" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="true"></div>
        </div>
    </div> <!--clode index_right-->
    <div style="clear:both;"></div>
    </div>
    <div style="clear:both;"></div>
    </div> <!--close home_content-->
    <div style="clear:both;"></div>
    <?php include "includes/footer.php" ?>
</div> <!--closing id container-->




</body>
</html>