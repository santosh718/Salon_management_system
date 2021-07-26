<?php
 include 'Connect.php';

 $Customer_ID = $_POST['Customer'];
 $Date = $_POST['Date'];
 $Fname = $_POST['Fname'];
 $Lname = $_POST['Lname'];
 $Phone = $_POST['Phone'];
 $Email = $_POST['Email'];
 $Age = $_POST['Age'];
 $Gender = $_POST['Gender'];
 $village = $_POST['Village'];
 $District = $_POST['District'];
 $State = $_POST['State'];
 $Pincode = $_POST['Pincode'];

 $sql = "INSERT INTO Customer (Customer_ID, Date, Frist, Last, Phone, Email, Age, Gender, Village, District, State, Pincode) 
 VALUES ('$Customer_ID', '$Date', '$Fname', '$Lname','$Phone', '$Email', '$Age', '$Gender', '$village', '$District', '$State', '$Pincode')";

 if($con->query($sql)===TRUE){
     $sql = "INSERT INTO UserAccount(Name, UserName, Mobile, Email_ID, Password, Role) VALUES('$Fname','$Customer_ID','$Phone','Email','123','customer')";
     if($con->query($sql)===TRUE)
     {
        echo "New data insert Successfully";
     } else {
         echo $con->error;
     }
 } else {
     echo $con->error;
 }

 $con->close();



?>