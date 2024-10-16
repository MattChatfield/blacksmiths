<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Blacksmiths - food and drink">
  <!--   <link href="https://fonts.googleapis.com/css?family=Smokum" rel="stylesheet">
  <style>
      @font-face {
                font-family: 'Old Comedy';
                src: url('fonts/OldComedy.woff2') format('woff2'),
                        url('fonts/OldComedy.woff') format('woff'),
                        url('fonts/OldComedy.ttf') format('truetype');
                font-weight: normal;
                font-style: normal;
        }
  </style> -->

  <title>Blacksmiths - food and drink</title><?php include ($_SERVER["DOCUMENT_ROOT"] . '/includes/header_inc.php'); ?>
  <!-- Page Content -->
</head>

<body>
  <div class="container">
    <!-- Page Heading/Breadcrumbs -->

    <h1 class="mt-4 mb-3">Food and drink<br>
    <small>Examples of menus</small></h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>

      <li class="breadcrumb-item active">Food and drink</li>
    </ol>

    <div class="row">
      <div class="col-lg-12 center-block text-center align-middle">
        <button type="button" class="btn btn-secondary btn-lg mb-4"><a href="https://blacksmithsiow.co.uk/contact.php">Book a
        table</a></button>
      </div>
    </div>

    <div class="col-lg-12 center-block text-center align-middle"><img class="img-fluid rounded mb-4" style=
    " width:100%; max-height: 200px" src="images/Blacksmiths-pie-narrow.jpg" alt="Pie at the Blacksmiths"></div>

    <div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">
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
						include ($_SERVER["DOCUMENT_ROOT"] . '/includes/christmas_inc.php');
					}
		?>

      <div class="card">
        <div class="card-header" role="tab" id="headingOne">
          <h2 class="mb-0"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
          aria-controls="collapseOne">Starters</a></h2>
        </div>

        <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
				<ul>
					<li>Soup of the Day, Fresh Bread <span class="float-right">£7</span></li>
					<li>Pan Seared Scallops, Roasted Butternut Squash Puree, Crispy Chorizo <span class="float-right">£12.50</span></li>
					<li>Breaded Camembert, Cranberry Chutney, Rocket & Garlic Crostini <span class="float-right">£9</span></li>
					<li>Spiced Heritage Carrots, Tahini Yogurt, Roasted Chickpeas, Flatbread Crackers <span class="float-right">£9</span></li>
					<li>Goats Cheese Tart - Fig & Balsamic Red Onion £8.50</li>
				</ul>
				<h3>Bao Buns</h3>
				<ul>
					<li>Teriyaki Mushroom <span class="float-right">£9</span></li>
					<li>Shredded Salt n’ Pepper Chicken <span class="float-right">£9</span></li>
					<li>Tempura King Prawns <span class="float-right">£9.75</span></li>
					<li>All served with Sriracha Mayo, Crispy Onions and Pickled Vegetables</li>
				</ul>
              </div>

              <div class="col-lg-6 center-block text-center align-middle"><img class="img-fluid rounded mb-4" style=
              "max-height: 400px" src="images/salmon1.jpg" alt="Salmon at the Blacksmiths"></div>
            </div>
          </div>
        </div>

        <!--<div class="card">
          <div class="card-header" role="tab" id="headingBao">
            <h2 class="mb-0"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseBao"
            aria-expanded="false" aria-controls="collapseThirteen">Bao Buns</a></h2>
          </div>

          <div id="collapseBao" class="collapse" role="tabpanel" aria-labelledby="headingBao">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-12">
                  <p>£8.50 Each (2 per portion). Please choose one from the following options:</p>

                  <ul>
                    <li>Hoisin Duck, Spring Onions, Coriander</li>

                    <li>Spicy Fried Chicken, Sriracha Mayo, Pickled Red Onion</li>

                    <li>Wild Mushrooms, Teriyaki, Lime</li>
                  </ul>

                  <p></p>
                </div>
              </div>
            </div>
          </div>
        </div>-->

        <div class="card">
          <div class="card-header" role="tab" id="headingThirteen">
            <h2 class="mb-0"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen"
            aria-expanded="false" aria-controls="collapseThirteen">Sandwiches & Ploughman&#39;s</a></h2>
          </div>

          <div id="collapseThirteen" class="collapse" role="tabpanel" aria-labelledby="headingThirteen">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-12">
					<p><strong>Served 12:00-2:30</strong>. All served with Skinny Fries & Salad, Choice of White, Wholemeal or Gluten-Free Bread</p>
					<p>Blacksmiths Ploughman’s - Cheddar, Blue Cheese, Our Own Cooked Gammon Ham, Pickled Onions & Gherkins, Mixed Salad, Spicy Tomato Chutney, Celery, Apple, Grapes & Sourdough Bread £14</p>
				<ul>
					<li>Roast Beef & Horseradish <span class="float-right">£8.50</span></li>
					<li>Falafel, Roasted Red Pepper, Hummus & Lettuce <span class="float-right">£8.25</span></li>
					<li>Honey & Wholegrain Mustard Glazed Ham, Applewood Cheddar & Pickle <span class="float-right">£8</span></li>
					<li>Prawns, Baby Gem Lettuce, Marie Rose Sauce <span class="float-right">£9.25</span></li>
				</ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" role="tab" id="headingFive">
            <h2 class="mb-0"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive"
            aria-expanded="false" aria-controls="collapseFive">Mains</a></h2>
          </div>

          <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
				<ul>
					<li>
						<strong>‘Shortcrust Pastry Newchurch Pie’</strong> - Filled with Slow Cooked Lamb Shank, Garlic, Spinach & Redcurrant Gravy, House Potatoes, Vegetables <span class="float-right">£17/£12</span>
					</li>
					<li>
						<strong>Mariners Pie</strong> - Cod, Smoked Haddock, Chalkstream Trout, Prawns, Cheesy Mash Potato, Herb Crust <span class="float-right">£18</span>
					</li>
					<li>
						<strong>Roast Pork Belly</strong> - Pork Shoulder Bon Bon, Poached Pear, Smoked Bacon Mash, Jus & Vegetables <span class="float-right">£17.50/£13</span>
					</li>
					<li>
						<strong>12-Hour Slow Cooked BBQ Beef Brisket</strong> - Red Cabbage Coleslaw, Lime Butter Corn on the Cob & Skinny Fries <span class="float-right">£18</span>
					</li>
					<li>
						<strong>Chicken OR Tofu Katsu Curry</strong> - Coconut Rice, Katsu Sauce, Pickled Vegetables, Coriander <span class="float-right">£17</span>
					</li>
					<li>
						<strong>Chicken Caesar Salad</strong> - Crispy Bacon, Croutons, Parmesan & Crispy Egg Yolk <span class="float-right">£17/£13</span>
					</li>
					<li>
						<strong>Spinach & Feta filo Pie</strong> - Toasted Pine Nuts, Pesto Sauce, House Potatoes & Greens <span class="float-right">£17</span>
					</li>
				</ul>

                </div>

                <div class="col-lg-6 center-block text-center">
                  <p><img class="img-fluid rounded mb-4" style="max-height: 400px" src="images/Blacksmiths-pie.jpg" alt=
                  "Newchurch Pie at the Blacksmiths"></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" role="tab" id="headingSix">
            <h2 class="mb-0"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix"
            aria-expanded="false" aria-controls="collapseSix">Sunday Roast</a></h2>
          </div>

          <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix">
            <div class="card-body">
              <p>Roast dinner served every Sunday from 12 noon until 6pm, subject to availability.</p>

              <ul>
                <li>Leg of Lamb, Rump of Beef and Belly of Pork</li>

                <li>Or a trio of meats if you can’t make up your mind!</li>
              </ul>

              <p>All served with roast and new potatoes, fresh vegetables, a giant Yorkshire pudding and plenty of gravy. Gluten
              free roast available. Vegetarian/vegan on request: mushroom, parsnip, red onion and baby spinach Wellington.</p>

              <p>All priced at Large £16.50 Small £12.00. Or a Trio (A slice of each) £18.50 large, £15.50 small.</p>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" role="tab" id="headingFour">
            <h2 class="mb-0"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour"
            aria-expanded="false" aria-controls="collapseFour">Home comforts</a></h2>
          </div>

          <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
				<ul>
					<li>
						<strong>Island Ales Beer Battered Haddock</strong>, Chunky Chips, Peas & Homemade Tartare Sauce. <span class="float-right">£16/£12</span>
					</li>
					<li>
						<strong>Scampi</strong>, Chips, Peas & Homemade Tartare Sauce <span class="float-right">£14/£10</span>
					</li>
					<li>
						<strong>Omelette With a Choice of 3 Fillings:</strong>
						<ul>
							<li>Ham</li>
							<li>Tomato</li>
							<li>Mushrooms</li>
							<li>Brie</li>
							<li>Cheddar</li>
							<li>Red Onion</li>
						</ul>
						<em>Served with Chips & Salad</em> <span class="float-right">£12</span>
					</li>
					<li>
						<strong>Honey & Wholegrain Mustard Glazed Ham</strong>, Free Range Eggs & Chips <span class="float-right">£13.50/£10</span>
					</li>
					<li>
						<strong>10oz Chicken Breast</strong>, Chips & Salad <span class="float-right">£16</span>
					</li>
					<li>
						<em>Please choose a topping from one of the following options:</em>
						<ul>
							<li>Garlic & Red Onion Butter</li>
							<li>Creamy Peppercorn & Brandy Sauce</li>
							<li>The New Yorker: Homemade BBQ Sauce, Bacon & Mozzarella</li>
						</ul>
					</li>
				</ul>


                </div>

                <div class="col-lg-6 center-block text-center">
                  <p><img class="img-fluid rounded mb-4" style="max-height: 400px" src="images/Blacksmiths-fish.jpg" alt=
                  "Fish and chips at the Blacksmiths"></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" role="tab" id="headingEleven">
            <h2 class="mb-0"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven"
            aria-expanded="false" aria-controls="collapseEleven">Steaks and burgers</a></h2>
          </div>

          <div id="collapseEleven" class="collapse" role="tabpanel" aria-labelledby="headingEleven">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
				<ul>
					<li>
						<strong>10oz Sirloin Steak</strong> - Flat Mushrooms, Beef Tomato, Onion Rings, Chips, Rocket, Pea Shoots & Pickled Red Onion <span class="float-right">£29</span>
					</li>
					<li>
						<strong>T-Bone Steak with Black Garlic Butter</strong> - Béarnaise & Peppercorn Sauce, Skinny Fries, Rocket, Pea Shoots & Pickled Red Onion <span class="float-right">£32</span>
					</li>
					<li>
						<strong>The Blacksmiths Mixed Grill</strong> <span class="float-right">£32</span>
						<ul>
							<li>Rump Steak</li>
							<li>Lamb</li>
							<li>Gammon</li>
							<li>Chicken</li>
							<li>Pork</li>
							<li>Egg & Cumberland Sausage</li>
							<li>Flat Mushrooms, Beef Tomato, Onion Rings, Chips & Salad</li>
						</ul>
					</li>
					<li>
						<em>Add Peppercorn Sauce / Blue Cheese Sauce / Garlic Butter Sauce / B&eacute;arnaise Sauce.</em> <span class="float-right">£3</span>
					</li>
					<li>
						<strong>8oz Beef Burger</strong> - Crispy Bacon, Cheddar, Garlic Aioli, Relish <span class="float-right">£16.50</span>
					</li>
					<li>
						<strong>Filthy Animal Burger</strong> - 8oz Beef Burger, Breaded Camembert, Hoisin Duck, Sweet Chilli Jam, Marmite Mayo, Pig in Blanket, Lettuce, Tomato<span class="float-right">£19</span>
					</li>
					<li>
						<strong>Beetroot & Chickpea Burger</strong> - Grilled Halloumi, Sriracha Mayo <span class="float-right">£16.50</span>
					</li>
					<li>
						<em>All burgers served with skinny fries & homemade red cabbage coleslaw.</em>
					</li>
				</ul>


                </div>

                <div class="col-lg-6 center-block text-center">
                  <p><img class="img-fluid rounded mb-4" style="max-height: 400px" src="images/filth-animal-burger-pic.jpg" alt=
                  "Filthy Animal burger at the Blacksmiths"></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" role="tab" id="headingTwelve">
            <h2 class="mb-0"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve"
            aria-expanded="false" aria-controls="collapseTwelve">Sides</a></h2>
          </div>

          <div id="collapseTwelve" class="collapse" role="tabpanel" aria-labelledby="headingTwelve">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
					<ul>
						<li>Seasonal Vegetables <span class="float-right">£4.50</span></li>
						<li>Garden Salad <span class="float-right">£4</span></li>
						<li>Frickles <span class="float-right">£4.50</span></li>
						<li>Garlic Bread <span class="float-right">£4.50</span></li>
						<li>Garlic Mozzarella Bread <span class="float-right">£5.50</span></li>
						<li>Onion Rings & Garlic Aioli <span class="float-right">£4</span></li>
						<li>Skinny Fries <span class="float-right">£4.50</span></li>
						<li>Sweet Potato Fries <span class="float-right">£4.95</span></li>
						<li>Chunky Chips <span class="float-right">£4.50</span></li>
					</ul>
                </div>

                <div class="col-lg-6 center-block text-center">
                  <p><img class="img-fluid rounded mb-4" style="max-height: 400px" src="" alt=""></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" role="tab" id="headingEight">
            <h2 class="mb-0"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight"
            aria-expanded="false" aria-controls="collapseEight">Childrens menu</a></h2>
          </div>

          <div id="collapseEight" class="collapse" role="tabpanel" aria-labelledby="headingEight">
            <div class="card-body">
              <p>All main courses £6.50</p>

              <ul>
                <li>Cod Goujons & fries</li>

                <li>Beef Burger & fries</li>

                <li>Real chicken breast nuggets & fries</li>

                <li>Four cheese pizza & fries</li>

                <li>Quorn nuggets & fries</li>
              </ul>

              <p>All above served with a choice of beans, peas or carrot and cucumber sticks</p>

              <ul>
                <li>Macaroni cheese & garlic bread</li>

                <li>Pork sausage, mash, peas & gravy</li>
              </ul>

              <div>
                <p>Childrens desserts:</p>

                <ul>
                  <li>Churros, chocolate sauce, vanilla ice cream £4.50</li>

                  <li>Double chocolate & Oreo brownie, vanilla ice cream £4.50</li>

                  <li>Selection of Yarde Farm ice cream 2 scoops £3.50 / 1 scoop £1.75</li>
                </ul>
              </div>

              <div>
                <p>Light bite versions of many of our main meals are also available, see smaller prices in the main menu.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" role="tab" id="headingSeven">
            <h2 class="mb-0"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven"
            aria-expanded="false" aria-controls="collapseSeven">Desserts</a></h2>
          </div>

          <div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
					<p><em>All made with a little T.L.C: <span>£7.50 except where marked otherwise</em></span></p>
					<ul>
						<li>
							<strong>Fresh &amp; Fabulous Strawberry Pavlova</strong> - Chantilly Cream &amp; Coulis
							<ul>
								<li>(Mini pavlova £5)</li>
							</ul>
						</li>
						<li>
							<strong>“George’s, Warm, Chocolate Fudge Cake”</strong> - Chocolate Fudge sauce & vanilla ice cream
						</li>
						<li>
							<strong>“Bramley Apple, Pear & Ginger Toasted Oat Crumble”</strong> - with custard
						</li>
						<li>
							<strong>“Sticky Toffee Pudding Ice Cream Sundae”</strong> - butterscotch sauce, honeycomb, cream, vanilla & salted caramel ice cream
						</li>
						<li>
							<strong>“White Chocolate & Raspberry Creme Brulee”</strong> - Shortbread Biscuit
						</li>
						<li>
							<strong>“Affogato”</strong> - 2 Scoops of Vanilla Ice Cream, Double Espresso & Biscotti Biscuits <span class="float-right">£6.50</span>
						</li>
						<li>
							<strong>Blacksmiths Cheeseboard</strong> - Cheddar, Brie & Blue Cheese, quince jelly, apple, grapes & artisan crackers <span class="float-right">£9</span>
						</li>
						<li>
							<strong>Vegan Desserts available</strong> – please ask a member of staff
						</li>
						<li>
							<strong>Selection Of Yarde Farm Ice Cream</strong> –
							<ul>
								<li>2 Scoops £3.50</li>
								<li>3 Scoops £4.75</li>
							</ul>
							<ul>
								<li>Vanilla</li>
								<li>Chunky Chocolate</li>
								<li>Strawberry</li>
								<li>Mint Chocolate Chip</li>
								<li>Salted Caramel</li>
								<li>Lotus Biscoff</li>
								<li>Blackcurrant & Clotted Cream</li>
								<li>Rum & Raisin</li>
								<li>Mango Sorbet</li>
								<li>Vegan Vanilla</li>
								<li>Vegan Strawberry</li>
								<li>Vegan Chocolate</li>
							</ul>
						</li>
					</ul>

                </div>

                <div class="col-lg-6 center-block text-center">
                  <p><img class="img-fluid rounded mb-4" style="max-height: 400px" src="images/atomic-pavlova.jpg" alt=
                  "Pavlova at the Blacksmiths"></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" role="tab" id="headingTen">
            <h2 class="mb-0"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen"
            aria-expanded="false" aria-controls="collapseTen">Wine list</a></h2>
          </div>

          <div id="collapseTen" class="collapse" role="tabpanel" aria-labelledby="headingTen">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-12">
                  <p><a href="assets/June_2023_The_Blacksmiths_Wine_List.pdf">Download our full wine list</a>. Includes a selection of vegan wines.</p>  
                </div>
              </div>
            </div>
          </div>
        </div>
		<div class="row px-2">
			<div class="col-lg-12">
				<p>Please notify a staff member of any dietary requirements or allergies & we will adapt the menu to suit. Some dishes may contain small bones or shot, please be careful.</p>
			</div>
		</div>
      </div><!-- /.container -->
      <?php include ($_SERVER["DOCUMENT_ROOT"] . '/includes/footer_inc.php'); ?>
    </div>
  </div>
</body>
</html>
