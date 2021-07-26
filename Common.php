<?php
function generate_customer_id() {
    include 'Connect.php';
    $sql = "SELECT Customer_ID FROM Customer ORDER BY Customer_ID DESC LIMIT 1";
    $result = $con->query($sql);
    if($result->num_rows>0)
    {
        $row = $result->fetch_array();
       
        $sln = substr($row[0],3);
        $sln = $sln +1;
       
        $new_cid = "CID000" . $sln;
        return $new_cid;
    }
}
//generate_customer_id();

function generate_Billing_id(){
    include 'Connect.php';
    $sql = "SELECT Bill_ID FROM Billing ORDER BY Bill_ID DESC LIMIT 1";
    $result = $con->query($sql);
    if($result->num_rows>0)
    {
        $row = $result->fetch_array();
       
        $Bill = substr($row[0],3);
        $Bill = $Bill +1;
       
        $new_cid = "CID000" . $Bill;
        return $new_cid;
    }
}