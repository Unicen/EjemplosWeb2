<?php
require('./libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->assign("Nombre","roBerTo caRloS");
$smarty->assign("Sueldo",2342.12312234);
$smarty->assign("Overview","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vestibulum ante sed dolor tempor pulvinar. Curabitur eu adipiscing lorem. Sed mattis magna imperdiet nulla tempor blandit. Praesent aliquet leo non quam auctor, vitae porta tortor tincidunt. Vivamus dapibus eget velit et vestibulum. Nulla nec ipsum ut mi suscipit pulvinar sed sed diam. Mauris ullamcorper hendrerit imperdiet. Mauris tortor ante, mattis id metus sit amet, congue ullamcorper nibh. Aenean vestibulum fermentum metus semper accumsan. Donec quam arcu, porta quis diam et, pretium lobortis risus. Sed quam ante, congue eu lobortis eget, laoreet ullamcorper nunc. Praesent mi nisl, laoreet vulputate congue a, pretium id enim. Duis quis nulla tincidunt, vehicula erat non, tincidunt dui.

Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec accumsan quam ac tortor feugiat, imperdiet pellentesque ante rhoncus. In vel bibendum dolor. Praesent suscipit dui risus, eget accumsan nulla ullamcorper varius. Quisque bibendum dolor id eleifend pellentesque. Curabitur eleifend nisl ut erat congue, nec varius dolor feugiat.");

$smarty->display('index.tpl');
?>

