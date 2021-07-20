<!-- Start Contact Area -->
<section class="htc__contact__area ptb--120 bg__white">
<center> 
         <div class="w3-container w3-padding-large w3-light-grey" style="width:90%">
        <h4 id="contact"><b>Contact Me</b></h4>
        <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
          <div class="w3-third w3-grey">
            <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
            <p>loisyemima@gmail.com</p>
          </div>
          <div class="w3-third w3-teal">
            <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
            <p>Jawa Timur, Banyuwangi</p>
          </div>
          <div class="w3-third w3-grey">
            <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
            <p>083111456789</p>
          </div>
        </div>
        <hr class="w3-opacity">
        <form action="kirim.php" method="post">
          <div class="w3-section">
            <label>Name</label>
            <input class="w3-input w3-border" type="text" name="nama" required>
          </div>
          <div class="w3-section">
            <label>Email</label>
            <input class="w3-input w3-border" type="text" name="email" required>
          </div>
          <div class="w3-section">
            <label>Message</label>
            <input class="w3-input w3-border" type="text" name="pesan" required>
          </div>
          <button type="submit" nama="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right">   
            </i>Send Message</button>
        </form>
      </div>
</div>
</section>
<!-- End Contact Area -->

<!-- jquery latest version -->
<script src="js/vendor/jquery-1.12.0.min.js"></script>
<!-- Bootstrap framework js -->
<script src="js/bootstrap.min.js"></script>
<!-- All js plugins included in this file. -->
<script src="js/plugins.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<!-- Google Map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmGmeot5jcjdaJTvfCmQPfzeoG_pABeWo"></script>
<script>
  // When the window has finished loading create our google map below
  google.maps.event.addDomListener(window, 'load', init);

  function init() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
      // How zoomed in you want the map to start at (always required)
      zoom: 12,

      scrollwheel: false,

      // The latitude and longitude to center the map (always required)
      center: new google.maps.LatLng(23.7286, 90.3854), // New York

      // How you would like to style the map. 
      // This is where you would paste any style found on Snazzy Maps.
      styles: [


        {
          "featureType": "administrative",
          "elementType": "all",
          "stylers": [{
            "hue": "#ff0000"
          }]
        },
        {
          "featureType": "administrative",
          "elementType": "geometry",
          "stylers": [{
            "color": "#888888"
          }]
        },
        {
          "featureType": "administrative",
          "elementType": "geometry.fill",
          "stylers": [{
            "hue": "#ff0000"
          }]
        },
        {
          "featureType": "administrative",
          "elementType": "labels.text",
          "stylers": [{
              "color": "#6e6e6e"
            },
            {
              "visibility": "simplified"
            }
          ]
        },
        {
          "featureType": "administrative.country",
          "elementType": "geometry",
          "stylers": [{
            "color": "#6f6b6b"
          }]
        },
        {
          "featureType": "landscape",
          "elementType": "labels.text",
          "stylers": [{
            "color": "#c5c5c5"
          }]
        },
        {
          "featureType": "landscape.natural",
          "elementType": "geometry",
          "stylers": [{
            "color": "#cfcfcf"
          }]
        },
        {
          "featureType": "landscape.natural.landcover",
          "elementType": "all",
          "stylers": [{
            "hue": "#ff0000"
          }]
        },
        {
          "featureType": "landscape.natural.landcover",
          "elementType": "geometry",
          "stylers": [{
            "hue": "#ff0000"
          }]
        },
        {
          "featureType": "poi",
          "elementType": "all",
          "stylers": [{
            "visibility": "off"
          }]
        },
        {
          "featureType": "poi",
          "elementType": "labels.text",
          "stylers": [{
              "visibility": "off"
            },
            {
              "color": "#909090"
            }
          ]
        },
        {
          "featureType": "poi",
          "elementType": "labels.icon",
          "stylers": [{
            "visibility": "off"
          }]
        },
        {
          "featureType": "poi.medical",
          "elementType": "geometry",
          "stylers": [{
            "color": "#e5e5e5"
          }]
        },
        {
          "featureType": "poi.park",
          "elementType": "geometry",
          "stylers": [{
            "color": "#e5e5e5"
          }]
        },
        {
          "featureType": "poi.place_of_worship",
          "elementType": "geometry",
          "stylers": [{
            "color": "#ff0000"
          }]
        },
        {
          "featureType": "poi.sports_complex",
          "elementType": "geometry",
          "stylers": [{
            "color": "#f7f7f7"
          }]
        },
        {
          "featureType": "road",
          "elementType": "geometry.fill",
          "stylers": [{
            "color": "#ffffff"
          }]
        },
        {
          "featureType": "road",
          "elementType": "geometry.stroke",
          "stylers": [{
            "gamma": 7.18
          }]
        },
        {
          "featureType": "road",
          "elementType": "labels.icon",
          "stylers": [{
            "visibility": "off"
          }]
        },
        {
          "featureType": "road.local",
          "elementType": "labels.text",
          "stylers": [{
            "visibility": "simplified"
          }]
        },
        {
          "featureType": "transit.line",
          "elementType": "geometry",
          "stylers": [{
            "gamma": 0.48
          }]
        },
        {
          "featureType": "transit.station",
          "elementType": "labels.icon",
          "stylers": [{
            "visibility": "off"
          }]
        },
        {
          "featureType": "water",
          "elementType": "all",
          "stylers": [{
              "color": "#bcbcbc"
            },
            {
              "visibility": "on"
            }
          ]
        },
        {
          "featureType": "water",
          "elementType": "labels.text.fill",
          "stylers": [{
            "color": "#ffffff"
          }]
        }
      ]
    };

    // Get the HTML DOM element that will contain your map 
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('googleMap');

    // Create the Google Map using our element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);

    // Let's also add a marker while we're at it
    var marker = new google.maps.Marker({
      position: new google.maps.LatLng(23.7286, 90.3854),
      map: map,
      title: 'Tasfiu!',
      icon: 'images/icons/map.png',
      animation: google.maps.Animation.BOUNCE

    });
  }
</script>


<!-- Waypoints.min.js. -->
<script src="js/waypoints.min.js"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="js/main.js"></script>