<?php
 include 'Connect.php';

 $Appointment_ID = $_POST['Appointmentid'];
 $Date = $_POST['Date'];
 $Fname = $_POST['Fname'];
 $Lname = $_POST['Lname'];
 $Phone = $_POST['Phone'];
 $Email = $_POST['Email'];
 $Service = $_POST['Service'];
 $Stylist = $_POST['Stylist'];
 $App_Date = $_POST['date'];
 $App_Time = $_POST['time'];
 $Comments = $_POST['comment'];

 $sql = "INSERT INTO Appointment (Appointment_ID, Date, Frist, Last, Phone, Email, Service_Required,Stylist_Preferred, Appointment_Date, Appointment_Time, Comments) 
 VALUES ('$Appointment_ID', '$Date', '$Fname', '$Lname','$Phone', '$Email', '$Service', '$Stylist', '$App_Date', '$App_Time', '$Comments')";

 if($con->query($sql)===TRUE){
     echo "New data insert Successfully";
 } else {
     echo $con->error;
 }

 $con->close();


?>