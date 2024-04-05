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

<header id="masthead" class="fixed w-full z-50 bg-prima-white"> 

<!-- DESKTOP -->
	<div class="hidden md:flex justify-between items-center">
		<div class="py-4">
			<?php 
				if (!empty($logo)) : 
			?>
				<a href="<?php echo home_url(); ?>" class="">
					<img src="<?php echo esc_url($logo); ?>" alt="<?php bloginfo('name'); ?>" class="h-16" />
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
	<div class="px-2 flex justify-between md:hidden">

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
					<span class="bar top" :class="isMenu ? 'top-animate bg-prima-dark' : 'bg-prima-dark'"></span>
					<span class="bar middle" :class="isMenu ? 'scale-x-0 bg-prima-dark' : 'bg-prima-turq'"></span>
					<span class="bar bottom" :class="isMenu ? 'bottom-animate bg-prima-dark' : 'bg-prima-gray'"></span>
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
