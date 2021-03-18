<?php

//define varialbles


//debit note
$d_note_date = $d_note_number = $d_note_supplier = $d_note_des="";
$d_note_qty = $d_note_uprice =  $d_note_value = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["d_note_date"])) {
    $d_note_date = "Unknown";
  } else {
    $d_note_date = test_input($_POST["d_note_date"]);
  }
  
  if (empty($_POST["d_note_number"])) {
    $d_note_number = "Unknown";
  } else {
    $d_note_number = test_input($_POST["d_note_number"]);
  }
    
  if (empty($_POST["d_note_supplier"])) {
    $d_note_supplier = "Unknown";
  } else {
    $d_note_supplier = test_input($_POST["d_note_supplier"]);
  }

  if (empty($_POST["d_note_des"])) {
    $d_note_des = "Unknown";
  } else {
    $d_note_des = test_input($_POST["d_note_des"]);
  }

  if (empty($_POST["d_note_qty"])) {
    $d_note_qty = "Unknown";
  } else{
    $d_note_qty = test_input($_POST["d_note_qty"]);
  }

  if (empty($_POST["d_note_uprice"])) {
    $d_note_uprice = "Unknown";
  } else{
    $d_note_uprice = test_input($_POST["d_note_uprice"]);
  }

  if (empty($_POST["d_note_value"])) {
    $d_note_value = "Unknown";
  } else {
    $d_note_value = test_input($_POST["d_note_value"]);
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




$sql_3 = "INSERT INTO purchase_return_journal (Dates, Debit_Number, Supplier,	Descriptions, Quantity,Unit_Price, Valu)
VALUES ('".$d_note_date."', '".$d_note_number."', '".$d_note_supplier."', '".$d_note_des."', '".$d_note_uprice."', '".$d_note_qty."', '".$d_note_value."')";






if (mysqli_query($conn, $sql_3)) {
  include("index.php");
  
} else {
echo "Error: " . $sql_3 . "<br>" . mysqli_error($conn);
}



mysqli_close($conn);
?>