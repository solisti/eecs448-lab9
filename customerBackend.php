<?php

  // header("Content-type: text/css");

  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  $username = $_POST["Username"];
  $password = $_POST["Password"];

  $shipping = $_POST["ship"];
  $potato = $_POST["item1"];
  $tomato = $_POST["item2"];
  $penguin = $_POST["item3"];

  $ship_option;

  if ($shipping == 0) {
    $ship_option = "Free";
  } else if ($shipping == 50) {
    $ship_option = "Over night";
  } else {
    $ship_option = "Three day";
  }

  echo "Welcome, " . $username . "! <br>";
  echo "Your password is '" . $password . "'.<br>";

  echo "<br>";

  echo "Here is your receipt: ";

  echo "<table border=\"1\">";

  echo "<tr>";
    echo "<td></td>";
    echo "<th>Quantity</th>";
    echo "<th>Cost Per Item</th>";
    echo "<th>Sub Total</th>";
  echo "</tr>";

  echo "<tr>";
    echo "<td><b>Item 1</b></td>";
    echo "<td>" . $potato . "</td>";
    echo "<td>$425.00</td>";
    echo "<td>$" . $potato * 425 . "</td>";
  echo "</tr>";

  echo "<tr>";
    echo "<td><b>Item 2</b></td>";
    echo "<td>" . $tomato . "</td>";
    echo "<td>$128.00</td>";
    echo "<td>$" . $tomato * 128 . "</td>";
  echo "</tr>";

  echo "<tr>";
    echo "<td><b>Item 3</b></td>";
    echo "<td>" . $penguin . "</td>";
    echo "<td>$399.00</td>";
    echo "<td>$" . $penguin * 399 . "</td>";
  echo "</tr>";

  echo '<tr>';
      echo '<td>Shipping</td>';
      echo '<td colspan="2">'.$ship_option.'</td>';
      echo '<td>$'.$shipping.'</td>';
  echo '</tr>';

  $total = $shipping + $potato * 425 + $tomato * 128 + $penguin * 399 ;

  echo "<tr>";
    echo "<td colspan='3'><b> Total Cost</b></td>";
    echo "<td>$" . $total . "</td>";
  echo "</tr>";

  echo "</table>";

 ?>