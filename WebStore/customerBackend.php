<?php
  $username = $_POST["username"];
  $password = $_POST["password"];

  $plushToyIsSelected = $_POST["plushToy-selected"];
  $staplerIsSelected = $_POST["stapler-selected"];
  $flamethrowerIsSelected = $_POST["flamethrower-selected"];
  $deodorantIsSelected = $_POST["deodorant-selected"];

  $quantityPlushToys = 0;
  $quantityStaplers = 0;
  $quantityFlamethrowers = 0;
  $quantityDeodorants = 0;

  $costPlushToy = 19.82;
  $costStapler = 7.99;
  $costFlamethrower = 199.77;
  $costDeodorant = 3.98;


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

  if ($shippingSelection == "A") {
    $shippingType = "7 days";
    $shippingCost = 0;
  }
  if ($shippingSelection == "B") {
    $shippingType = "Overnight";
    $shippingCost = 50;
  }
  if ($shippingSelection == "C") {
    $shippingType = "3 days";
    $shippingCost = 5;
  }

  $subtotalPlushToys = $quantityPlushToys * $costPlushToy;
  $subtotalStaplers = $quantityStaplers * $costStapler;
  $subtotalFlamethrowers = $quantityFlamethrowers * $costFlamethrower;
  $subtotalDeodorants = $quantityDeodorants * $costDeodorant;

  $totalCost = number_format($subtotalPlushToys + $subtotalStaplers + $subtotalFlamethrowers + $subtotalDeodorants + $shippingCost,2);

  echo "<h1 style='text-align: center;'>Welcome ". $username . "!</h1>";
  echo "<p style='font-size: 20px;'>Your password is: " . $password . "</p>";

  /*echo "Plush toy selected: " . $plushToyIsSelected . "<br>";
  echo "Stapler selected: " . $staplerIsSelected . "<br>";
  echo "Flamethrower selected: " . $flamethrowerIsSelected . "<br>";
  echo "Deodorant selected: " . $deodorantIsSelected . "<br>";

  echo "Quantity plush toys: " . $quantityPlushToys . "<br>";
  echo "Quantity staplers: " . $quantityStaplers . "<br>";
  echo "Quantity flamethrowers: " . $quantityFlamethrowers . "<br>";
  echo "Quantity deodorants: " . $quantityDeodorants . "<br>";

  echo "Shipping: " . $shippingType . "<br>";*/

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
