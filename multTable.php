<?php
echo "<table border=\"1\">";
echo "<tr>";
  for ($x=0; $x <= 100 ; $x++) {
    echo "<td>" . $x . "</td>";
  }
echo "</tr>";

for ($i=1; $i <= 100; $i++) {
  echo '<tr>';

  echo "<td>" . $i . "</td>";
  for ($j=1; $j <= 100; $j++) {
    echo "<td> " . $i * $j . " </td>";
  }
  echo '</tr>';
}
echo "</table>";
?>
