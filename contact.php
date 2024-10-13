<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Contact the Blacksmiths">

  <title>The Blacksmiths - Contact</title><?php include ($_SERVER["DOCUMENT_ROOT"] . '/includes/header_inc.php'); ?>
	
	<link rel="stylesheet" type="text/css" href="https://onsass.designmynight.com/?background-color=%23FFFFFF&primary-color=%23a9926d&body-text-color=%23000000&outer-border-color=gray">
   
</head>

<body>
  <div id="fb-root"></div><script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11&appId=145586212184938';
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  </script> <!-- Page Content -->

  <div class="container">
    <!-- Page Heading/Breadcrumbs -->

    <h1 class="my-4" id="lead-title">Contact the Blacksmiths</h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>

      <li class="breadcrumb-item active">Contact</li>
    </ol><!-- Content Row -->

<div class="row">
    <div class="col-lg-12 center-block text-center align-middle">
        <!-- Hide on large screens, show on medium and small screens -->
        <button type="button" class="btn btn-secondary btn-lg mb-4 d-lg-none">
            <a href="#booknow">Book a table</a>
        </button>
    </div>
  
</div>



    <div class="row">
      <!-- Map Column -->

      <div class="col-lg-4 mb-4">
        <p><a href="https://goo.gl/maps/texjVkaVyjQ2">The Blacksmiths, Calbourne Rd, Newport, Isle of Wight, PO30 5SS</a><br></p>
		<p><a href="tel:+441983529263">01983 529263</a></p>
		
		<?php // this section echos a seasonal message
					$current_day = date('j'); //get Day of the month without leading zeros
					$current_month = date('n'); //get Numeric representation of a month, without leading zeros
					$season = false;
					switch ($current_month) {
						case 1: // January
							$season = $current_day <= 2;
							break;
						case 9: // September
							$season = $current_day >= 28;
							break;
						case 10: // October
						case 11: // November
						case 12: // December
							$season = true;
							break;
						default:
							$season = false;
							break;
					}
					if ($season) {
						echo '<p><a href="menus.php">See our Christmas menu here</a></p>
						<ul><li>We are closed Christmas Day, Boxing Day and 27 December 2024</li>
						<li>No Christmas Party bookings on Sundays, or Christmas Eve. Our Christmas menu is not available on Sundays</li>
						<li>We are open serving food from 12-9pm on Monday 23rd December 2024</li>
						<li>Food served Christmas Eve 12-6pm</li>
						<li>We are closed on Monday 30th December 2024</li>
						<li>Food served New Years Eve and New Years Day 12-6pm</li>
						<li>The Christmas Menu requires a £10pp deposit in advance and a pre-order, please contact us for more information</li>
						</ul>';
					}
		?>

        
		
       <h3>Hours when food is served</h3>
        <ul>
          <li>Monday: Closed <!-- (Bank Holiday Mondays 4pm - 9pm) -->
		  <li>Tuesday to Thursday: 12 noon - 2.30pm and 5.30pm - 9pm</li>
		  <li>Friday and Saturday: 12 noon - 9pm</li>
          <li>Sunday: 12 noon - 6pm</li>
        </ul>
		
       <h3>Pub opening times</h3>
	   <ul> 
		<li>The pub is open Tuesday to Saturday 11am until 11pm</li>  
        <li>Sunday: 12 noon - 8pm</li>
	</ul>
	
      </div>

      <div id="booknow" class="col-lg-4 mb-4">
		
	 <div class="center-block text-center align-middle">
        <button type="button" class="btn btn-secondary btn-lg mb-4">
            <a href="https://blacksmithsarms.touchtakeaway.net/">Buy a voucher</a>
        </button>
    </div>
		
		
		<div>
			<script src="//widgets.designmynight.com/bookings-partner.min.js" dmn-booking-form="true" venue="5c45e7835a05b627d86b2374" hide-offers="false" hide-powered-by="true" search-venues="false" monday-first="true" locale="undefined"></script>
        </div>
      </div>

      <div class="col-lg-4 mb-4">
		<div class="fb-page" data-href="https://www.facebook.com/BlacksmithsIOW/" data-show-posts="true" data-width="" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/BlacksmithsIOW/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/BlacksmithsIOW/">The Blacksmith&#039;s Isle of Wight</a></blockquote></div>
      </div>
    </div><!-- /.row -->

    <div class="row">
      <div class="col-lg-12 mb-4">
        <!-- Embedded Google Map -->
        <iframe src=
        "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2527.657025989415!2d-1.3455377!3d50.689191!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48747d9933319a43%3A0xd35a83607446773e!2sThe+Blacksmiths+Arms!5e0!3m2!1sen!2suk!4v1511827846432"
        width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
      </div>
    </div>
  </div><!-- /.container -->
  <?php $is_contact = TRUE;?><?php include ($_SERVER["DOCUMENT_ROOT"] . '/includes/footer_inc.php'); ?>
</body>
</html>
