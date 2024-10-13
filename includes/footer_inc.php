<!-- Footer -->

<footer class="py-5 bg-dark">
  <div class="container">
    <div class="row" id="footer-text">
		<div class="col-lg-4 mb-4" >
			<ul>
			  <li> <a href="https://goo.gl/maps/texjVkaVyjQ2">The Blacksmiths, Calbourne Rd, Newport, Isle of Wight, PO30 5SS</a></li>
			  <li> <abbr title="Phone"></abbr><a href="tel:+441983529263">01983 529263</a></li>
			</ul>
		</div>
		<div class="col-lg-4 mb-4">
			<p class="m-0 text-white">Our current food hygiene rating:</p>
			<script type="text/javascript" src="https://widget.ratings.food.gov.uk/fhrswidget.jss?FHRSID=541550&Culture=en-GB"></script>
		</div></div> <!--extra /div is here to balance out FHRS widget-->

		<div class="col-lg-4 mb-4" >
			<p class="m-0 text-center text-white">This page is copyright &copy; The Blacksmiths <?php echo date("Y"); ?></p>
		</div>        
      </div><!--end of row-->
    
    <div class="row">
      <div class="col-lg-12 center-block text-center align-middle"> <a class="navbar-brand" href="index.php"><img src="images/anvil.png" alt="Blacksmiths" id="footer-logo"></a></div>
    </div>
  </div>
  <!-- /.container -->
</footer>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<?php if ($is_contact) { /* tests to see if we are on the contact page, as these scripts are only needed on that page 
<!-- Contact form JavaScript -->
<!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->*/?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqBootstrapValidation/1.3.7/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>
<?php } ?>
<script type='application/ld+json'>

  {
  "@context": "http://www.schema.org",
  "@type": "Restaurant",
  "name": "Blacksmiths",
  "url": "https://blacksmithsiow.co.uk/",
  "logo": "https://blacksmithsiow.co.uk/images/anvil.png",
  "image": "https://blacksmithsiow.co.uk/images/front-slideshow/Blacksmiths-front-slideshow-6.jpg",
  "servescuisine": "English, Pub",
  "pricerange": "££",
  "acceptsReservations": "Yes",
  "hasMenu": "https://blacksmithsiow.co.uk/menus.php",
  "description": "The Blacksmiths is a lively and popular Isle of Wight pub and restaurant, with great food and drink and spectacular views across the Solent.",
  "telephone": "+441983529263",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Calbourne Rd",
    "addressLocality": "NEWPORT",
    "postalCode": "PO30 5SS",
    "addressCountry": "UK"
  },
  "sameAs": "https://www.facebook.com/BlacksmithsIOW/",
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "50.689191",
    "longitude": "-1.343349"
  },
  "hasMap": "https://goo.gl/maps/gaC8t8ayu3w",
  "contactPoint": {
    "@type": "ContactPoint",
    "contactType": "sales",
    "telephone": "+441983529263"
  },
  "openingHoursSpecification": [
    {
      "@type": "OpeningHoursSpecification",
      "closes":  "20:00:00",
      "dayOfWeek": "http://schema.org/Sunday",
      "opens":  "12:00:00"
    },
    {
      "@type": "OpeningHoursSpecification",
      "closes": "23:00:00" ,
      "dayOfWeek": "http://schema.org/Saturday",
      "opens": "11:00:00"
    },
    {
      "@type": "OpeningHoursSpecification",
      "closes": "23:00:00" ,
      "dayOfWeek": "http://schema.org/Friday",
      "opens": "11:00:00"
    },    
	{
      "@type": "OpeningHoursSpecification",
      "closes": "23:00:00" ,
      "dayOfWeek": "http://schema.org/Thursday",
      "opens": "11:00:00"
    },    
	{
      "@type": "OpeningHoursSpecification",
      "closes": "23:00:00" ,
      "dayOfWeek": "http://schema.org/Wednesday",
      "opens": "11:00:00"
    },    
	{
      "@type": "OpeningHoursSpecification",
      "closes": "23:00:00" ,
      "dayOfWeek": "http://schema.org/Tuesday",
      "opens": "11:00:00"
    }
  ]
  }
  </script>
</body></html>