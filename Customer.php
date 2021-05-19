<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <form action="CustomerConnect.php" method="post">
        <h1>Customer</h1>
            <table>
            
                    <tr>
                        <td><input type="text" name="TextName" class="button" id="TextName" ></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <th class="th">Customer ID</th>
                        <th class="th">Date</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="Customer" id="Customer" class="input"></td>
                        <td><input type="date" name="Date" id="Date" class="input"></td>
                    </tr>
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
                    <tr>
                       
                        <th class="th">Age</th>
                        <th class="th">Gender</th>    
                    </tr>
                    <tr>
                        <td><input type="text" name="Age" id="Age" class="input"></td>
                        <td><select name="Gender" id="Gender" class="input">
                            <option value="None">None</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select></td>    
                       
                        
                    </tr>
                    <tr>
                    
                    <th class="th">Village</th>
                    <th class="th">District</th>
                    </tr>
                    <tr>
                    
                        <td><input type="text" name="Village" id="Village" class="input"></td>
                        <td><input type="text" name="District" id="District" class="input"></td>
                    </tr>
                    <tr>
                        <th class="th">State</th>
                        <th class="th">Pin-Code</th>
                       
                    </tr>
                    <tr>
                    <td><select name="State" id="State" class="input">
                            <option value="AndhraPradesh">Andhra Pradesh</option>
                            <option value="ArunachalPradesh">Arunachal Pradesh</option>
                            <option value="Bihar">Bihar</option>
                        </select></td>
                        
                        <td><input type="text" name="Pincode" id="Pincode" class="input"></td>
                    </tr>  
                </table>  
                <table>
                    <tr>
                        <td><input type="submit" value="Submit" class="button"></td>
                    </tr>
                </table>
            </table>
        </form>
    </div>
    
</body>
</html>