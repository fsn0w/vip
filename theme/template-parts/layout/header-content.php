<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vip
 */

$logo = get_field('logo', 'options');

?>

<!-- 	
<header id="masthead" class="w-full z-50 bg-prima-white" x-data="{headerFixed: false}" @scroll.window="headerFixed = (window.pageYOffset > 100) ? true : false" :class="headerFixed ? 'fixed top-0' : 'relative'"> 
-->

<header id="masthead" class="fixed w-full z-50 bg-prima-white items-center transition-all duration-300" x-data="{headerScroll: false}" @scroll.window="headerScroll = (window.pageYOffset > 100) ? true : false" :class="headerScroll ? 'bg-opacity-80 backdrop-filter backdrop-blur-lg' : ''"> 

<!-- DESKTOP -->
	<div class="hidden md:flex justify-between items-center">
		<div class="py-4">
			<?php 
				if (!empty($logo)) : 
			?>
				<a href="<?php echo home_url(); ?>" class="group">
					<!-- <img src="<?php echo esc_url($logo); ?>" alt="<?php bloginfo('name'); ?>" class="h-16" /> -->
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						viewBox="0 0 465.8 92.4" style="enable-background:new 0 0 465.8 92.4;" xml:space="preserve">
					<g>
						<g>
							<path style="fill:#D9472D;" d="M46.6,83.3c-20.4,0-37.1-16.6-37.1-37.1S26.2,9.2,46.6,9.2c20.4,0,37.1,16.6,37.1,37.1
								S67.1,83.3,46.6,83.3z"/>
							<path style="fill:#D9472D;" d="M46.6,14.2c17.7,0,32.1,14.4,32.1,32.1S64.3,78.3,46.6,78.3S14.6,64,14.6,46.3S29,14.2,46.6,14.2
								M46.6,4.2C23.4,4.2,4.6,23.1,4.6,46.3s18.8,42.1,42.1,42.1s42.1-18.8,42.1-42.1S69.9,4.2,46.6,4.2L46.6,4.2z"/>
						</g>
						<g>
							<path style="fill:#F3F3F0;" d="M43.2,39.4c0.2-1.6-0.1-3.1-1.4-3.9c-1.3-0.9-2.9-0.9-4.5-0.2c-0.5,0.2-0.8,0.5-0.4,1
								c1.1,1.4,0.9,3.1,0.7,4.8c-0.5,4-2.2,7.7-4.5,11.2c-0.8,1.2-1.7,2.4-2.6,3.5c-0.1-0.1-0.1-0.1-0.2-0.2c0.5-1.8,1.1-3.6,1.6-5.4
								c0.7-2.6,1.3-5.3,0.9-7.8c-0.3-2.6-2.2-4.3-4.8-4.1c-4.3,0.3-7.8,2.5-10.4,6.4c-1.3,1.9-1.8,4-1.1,6c0.7,1.9,3,2.8,4.9,1.8
								c0.9-0.5,1.3-1.2,1.1-1.8c-0.5-1.4-0.3-2.9,0-4.4c0.4-1.6,1-3.1,2.4-4.2c1.7-1.3,3.3-0.8,3.5,1.1c0.3,2.3-0.2,4.6-0.8,6.9
								c-0.7,2.7-1.5,5.5-2.3,8.2c-0.3,1.2-0.1,2.1,0.7,2.8c1.7,1.2,2.6,0.9,4-0.5c3.5-3.5,6.4-7.5,8.9-11.6C41,45.9,42.7,42.8,43.2,39.4
								L43.2,39.4z"/>
							<path style="fill:#F3F3F0;" d="M45.2,45.2c1.6,0.7,3.9-1.1,4-2.9c0-1-0.5-1.6-1.5-1.7c-1.6,0-3.4,1.8-3.3,3.3
								C44.4,44.5,44.8,45.1,45.2,45.2z"/>
							<path style="fill:#F3F3F0;" d="M74.7,34.2c-0.5-0.5-1.2-0.9-1.9-1.3c-0.1-0.1-0.2-0.1-0.4-0.2c-0.1-0.1-0.3-0.1-0.4-0.2
								c0,0,0,0-0.1,0c-0.9-0.3-1.9-0.5-3-0.7c-0.2,0-0.3,0-0.5-0.1c-0.3,0-0.5,0-0.8-0.1c-3.6-0.1-6.9,1-10.1,2.8
								c-2.6,1.5-4.8,3.3-5.8,5.9c-0.8,2-0.8,3.9,0.7,5.4c0.2,0.2,0.4,0.4,0.6,0.5c1,0.7,2.4,1,3.8,0.7c0.4-0.1,0.7-0.2,1.1-0.4
								c1.1-0.6,1.5-1.4,1-2.3c-0.1-0.2-0.2-0.4-0.3-0.6c-0.5-1.5-0.3-3,0.5-4.4c1.4-2.6,4.7-4.8,7.8-5.2c-0.1,0.2-0.1,0.3-0.2,0.4
								c-1.2,2.1-2.3,4.2-3.5,6.2c-1.3,2.2-2.6,4.3-4,6.4c-0.8,1.2-2,2.2-3.5,2.9c-1.4,0.6-3,0.9-4.1,0.5c-0.1,0-0.2-0.1-0.2-0.1
								c0,0,0,0,0,0c-0.1,0-0.1-0.1-0.2-0.1c-0.4-0.3-0.8-0.7-1-1.3c-0.2-0.5-0.7-0.4-1.1-0.1c-0.5,0.4-1,0.9-1.3,1.4c0,0,0,0,0,0
								c-0.2,0.3-0.3,0.6-0.4,0.9c-0.4,0.8-1,1.5-1.6,2.2c-0.4,0.5-0.9,1.3-1.6,0.9c-0.6-0.3-0.2-1.1,0.1-1.7c0.6-1.4,1.2-2.8,1.7-4.2
								c0.4-1,0-1.6-0.8-1.9c-1.3-0.5-2-0.3-2.6,0.7c-1.3,2-2.4,4.1-3,6.4C39.2,54.8,39,56,39,57.1c0,1.1,0.9,1.8,2,1.8
								c1.1-0.1,2.2-0.3,3.1-1.1c1-0.9,1.8-2,2.7-3.1c0.2-0.2,0.3-0.5,0.5-0.8c0.1,0.2,0.1,0.3,0.2,0.5c0,0,0,0.1,0,0.1
								c0,0.1,0.1,0.1,0.1,0.2c0.6,1.1,1.8,2,3.2,2.3c0.4,0.1,0.9,0.2,1.3,0.2c2.4,0.2,4.6-0.6,6.5-2.3c1.7-1.5,2.9-3.3,4-5.1
								c0.2-0.3,0.4-0.6,0.6-1c0.3-0.4,0.5-0.9,0.8-1.3c2.1,0.5,2.6,0.5,4.7,0.3c0.5-0.1,1-0.2,1.5-0.3c3.3-0.9,6-3.3,6.8-6.2
								C77.8,38.4,76.8,36.1,74.7,34.2L74.7,34.2z M69.9,44.3c-0.7,0.5-1.4,0.8-2.2,1c-0.8,0.2-1.7,0.2-2.7,0.1c1.5-2.9,2.9-5.7,4.3-8.6
								c0.3-0.6,0.6-1.2,0.9-1.8c0.1,0,0.1,0,0.3-0.1c0.4,0.3,0.8,0.7,1.1,1C73.7,38.3,72.9,42.3,69.9,44.3L69.9,44.3z"/>
						</g>
					</g>
					<g>
						<path d="M105.7,36.9h2.5l2.9,9.9c0.6,2.2,1.1,3.9,1.8,6h0.1c0.7-2.1,1.2-3.9,1.8-6l2.9-9.9h2.4l-5.8,18.4h-2.8L105.7,36.9z"/>
						<path d="M126.4,36.9h11.4v2h-9v5.7h7.6v2h-7.6v6.7h9.3v2h-11.7V36.9L126.4,36.9z"/>
						<path d="M145.2,36.9h2.6l5.9,11.5l1.8,3.8h0.1c-0.1-1.8-0.3-3.9-0.3-5.8v-9.5h2.3v18.4h-2.6L149,43.7l-1.8-3.8h-0.1
							c0.1,1.9,0.3,3.8,0.3,5.7v9.6h-2.3V36.9z"/>
						<path d="M164.2,53.3h4.6V38.9h-4.6v-2h11.5v2h-4.6v14.4h4.6v2h-11.5V53.3z"/>
						<path d="M182,46.1c0-5.9,3.5-9.5,8.3-9.5c2.2,0,4,1.1,5.1,2.2l-1.4,1.5c-1-1-2.2-1.7-3.7-1.7c-3.5,0-5.8,2.8-5.8,7.4
							c0,4.6,2.3,7.5,5.8,7.5c1.7,0,3-0.7,4.1-2l1.4,1.4c-1.4,1.7-3.3,2.7-5.7,2.7C185.5,55.6,182,52,182,46.1z"/>
						<path d="M203.1,36.9h11.4v2h-9v5.7h7.6v2h-7.6v6.7h9.3v2h-11.7V36.9L203.1,36.9z"/>
						<path d="M239.9,53.3h4.6V38.9h-4.6v-2h11.5v2h-4.6v14.4h4.6v2h-11.5V53.3z"/>
						<path d="M258.2,36.9h2.6l5.9,11.5l1.8,3.8h0.1c-0.1-1.8-0.3-3.9-0.3-5.8v-9.5h2.3v18.4h-2.6L262,43.7l-1.8-3.8h-0.1
							c0.1,1.9,0.3,3.8,0.3,5.7v9.6h-2.3V36.9z"/>
						<path d="M277.4,52.8l1.4-1.6c1.4,1.4,3.3,2.3,5.4,2.3c2.5,0,4-1.2,4-2.9c0-1.9-1.4-2.5-3.3-3.3l-2.7-1.2c-1.8-0.7-4-2-4-4.7
							s2.5-4.9,6-4.9c2.3,0,4.3,0.9,5.7,2.3l-1.2,1.5c-1.2-1.1-2.6-1.7-4.5-1.7c-2.1,0-3.6,1-3.6,2.7c0,1.8,1.7,2.4,3.3,3l2.6,1.1
							c2.3,0.9,4.1,2.2,4.1,4.9c0,2.9-2.5,5.2-6.5,5.2C281.4,55.6,279,54.5,277.4,52.8L277.4,52.8z"/>
						<path d="M296.9,53.3h4.6V38.9h-4.6v-2h11.5v2h-4.6v14.4h4.6v2h-11.5V53.3z"/>
						<path d="M315.3,36.9h4.6c5.5,0,8.5,3.3,8.5,9.1c0,5.8-3,9.3-8.4,9.3h-4.7V36.9z M319.7,53.3c4.2,0,6.3-2.7,6.3-7.3
							c0-4.7-2.1-7.2-6.3-7.2h-2v14.5H319.7z"/>
						<path d="M334.8,36.9h11.4v2h-9v5.7h7.6v2h-7.6v6.7h9.3v2h-11.7V36.9L334.8,36.9z"/>
						<path d="M354,36.9h5.8c3.7,0,6.5,1.4,6.5,5.2c0,3.8-2.7,5.4-6.5,5.4h-3.4v7.7H354V36.9z M359.4,45.6c2.9,0,4.4-1.2,4.4-3.5
							c0-2.4-1.6-3.3-4.4-3.3h-3v6.8H359.4z M361.1,45.6l5.6,9.6h-2.7l-4.8-8.4L361.1,45.6L361.1,45.6z"/>
						<path d="M391.4,36.9h5.6c4.1,0,6.8,1.4,6.8,5.4c0,4-2.8,5.7-6.8,5.7h-3.2v7.3h-2.4V36.9z M396.7,46.1c3.2,0,4.7-1.2,4.7-3.8
							c0-2.6-1.6-3.5-4.7-3.5h-2.9V46L396.7,46.1L396.7,46.1z"/>
						<path d="M414.3,36.9h2.7l6.2,18.4h-2.5L417.5,45c-0.6-2-1.3-4.1-1.8-6.2h-0.1c-0.6,2.1-1.2,4.1-1.8,6.2l-3.2,10.2h-2.4L414.3,36.9
							L414.3,36.9z M411.4,47.8h8.4v1.9h-8.4V47.8z"/>
						<path d="M428.8,52.8l1.4-1.6c1.4,1.4,3.3,2.3,5.4,2.3c2.5,0,4-1.2,4-2.9c0-1.9-1.4-2.5-3.3-3.3l-2.7-1.2c-1.8-0.7-4-2-4-4.7
							s2.5-4.9,6-4.9c2.3,0,4.3,0.9,5.7,2.3l-1.2,1.5c-1.2-1.1-2.6-1.7-4.5-1.7c-2.1,0-3.6,1-3.6,2.7c0,1.8,1.7,2.4,3.3,3l2.6,1.1
							c2.3,0.9,4.1,2.2,4.1,4.9c0,2.9-2.5,5.2-6.5,5.2C432.7,55.6,430.4,54.5,428.8,52.8L428.8,52.8z"/>
						<path d="M447.4,52.8l1.4-1.6c1.4,1.4,3.3,2.3,5.4,2.3c2.5,0,4-1.2,4-2.9c0-1.9-1.4-2.5-3.3-3.3l-2.7-1.2c-1.8-0.7-4-2-4-4.7
							s2.5-4.9,6-4.9c2.3,0,4.3,0.9,5.7,2.3l-1.2,1.5c-1.2-1.1-2.6-1.7-4.5-1.7c-2.1,0-3.6,1-3.6,2.7c0,1.8,1.7,2.4,3.3,3l2.6,1.1
							c2.3,0.9,4.1,2.2,4.1,4.9c0,2.9-2.5,5.2-6.5,5.2C451.4,55.6,449,54.5,447.4,52.8L447.4,52.8z"/>
					</g>
					</svg>

				</a>
			<?php 
				endif; 
			?>
		</div>
		<nav>
			<?php
				wp_nav_menu(array(
					'theme_location' => 'menu-1', 
					'container' => 'ul',
					'menu_id' => 'primary-menu',
					'items_wrap' => '<ul id="%1$s" class="menu-inline %2$s">%3$s</ul>',
				));
			?>
		</nav><!-- #site-navigation -->
	</div>

