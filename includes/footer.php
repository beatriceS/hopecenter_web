<div id="footer">
	<div style="clear:both;"></div>
    
    <div style="clear:both;"></div>
    <div id="footer_info">
    	<h2> Come and Join Us </h2>
        	<div id="info_add">
                <h4> ADDRESS </h4>
                <p> 301 E. Maple Ave </p>
                <p> Orange, CA 92866</p>
                <H6> *Parking Lot Available </H6>
        	</div>
            
            <div id="info_schedule">
                <h4> WORSHIP SCHEDULE </h4>
                <p> Sunday Morning </p>
                <p> 10 AM </p>
                <H6> **Childcare Available </H6>
        	</div>
	</div> <!--footer info end-->
    
    <div id="location">
                <div id="map-canvas">
              	<a href="contact.php"></a>
                </div>
                <script src="https://maps.googleapis.com/maps/api/js"></script>
                <script>
                  function initialize() {
					var crosshairShape = {
						coords: [0, 0, 0, 0],
						type: 'rect'
					};
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
    		</div> <!--location end-->
            
    <div style="clear:both;"></div>
    
    <div id="copyright">
    <p> &copy; Copyright 2015 Hope Center of Christ </p>
    </div>
    
</div> <!--closing id footer-->