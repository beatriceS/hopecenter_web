<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to Hope Center of Christ</title>

	<style>
      	#map-canvas {
        width: 300px;
        height: 300px;
	  	}
    	
		#map-canvas h3{
			position: relative;
			z-index: 100;
		}
		
		#flex{
			width: 50%;
			margin-left: auto;
			margin-right: auto;
			
			}
		
    </style>
    
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
    <div id="home_content">
    
    <!-- *********** -->
	<!-- FLEXSLIDER -->
	<!-- *********** -->
	<div id="flex">
		<div class="flexslider">
            <ul class="slides">
                <li>
                    <img src="images/slider_01.jpg" alt="" />
                </li>
                <li>
                    <img src="images/slider_02.jpg" alt="" />
                </li>
                <li>
                    <img src="images/slider_03.jpg" alt="" />
                </li>
                <li>
                    <img src="images/slider_04.jpg" alt="" />
                </li>
  			</ul>
		</div>
	</div>
	<!-- ************** -->
	<!-- FLEXSLIDER END -->
	<!-- ************** -->
    
    <div id="current_series">
    	<h3> Current Message </h3>
    <img src="">
    </div>
    
    <div id="latest_video">
            <h3> Latest Video </h3>
                <div id="youtube_video">
                <iframe width="300" height="300" src="https://www.youtube.com/embed/SDMN7GplXgM" frameborder="0" allowfullscreen></iframe>
                </div>
            <p> </p>
    </div>
    
    
    
    <div id="location">
    <h3> Location </h3>
    
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(33.789919, -117.850715),
          zoom: 18,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions);
		
		var marker = new google.maps.Marker ({
			position : new google.maps.LatLng(33.789919, -117.850715),
			map : map
			});
		
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <div id="map-canvas">
    </div>
    <p> *parking lot available </p>
    </div>
    
    <div id="come_join">
    <img src="">
    </div>
    
    <div id="fb-root">
    <div class="fb-like-box" data-href="https://www.facebook.com/HopeCenterOc?ref=br_tf" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="true"></div>
    </div>
    
    </div> <!--close home_content-->
    <?php include "includes/footer.php" ?>
</div> <!--closing id container-->

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


</body>
</html>