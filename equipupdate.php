<?php
@include '_dbconnect.php';
$sn = $_GET['sn'];
$ei = $_GET['ei'];
$en = $_GET['en'];
$ed = $_GET['ed'];
$eu = $_GET['eu'];
$ep = $_GET['ep'];

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<link rel="stylesheet" href="Portfolio.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
<body>
    <div class="update">
        <div class="Update-content" id="update">
            <h1>Update</h1>
            <div class="updateContainer">
                <div class="greeting">
                    <div class="greetingContent">
                        <h2>Updation Portal</h2>
                        <p>Want To update data of gym member?</p>
                    </div>
                </div>
               
                <div class="form">
                    <div class="formInnerBox">
                       
                        <div class="formContent">
                            <form action="" method="get" class="form" id="form">
                                <div class="sNo">
                                    <input type="number" name="sno"  id="sno" value="<?php echo "$sn"?>"  placeholder="Serial no." required>
                                </div>
                                <div class="eqId">
                                    <input   name="eqid" id="eqid" value="<?php echo "$ei"?>" placeholder="Enter Equipment ID" required>
                                </div>
                                <div class="eqName">
                                    <input   name="eqname" id="eqname" value="<?php echo "$en"?>"  placeholder="Enter Equipment Name" required>
                                </div>
                                <div class="eqPrice">
                                    <input type="text" name="eqprice" id="eqprice" value="<?php echo "$ep"?>" placeholder="Enter Equipment Price" required>
                                </div>
                                <div class="eqUnit">
                                    <input type="text" name="equnit" id="equnit" value="<?php echo "$eu"?>"   placeholder="Enter Equipment Unit" required>
                                </div>
                                <div class="eqDes">
                                    <textarea type="text" name="eqdes" id="eqdes" value="<?php echo "$ed"?>"  cols="30" rows="10" placeholder="Enter Eqipment Description" required></textarea>
                                </div>
                                
                    
                                <div class="login-btn">
                                    <button type="submit" value="Signup" name="submit" >Update Data</button>
                                </div>
                            </form>
                            

                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="ContactContainer">
            </div> -->
        </div>
    </div>
    
</body>
</html>
 <?php
  if($_GET['submit']){
    
    $sno = $_GET['sno'];
    $eqid = $_GET['eqid'];
    $eqname = $_GET['eqname'];
    $eqprice = $_GET['eqprice'];
    $equnit = $_GET['equnit'];
    $eqdes = $_GET['eqdes'];

    $query = "UPDATE EQUIPMENT SET sno='$sno',eqid='$eqid',eqname='$eqname',eqdes='$eqdes',equnit='$equnit',eqprice='$eqprice' WHERE sno='$sno' ";
    $data = mysqli_query($conn,$query);
    if($data){
        error_reporting(0);
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/Gym_Management_website/admin.php">
        <?php
        echo "<script>alert('Equipment Record Updated')</script>";
       
    }
    else{
        echo "<script>alert('Failed to Update Record')</script>";

    }

  }

?> 