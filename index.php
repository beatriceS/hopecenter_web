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
    </style>
    
    
</head>

<body>
<div id="fb-root"></div>



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
                    <a href="images/slider_04.jpg" rel="example_group" title=""> <img src="images/slider_01.jpg" alt="" /> </a>
                </li>
                <li>
                    <a href="images/slider_01.jpg" rel="example_group" title=""> <img src="images/slider_02.jpg" alt="" /> </a>
                </li>
                <li>
                    <a href="images/slider_02.jpg" rel="example_group" title=""> <img src="images/slider_03.jpg" alt="" /> </a>
                </li>
                <li>
                    <a href="images/slider_03.jpg" rel="example_group" title=""> <img src="images/slider_04.jpg" alt="" /> </a>
                </li>
                <li>
                    <a href="images/slider_05.jpg" rel="example_group" title=""> <img src="images/slider_05.jpg" alt="" /> </a>
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
    
    <div id="map-canvas">
    <h3> Location </h3>
    <p> *parking lot available </p>
    </div>
    
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
    
    <div id="come_join">
    <img src="">
    </div>
    
    <div class="fb-like-box" data-href="https://www.facebook.com/HopeCenterOc?ref=br_tf" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="true"></div>
    
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