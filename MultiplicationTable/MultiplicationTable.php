<?php
   echo "<p>Hello, World!</p>";

echo '<table>';

for($x = 1; $x < 101; ++$x)
 {
    if ($x == 1) {
      echo'<tr>';
      echo'<th> </th>';
      for ($z = 1; $z < 101; ++$z) {
        echo '<th>'.$z.'</th>';
      }
      echo'</tr>';
    }
    echo '<tr>';
    for($y = 1; $y < 101; ++$y)
      {
        if ($y == 1) {
          echo '<td><b>'.$x.'</b></td>';
          echo '<td>'.$y*$x.'</td>';
        } else {
          echo '<td>'.$y*$x.'</td>';
        }
      }
   echo '</tr>';
  }
echo '</table>';

/*echo
"<table>"
 "<tr>"
   "<th>" "First Name" "</th>"
   "<th>" "Lastname" "</th>"
   "<th>" "Age" "</th>"
 "</tr>"
 "<tr>"
   "<td>" "Jill" "</td>"
   "<td>" "Smith" "</td>"
   "<td>" "50" "</td>"
 "</tr>"
 "<tr>"
   "<td>" "Eve" "</td>"
   "<td>" "Jackson" "</td>"
   "<td>" "94" "</td>"
 "</tr>"
"</table>";*/

?>
