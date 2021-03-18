<?php

include("include/header.php");

?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Petty Cash Voucher</h1>
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
                <input type="text" id="p_cash_date" name="p_cash_date" placeholder="YYYY/MM/DD"><br><br>
                <label>Voucher Number</label><br>
                <input type="text" id="p_cash_number" name="p_cash_number"><br><br>
                <label>Description </label><br>
                <input type="text" id="p_cash_des" name="p_cash_des"><br><br>
                
               </div>
               <div class="col-sm-6">
               <label>Payments </label><br>
                <input type="text" id="p_cash_amt" name="p_cash_amt" placeholder="0"><br><br>
                <label>Analysis of Post </label><br>
                 <input type="radio" id="stationary" name="stationary" value="  stationary"><label>  Stationary</label><br>
                <input type="radio" id="traveling" name="traveling" value="traveling"><label>  Traveling</label><br>
                <input type="radio" id="post" name="post" value="post"><label>  Post</label><br>
                <input type="radio" id="ledger_acc" name="ledger_acc" value="ledger_acc"><label>  Ledger Accounts</label><br>
                
                <input type="submit" name="petty_cash_submit" class="submit" value="ADD"><br><br>
               </div>
               </div>
                
        </form>
             </div>                     
         </div>
  
<?php
    include("include/footer.php");
?>
 