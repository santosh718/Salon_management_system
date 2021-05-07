<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
    <?php include 'header.php' ?>

 </div>
<div class="grid-container">
       
        


        <div>
            <?php include 'testmenu.php' ?>

        </div>
        <div>
            <form action="" method="post">
                <h1>Create Invoice</h1>
                <table class="table">
                    <tr><hr></tr>
                    <tr>
                        <th class="column">Bill ID</th>
                        <td><input type="text" name="BillingId" id="BillingId" class="input2"></td>
                        <th class="column">Date</th>
                        <td><input type="date" name="Date" id="Date" class="input2"></td>
                    </tr>
                </table>
                <table class="table">
                    <tr>
                        <td><input type="text" name="CustomerName" id="CustomerName" class="input3" placeholder="Enter Customer Name"></td>
                        <td><input type="text" name="CustomerId" id="CustomerId" class="input3" placeholder="Enter Customer ID"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="ModileNumber" id="ModileNumber" class="input3" placeholder="Enter Modile Number"></input></td>
                        <td><select name="PaymentMode" id="PaymentMode" class="input3" placeholder="Select Payment Mode">
                            <option value="None">None</option>
                            <option value="Male">Cash</option>
                            <option value="Female">Online</option>
                            </select></td>
                    </tr>
                </table>
                <table class="table">
                    <tr><hr></tr>
                </table>
                <table class="table">
                    <tr>
                        <th>
                        <h3 class="column">Service</h3>
                        </th>
                    </tr>
                    <tr>
                        <th class="column">Service Name</th>
                        <th class="column">Rate</th>
                        <th class="column">Service Amt</th>
                        <th class="column">SGST</th>
                        <th class="column">CGST</th>
                        <th class="column">Total Amount</th>
                        
                    </tr>
                    <tr width="">
                        <td><input type="text" class="input4" name="Service" id="Service"></td>
                        <td><input type="text" class="input4" name="Rate" id="Rate"></td>
                        <td><input type="text" class="input4" name="ServiceAmt" id="ServiceAmt"></td>
                        <td><input type="text" class="input4" name="SGST" id="SGST"></td>
                        <td><input type="text" class="input4" name="CGST" id="CGST"></td>
                        <td><input type="text" class="input4" name="TotalAmount" id="TotalAmount"></td>
                        
                    </tr>
                    <tr>
                        <th>
                            <h3 class="column">Items used</h3>
                        </th>
                    </tr>
                    <tr>
                
                        <th class="column">Product Name</th>
                        <th class="column">SAC</th>
                        <th class="column">Quantity</th>
                        <th class="column">price</th>
                        <th class="column">Actual Amt</th>
                        <th class="column">Ex.Date</th>
                        <th class="column">Mfp.Date</th>
                        <th class="column">Brand</th>
                        
                        <th class="column">Discount</th>
                        <th class="column">SGST</th>
                        <th class="column">CGST</th>
                        <th class="column">Amount</th>
                    </tr>
                    <tr width="">
                        <td><input type="text" class="input4" name="ProductName" id="ProductName"></td>
                        <td><input type="text" class="input4" name="SAC" id="SAC"></td>
                        <td><input type="text" class="input4" name="Quantity" id="Quantity"></td>
                        <td><input type="text" class="input4" name="Price" id="Price"></td>
                        <td><input type="text" class="input4" name="ActualAmt" id="ActualAmt"></td>
                        <td><input type="text" class="input4" name="ExDate" id="ExDate"></td>
                        <td><input type="text" class="input4" name="MfpDate" id="MfpDate"></td>
                        <td><input type="text" class="input4" name="Brand" id="Brand"></td>
                        <td><input type="text"class="input4" name="Discount" id="Discount"></td>
                        <td><input type="text" class="input4" name="SGST" id="SGST"></td>
                        <td><input type="text" class="input4" name="CGST" id="CGST"></td>
                        <td><input type="text" class="input4" name="Amount" id="Amount"></td>
                    </tr>
                </table>
                <table class="table">
                <tr>
                    <th class="column1">Total Amount</th>
                    <td><input type="text" name="TotalAmount" id="TotalAmount"></td>
                </tr>
                <tr>
                    <th class="column1">Pay Amount</th>
                    <td><input type="text" name="PayAmount" id="PayAmount"></td>
                </tr>
                <tr>
                    <th class="column1">Dues Amount</th>
                    <td><input type="text" name="DuesAmount" id="DuesAmount"></td>
                </tr>
                </table>
                <table class="table"> 
                    <tr>
                        <td><input type="submit" value="Create" class="button1"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <div>
        <?php include 'footer.php' ?>
    </div>
</body>
</html>