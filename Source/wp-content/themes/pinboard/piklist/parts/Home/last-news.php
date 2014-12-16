<?php
/*
 * Created on 13-12-2014
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>


<?php
$title = __('Last news');
$block_id = 'blocks-last-news';

?>
<div id="<?php print $block_id; ?>" class="blocks">
    <?php if (isset($title)) {
        ?>
        <div class="blocks-title"><?php print $title ?></div>
    <?php
    }
    ?>

    <div class="blocks-content">

        <?php $results = new WP_Query( array( 'post_type' => 'post','orderby' => 'date', 'order' => 'DESC','posts_per_page'=>'3' ) ); ?>
        <?php if( $results->have_posts() ) : ?>
        <?php
        while ($results->have_posts())
        : $results->the_post();
        $id = get_the_ID();

        ?>
            <div class="item">
                <div class="news-title"><a href="<?php the_permalink() ?>"> <?php the_title()?></a></div>
                <div class="date"><?php print get_the_date('M d, Y')?></div>
                <div class="more"><a href="<?php the_permalink() ?>"><?php print __('More');?><span class="arrow"> >> </span></a></div>

            </div>
        <?php
        endwhile;
        endif;
        ?>
    </div>
</div>