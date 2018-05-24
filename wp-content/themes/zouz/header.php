<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body  id="top" <?php body_class(); ?>>

<?php
    $frontpage_id = get_option( 'page_on_front' );
    $image = get_field('zouz_global_visuel', $frontpage_id);

?>
<!-- Header -->
<header id="header">
    <div class="inner">
        <a href="<?php echo get_home_url() ?>" class="image avatar"><img src="<?php echo $image['sizes']['123x123'] ?>" alt=""></a>
        <h1><?php the_field('zouz_global_desc', $frontpage_id) ?></h1>
    </div>
</header>