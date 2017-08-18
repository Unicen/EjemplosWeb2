<?php
  function sumar($sumandos)
  {
    $resultado = array_sum($sumandos);
    return "La suma de ".implode("+", $sumandos)." fue $resultado";
  }

  function restar($restandos)
  {
    $resultado = array_sum($restandos);
    return "La resta de ".implode("-", $restandos)." fue $resultado";
  }
 ?>
