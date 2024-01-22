<!-- <?php
      // function myFirstFunction($name, $name2){
      // echo "<p>Hi Bitch. My name is $name. You Mother fucking $name2 hahaha</p>";
      // }
      // myFirstFunction("fcker", "Joe");
      ?>

<h1>
  <?php  // bloginfo('name');
  ?>
</h1>

<p>
     <?php
      //bloginfo('description');
      ?> 
</p>

<ul>
<?php
// $myName = "Ian";
// $names = array('Ian', "John", 'Doe');
// echo $names[1];
// $count = 0;
// while($count < count($names) ){
//     echo "<li>Hi bitch! My name is $names[$count]</li>";
//     $count++;
// }
?>
</ul> -->

<?php
get_header();
?>

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>)"></div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title"><?php if (is_category()) {
                                      single_cat_title();
                                    }
                                    if (is_author()) {
                                      echo "Posts by ";
                                      the_author();
                                    }
                                    ?></h1>
    <div class="page-banner__intro">
      <p><?php the_archive_description()?></p>
    </div>
  </div>
</div>

<div class="container container--narrow page-section">
  <?php
  while (have_posts()) {
    the_post(); ?>
    <div class="post-item">
      <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink() ?>">
          <?php the_title() ?></a></h2>

      <div class="metabox">
        <p>Posted by <?php the_author_posts_link() ?> on <?php the_time('F j, Y') ?> in <?php echo get_the_category_list(', ') ?></p>
      </div>

      <div class="generic-content">
        <?php the_excerpt() ?>
        <p><a class="btn btn--blue" href="<?php the_permalink() ?>">Continue Reading</a></p>
      </div>
    </div>
  <?php
  }
  // echo paginate_links()
  ?>
</div>

<?php
get_footer();
?>