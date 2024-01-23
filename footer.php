<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package drumulvietii-theme
 */

?>

	<footer id="colophon" class="site-footer">
        <div class="footer-content">
            <div class="upper-info">
                <?php
                    the_custom_logo();
                ?>
                <ul>
                    <a href="">home</a>
                    <a href="">strategy</a>
                    <a href="">contact us</a>
                    <a href="">donate</a>
                </ul>
                <div class="contacts">
                    <?php
                    $args = array(
                        'post_type' => 'attachment',
                        'mime_type' => 'image', // Filter by image type
                        'title' => 'instagram', // Filter by file name (optional)
                    );

                    $attachments = get_posts($args);

                    if ($attachments) {
                        // Get the first attachment or loop through multiple if needed
                        $attachment = $attachments[0];
                        $image_url = $attachment->guid; // URL of the image

                        // Display the image
                        echo '<img src="' . $image_url . '" alt="Your icon alt text">';
                    } else {
                        echo "No icon found(";
                    }
                    ?>
                    <?php
                    $args = array(
                        'post_type' => 'attachment',
                        'mime_type' => 'image', // Filter by image type
                        'title' => 'facebook', // Filter by file name (optional)
                    );

                    $attachments = get_posts($args);

                    if ($attachments) {
                        // Get the first attachment or loop through multiple if needed
                        $attachment = $attachments[0];
                        $image_url = $attachment->guid; // URL of the image

                        // Display the image
                        echo '<img src="' . $image_url . '" alt="Your icon alt text">';
                    } else {
                        echo "No icon found(";
                    }
                    ?>
                </div>
            </div>
            <svg width="1200" height="2" viewBox="0 0 1200 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 1H1200" stroke="#555A62" stroke-width="0.5"/>
                <!--TODO Ask Vanya about blurry svg -->
            </svg>
            <div class="lower-info">
                <p>Copyright © Asociația "Drumul Vieții"</p>
            </div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
