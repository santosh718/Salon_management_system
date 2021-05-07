<?php
    session_start();
    include 'Connect.php';
    
    $UserName = $_POST['UserName'];
    $pass = $_POST['Password'];
    
    $sql = "select UserName, Role from UserAccount where UserName='$UserName' And Password='$pass'";
    $result = $con->query($sql);

    if($result->num_rows > 0){   
        $row = $result->fetch_assoc();
        //session_start();
        $_SESSION['UserName']='$UserName';
        $_SESSION['Role'] = $row['Role'];

        echo "<script>alert('Match User Name and Password!')</script>";
        if($_SESSION['Role']=='admin') {
            echo "<script>window.location.href='Dashboard.php'</script>";
        }
    } else {
        echo "<script>alert('Don't Match UserName and Password')</script>";
        echo "<script>window.location.href='login.php'</script>";
        
        echo $con->error;
    }

    $con->close();

?>