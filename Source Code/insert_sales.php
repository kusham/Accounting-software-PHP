<?php

//define varialbles

//saless invoice
$s_invoice_date = $s_invoice_number = $s_invoice_customer= $s_invoice_des = '';
$s_invoice_uprice = $s_invoice_qty = $s_invoice_value = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["s_invoice_date"])) {
    $s_invoice_date = "Unknown";
  } else {
    $s_invoice_date = test_input($_POST["s_invoice_date"]);
  }
  
  if (empty($_POST["s_invoice_number"])) {
    $s_invoice_number = "Unknown";
  } else {
    $s_invoice_number = test_input($_POST["s_invoice_number"]);
  }
    
  if (empty($_POST["s_invoice_customer"])) {
    $s_invoice_customer = "Unknown";
  } else {
    $s_invoice_customer = test_input($_POST["s_invoice_customer"]);
  }

  if (empty($_POST["s_invoice_des"])) {
    $s_invoice_des = "Unknown";
  } else {
    $s_invoice_des = test_input($_POST["s_invoice_des"]);
  }

  if (empty($_POST["s_invoice_uprice"])) {
    $s_invoice_uprice = "Unknown";
  } else{
    $s_invoice_uprice = test_input($_POST["s_invoice_uprice"]);
  }

  if (empty($_POST["s_invoice_qty"])) {
    $s_invoice_qty = "Unknown";
  } else{
    $s_invoice_qty = test_input($_POST["s_invoice_qty"]);
  }

  if (empty($_POST["s_invoice_value"])) {
    $s_invoice_value = "Unknown";
  } else {
    $s_invoice_value = test_input($_POST["s_invoice_value"]);
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




$sql_2 = "INSERT INTO sales_journal (Dates, Invoice_Number, Customer,	Descriptions, Quantity,Unit_Price, Valu)
VALUES ('".$s_invoice_date."', '".$s_invoice_number."', '".$s_invoice_customer."', '".$s_invoice_des."', '".$s_invoice_uprice."', '".$s_invoice_qty."', '".$s_invoice_value."')";




if (mysqli_query($conn, $sql_2)) {
  include("index.php");
  
} else {
echo "Error: " . $sql_2 . "<br>" . mysqli_error($conn);
}


?>