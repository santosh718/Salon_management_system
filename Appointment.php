

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointent</title>
    <link rel="stylesheet" href="style.css">

<body>
    <div>
		<div>
            
       
        <div class="grid-container">
        <div>
            <?php //include 'testmenu.php'; ?>
        </div>

        <div>
            <form action="AppointmentConnect.php" method="post">
                <h1>Salon Appointment</h1>  

                <table>
                    <tr>
                        <th class="th">Appointment ID</th>
                        <th class="th">Date</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="Appointmentid" id="Appointmentid" class="input"></td>
                        <td><input type="date" name="Date" id="Date" class="input"></td>
                    </tr>
                   <!-- <tr>
                        <th class="th">Customer_ID</th>
                    </tr>
                    <tr>
                        <td><input type="text" list="cust" name="Customerid" id="Customerid" class="input">
                        <datalist id="cust">
                        
                            include 'Connect.php';
                            $sql = "SELECT * FROM Customer";
                            $result=$con->query($sql);
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                $customerid = $row['Customer_ID'];
                                echo "<option value='$customerid'></option>";
                                }
                            }
                        ?>
                        </datalist>
                        </td>
                    </tr>-->
                    <tr>
                        <th class="th">Full Name</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="Fname" id="Fname" class="input" placeholder="First.."></td>
                        <td><input type="text" name="Lname" id="Lname" class="input" placeholder="Last.."></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <th class="th">Phone Number</th>
                        <th class="th">E-mail</th>
                    </tr>
                    <tr>
                        <td><input type="tel" name="Phone" id="Phone" class="input"></td>
                        <td><input type="email" name="Email" id="Email" class="input"></td>
                    </tr>
                </table>
                
                <table>
                    <tr>
                        <th class="th">Select a service category</th>
                    </tr>
                    <tr>
                        <th class="th">Service Required</th>
                        <th class="th">Stylist Preferred</th>
                    </tr>
                    <tr>
                        <td><select name="Service" id="Service" class="input">
                                <option value="Haircuts">Hair Cut</option>
                                <option value="Shaving">Shaving</option>
                            </select></td>
                        <td><select name="Stylist" id="Stylist" class="input">
                                <option value="Haircuts">Hair Cut</option>
                                <option value="Shaving">Shaving</option>
                            </select></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <th class="th">Appointment Date</th>
                        <th class="th">Appointment Time</th>
                    </tr>
                    <tr>
                        <td><input type="date" name="date" id="date" class="input"></td>
                        <td><input type="time" name="time" id="time" class="input"></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <th class="th">Comments</th>
                    </tr>
                    <tr>
                        <td><textarea name="comment" id="comment" cols="80" rows="3"></textarea></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Submit" class="button"></td>

                       
                    </tr>
                </table>
            </form>
        </div>
    </div>
    
</body>

</html>