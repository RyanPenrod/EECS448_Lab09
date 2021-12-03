<?php
  $i1subTotal = $_POST["usersFive"] * 10;
  $i2subTotal = $_POST["usersTen"] * 20;
  $i3subTotal = $_POST["usersTwenty"] * 50;
  if($_POST["usersShippingOption"] == "Seven Day Shipping"){
    $shippingCost = 0;
  }
  if($_POST["usersShippingOption"] == "Three Day Shipping"){
    $shippingCost = 5;
  }
  if($_POST["usersShippingOption"] == "Over Night Shipping"){
    $shippingCost = 50;
  }
  $totalCost = $i1subTotal + $i2subTotal + $i3subTotal + $shippingCost;

  echo '<html><head><link href="style.css" rel="stylesheet" type="text/css"></head>';
  echo '<div>Thank you for your purchase!</div><br>';
  echo '<div>Your password is: ' . $_POST["usersPass"] . '</div><br>';
  echo '<div class="receiptTable">';
  echo '<div class="number1"></div>';
  echo '<div class="number2">Quantity</div>';
  echo '<div class="number3">Cost Per Item</div>';
  echo '<div class="number4">Sub Total</div>';
  echo '<div class="number5">Five Dollar Bill</div>';
  echo '<div class="number6">' . $_POST["usersFive"] . '</div>';
  echo '<div class="number7">$10.00</div>';
  echo '<div class="number8">$' . $i1subTotal . '</div>';
  echo '<div class="number9">Ten Dollar Bill</div>';
  echo '<div class="number10">' . $_POST["usersTen"] . '</div>';
  echo '<div class="number11">$20.00</div>';
  echo '<div class="number12">$' . $i2subTotal . '</div>';
  echo '<div class="number13">Twenty Dollar Bill</div>';
  echo '<div class="number14">' . $_POST["usersTwenty"] . '</div>';
  echo '<div class="number15">$50.00</div>';
  echo '<div class="number16">$' . $i3subTotal . '</div>';
  echo '<div class="number17">Shipping</div>';
  echo '<div class="number18">' . $_POST["usersShippingOption"] . '</div>';
  echo '<div class="number19">$' . $shippingCost . '</div>';
  echo '<div class="number20">Total Cost</div>';
  echo '<div class="number21">$' . $totalCost . '</div>';
?>
