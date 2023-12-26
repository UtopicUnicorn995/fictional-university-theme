<?php 
function myFirstFunction($name, $name2){
    echo "<p>Hi Bitch. My name is $name. You Mother fucking $name2 hahaha</p>";
}
myFirstFunction("fcker", "Joe");
?>

<h1>
    <?php bloginfo('name');?>
</h1>

<p>
    <?php bloginfo('description');?>
</p>

<ul>
<?php 
    $myName = "Ian";
    $names = array('Ian', "John", 'Doe');
    echo $names[1];
    $count = 1;
    while($count < 100){
        echo "<li>$count</li>";
        $count++;
    }
?>
</ul>