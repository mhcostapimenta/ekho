<!DOCTYPE html>
<html <?php language_attributes(); ?>> <!-- Carrega os atributos de língua da página -->

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo get_theme_mod('set_google_tm'); ?>"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', '<?php echo get_theme_mod('set_google_tm'); ?>');
    </script>

    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- Carrega todas as nossas funções, folhas de estilo e scripts functions.php -->
    <?php  wp_head(); ?>

    <!-- Favicon e touchicon -->
    <?php
      if ( is_front_page() ) {
        $favicon16 = 'favicon16x16fo.png';
        $favicon32 = 'favicon32x32fo.png';
      } else {
        $favicon16 = 'favicon16x16pj.png';
        $favicon32 = 'favicon32x32pj.png';
      }
    ?>

    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri().'/assets/img/'.$favicon16; ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri().'/assets/img/'.$favicon32; ?>">
</head>