<?php
require "header.php";
?>
<div id="contact" class="container-fluid bg-grey">
  <h1 class="text-center">CONTACT US</h1>
  <hr class="hr1">
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Melbourne, Aus</p>
      <p><span class="glyphicon glyphicon-phone"></span> +61 123 456 789 </p>
      <p><span class="glyphicon glyphicon-envelope"></span> ait@ait.nsw.edu.au</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
            <form name="contactform" action="formtoemail.php" method="post" id="contact-form" class="text-left w-75">
              <input class="form-control" id="name" name="name" placeholder="Name" type="text" required="">
        </form></div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required="">
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
            
        </div>
      </div>
    </div>
  </div>
</div>

<div id="googleMap" style="height:400px;width:100%;"></div>
<script>
function myMap() {
var myCenter = new google.maps.LatLng(-37.818225, 144.954731);
var mapProp = {center:myCenter, zoom:17, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGSKubr8zQZdyapHs8aQ60cVwzYP94EKE&callback=myMap"></script>

<!--<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
var uni = {lat: -37.818225, lng: 144.954731};

var map = new google.maps.Map(document.getElementById("googleMap"),{zoom: 17, center: uni});

var marker = new google.maps.Marker({position: uni, map: map})
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGSKubr8zQZdyapHs8aQ60cVwzYP94EKE&callback=myMap"></script>-->
<?php
require "footer.php";
?>

