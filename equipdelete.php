<?php
@include '_dbconnect.php';
// error_reporting(0);
$sno = $_GET['sn'];
$query = "DELETE FROM `equipment` WHERE  'sn' = $sno";
$data = mysqli_query($conn,$query);
if($data){
    echo "<script>alert('Equipment Record Deleted')</script>";
   
}
else{
    echo "<script>alert('Failed to Delete Equipment Record from Database')</script>";

}
?>