<!-- MOBILE -->
	<div class="flex justify-between md:hidden">

		<?php 
			$logo = get_field('logo', 'options');
			if (!empty($logo)) : 
		?>
			<a href="<?php echo home_url(); ?>" class="">
				<img src="<?php echo esc_url($logo); ?>" alt="<?php bloginfo('name'); ?>" />
			</a>
		<?php 
			endif; 
		?>

		<div class="lg:hidden" x-data="{ isMenu:false, }">
			<div >
				<div class="hamburger" :class="isMenu ? 'rotate-180' : '' " @click="isMenu=!isMenu" @click.outside="isMenu=false">
					<span class="bar top" :class="isMenu ? 'top-animate bg-prima-red' : 'bg-prima-red'"></span>
					<span class="bar middle" :class="isMenu ? 'scale-x-0 bg-prima-red' : 'bg-prima-red'"></span>
					<span class="bar bottom" :class="isMenu ? 'bottom-animate bg-prima-black' : 'bg-prima-black'"></span>
				</div>
			</div>

			<nav class="menu-nav" role="navigation" :class="{ 'expanded': isMenu }">
				<?php
						wp_nav_menu(array(
							'theme_location' => 'menu-1', 
							'container' => 'ul',
							'menu_class' => 'menu-list',
							'menu_id' => 'primary-menu',
							'items_wrap' => '<ul id="%1$s" class="navigation %2$s">%3$s</ul>',
						));
				?>
			</nav>
		</div>

	</div>

</header><!-- #masthead -->
