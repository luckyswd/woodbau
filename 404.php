<?php
get_header();
?>
<section class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb">
                    <?php if(function_exists('bcn_display')) { bcn_display(); }?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12">
                <!-- CONTENT -->
                <div class="content-404-page">
                    <h1>404</h1>
                    <h3> Przepraszam! Coś poszło nie tak! = ( </h3>
                    <a href="<?php echo home_url(); ?>"> Wróć do strony głównej </a>
                </div>
            </div>
        </div>
</section>
<?php
get_footer();
?>

