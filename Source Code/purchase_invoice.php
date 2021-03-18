<?php

include("include/header.php");

?>





        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Purchase Invoice</h1>
                        <form>
                 <input type="button" onclick="window.location.href='purchase_invoice.php';" value="Purchase invoice" />
                 <input type="button" onclick="window.location.href='sales_invoice.php';" value="Sales invoice" />
                 <input type="button" onclick="window.location.href='credit_note.php';" value="Credit note" />
                 <input type="button" onclick="window.location.href='debit_note.php';" value="Debit note" />
                 <input type="button" onclick="window.location.href='cash_receipt_voucher.php';" value="Cash receipt voucher" />
                 <input type="button" onclick="window.location.href='payment_voucher.php';" value="Payment voucher" />
                 <input type="button" onclick="window.location.href='petty_cash_voucher.php';" value="Petty cash voucher" />
                 <input type="button" onclick="window.location.href='journal_voucher.php';" value="Journal voucher" />
                  </form>
                    </div>     
                </div>  <br> 
                
                
<!--code here-->
               <form action="insert_purchase.php" method = "POST">
               <div class="row">
               <div class="col-sm-6">
                 <label>Date </label><br>
                <input type="text" id="p_invoice_date" name="p_invoice_date" placeholder="YYYY/MM/DD"><br><br>

                <label>Invoice Number</label><br>
                <input type="text" id="p_invoice_number" name="p_invoice_number" placeholder= ""><br><br>

                <label>Supplier </label><br>
                <input type="text" id="p_invoice_supplier" name="p_invoice_supplier" placeholder= ""><br><br>

                <label>Description </label><br>
                <input type="text" id="p_invoice_des" name="p_invoice_des" placeholder= ""><br><br>
                </div>
                

                <div class="col-sm-6">
                <label>Quantity </label><br>
                <input type="text" id="p_invoice_qty" name="p_invoice_qty" placeholder= "0"><br><br>

                <label>Unit Price </label><br>
                <input type="text" id="p_invoice_uprice" name="p_invoice_uprice" placeholder= "0"><br><br>

                <label>Value</label><br>
                <input type="text" id="p_invoice_value" name="p_invoice_value" placeholder= "0"><br><br>
                
              
                <input type="submit" class="submit" name="p_invoice_submit" value="ADD" ><br><br>
               
                
            
                </div>
               </div>
               </form>
                 
               
                
             </div>                     
         </div>
  
<?php
    include("include/footer.php");
?>
 