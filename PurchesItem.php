<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purches Item</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <form action="" method="post">
            <h1>Create Invoice</h1>
            <table class="table">
                <tr><hr></tr>
                <tr>
                    <th class="column">Supplier Id</th>
                    <td><input type="text" name="SupplierId" id="SupplerId" class="input2"></td>
                    <th class="column">Date</th>
                    <td><input type="date" name="Date" id="Date" class="input2"></td>
                </tr>
            </table>
            <table class="table">
                <tr>
                    <td><input type="text" name="SupplierName" id="SupplierName" class="input3" placeholder="Enter Supplier Name"></td>
                    <td><input type="text" name="InvoiceNumber" id="InvoiceNumber" class="input3" placeholder="Enter Invoice Number"></td>
                </tr>
                <tr>
                    <td><input type="text" name="SupplierAddress" id="SupplierAddress" class="input3" placeholder="Enter Suppler Address"></input></td>
                    <td><input type="text" name="Date" id="Date" class="input3" placeholder="Enter Invoice Date"></td>
                </tr>
            </table>
            <table class="table">
                <tr><hr></tr>
            </table>
            <table class="table">
                <tr>
                    <th class="column">Sr.No</th>
                    <th class="column">Product Name</th>
                    <th class="column">Quantity</th>
                    <th class="column">price</th>
                    <th class="column">Actual Amt</th>
                    <th class="column">Ex.Date</th>
                    <th class="column">Mfp.Date</th>
                    <th class="column">Brand</th>
                    <th class="column">GST</th>
                    <th class="column">Amount</th>
                </tr>
                <tr width="">
                    <td><input type="text" class="input4" name="SrNo" id="SrNo"></td>
                    <td><input type="text" class="input4" name="ProductName" id="ProductName"></td>
                    <td><input type="text" class="input4" name="Quantity" id="Quantity"></td>
                    <td><input type="text" class="input4" name="Price" id="Price"></td>
                    <td><input type="text" class="input4" name="ActualAmt" id="ActualAmt"></td>
                    <td><input type="text" class="input4" name="ExDate" id="ExDate"></td>
                    <td><input type="text" class="input4" name="MfpDate" id="MfpDate"></td>
                    <td><input type="text" class="input4" name="Brand" id="Brand"></td>
                    <td><input type="text" class="input4" name="GST" id="GST"></td>
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
    
</body>
</html>