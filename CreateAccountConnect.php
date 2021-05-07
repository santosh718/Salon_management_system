<?php
    include 'Connect.php';

    $Name = $_POST['Name'];
    $UserName = $_POST['UserName'];
    $Mobile = $_POST['Mobile'];
    $Email = $_POST['Email'];
    $pass = $_POST['Password'];
    $ConformPass = $_POST['ConformPassword'];

    $sql = "INSERT INTO CreateAccount (Name, UserName, Mobile, Email_ID, Password, Conform_Password) 
    VALUES ('$Name', '$UserName', '$Mobile', '$Email', '$pass', '$ConformPass')";

    if($con->query($sql)===TRUE){
        echo "New data insert Successfully";
    } else {
        echo $con->error;
    }

    $con->close();
?>