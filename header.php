<!DOCTYPE html>
<html lang="<?php language_attributes()?>">

<head>
    <meta charset="utf-8">
    <title><?php the_title();?></title>
    <meta name="description" content="仮想のECショップ">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favico.png">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.js"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class();?>>
<header id="header" class="wrapper">
    <h1 class="site-title">
        <a href="<?php echo esc_url(home_url('/'));?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png" alt="Furniture Design"></a>
    </h1>

    <nav id="navi">
        <ul class="nav-menu">
            <li><a href="product.html">PRODUCT</a></li>
            <li><a href="company.html">COMPANY</a></li>
            <li><a href="mailto:xxxxx@xxx.xxx?subject=お問い合わせ">CONTACT</a></li>
        </ul>
    </nav>

    <div class="toggle_btn">
        <span></span>
        <span></span>
    </div>

    <div id="mask"></div>
</header>
