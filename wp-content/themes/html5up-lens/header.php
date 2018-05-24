<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body class="is-loading-0 is-loading-1 is-loading-2" <?php body_class(); ?>>
<div id="main">
<!-- Header -->
<header id="header">

    <!-- Prend la PAGE (Et non l'article) d'accueil par défault (Réglage ...) -->

    <?php  $frontpage_id = get_option('page_on_front');?>
    <h1><?php the_field('changeColor_header_bonjourLaure', $frontpage_id)?></h1>
    <p><a href="http://html5up.net"><?php the_field('changeColor_header_bonjourMehdi', $frontpage_id)?></a></p>
    <ul class="icons">
        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
        <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
        <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
        <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
    </ul>
</header>
