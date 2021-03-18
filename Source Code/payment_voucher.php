<?php

include("include/header.php");

?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Payment Voucher</h1>
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
        <form>
        <div class="row">
               <div class="col-sm-6">
               <label>Date </label><br>
                <input type="text" id="payment_date" name="payment_date" placeholder= "YYYY/MM/DD"><br><br>
                <label>Payment Number</label><br>
                <input type="text" id="payment_number" name="payment_number" placeholder= ""><br><br>
                <label>Description </label><br>
                <input type="text" id="payment_des" name="payment_des" placeholder= ""><br><br>
                <label>Discount Received </label><br>
                <input type="text" id="payment_discount" name="payment_discount" placeholder= "0"><br><br>
               
               </div>
               <div class="col-sm-6">
               <label>Amount </label><br>
                <input type="text" id="payment_amt" name="payment_amt" placeholder= "0"><br><br>
                <label>Receipt Analysis </label><br>
                 <input type="radio" id="cash_purchase" name="cash_purchase" value="cash_purchase"><label>Cash Purchase</label><br>
                <input type="radio" id="creditors" name="creditors" value="creditors"><label>Creditors</label><br>
                <input type="radio" id="expenses" name="expenses" value="expenses"><label>Expenses</label><br>
                <input type="radio" id="other" name="other" value="other"><label>Others</label><br>
                
                <input type="submit" name="payment_submit" class="submit" value="ADD" ><br><br>
               </div>
               </div>
        </form>
             </div>                     
         </div>
  
<?php
    include("include/footer.php");
?>
 