<html>
<head><?php wp_head(); ?></head>
<body>
<h1>Hello World!</h1>
<?php
if ( have_posts() ) {
    while (have_posts()) {
        the_post();
        the_title('<h3>', '</h3>');
        the_content();
    }
}
wp_footer();
?>
</body>
</html>