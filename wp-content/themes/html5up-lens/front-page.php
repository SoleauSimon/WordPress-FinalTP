<?php
get_header();


the_post();
?>
<?php

/** @var  $args_articles
 * @param prend articles x6 de manière décroissante*/

$args_articles = array(
    'post_type'      => 'post',
    'posts_per_page' => 6,
    'order'          => 'DESC',

);

/** @var  $query_articles
 * @param */

$query_articles = new WP_Query($args_articles);

?>

<!-- Prend les articles et les affichent dans la page à chaque fois qu'on en ajoute-->

<section id="thumbnails">
<?php while ($query_articles->have_posts()) : $query_articles->the_post(); ?>
        <article>
            <a class="thumbnail" href="<?php the_post_thumbnail_url() ?>" data-position="left center"><img src="<?php the_post_thumbnail_url('360x225') ?>" alt="Img"></a>
            <h2><?php the_title() ?></h2>
            <div class="editor">
            <?php the_excerpt() ?>
            </div>
        </article>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
</section>


<?php get_footer(); ?>
