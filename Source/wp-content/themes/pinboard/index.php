<?php get_header(); ?>
<?php

?>

    <?php get_template_part( 'home-slideshow' ); ?>


	<div id="container">
		<section id="home-content">

			<?php
			piklist('home/last-news');
			?>
			<?php
			piklist('home/about');
			?>
			<?php
			piklist('home/job');
			?>
		</section><!-- #content -->
		
		<div class="clear"></div>
	</div><!-- #container -->
<?php get_footer(); ?>