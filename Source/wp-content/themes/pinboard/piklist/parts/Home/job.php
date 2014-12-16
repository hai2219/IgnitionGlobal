<?php
$title = __('BUSINESS CORE GROUP');
$block_id = 'blocks-job';

?>
<div id="<?php print $block_id; ?>" class="blocks">
   <div class="jobs">Jobs</div>
    <?php if (isset($title)) {
        ?>
        <div class="blocks-title"><?php print $title ?></div>
    <?php
    }
    ?>

    <div class="blocks-content">

    <div class="item">
        <div class="img"><img src="<?php print get_template_directory_uri().'/images/job-img-1.jpg';?>" alt=""></div>
        <div class="cate">
            <div class="name">Shipping</div>
            <div class="more"><a href="#"> View more</a></div>
        </div>
    </div>
        <div class="item">
            <div class="img"><img src="<?php print get_template_directory_uri().'/images/job-img-2.jpg';?>" alt=""></div>
            <div class="cate">
                <div class="name">Oil & Gas</div>
                <div class="more"><a href="#"> View more</a></div>
            </div>
        </div>
        <div class="item">
            <div class="img"><img src="<?php print get_template_directory_uri().'/images/job-img-3.jpg';?>" alt=""></div>
            <div class="cate">
                <div class="name">Corporate Profestional</div>
                <div class="more"><a href="#"> View more</a></div>
            </div>
        </div>
        
    </div>
</div>