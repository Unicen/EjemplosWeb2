<?php
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";
$cars[3] = "Chevrolet";


for ($i = 0; $i < count($cars); $i++) {
  echo  "<li>" . $cars[$i] . "</li>";
}

foreach ($cars as $aaaa) {
  echo "<li>".$aaaa."</li>";
}


?>
