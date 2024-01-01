<!-- Single page content -->
<?php
get_header();
while (have_posts()) {
    the_post(); //The_post function will keep tract of which post we are currently working in
?>
    <h1>This is a page, not a post</h1>
    <h2><?php the_title() ?></h2>
    <?php the_content() ?>
<?php
}
get_footer();
?>