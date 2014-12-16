<?php
$title = __('CORPORATE PROFILE');
$block_id = 'blocks-about';
$about_id = 94;
?>
<div id="<?php print $block_id; ?>" class="blocks">
    <?php if (isset($title)) {
        ?>
        <div class="blocks-title"><?php print $title ?></div>
    <?php
    }
    ?>

    <div class="blocks-content">

        <?php $results = new WP_Query( array( 'post_type' => 'page','post__in'=>array($about_id) ) ); ?>
        <?php if( $results->have_posts() ) : ?>
            <?php
            while ($results->have_posts())
                : $results->the_post();
                $id = get_the_ID();
                $description = get_post_meta($id, 'description', true);
print $description;
            endwhile;
        endif;
        ?>
        <div class="more"><a href="<?php print get_bloginfo(home).'/corporate-profile' ?>">More <span>>> </span></a> </div>
    </div>
</div>