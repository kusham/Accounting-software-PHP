<?php

include("include/header.php");

?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Credit Note</h1>
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
                
            
<!--code here-->
            <br>
        <form action="insert_s_return.php" method = "POST">
        <div class="row">
               <div class="col-sm-6">
               <label>Date </label><br>
                <input type="text" id="c_note_date" name="c_note_date" placeholder= "YYYY/MM/DD"><br><br>
                <label>Credit note Number</label><br>
                <input type="text" id="c_note_number" name="c_note_number" placeholder= ""><br><br>
                <label>Customer </label><br>
                <input type="text" id="c_note_supplier" name="c_note_supplier" placeholder= ""><br><br>
                <label>Description </label><br>
                <input type="text" id="c_note_des" name="c_note_des" placeholder= ""><br><br>
                
               </div>
               <div class="col-sm-6">
               <label>Quantity </label><br>
                <input type="text" id="c_note_qty" name="c_note_qty" placeholder= "0"><br><br>
                <label>Unit Price </label><br>
                <input type="text" id="c_note_uprice" name="c_note_uprice" placeholder= "0"><br><br>
                <label>Value</label><br>
                <input type="text" id="c_note_value" name="c_note_value" placeholder= "0"><br><br>
                
                <input type="submit" name="credit_submit" class="submit" value="ADD" ><br><br>
               </div>
               </div>
        </form>
             </div>                     
         </div>
  
<?php
    include("include/footer.php");
?>
 