<?php
@include '_dbconnect.php';
$sn = $_GET['sn'];
$nl = $_GET['nl'];
$a = $_GET['a'];
$g = $_GET['g'];
$local = $_GET['local'];
$e = $_GET['e'];
$p = $_GET['p'];

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
                                <div class="userName">
                                    <input type="text" name="username"  id="userName" value="<?php echo "$nl"?>" placeholder="Enter your Name" required>
                                </div>
                                <div class="age">
                                    <input   name="age" id="age" value="<?php echo "$a"?>" placeholder="Enter your Age" required>
                                </div>
                                <div class="gender">
                                    <input type="text" name="gender" id="gender" value="<?php echo "$g"?>" placeholder="Enter your Gender" required>
                                </div>
                                <div class="locality">
                                    <input type="text" name="locality" id="locality" value="<?php echo "$local"?>" placeholder="Enter your City" required>
                                </div>
                                <div class="email">
                                    <input type="emai" name="email" id="email" value="<?php echo "$e"?>" placeholder="Enter your Email Id" required>
                                </div>
                                <div class="pno">
                                    <input type="number" name="pno" id="pno" value="<?php echo "$p"?>" placeholder="Enter your Contact Number" required>
                                </div>
                                
                                <!-- <div class="address">
                                    <textarea name="address" id="address" cols="30" rows="10">Enter your Address</textarea>
                                </div> -->
                                <!-- <button class="formBtn">Submit</button> -->
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
    
    $name = $_GET['username'];
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $locality = $_GET['locality'];
    $email = $_GET['email'];
    $pno = $_GET['pno'];

    $query = "UPDATE USERS SET name='$name',age='$age',gender='$gender',locality='$locality',email='$email',pno='$pno' WHERE name='$name' ";
    $data = mysqli_query($conn,$query);
    if($data){
        error_reporting(0);
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/Gym_Management_websites/admin.php">
        <?php
        echo "<script>alert('Record Updated')</script>";
       
    }
    else{
        echo "<script>alert('Failed to Update Record')</script>";

    }

  }

?>