<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  echo "<table>";
  //x will be the rows
  for ($x = 0; $x <= 100; $x++){
    //y will be the columns
    echo "<tr>";
    for ($y = 0; $y <= 100; $y++){
      if($x == 0 && $y == 0){
        echo "<td> </td>";
      }
      elseif($x == 0 && $y != 0){
        echo "<td>" . $y . "</td>";
      }
      else if($y == 0 && $x != 0){
        echo "<td>" . $x . "</td>";
      }
      else{
        echo "<td>" . $x * $y . "</td>";
      }
    }
    echo "</tr>";
  }
  echo "</table>";
?>
