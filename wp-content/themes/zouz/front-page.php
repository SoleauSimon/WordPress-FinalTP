<?php
get_header();


the_post();
?>
<!-- Main -->
<div id="main">

    <?php
        $args_info = array(
            'post_type' => 'page',
            'pagename' => 'informations',
        );


        $query_info = new WP_Query($args_info);

    $query_info->the_post();

    ?>
    <!-- One -->
    <section id="one">
        <header class="major">
            <h2><?php the_title() ?></h2>
        </header>
        <p><?php the_excerpt() ?></p>
        <ul class="actions">
            <li><a href="<?php the_permalink() ?>" class="button">Learn More</a></li>
        </ul>
    </section>
    <?php wp_reset_postdata(); ?>


    <?php
        $args_articles = array(
                'post_type'      => 'post',
                'posts_per_page' => 6,
                'order'          => 'DESC',

        );

        $query_articles = new WP_Query($args_articles);

    ?>
    <!-- Two -->
    <section id="two">
        <h2>Recent Work</h2>
        <div class="row">
            <?php while ($query_articles->have_posts()) : $query_articles->the_post(); ?>
                <article class="6u 12u$(xsmall) work-item">
                    <a href="<?php the_post_thumbnail_url() ?>" class="image fit thumb"><?php the_post_thumbnail('320x217') ?></a>
                    <h3><?php the_title() ?></h3>
                    <p><?php the_excerpt() ?></p>
                </article>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
        <ul class="actions">
            <li><a href="#" class="button">Full Portfolio</a></li>
        </ul>
    </section>

    <!-- Three -->
    <section id="three">
        <h2>Get In Touch</h2>
        <p>Accumsan pellentesque commodo blandit enim arcu non at amet id arcu magna. Accumsan orci faucibus id eu lorem semper nunc nisi lorem vulputate lorem neque lorem ipsum dolor.</p>
        <div class="row">
            <div class="8u 12u$(small)">
                <form method="post" action="#">
                    <div class="row uniform 50%">
                        <div class="6u 12u$(xsmall)"><input type="text" name="name" id="name" placeholder="Name" /></div>
                        <div class="6u$ 12u$(xsmall)"><input type="email" name="email" id="email" placeholder="Email" /></div>
                        <div class="12u$"><textarea name="message" id="message" placeholder="Message" rows="4"></textarea></div>
                    </div>
                </form>
                <ul class="actions">
                    <li><input type="submit" value="Send Message" /></li>
                </ul>
            </div>
            <div class="4u$ 12u$(small)">
                <ul class="labeled-icons">
                    <li>
                        <h3 class="icon fa-home"><span class="label">Address</span></h3>
                        1234 Somewhere Rd.<br />
                        Nashville, TN 00000<br />
                        United States
                    </li>
                    <li>
                        <h3 class="icon fa-mobile"><span class="label">Phone</span></h3>
                        000-000-0000
                    </li>
                    <li>
                        <h3 class="icon fa-envelope-o"><span class="label">Email</span></h3>
                        <a href="#">hello@untitled.tld</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>


</div>



<?php get_footer(); ?>
