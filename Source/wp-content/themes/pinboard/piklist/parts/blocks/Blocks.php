<?php
/*
 * Created on 13-12-2014
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
if (isset($block_id)) {
    $block_id = 'blocks';
}
?>
<div id="<?php print $id; ?>" class="blocks">
    <?php if (!isset($title)) {
        ?>
        <div class="blocks-title"><?php print $title ?></div>
    <?php
    }
    ?>

    <div class="blocks-content">
        <?php print isset($content) ? $content : ''; ?>
    </div>
</div>
