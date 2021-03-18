<?php
include("include/header.php");
?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sales Invoice</h1>
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
                </div>    
             
                
<!--code here--> <br>
                <form action="insert_sales.php" method = "POST">
                
                <div class="row">
               <div class="col-sm-6">
               <label>Date </label><br>
                <input type="text" id="s_invoice_date" name="s_invoice_date" placeholder= "YYYY/MM/DD"><br><br>
                <label>Invoice Number</label><br>
                <input type="text" id="s_invoice_number" name="s_invoice_number" placeholder= ""><br><br>
                <label>Customer </label><br>
                <input type="text" id="s_invoice_supplier" name="s_invoice_customer" placeholder= ""><br><br>
                <label>Description </label><br>
                <input type="text" id="s_invoice_des" name="s_invoice_des" placeholder= ""><br><br>
                
               </div>
               <div class="col-sm-6">
               <label>Quantity </label><br>
                <input type="text" id="s_invoice_qty" name="s_invoice_qty" placeholder= "0"><br><br>
                <label>Unit Price </label><br>
                <input type="text" id="s_invoice_uprice" name="s_invoice_uprice" placeholder= "0"><br><br>
                <label>Value</label><br>
                <input type="text" id="s_invoice_value" name="s_invoice_value" placeholder= "0"><br><br>
                
                <input type="submit" name="s_invoice_submit" class="submit" value="ADD"><br><br>
                
               </div>
               </div>
                </form>
               
             </div>                     
         </div>
  
<?php
    include("include/footer.php");
?>
 