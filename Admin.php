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
        <form action="">
        <h1>Admin</h1>
            <table>
                <table>
                <tr>
                    <th class="button" class="inputs"></th>
                </tr>
                </table>
                <table>
                    <tr>
                        <th class="th">Admin ID</th>
                        <th class="th">Datte</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="admin" id="admin" class="input"></td>
                        <td><input type="date" name="date" id="date" class="input"></td>
                    </tr>
                    <tr>
                        <th class="th">Full Name</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="fname" id="fname" class="input" placeholder="First.."></td>
                        <td><input type="text" name="lname" id="lname" class="input" placeholder="Last.."></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <th class="th">Phone Number</th>
                        <th class="th">E-mail</th>
                    </tr>
                    <tr>
                        <td><input type="tel" name="phone" id="Phone" class="input"></td>
                        <td><input type="email" name="email" id="email" class="input"></td>
                    </tr>

                    <tr>
                    <th class="th">Gender</th>
                    <th class="th">Village</th>
                    </tr>
                    <tr>
                    <td><select name="state" id="state" class="input">
                            <option value="None">None</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select></td>

                        <td><input type="text" name="Village" id="Village" class="input"></td>
                    </tr>
                    <tr>
                        <th class="th">State</th>
                        <th class="th">District</th>
                    </tr>
                    <tr>
                    <td><select name="state" id="state" class="input">
                            <option value="AndhraPradesh">Andhra Pradesh</option>
                            <option value="ArunachalPradesh">Arunachal Pradesh</option>
                            <option value="Bihar">Bihar</option>
                        </select></td>
                        <td><input type="text" list="id" name="District" id="District" class="input">
                       
                    
                        <datalist id="ids">
                            <?php
                                $con = new mysqli("localhost", "root","Santosh@123", "School");
                                if ($con->connect_error) {
                                    die("Connection failed: " . $con->connect_error);
                                 } else{

                                $sql = "SELECT * FROM Address";
                                $result = $con->query($sql);
                                if($result->num_rows > 0){
                                    while($row = $result->fetch_assoc()){
                                        
                                        echo "<script>alert('hi')</script>";
                                        echo "<td>".$row['slno']."</td>";
                                        echo "<td>".$row['state']."</td>";
                                        echo "<td>".$row['state_code']."</td>";
                                        echo "<td>".$row['district']."</td>";
                                        echo "<td>".$row['district_code']."</td>";
                                    } 
                                }else {
                                        echo $con->error;
                                }
                            }
                            ?>
                        </datalist>
                        </td> 
                </table>  
                <table>
                    <tr>
                        <th class="button" class="inputs"></th>
                    </tr>
                </table>
            </table>
        </form>
    </div>
</body>
</html>