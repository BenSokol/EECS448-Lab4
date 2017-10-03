<!--
  @Filename: customerBackend.php
  @Author:   Ben Sokol <Ben>
  @Email:    bensokol@ku.edu
  @Created:  October 3rd, 2017 [12:34am]
  @Modified: October 3rd, 2017 [2:59am]

  Copyright (C) 2017 by Ben Sokol. All Rights Reserved.
-->


<html>
<head>
  <title>EECS 448 - Lab 4 - Exercise 3</title>
  <link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>
  <div class="form">
    <h1 class="center">Web Store Receipt</h1>
    <?php
      $total = 0;
      $items = ["Apples",
                "Grapes",
                "iPhones"
              ];
      $costs = ["10.25",
                "4.99",
                "1.99"
              ];

      print "Thank you for choosing Web Store<br><br>";
      print "Welcome ".$_POST["username"]."<br>";
      print "Your password is: ".$_POST["password"]."<br><br>";

      print "<table>";

        // thead
        print "<thead>";
          print "<tr>";
            print "<th class=\"no_border\"></th>";
            print "<th>Quantity</th>";
            print "<th>Cost Per Item</th>";
            print "<th>Sub Total</th>";
          print "</tr>";
        print "</thead>";

        // tbody
        print "<tbody>";

          //Items
          for($i = 0; $i < 3; $i++) {
            $item_subtotal = ($costs[$i] * $_POST["item-".($i + 1)]);
            $total += $item_subtotal;
            print "<tr>";
              print "<th>".$items[$i]."</th>";
              print "<td>".number_format($_POST["item-".($i + 1)], 0)."</th>";
              print "<td>\$".$costs[$i]."</th>";
              print "<td>\$".number_format($item_subtotal, 2, '.', ',')."</th>";
            print "</tr>";
          }

          //Shipping
          print "<tr>";
            print "<th>Shipping</th>";
            $total += $_POST["shipping"];
            if($_POST["shipping"] == 0) {
              print "<td colspan=\"2\">7 day</td>";
            }
            else if($_POST["shipping"] == 5){
              print "<td colspan=\"2\">3 day</td>";
            }
            else {
              print "<td colspan=\"2\">Overnight</td>";
            }
            print "<td>\$".number_format($_POST["shipping"], 2, '.', ',')."</td>";
          print "</tr>";
        print "</tbody>";

        // Total Cost
        print "<tfoot>";
          print "<tr>";
            print "<th colspan=\"3\">Total Cost</th>";
            print "<th class=\"total\">\$".number_format($total, 2, '.', ',')."</th>";
          print "</tr>";
        print "</tfoot>";
      print "</table>";
    ?>
  </div>
</body>
</html>
