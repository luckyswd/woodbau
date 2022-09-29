<?php
get_header();
?>

<?php RenderBlock::renderBlockByName('acf/catalog-products'); ?>
<?php include "modules/products/products.php" ?>
<?php RenderBlock::renderBlockByName('acf/own-production'); ?>
<?php RenderBlock::renderBlockByName('acf/banner'); ?>
<?php RenderBlock::renderBlockByName('acf/exhibition'); ?>

<?php
get_footer();
?>


