<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Appointment</title>
    <link rel="stylesheet" href="Style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div>

                <div>
                    <?php include 'MenuBar.php';?>
                </div>

                <div>
                    <form action="" method="post">                        
                        <tr>
                            <th class="th">Appointment ID</th>
                        </tr>
                        <tr>

                            <td class="example" action="/action_page.php" style="margin:auto;max-width:300px">
                                <input type="search" placeholder="Search.." name="search_value" list="Searchid">
                                <datalist id="Searchid">
                                    <?php
                                        include 'Connect.php';
                                        $sql = "select * from Appointment";
                                        $result = $con->query($sql);
                                        if ($result->num_rows > 0) {
                                            while($row = $result->fetch_assoc()){
                                            $Date = $row['Appointment_ID'];
                    
                                            echo "<option value=".$Date."></option>";
                                            }
                                        }
                                    ?>
                                </datalist>
                                <button type="submit" name="id"><i class="fa fa-search"></i></button>
                            </td>
                        </tr>
                    </form>
                    <form action="AppointmentConnect.php" method="post">
                        <h1>Salon Appointment</h1>

                        <?php
                        include 'Connect.php';
                        $Date="24/04/2001";
                        if(isset($_POST["search_value"])) {
                            $appointmentid=$_POST["search_value"];
                            echo "<script>alert($appointmentid)</script>";
                            $sql = "select * from Appointment where Appointment_ID='$appointmentid'";
                            $result = $con->query($sql);
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $Date = $row['Date'];
        
                                //echo $Date;
                                
                            }
                        } 
                        /*$sql = "select * from Appointment";
                        $result = $con->query($sql);
                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $Date = $row['Date'];
                            $Service_Requried['Service_Requried'];
                            $Stylist_Preferred['Stylist_Preferred'];
                            $Appointment_Date['Appointment_Date'];
                            $Appointment_Time['Appointment_Time'];
                            $Comments['Comments'];
                        }*/



                        ?>
                        <table>
                            <tr>

                                <th class="th">Date</th>
                            </tr>
                            <tr>
                                <td><input type="date" name="Date" id="Date" value="<?php echo $Date; ?>" class="input"></td>
                            </tr>

                            <tr>
                        <th class="th">Customer_ID</th>
                    </tr>
                       <!-- <td><input type="text" list="cust" name="Customerid" id="Customerid" class="input">
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