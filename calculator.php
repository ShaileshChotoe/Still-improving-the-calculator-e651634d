<?php

$getal1;
$getal2;

if (isset($_POST['submit']))
{
  $getal1 = $_POST['number1'];
  $getal2 = $_POST['number2'];
}


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="form" action="calculator.php" method="post">
      <input type="text" name="number1" value="">
      <label for="number1">First number</label>
      <input type="text" name="number2" value="">
      <label for="number2">Second number</label>
      <input type="submit" name="submit" value="add">
      <input type="submit" name="submit" value="multiply">
      <input type="submit" name="submit" value="divide">
      <input type="submit" name="submit" value="modulo">
      <input type="submit" name="submit" value="substract">
      <h1><?php


      if (isset($_POST['submit']))
      {
        switch ($_POST['submit']) {
          case 'add':
            echo $getal1 + $getal2;
            break;
          case 'multiply':
            echo $getal1 * $getal2;
            break;
            case 'divide':
              echo $getal1 / $getal2;
              break;
              case 'modulo':
                echo $getal % $getal2;
                break;
                case 'substract':
                  echo $getal1 - $getal2;
                  break;
          default:
            // code...
            break;
        }
      }

       ?></h1>
    </form>
  </body>
</html>
