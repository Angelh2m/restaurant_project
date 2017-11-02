<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package restaurant
 */

get_header(); ?>


<!-- Home -->

	<div id="hero" class="hero" style="background: url('<?php bloginfo('template_url'); ?>/img/header_image.jpg')">
		<div class="hero__overlay"></div>
		<div class="hero__float_text">
			<div>
				BEST BURGER IN <br> BROOKLYN <br>
			</div>
			<p>LOCALLY SOURCED × CRAFTED WITH LOVE</p>
		</div>
	</div>


<!-- Main -->
<main>

	<!-- Restaurant -->
	<div id="restaurant" class="row">
		<div class="container content">
			<div>
				<div class="col-8">
					<h2>Located in Park Slope, Pacific Tavern is a purveyor of fine American dining from the esteemed Chef Billy Lang.</h2>
					<h3>PHOTOS BY NICOLE FRANZEN</h3>
					<p class="content__description">Pacific Tavern opened in May 2010 and is located inside the Smith Hotel Brooklyn. Since then, Golden Spork winner Chef Lang has been serving both quality interpretations of classic dishes and daring new ventures into the uncharted territories of food.</p>
					<p>
						Pacific Tavern's interior, designed by the award-winning Hayden Collective, reflects the hip sensibilities of the surrounding area while also paying tribute to Brooklyn's storied past. The multi-level restaurant offers the choice to observe passers-by in the glass-encased Cascade Bar on the 2nd floor, or watch the art of cooking as it occurs in the open-kitchen dining room.</p>
					</div>
					<div class="col-1"></div>
					<div class="col-3">

						<h3>PHONE</h3>
						<p>(347) 555-1234</p>

						<h3 class="content__spacer">lOCATION</h3>
						<p>74 5th Avenue<br>at St. Marks Place<br>Brooklyn, NY 11217</p>

						<h3 class="content__spacer">HOURS</h3>
						<p><strong>M-Th</strong> 5p–11p<br><strong>F-Sa</strong> 12p–11p<br><strong>Su</strong> 10a–11p</p>

					</div>
				</div>
			</div>

			<!-- Gallery -->
			<div class="gallery">
				<div class="gallery__controller">
					<span id="prev">Prev</span>
						<span id="next">Next</span>
				</div>
				<ul>
					<li class="active">
						<span class="gallery__image"
						style="background: url('<?php bloginfo('template_url'); ?>/img/breakfast.jpg');"> </span>
					</li>
					<li>
						<span class="gallery__image"
						style="background: url('<?php bloginfo('template_url'); ?>/img/salad.jpg');"> </span>
					</li>
				</ul>
			</div>
	</div>



	<!-- The Menu -->
	<div class="the-menu row" id="menu" >

		<img
		class="the-menu__logo"
		src="<?php bloginfo('template_url'); ?>/img/logo_dark.png"
		>

		<div class="container">
				<h3 class="the-menu__subtitle">SNACKS X SALADS</h3>
				<div class="col-6">
					<div class="flex_menu">
						<div>
							<h3>Primavera Salad</h3>
							<p>
								arugula, cherry tomato, shaved almonds, shallot vinaigrette
							</p>
						</div>
						<div><span>$8</span></div>
					</div>
					<!-- End -->
				</div>

				<div class="col-6">
					<div class="flex_menu">
						<div>
							<h3>Grilled Calamari</h3>
							<p>
								tomato sauce, lemon
							</p>
						</div>
						<div><span>$12</span></div>
					</div>

					<div class="flex_menu">
						<div>
							<h3>Mac and Cheese</h3>
							<p>
								cheddar, gruyere, gouda, truffle oil
							</p>
						</div>
						<div><span>$13</span></div>
					</div>
					<!-- End -->
				</div>

				<h3 class="the-menu__subtitle">SANDWICHES</h3>

				<div class="col-6">

					<div class="flex_menu">
						<div>
							<h3>Alpine</h3>
							<p>
								fontina, gruyere, truffle oil on multigrain toast
							</p>
						</div>
						<div><span>$10</span></div>
					</div>

					<div class="flex_menu">
						<div>
							<h3>Raleigh</h3>
							<p>
								coleslaw, barbecue sauce, pickles on sesame roll
							</p>
						</div>
						<div><span>$13</span></div>
					</div>

					<div class="flex_menu">
						<div>
							<h3>Milanese</h3>
							<p>
								fried chicken, lettuce, tomato, mayo on focaccia
							</p>
						</div>
						<div><span>$13</span></div>
					</div>
					<!-- End -->
				</div>

				<div class="col-6">

					<div class="flex_menu">
						<div>
							<h3>Reuben</h3>
							<p>
								pastrami, coleslaw, russian dressing on rye
							</p>
						</div>
						<div><span>$15</span></div>
					</div>

					<div class="flex_menu">
						<div>
							<h3>Flatiron</h3>
							<p>
								steak, havarti, fried onions, chipotle mayo on challah
							</p>
						</div>
						<div><span>$15</span></div>
					</div>

					<div class="flex_menu">
						<div>
							<h3>Classic</h3>
							<p>
								ham, unmelted cheddar, mayo on kaiser roll
							</p>
						</div>
						<div><span>$15</span></div>
					</div>
					<!-- End -->
				</div>

				<h3 class="the-menu__subtitle">MAINS</h3>

				<div class="col-6">

					<div class="flex_menu">
						<div>
							<h3>Lobster Bolognese</h3>
							<p>
								linguini, lobster tail, herbs in tomato & garlic broth
							</p>
						</div>
						<div><span>$28</span></div>
					</div>

					<div class="flex_menu">
						<div>
							<h3>Dry-Aged Rib-Eye</h3>
							<p>
								grass-fed, with arugula salad, smashed potatoes
							</p>
						</div>
						<div><span>$36</span></div>
					</div>


					<!-- End -->
				</div>

				<div class="col-6">
					<div class="flex_menu">
						<div>
							<h3>Braised Lamb</h3>
							<p>
								jasmine rice pilaf, roasted almonds, sesame soy reduction
							</p>
						</div>
						<div><span>$25</span></div>
					</div>

					<div class="flex_menu">
						<div>
							<h3>Salmon Steak</h3>
							<p>
								quinoa, roasted carrots, mustard lemon glaze
							</p>
						</div>
						<div><span>$28</span></div>
					</div>

					<div class="flex_menu">
						<div>
							<h3>Burger</h3>
							<p>
								gruyere, fried onions, special sauce on challah roll
							</p>
						</div>
						<div><span>$20</span></div>
					</div>
				</div>
			<!-- End -->
		</div>
	</div>





	<!-- Drink menu -->

	<div class="drink_menu" id="drinks">

	<div class="drink_menu__back-image" style="background: url('<?php bloginfo('template_url'); ?>/img/drink.jpg')" > </div>

	<div class="container">
			<div class="drink_menu__details ">
			<img
			class="drink_menu__logo"
			src="<?php bloginfo('template_url'); ?>/img/logo.png"
			>
			<div class="row">
				<div class="col-4">

					<div class="flex_menu">
						<div>
							<h3>Manhattan</h3>
							<p>
								rye whisky, sweet vermouth, bitters
							</p>
						</div>
						<div><span>$11</span></div>
					</div>

					<div class="flex_menu">
						<div>
							<h3>Dark & Stormy</h3>
							<p>
								black rum, ginger beer, lime
							</p>
						</div>
						<div><span>$9</span></div>
					</div>

					<div class="flex_menu">
						<div>
							<h3>Old Cuban</h3>
							<p>
								aged rum, lime juice, bitters, champagne
							</p>
						</div>
						<div><span>$11</span></div>
					</div>


					<div class="flex_menu">
						<div>
							<h3>Negroni</h3>
							<p>
								gin, vermouth rosso, campari
							</p>
						</div>
						<div><span>$11</span></div>
					</div>


					<div class="flex_menu">
						<div>
							<h3>Bloody Mary</h3>
							<p>
								tomato juice, vodka, tabasco, bacon bits
							</p>
						</div>
						<div><span>$9</span></div>
					</div>


					<div class="flex_menu">
						<div>
							<h3>Green & Amber/h3>
							<p>
								vodka, single-malt scotch, honey, lemon, green tea
							</p>
						</div>
						<div><span>$12</span></div>
					</div>


					<div class="flex_menu">
						<div>
							<h3>White Russian</h3>
							<p>
								vodka, tia maria, heavy cream
							</p>
						</div>
						<div><span>$9</span></div>
					</div>



				</div>

				<div class="col-4">


					<div class="flex_menu">
						<div>
							<h3>Sauvignon Blanc</h3>
							<p>
								cloudy bay, new zealand, 2012
							</p>
						</div>
						<div><span>$18</span></div>
					</div>

					<div class="flex_menu">
						<div>
							<h3>Pinot Grigio</h3>
							<p>
								corte della torre, veneto, 2012
							</p>
						</div>
						<div><span>$13</span></div>
					</div>

					<div class="flex_menu">
						<div>
							<h3>Chardonnay</h3>
							<p>
								gavilan, monterey, 2012
							</p>
						</div>
						<div><span>$13</span></div>
					</div>


					<div class="flex_menu">
						<div>
							<h3>Pinot Noir</h3>
							<p>
								heron, napa, 2011
							</p>
						</div>
						<div><span>$14</span></div>
					</div>

					<div class="flex_menu">
						<div>
							<h3>Cabernet Sauvignon</h3>
							<p>
								slingshot, napa, 2010
							</p>
						</div>
						<div><span>$12</span></div>
					</div>


					<div class="flex_menu">
						<div>
							<h3>Pianrosso</h3>
							<p>
								brunello di montacino, toscana, 2003
							</p>
						</div>
						<div><span>$22</span></div>
					</div>

					<div class="flex_menu">
						<div>
							<h3>Prosecco</h3>
							<p>
								bortolotti, brut, veneto, 2010
							</p>
						</div>
						<div><span>$14</span></div>
					</div>
					<!-- CLOSE -->
				</div>

				<div class="col-4">
					<div class="flex_menu">
						<div>
							<h3>Lagunitas</h3>
							<p>
								ipa, california
							</p>
						</div>
						<div><span>$7</span></div>
					</div>

					<div class="flex_menu">
						<div>
							<h3>21st Amendment</h3>
							<p>
								back in black ipa, san francisco
							</p>
						</div>
						<div><span>$8</span></div>
					</div>

					<div class="flex_menu">
						<div>
							<h3>Breakside</h3>
							<p>
								wanderlust ipa, oregon
							</p>
						</div>
						<div><span>$8</span></div>
					</div>

					<div class="flex_menu">
						<div>
							<h3>Hill Farmstead</h3>
							<p>
								edward apa, vermont
							</p>
						</div>
						<div><span>$11</span></div>
					</div>

					<div class="flex_menu">
						<div>
							<h3>Alchemist</h3>
							<p>
								heady topper, vermont
							</p>
						</div>
						<div><span>$15</span></div>
					</div>

					<div class="flex_menu">
						<div>
							<h3>Hofbräu</h3>
							<p>
								dunkel, munich
							</p>
						</div>
						<div><span>$8</span></div>
					</div>

					<div class="flex_menu">
						<div>
							<h3>Delirium Tremens</h3>
							<p>
								golden ale, belgium
							</p>
						</div>
						<div><span>$12</span></div>
					</div>

						<!-- Close  -->
				</div>
			</div>

		</div>
	</div>


	</div>


	<!-- Make a reservation -->
	<div class="reservations" id="reservations">
		<h1>Make a reservation</h1>
		<h2>POWERED BY OPENTABLE</h2>
		<div>
			<a href="#" class="reservations__button">Find a Table</a>
		</div>

		<p>Call (347) 555–1234 from 5a – 11p daily, or book online with OpenTable.
	<br>
	<em>Reservations required for parties of 6 or more.</em>
	 </p>
	</div>

	<!-- Social  -->
	<div class="social">
		<span><svg id="vimeo-mask" viewBox="0 0 64 64" width="100%" height="100%"><path d="M0,0v64h64V0H0z M40.9,37c-4.1,5.3-7.5,8-10.4,8c-1.7,0-3.2-1.6-4.4-4.8c-0.8-3-1.6-5.9-2.4-8.9 c-0.9-3.2-1.9-4.8-2.9-4.8c-0.2,0-1,0.5-2.4,1.4L17,26c1.5-1.3,2.9-2.6,4.4-3.9c2-1.7,3.5-2.6,4.4-2.7c2.3-0.2,3.8,1.4,4.3,4.8 c0.6,3.7,1,6,1.2,6.9c0.7,3.1,1.4,4.6,2.2,4.6c0.6,0,1.6-1,2.8-3c1.3-2,1.9-3.5,2-4.5c0.2-1.7-0.5-2.6-2-2.6c-0.7,0-1.5,0.2-2.2,0.5 c1.5-4.8,4.3-7.2,8.4-7c3.1,0.1,4.5,2.1,4.4,6C46.9,27.9,44.8,31.9,40.9,37z"></path></svg></span>

		<span> <svg id="instagram-mask" viewBox="0 0 64 64" width="100%" height="100%"><path d="M43.693,23.153c-0.272-0.7-0.597-1.2-1.122-1.725c-0.525-0.525-1.025-0.85-1.725-1.122c-0.529-0.205-1.323-0.45-2.785-0.517c-1.582-0.072-2.056-0.087-6.061-0.087s-4.48,0.015-6.061,0.087c-1.462,0.067-2.257,0.311-2.785,0.517c-0.7,0.272-1.2,0.597-1.725,1.122c-0.525,0.525-0.85,1.025-1.122,1.725c-0.205,0.529-0.45,1.323-0.516,2.785c-0.072,1.582-0.087,2.056-0.087,6.061s0.015,4.48,0.087,6.061c0.067,1.462,0.311,2.257,0.516,2.785c0.272,0.7,0.597,1.2,1.122,1.725s1.025,0.85,1.725,1.122c0.529,0.205,1.323,0.45,2.785,0.516c1.581,0.072,2.056,0.087,6.061,0.087s4.48-0.015,6.061-0.087c1.462-0.067,2.257-0.311,2.785-0.516c0.7-0.272,1.2-0.597,1.725-1.122s0.85-1.025,1.122-1.725c0.205-0.529,0.45-1.323,0.516-2.785c0.072-1.582,0.087-2.056,0.087-6.061s-0.015-4.48-0.087-6.061C44.143,24.476,43.899,23.682,43.693,23.153z M32,39.703c-4.254,0-7.703-3.449-7.703-7.703s3.449-7.703,7.703-7.703s7.703,3.449,7.703,7.703S36.254,39.703,32,39.703z M40.007,25.793c-0.994,0-1.8-0.806-1.8-1.8c0-0.994,0.806-1.8,1.8-1.8c0.994,0,1.8,0.806,1.8,1.8C41.807,24.987,41.001,25.793,40.007,25.793z M0,0v64h64V0H0z M46.91,38.184c-0.073,1.597-0.326,2.687-0.697,3.641c-0.383,0.986-0.896,1.823-1.73,2.657c-0.834,0.834-1.67,1.347-2.657,1.73c-0.954,0.371-2.044,0.624-3.641,0.697C36.585,46.983,36.074,47,32,47s-4.585-0.017-6.184-0.09c-1.597-0.073-2.687-0.326-3.641-0.697c-0.986-0.383-1.823-0.896-2.657-1.73c-0.834-0.834-1.347-1.67-1.73-2.657c-0.371-0.954-0.624-2.044-0.697-3.641C17.017,36.585,17,36.074,17,32c0-4.074,0.017-4.585,0.09-6.185c0.073-1.597,0.326-2.687,0.697-3.641c0.383-0.986,0.896-1.823,1.73-2.657c0.834-0.834,1.67-1.347,2.657-1.73c0.954-0.371,2.045-0.624,3.641-0.697C27.415,17.017,27.926,17,32,17s4.585,0.017,6.184,0.09c1.597,0.073,2.687,0.326,3.641,0.697c0.986,0.383,1.823,0.896,2.657,1.73c0.834,0.834,1.347,1.67,1.73,2.657c0.371,0.954,0.624,2.044,0.697,3.641C46.983,27.415,47,27.926,47,32C47,36.074,46.983,36.585,46.91,38.184z M32,27c-2.761,0-5,2.239-5,5s2.239,5,5,5s5-2.239,5-5S34.761,27,32,27z"></path></svg>
		</span>

		<span><svg id="twitter-mask" viewBox="0 0 64 64" width="100%" height="100%"><path d="M0,0v64h64V0H0z M44.7,25.5c0,0.3,0,0.6,0,0.8C44.7,35,38.1,45,26.1,45c-3.7,0-7.2-1.1-10.1-2.9 c0.5,0.1,1,0.1,1.6,0.1c3.1,0,5.9-1,8.2-2.8c-2.9-0.1-5.3-2-6.1-4.6c0.4,0.1,0.8,0.1,1.2,0.1c0.6,0,1.2-0.1,1.7-0.2 c-3-0.6-5.3-3.3-5.3-6.4c0,0,0-0.1,0-0.1c0.9,0.5,1.9,0.8,3,0.8c-1.8-1.2-2.9-3.2-2.9-5.5c0-1.2,0.3-2.3,0.9-3.3 c3.2,4,8.1,6.6,13.5,6.9c-0.1-0.5-0.2-1-0.2-1.5c0-3.6,2.9-6.6,6.6-6.6c1.9,0,3.6,0.8,4.8,2.1c1.5-0.3,2.9-0.8,4.2-1.6 c-0.5,1.5-1.5,2.8-2.9,3.6c1.3-0.2,2.6-0.5,3.8-1C47.1,23.4,46,24.5,44.7,25.5z"></path></svg></span>

	</div>

</main>

<!-- Footer  -->
<footer>
	<div class="footer">
		<p>PACIFIC TAVERN, 74 5TH AVENUE, BROOKLYN, NY 11217212-555-1212  TEMPLATE.PLACEHOLDER@GMAIL.COM
		</p>
	</div>
</footer>




<script type="text/javascript"
src="<?php bloginfo('template_url'); ?>/js/navigation.js" > </script>
