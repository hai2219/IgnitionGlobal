<?php
/*
Template Name: News
*/

?>
<?php get_header(); ?>
<?php
$posts_per_page = (isset($_GET['number']))?(int)$_GET['number']:9;
?>

    <?php get_template_part( 'about-slideshow' ); ?>


	<div id="container">
		<section id="content">
		<div class="news-content">
		<?php if( have_posts() ) : the_post(); ?>
		
						<header class="entry-header">
							<div class="title">
								<?php the_title(); ?>
							</div>
							<div class="paging-filter">
								<div class="filter">Show
								<select name="news-fillter">
									<?php
									for($i=0;$i<=95;){
										$i = $i+5;
										?>
										<option value="<?php print $i?>"><?php print $i;?></option>
										<?php
									}
									?>
								</select>
								</div>
							</div>

						</header><!-- .entry-header -->
						<div class="entry-content">
				<?php $results = new WP_Query( array( 'post_type' => 'post','orderby' => 'date', 'order' => 'DESC','posts_per_page'=>$posts_per_page ) ); ?>
				<?php if( $results->have_posts() ) : ?>
					<?php
					while ($results->have_posts())
						: $results->the_post();
						$id = get_the_ID();

						?>
						<div class="item">
							<div class="date"><?php print get_the_date('M d, Y')?></div>

							<div class="news-title"><a href="<?php the_permalink() ?>"> <?php the_title()?></a></div>

						</div>
					<?php
					endwhile;
				endif;
				?>
							<div class="clear"></div>
						</div><!-- .entry-content -->

		<?php endif; ?>
     
     </div>

		</section><!-- #content -->
		
		<div class="clear"></div>
	</div><!-- #container -->
<?php get_footer(); ?>