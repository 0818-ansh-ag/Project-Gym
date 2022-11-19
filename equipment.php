<?php
   @include '_dbconnect.php';

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $showAlert = false;
       $showError = false;
       $sno = $_POST["sno"];
       $eqid = $_POST["eqid"];
       $eqname = $_POST["eqname"];
       $eqdes = $_POST["eqdes"];
       $equnit = $_POST["equnit"];
       $eqprice = $_POST["eqprice"];
    
           $sql = "INSERT INTO `equipment` (`sno`,`eqid`, `eqname`, `eqdes`, `equnit`, `eqprice`) VALUES ('$sno','$eqid', '$eqname', '$eqdes', '$equnit', '$eqprice')";
           $result = mysqli_query($conn,$sql);
           header("location: admin.php");
           if($result){
            $showAlert = true;
           }

       
       else{
        $showError = "Password does not match";
       }
    }

    // session_start();
    // if(!isset($_SESSION['loggedin']) || $_session['loggedin']!=true){
    //   header(location: login.php);
    //   exit;
    // }

   
    
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
            <h1>Equipment</h1>
            <div class="updateContainer">
                <div class="greeting">
                    <div class="greetingContent">
                        <h2>Equipment Information</h2>
                        <p>Want To add more equipment?</p>
                    </div>
                </div>
               
                <div class="form">
                    <div class="formInnerBox">
                       
                        <div class="formContent">
                            <form action="" method="post" class="form" id="form">
                            <div class="SNO">
                                    <input type="number" name="sno"  id="sno" placeholder="Serial Number" required>
                                </div>
                                
                                <div class="eqId">
                                    <input type="text" name="eqid"  id="eqid" placeholder="Enter Equipment ID" required>
                                </div>
                                <div class="eqName">
                                    <input   name="eqname" id="eqname" placeholder="Enter Equipment Name" required>
                                </div>
                                <div class="eqPrice">
                                    <input type="text" name="eqprice" id="eqprice"  placeholder="Enter Equipment Price" required>
                                </div>
                                <div class="eqUnit">
                                    <input type="text" name="equnit" id="equnit"  placeholder="Enter Equipment Unit" required>
                                </div>
                                <div class="eqDes">
                                    <textarea type="text" name="eqdes" id="eqdes" cols="30" rows="10" placeholder="Enter Eqipment Description" required></textarea>
                                </div>
                    
                                
                                <!-- <div class="address">
                                    <textarea name="address" id="address" cols="30" rows="10">Enter your Address</textarea>
                                </div> -->
                                <!-- <button class="formBtn">Submit</button> -->
                                <div class="login-btn">
                                    <button type="submit" value="Signup" name="submit" >Add Equipment</button>
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