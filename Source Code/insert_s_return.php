<?php

//define varialbles

//credite note
$c_note_date = $c_note_number = $c_note_supplier = $c_note_des="";
$c_note_qty = $c_note_uprice =  $c_note_value = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["c_note_date"])) {
    $c_note_date = "Unknown";
  } else {
    $c_note_date = test_input($_POST["c_note_date"]);
  }
  
  if (empty($_POST["c_note_number"])) {
    $c_note_number = "Unknown";
  } else {
    $c_note_number = test_input($_POST["c_note_number"]);
  }
    
  if (empty($_POST["c_note_supplier"])) {
    $c_note_supplier = "Unknown";
  } else {
    $c_note_supplier = test_input($_POST["c_note_supplier"]);
  }

  if (empty($_POST["c_note_des"])) {
    $c_note_des = "Unknown";
  } else {
    $c_note_des = test_input($_POST["c_note_des"]);
  }

  if (empty($_POST["c_note_uprice"])) {
    $c_note_uprice = "Unknown";
  } else{
    $c_note_uprice = test_input($_POST["c_note_uprice"]);
  }

  if (empty($_POST["c_note_qty"])) {
    $c_note_qty = "Unknown";
  } else{
    $c_note_qty = test_input($_POST["c_note_qty"]);
  }

  if (empty($_POST["c_note_value"])) {
    $c_note_value = "Unknown";
  } else {
    $c_note_value = test_input($_POST["c_note_value"]);
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




$sql_4 = "INSERT INTO sales_return_journal (Dates, Credit_Number, Customer,	Descriptions, Quantity,Unit_Price, Valu)
VALUES ('".$c_note_date."', '".$c_note_number."', '".$c_note_supplier."', '".$c_note_des."', '".$c_note_uprice."', '".$c_note_qty."', '".$c_note_value."')";






if (mysqli_query($conn, $sql_4)) {
  include("index.php");
  
} else {
echo "Error: " . $sql_4 . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>