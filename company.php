<?php
include 'Connect.php';
$cid = null;
$sql = "select CID from CompanyInfo order by CID DESC limit 1";

$result = $con->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $cid = $row["CID"];
    $cid = substr($cid, 1);
    $cid += 1;
    if($cid<10) {
        $cid = "C000$cid";
    } elseif($cid<100) {
        $cid = "C00$cid";
    }
} else {
    $cid = "C0001";
}
$con->close();
?>

<html>

<head>
    <title>Company</title>
    <h1>Registration Form</h1>
    <link rel="stylesheet" href="Style.css">
</head>

<body>
    <div>
        <form>
            <table>
                <tr>
                    <th>Company ID</th>
                    <td><input type="text" name="CompanyId" id="CompanyId" value="<?php echo $cid; ?>"></td>

                </tr>

                <tr>
                    <th>First Name</th>
                    <td><input type="text" name="FirstName" id="FirstName"></td>
                    <th>Last Name</th>
                    <td><input type="text" name="LastName" id="LastName"></td>
                </tr>

                <tr>
                    <th>Birth Date</th>
                    <td><input type="text" name="BirthDate" id="BirthDate"></td>
                </tr>

                <tr>
                    <th>E-mail</th>
                    <td><input type="text" name="E-mail" id="E-mail"></td>
                </tr>

                <tr>
                    <th>Phon No</th>
                    <td><input type="text" name="PhonNo" id="PhonNo"></td>
                </tr>

                <tr>
                    <th>Company</th>
                    <td><input type="text" name="Company" id="Company"></td>
                </tr>

                <tr>
                    <th>Address</th>
                    <td><input type="text" name="Address" id="Address"></td>
                </tr>

                <tr>
                    <th>Current Date</th>
                    <td><input type="text" name="CurrentDate" id="CurrentDate"></td>
                </tr>

            </table>
        </form>

    </div>
</body>

</html>