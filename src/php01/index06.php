<?php

function areaTriangle($bottom, $height) {
  $result = ($bottom * $height) / 2;
  return $result;
}
$display1 = areaTriangle(10, 5);
echo $display1 . "<br />";

function areaSquare($vertical, $beside) {
  $result = $vertical * $beside;
  return $result;
}
$display2 = areaSquare(8, 9);
echo $display2 . "<br />";

function areaTrapezium($upper, $lower, $height) {
  $result = (($upper + $lower) * $height) / 2;
  return $result;
}
$display3 = areaTrapezium(6, 8, 7);
echo $display3 .";