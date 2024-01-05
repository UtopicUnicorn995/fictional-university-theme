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

<?php get_header() ?>
<div>asdasd</div>
<?php


while (have_posts()) {
    the_post(); //The_post function will keep tract of which post we are currently working in
?>
    <h2><a href="<?php the_permalink()?>"><?php the_title() ?></a></h2>
    <?php the_content() ?>
    <hr>
<?php
}


 get_footer() ?>