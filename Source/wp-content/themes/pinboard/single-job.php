<?php get_header(); ?>
<?php get_template_part( 'about-slideshow' ); ?>
	<div id="container">
		<section id="content" class="content-news-details">
			<div class="news-details">

				<?php if( have_posts() ) : the_post();
					$id = get_the_ID();
					$country = get_post_meta($id, 'country', true);
					?>


					<header class="entry-header">
						<div class="title">
							Job							</div>

					</header>
                    <div class="news-archive">
						<?php wp_get_archives('type=yearly'); ?>
					</div>

					<div class="content-detail">
						<div class="single-title">
							<?php the_title(); ?>
						</div>
						<div class="date"><?php print get_the_date('M d, Y');
							if(isset($country)){
								print ' - '.$country;
							}
							?></div>
						<div class="img-detail">
							<?php the_post_thumbnail( 'product-thumb' ); ?>
						</div>

						<div class="content">
							<?php the_content(); ?>
						</div>
					</div>







				<?php endif; ?>
			</div><!-- .entry -->
		</section><!-- #content -->

	</div><!-- #container -->
<?php get_footer(); ?>