<?php
get_header();
?>
<section class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb">
                    <?php if (function_exists('bcn_display')) {
                        bcn_display();
                    } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12">
                <!-- CONTENT -->
                <h1><?php the_title(); ?></h1>
                <?php
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
                ?>
            </div>
        </div>
</section>
<?php
get_footer();
?>

