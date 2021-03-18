
<?php
include("include/header.php");
include_once ('connection.php');
$result = mysqli_query($conn,"SELECT * FROM purchase_journal");
$sum=0;


?>

<?php

?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Purchase Journal</h1>
                    </div>     
                </div>    
                
                
<!--code here-->
   <?php
       if (mysqli_num_rows($result) > 0) {
   ?>
          <table class="table">
            <tr>
              <th>Date</th>
              <th>Invoice number</th>
              <th>Supplier</th>
              <th>Description</th>
              <th>Quantity</th>
              <th>unit price</th>
              <th>value</th>
            </tr>
    <?php
      $i=0;
      while($rows = mysqli_fetch_array($result)) {
    ?>
            <tr>
                             <td><?php echo $rows["Dates"]; ?></td>
                             <td><?php echo $rows["Invoice_Number"]; ?></td>
                             <td><?php echo $rows["Supplier"]; ?></td>
                             <td><?php echo $rows["Descriptions"]; ?></td>
                             <td><?php echo $rows["Quantity"]; ?></td>
                             <td><?php echo $rows["Unit_Price"]; ?></td>
                             <td><?php echo $rows["Valu"]; ?></td>
           </tr>
     <?php
        $i++;
        $sum+= $rows["Valu"];
   }
      ?>
      <tr>
      <td colspan= "6"></td>
      <td><b><?php echo $sum;?></b></td>
      </tr>
            </table>
     <?php
    }
     else{
    echo "data has not been entered";
     }
     ?>
                

                
             </div>                     
         </div>
  
<?php
    include("include/footer.php");
?>
 