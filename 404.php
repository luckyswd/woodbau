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
                    <h3><?php if (ICL_LANGUAGE_CODE == 'pl') { echo 'Przepraszam! Coś poszło nie tak! = ('; } elseif (ICL_LANGUAGE_CODE == 'ru') { echo 'Извениете! Что то пошло не так! =('; } else { echo 'Verzeihung! Etwas ist schief gelaufen! = ('; }; ?></h3>
                    <a href="<?php echo home_url(); ?>"><?php if (ICL_LANGUAGE_CODE == 'pl') { echo 'Wróć do strony głównej'; } elseif (ICL_LANGUAGE_CODE == 'ru') { echo 'Вернуться на главную страницу'; } else { echo 'Zurück zur Startseite'; }; ?></a>
                </div>
            </div>
        </div>
</section>
<?php
get_footer();
?>

