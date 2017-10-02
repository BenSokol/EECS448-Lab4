<!--
  @Filename: index.php
  @Author:   Ben Sokol <Ben>
  @Email:    bensokol@ku.edu
  @Created:  October 1st, 2017 [1:20am]
  @Modified: October 1st, 2017 [9:07pm]

  Copyright (C) 2017 by Ben Sokol. All Rights Reserved.
-->


<html>
<head>
  <title>EECS 448 - Lab 4 - Exercise 1</title>
  <link type="text/css" rel="stylesheet" href="../css/style.css">
</head>
<body>
  <h1>Multiplcation Table</h1>
  <table>
    <?php
    //thead
    echo "<thead>";
    echo "<tr>";
    echo "<th></th>";
    for($i = 1; $i <= 100; $i++) {
      echo "<th>".$i."</th>";
    }
    echo "</tr>";
    echo "</thead>";

    // tbody
    echo "<tbody>";
    for($i = 1; $i <= 100; $i++) {
      echo "<tr>";
      echo "<th>".$i."</th>";
      for($j = 1; $j <= 100; $j++) {
        echo "<td class=\"center\">".($i * $j)."</td>";
      }
      echo "</tr>";
    }
    echo "</tbody>";
    ?>
  </table>
</body>
</html>
