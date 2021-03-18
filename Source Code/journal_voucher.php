<?php

include("include/header.php");

?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Journal Voucher</h1>
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
                <br>
                
<!--code here-->
        <form>
                <label>Date </label><br>
                <input type="text" id="journal_voucher_date" name="journal_voucher_date" placeholder="YYYY/MM/DD"><br><br>
                
                <label>Description </label><br>
                <input type="text" id="journal_voucher_des" name="journal_voucher_des" placeholder=""><br><br>
                
               
                <label>Debit or Credit </label><br>
                 <input type="radio" id="debit" name="debit" value="debit"><label>Debit</label><br>
                <input type="radio" id="credit" name="credit" value="credit"><label>Credit</label><br>
                
                <input type="submit" name="journal_submit" class="submit" value="ADD"><br><br>
                
        </form>
             </div>                     
         </div>
  
<?php
    include("include/footer.php");
?>
 