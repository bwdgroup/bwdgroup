<?php get_header(); ?>
<?php wp_reset_postdata();?>

<!-- Header -->

<header>

	<div class="header">

		<div class="container">

			<div class="logo">

				<h1>Auto<span>Start</span></h1>

			</div>


			<div class="item">Services</div>
			<div class="item">Location</div>
			<div class="item">Contact</div>

		</div>


	</div>

</header>

<!-- End Header -->



<!-- Introduction -->

<section>

	<div class="introduction">

		<div class="container">

			<div class="opening-hours">

				<?php

				$date = date("l"); 

				?>

        			<h2>Opening Hours <i class="fa fa-clock-o" aria-hidden="true"></i> </h2>

        		<ul>
        			<li class="<?if ($date == 'Monday') { echo "open"; } else { } ?>"><span>Monday:</span>09:00 - 17:30</li>
        			<li class="<?if ($date == 'Tuesday') { echo "open"; } else { } ?>"><span>Tuesday:</span>09:00 - 17:30</li>
        			<li class="<?if ($date == 'Wednesday') { echo "open"; } else { } ?>"><span>Wednesday:</span>09:00 - 17:30</li>
        			<li class="<?if ($date == 'Thursday') { echo "open"; } else { } ?>"><span>Thursday:</span>09:00 - 17:30</li>
        			<li class="<?if ($date == 'Friday') { echo "open"; } else { } ?>"><span>Friday:</span>09:00 - 17:30</li>
        			<li class="<?if ($date == 'Saturday') { echo "open"; } else { } ?>"><span>Saturday:</span>09:00 - 13:00</li>
        			<li class="<?if ($date == 'Sunday') { echo "open"; } else { } ?>"><span>Sunday:</span>Closed</li>
        		</ul>
				

			</div>

			<div class="company">

				<h1>Auto Start Service Repairs in Bolton </h1>

				<hr />

        	<? echo the_content();?>

        	<p><span>Call us today on 01204 392010</span></p>
				
			</div>


		</div>

	</div>


</section>

<!-- End Introduction -->

<!-- Gallery -->

<section>

	<div class="gallery">

		<div class="container">

			<div class="autofirst"></div>
			<div class="image" style="background:url('http://www.autofirstnetwork.com/wp-content/uploads/2015/10/ATR-Autofirst-Network-Photoshoot-HIGH-RES-25-e1522756578782-1000x407.jpg') no-repeat; background-size: cover;"></div>

		</div>

	</div>

</section>

<!-- End Gallery -->

<!-- Services -->

<section>

	<div class="services">

		<div class="container">


			<div class="title">

				<h2>Our Services</h2>

			</div>

			<div class="service">

        				<div class="item">

        			<div class="image" style="background:url('<?php echo get_site_url();?>/wp-content/uploads/battery.png') center no-repeat; background-size:70%;"> </div>
        			<div class="name"> Batteries</div>

        		</div>

        			<div class="item">

        			<div class="image" style="background:url('<?php echo get_site_url();?>/wp-content/uploads/brake-disk.png') center no-repeat; background-size:70%;"> </div>
        			<div class="name"> Brakes</div>

        		</div>

        					<div class="item">

        			<div class="image" style="background:url('<?php echo get_site_url();?>/wp-content/uploads/timing-belt.png') center no-repeat; background-size:70%;"> </div>
        			<div class="name"> Cambelts</div>

        		</div>

        		<div class="item">

        			<div class="image" style="background:url('<?php echo get_site_url();?>/wp-content/uploads/motor.png') center no-repeat; background-size:70%;"> </div>
        			<div class="name"> Diagnostics</div>

        		</div>

       
        	

        		<div class="item">

        			<div class="image" style="background:url('<?php echo get_site_url();?>/wp-content/uploads/exhaust-pipe.png') center no-repeat; background-size:70%;"> </div>
        			<div class="name"> Exhausts</div>

        		</div>

        		 		<div class="item">

        			<div class="image" style="background:url('<?php echo get_site_url();?>/wp-content/uploads/oil.png') center no-repeat; background-size:70%;"> </div>
        			<div class="name"> Oils &amp; Lubricants</div>

        		</div>

        				<div class="item">

        			<div class="image" style="background:url('<?php echo get_site_url();?>/wp-content/uploads/mot.png') center no-repeat; background-size:70%;"> </div>
        			<div class="name"> MOT</div>

        		</div>

        		<div class="item">

        			<div class="image" style="background:url('<?php echo get_site_url();?>/wp-content/uploads/shock-absorber.png') center no-repeat; background-size:70%;"> </div>
        			<div class="name"> Suspension</div>

        		</div>

        		<div class="item">

        			<div class="image" style="background:url('<?php echo get_site_url();?>/wp-content/uploads/wheel.png') center no-repeat; background-size:70%;"> </div>
        			<div class="name"> Tyres &amp; Wheels</div>

        		</div>

       
    		<div class="item">

        			<div class="image" style="background:url('<?php echo get_site_url();?>/wp-content/uploads/transmision.png') center no-repeat; background-size:70%;"> </div>
        			<div class="name"> Transmission</div>

        		</div>
        	

			</div>

	</div>

