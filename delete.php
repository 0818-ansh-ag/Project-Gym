<?php
@include '_dbconnect.php';
error_reporting(0);
$name = $_GET['nl'];
$query = "DELETE FROM users WHERE name = '$name'";
$data = mysqli_query($conn,$query);
if($data){
    echo "<script>alert('Record Deleted')</script>";
   
}
else{
    echo "<script>alert('Failed to Delete Record from Database')</script>";

}
?>