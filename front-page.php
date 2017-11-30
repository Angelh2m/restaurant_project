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
	<div id="restaurant" class="row section">
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
					<span id="prev">
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 viewBox="0 0 1024 1024" style=" 0 0 1024 1024;" xml:space="preserve">
							<g id="icomoon-ignore">
							</g>
							<path d="M716.8,998.3c6.6,0,13.1-2.5,18.1-7.5c10-10,10-26.2,0-36.2L292.2,512L734.9,69.3c10-10,10-26.2,0-36.2s-26.2-10-36.2,0
								L237.9,493.9c-10,10-10,26.2,0,36.2l460.8,460.8C703.7,995.9,710.3,998.4,716.8,998.3L716.8,998.3z"/>
							</svg>
						</span>
						<span id="next">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 viewBox="0 0 1024 1024" style=" 0 0 1024 1024;" xml:space="preserve">
								<g id="icomoon-ignore">
								</g>
								<path d="M256.2,998.9c-6.6,0-13.1-2.5-18.1-7.5c-10-10-10-26.2,0-36.2L681.3,512L238.1,68.9c-10-10-10-26.2,0-36.2s26.2-10,36.2,0
									l461.2,461.2c10,10,10,26.2,0,36.2L274.4,991.4C269.4,996.4,262.8,998.9,256.2,998.9L256.2,998.9z"/>
								</svg>

						</span>
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
	<div id="menu"  class="the-menu row section" >

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

	<div id="drinks" class="drink_menu section" >

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

<br />
	<!-- Make a reservation -->
	<div id="reservations" class="reservations section" >
		<h1>Make a reservation</h1>
		<h2>POWERED BY OPENTABLE</h2>
		<div>
			<a href="https://www.opentable.com/start/home" target="_blank" class="reservations__button">Find a Table</a>
		</div>

		<p>Call (347) 555–1234 from 5a – 11p daily, or book online with OpenTable.
	<br>
	<em>Reservations required for parties of 6 or more.</em>
	 </p>
	</div>

	<!-- Social  -->
	<div class="social">
		<span>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62.22 62.22"><defs><style>.cls-1{fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:3px;}</style></defs><title>Asset 1</title><g id="Layer_2" data-name="Layer 2"><g id="Twiitter"><path d="M46.93,21.32a13.94,13.94,0,0,1-3.25,3.35c0,.28,0,.56,0,.84C43.7,34.08,37.17,44,25.25,44A18.32,18.32,0,0,1,15.3,41a13.4,13.4,0,0,0,1.57.08,13,13,0,0,0,8-2.77,6.49,6.49,0,0,1-6.06-4.5,8.17,8.17,0,0,0,1.22.1,6.85,6.85,0,0,0,1.71-.22,6.48,6.48,0,0,1-5.2-6.36V27.3a6.53,6.53,0,0,0,2.93.82,6.49,6.49,0,0,1-2-8.67,18.43,18.43,0,0,0,13.37,6.78,7.32,7.32,0,0,1-.16-1.49,6.49,6.49,0,0,1,11.22-4.44A12.76,12.76,0,0,0,46,18.75a6.46,6.46,0,0,1-2.85,3.57,13,13,0,0,0,3.73-1Z"/><circle class="cls-1" cx="31.11" cy="31.11" r="29.61"/></g></g></svg>

		</span>
		<span>

			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 63.35 64.66"><defs><style>.cls-1{fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:3px;}</style></defs><title>instagram</title><g id="Instagram"><circle class="cls-1" cx="31.67" cy="31.17" r="29.61"/><path d="M36.87,31.17a5.2,5.2,0,1,0-5.2,5.2A5.21,5.21,0,0,0,36.87,31.17Zm2.8,0a8,8,0,1,1-8-8A8,8,0,0,1,39.68,31.17Zm2.19-8.33A1.87,1.87,0,1,1,40,21,1.86,1.86,0,0,1,41.87,22.84Zm-10.2-4.47c-2.27,0-7.15-.18-9.2.63a5.32,5.32,0,0,0-3,3c-.81,2.05-.63,6.93-.63,9.2s-.18,7.15.63,9.2a5.32,5.32,0,0,0,3,3c2.05.81,6.93.63,9.2.63s7.15.18,9.2-.63a5.32,5.32,0,0,0,3-3c.81-2.05.63-6.93.63-9.2s.18-7.15-.63-9.2a5.32,5.32,0,0,0-3-3C38.82,18.19,33.95,18.37,31.67,18.37Zm15.6,12.8c0,2.15,0,4.29-.1,6.44a9.28,9.28,0,0,1-2.52,6.54,9.28,9.28,0,0,1-6.54,2.52c-2.15.12-4.29.1-6.44.1s-4.29,0-6.44-.1a9.28,9.28,0,0,1-6.54-2.52,9.28,9.28,0,0,1-2.52-6.54c-.12-2.15-.1-4.29-.1-6.44s0-4.29.1-6.44a9.28,9.28,0,0,1,2.52-6.54,9.28,9.28,0,0,1,6.54-2.52c2.15-.12,4.29-.1,6.44-.1s4.29,0,6.44.1a9.28,9.28,0,0,1,6.54,2.52,9.28,9.28,0,0,1,2.52,6.54C47.29,26.88,47.27,29,47.27,31.17Z"/></g></svg>

		</span>

		<span>
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 63.35 64.66"><defs><style>.cls-1{fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:3px;}</style></defs><title>instagram</title><g id="Vimeo"><circle class="cls-1" cx="31.67" cy="32.33" r="29.61"/><path d="M46.76,25.32q-.19,4.4-6.16,12.08c-4.12,5.32-7.57,8-10.43,8-1.76,0-3.25-1.63-4.45-4.88q-1.22-4.45-2.45-8.94c-.89-3.25-1.87-4.86-2.91-4.86A9.22,9.22,0,0,0,18,28.12L16.57,26.3C18.06,25,19.52,23.65,21,22.37c2-1.74,3.47-2.62,4.47-2.71,2.36-.22,3.78,1.37,4.34,4.81.58,3.71,1,6,1.22,6.92.69,3.08,1.41,4.62,2.23,4.62.63,0,1.58-1,2.86-3a11.88,11.88,0,0,0,2-4.56c.17-1.73-.5-2.58-2-2.58a6,6,0,0,0-2.24.48q2.23-7.29,8.52-7.09C45.48,19.36,46.94,21.39,46.76,25.32Z"/></g></svg>

		</span>

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
