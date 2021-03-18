<?php

//define varialbles
//purchase invoice
$p_invoice_date = $p_invoice_number = $p_invoice_supplier= $p_invoice_des = '';
$p_invoice_uprice = $p_invoice_qty = $p_invoice_value = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["p_invoice_date"])) {
    $p_invoice_date = "Unknown";
  } else {
    $p_invoice_date = test_input($_POST["p_invoice_date"]);
  }
  
  if (empty($_POST["p_invoice_number"])) {
    $p_invoice_number = "Unknown";
  } else {
    $p_invoice_number = test_input($_POST["p_invoice_number"]);
  }
    
  if (empty($_POST["p_invoice_supplier"])) {
    $p_invoice_supplier = "Unknown";
  } else {
    $p_invoice_supplier = test_input($_POST["p_invoice_supplier"]);
  }

  if (empty($_POST["p_invoice_des"])) {
    $p_invoice_des = "Unknown";
  } else {
    $p_invoice_des = test_input($_POST["p_invoice_des"]);
  }

  if (empty($_POST["p_invoice_uprice"])) {
    $p_invoice_uprice = "Unknown";
  } else{
    $p_invoice_uprice = test_input($_POST["p_invoice_uprice"]);
  }

  if (empty($_POST["p_invoice_qty"])) {
    $p_invoice_qty = "Unknown";
  } else{
    $p_invoice_qty = test_input($_POST["p_invoice_qty"]);
  }

  if (empty($_POST["p_invoice_value"])) {
    $p_invoice_value = "Unknown";
  } else {
    $p_invoice_value = test_input($_POST["p_invoice_value"]);
  }
}



  
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
   return $data;
  }
  

  //connection
include("connection.php");



$sql_1 = "INSERT INTO purchase_journal (Dates, Invoice_Number, Supplier,	Descriptions, Quantity,Unit_Price, Valu)
VALUES ('".$p_invoice_date."', '".$p_invoice_number."', '".$p_invoice_supplier."', '".$p_invoice_des."', '".$p_invoice_uprice."', '".$p_invoice_qty."', '".$p_invoice_value."')";





if (mysqli_query($conn, $sql_1)) {
    include("index.php");
    
} else {
  echo "Error: " . $sql_1 . "<br>" . mysqli_error($conn);
}



mysqli_close($conn);
?>