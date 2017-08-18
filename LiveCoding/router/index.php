<?php

function home()
{
  return '<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>Calculadora</title>
    </head>
    <body>
      <a href="#">Home</a>
      <a href="about">About</a>
      <a href="about/juan">About - Juan</a>
      <a href="pi">Numero Pi</a>
      <h1>Ingrese los numeros para sumar:</h1>
      <form class="" action="sumar" method="get">
        <label for="a">Primer Componente</label>
        <input type="number" id="a" name="a">
        <label for="b">Segundo Componente</label>
        <input type="number" id="b" name="b">
        <button type="submit">Sumar</button>
      </form>

    </body>
  </html>';
}
 ?>
