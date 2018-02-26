<?php

  $username = $_POST["username"];
  $password = $_POST["password"];

  $plushToyIsSelected = $_POST["plushToy-selected"];
  $staplerIsSelected = $_POST["stapler-selected"];
  $flamethrowerIsSelected = $_POST["flamethrower-selected"];
  $deodorantIsSelected = $_POST["deodorant-selected"];

  //Quantities initially set to 0
  $quantityPlushToys = 0;
  $quantityStaplers = 0;
  $quantityFlamethrowers = 0;
  $quantityDeodorants = 0;

  $costPlushToy = 19.82;
  $costStapler = 7.99;
  $costFlamethrower = 199.77;
  $costDeodorant = 3.98;

  //For each product, if it was selected, setting the quantity equal to the quantity input by the user; otherwise the quantity will remain 0

  if ($plushToyIsSelected == "on") {
    $quantityPlushToys = $_POST["quantity-plushtoys"];
  }

  if ($staplerIsSelected == "on") {
    $quantityStaplers = $_POST["quantity-staplers"];
  }

  if ($flamethrowerIsSelected == "on") {
    $quantityFlamethrowers = $_POST["quantity-flamethrowers"];
  }

  if ($deodorantIsSelected == "on") {
    $quantityDeodorants = $_POST["quantity-deodorants"];
  }

  $shippingSelection = $_POST["shipping-selection"];

  //Each selection has a value associated with it (A, B, or C); from the value we can tell what the selection was and its cost
  if ($shippingSelection == "A") {
    $shippingType = "7 days";
    $shippingCost = number_format(0,2);
  }
  if ($shippingSelection == "B") {
    $shippingType = "Overnight";
    $shippingCost = number_format(50,2);
  }
  if ($shippingSelection == "C") {
    $shippingType = "3 days";
    $shippingCost = number_format(5,2);
  }
  //Number_format formats number with only with two decimal places (in this case)
  $subtotalPlushToys = number_format($quantityPlushToys * $costPlushToy,2);
  $subtotalStaplers = number_format($quantityStaplers * $costStapler,2);
  $subtotalFlamethrowers = number_format($quantityFlamethrowers * $costFlamethrower,2);
  $subtotalDeodorants = number_format($quantityDeodorants * $costDeodorant,2);

  //Adding all the costs and fomatting number with only two decimal places
  $totalCost = number_format($subtotalPlushToys + $subtotalStaplers + $subtotalFlamethrowers + $subtotalDeodorants + $shippingCost,2);

  echo "<h1 style='text-align: center;'>Welcome ". $username . "!</h1>";
  echo "<p style='font-size: 20px;'>Your password is: " . $password . "</p>";

  echo "<p style='font-size: 20px;'>Your receipt:</p>";
  echo "<table style='border: 1px solid black;'>";
  echo
  "<tr>
    <th></th>
    <th style='border: 1px solid black; font-size: 18px;'>Quantity</th>
    <th style='border: 1px solid black; font-size: 18px;'>Cost per Item</th>
    <th style='border: 1px solid black; font-size: 18px;'>Subtotal</th>
  </tr>";
  echo "<tr>
    <th style='border: 1px solid black; font-size: 18px;'>Plush Toys</th>
    <td style='border: 1px solid black; '>" . $quantityPlushToys . "</td>
    <td style='border: 1px solid black;'>" . "$" . $costPlushToy . "</td>
    <td style='border: 1px solid black;'>" . "$" . $subtotalPlushToys . "</td>
  </tr>";
  echo "<tr>
    <th style='border: 1px solid black; font-size: 18px;'>Staplers</th>
    <td style='border: 1px solid black;'>" . $quantityStaplers . "</td>
    <td style='border: 1px solid black;'>" . "$" . $costStapler . "</td>
    <td style='border: 1px solid black;'>" . "$" . $subtotalStaplers . "</td>
  </tr>";
  echo "<tr>
    <th style='border: 1px solid black; font-size: 18px;'>Flamethrowers</th>
    <td style='border: 1px solid black;'>" . $quantityFlamethrowers . "</td>
    <td style='border: 1px solid black;'>" . "$" . $costFlamethrower . "</td>
    <td style='border: 1px solid black;'>" . "$" . $subtotalFlamethrowers . "</td>
  </tr>";
  echo "<tr>
    <th style='border: 1px solid black; font-size: 18px;'>Deodorants</th>
    <td style='border: 1px solid black;'>" . $quantityDeodorants . "</td>
    <td style='border: 1px solid black;'>" . "$" . $costDeodorant . "</td>
    <td style='border: 1px solid black;'>" . "$" . $subtotalDeodorants ."</td>
  </tr>";
  echo "<tr>
    <th style='border: 1px solid black; font-size: 18px;'>Shipping</th>
    <td style='border: 1px solid black;' colspan='2'>" . $shippingType . "</td>
    <td style='border: 1px solid black;'>" . "$" . $shippingCost . "</td>
  </tr>";
  echo "<tr>
    <th style='border: 1px solid black; font-size: 18px;' colspan='3'>Total Cost</th>
    <td style='border: 1px solid black;'>" . "$" . $totalCost . "</td>
  </tr>";
echo "</table>";

 ?>