</section>


<!-- End Services -->


<!-- Contact Us -->

<section>

	<div class="contact">

		<div class="container">

			<div class="title">

				<h4>Auto<span>Start</span></h4>
				<p>Unit 19, Raikes Clough Ind Est.<br />
				Raikes Lane<br />
				Bolton Lancashire <br />
				BL3 1RP<br /><br />
				info@auto-start.co.uk<br />
				<span>01204 392010</span></p>

			</div>

			<div class="location">

				 <div id="map-canvas" class="map-canvas">

			</div>

		</div>

	</div>

</section>

<!-- End Contact Us -->

<!-- Footer -->

<footer>

	<div class="footer">

		<div class="container">

			<div class="copyright">

				<p>&copy; AutoStart Service Repairs | All Rights Reserved</p>

			</div>

			<div class="legal">

				<p>Terms and Conditions | Privacy Policy</p>

			</div>

		</div>

	</div>

</footer>

<!-- End Footer -->






<script>

    function initialize() {
    
    // BWD Group { Google Map Script 1.2 }

    // Create an array of styles.
    var styles = [
    {
        "featureType": "administrative.province",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 65
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 51
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "road.highway.controlled_access",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            },
            {
                "saturation": "7"
            },
            {
                "hue": "#00ff5a"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 30
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 40
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#ececec"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "lightness": -25
            },
            {
                "saturation": -100
            }
        ]
    }
];

    // Create a new StyledMapType object, passing it the array of styles,
    // as well as the name to be displayed on the map type control.
    var styledMap = new google.maps.StyledMapType(styles, {
        name : "AutoStart Google Map"
    });
    
    // Options

    var mapOptions = {
        zoom : 9,
        zoomControl: true,
        scaleControl: true,
        scrollwheel: false,
        draggable: false,
        mapTypeControl: false,
        scaleControl: true,
        streetViewControl: true,
        disableDoubleClickZoom: true,
        center : new google.maps.LatLng(53.554799, -2.534704), mapTypeControlOptions : { mapTypeIds :[google.maps.MapTypeId.ROADMAP, 'map_style'] }
            };

            var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

            //Associate the styled map with the MapTypeId and set it to display.
            map.mapTypes.set('map_style', styledMap);
            map.setMapTypeId('map_style');

            // Essex Branch

            var image =  '<? echo get_site_url(); ?>/wp-content/themes/bwdgroup/js/pin.png'; 
            var myLatLng = new google.maps.LatLng(53.554799, -2.534704);
        
            var marker = new google.maps.Marker({
            position : myLatLng,
            map : map,
            icon : image
        });

        }

        google.maps.event.addDomListener(window, 'load', initialize);

</script>

<?php get_footer(); ?>