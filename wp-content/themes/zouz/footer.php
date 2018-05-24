<?php

$frontpage_id = get_option( 'page_on_front' );

$tw = get_field('zouz_global_rs_tw', $frontpage_id);
$insta = get_field('zouz_global_rs_insta', $frontpage_id);
$fb = get_field('zouz_global_rs_fb', $frontpage_id);
$mail = get_field('zouz_global_email', $frontpage_id);

?>

<!-- Footer -->
<footer id="footer">
    <div class="inner">
        <ul class="icons">
            <?php if(isset($tw) && $tw != '') : ?>
                <li><a target="_blank" href="<?php echo $tw ?>" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <?php endif; ?>
            <?php if(isset($insta) && $insta != '') : ?>
                <li><a target="_blank" href="<?php echo $insta ?>" class="icon fa-github"><span class="label">Github</span></a></li>
            <?php endif; ?>
            <?php if(isset($fb) && $fb != '') : ?>
                <li><a target="_blank" href="<?php echo $fb ?>" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
            <?php endif; ?>
            <?php if(isset($mail) && $mail != '') : ?>
                <li><a target="_blank" href="mailto:<?php echo $mail ?>" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
            <?php endif; ?>
        </ul>
        <ul class="copyright">
            <li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
    </div>
</footer>
<?php wp_footer();  ?>
</body>
</html>