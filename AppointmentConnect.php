<?php 
    include 'Connect.php';
    $Appointmen_ID =NULL;
    $sql ="SELECT Appointment_ID FROM Appointment order by Appointment_ID DESC LIMIT 1";
    $result = $con->query($sql);
    if($result -> num_rows > 0)
    {
        $row= $result->fetch_assoc();
        $Appointment_ID = $row["Appointment_ID"];
        $Appointment_ID = substr($Appointment_ID, 1);
        $Appointment_ID = $Appointment_ID + 1;
        if($Appointment_ID < 10)
        {
            echo $Appointment_ID = "A0000$Appointment_ID";

        }
    }
    else
    {
        echo $Appointment_ID = "A0000$Appointment_ID";
    }
    
    $con->close();


 include 'Connect.php';

 //$Appointment_ID = $_POST['Appointmentid'];
 $Date = $_POST['Date'];
 
 $Service = $_POST['Service'];
 $Stylist = $_POST['Stylist'];
 $App_Date = $_POST['date'];
 $App_Time = $_POST['time'];
 $Comments = $_POST['comment'];

 $sql = "INSERT INTO Appointment (Appointment_ID, Date, Service_Required,Stylist_Preferred, Appointment_Date, Appointment_Time, Comments) 
 VALUES ('$Appointment_ID', '$Date', '$Service', '$Stylist', '$App_Date', '$App_Time', '$Comments')";

 if($con->query($sql)===TRUE){
     echo "New data insert Successfully";
 } else {
     echo $con->error;
 }

 $con->close();
