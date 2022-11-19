<?php
   @include '_dbconnect.php';

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $showAlert = false;
       $showError = false;
       $name = $_POST["username"];
       $age = $_POST["age"];
       $gender = $_POST["gender"];
       $locality = $_POST["locality"];
       $email = $_POST["email"];
       $password = $_POST["password"];
       $cpassword = $_POST["cpassword"];
       $pno = $_POST["pno"];
       $exists = false;
    
       if(($password == $cpassword) && $exists == false){
           $sql = "INSERT INTO `users` (`name`, `age`, `gender`, `locality`, `email`, `password`, `cpassword`, `pno`) VALUES ('$name', '$age', '$gender', '$locality', '$email', '$password','$cpassword', '$pno')";
           $result = mysqli_query($conn,$sql);
           header("location: login.php");
           if($result){
            $showAlert = true;
           }

       }
       else{
        $showError = "Password does not match";
       }

    // session_start();
    // if(!isset($_SESSION['loggedin']) || $_session['loggedin']!=true){
    //   header(location: login.php);
    //   exit;
    // }

   }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>

<body>
    
    <link rel="stylesheet" href="CSS/Style01.css">
    <div class="login">
        
        <div class="loginContainer">
            
            <div class="wrapper">

                <div class="slides-container">

                    <div class="slide-image activeImg" style="background-image: url(images/login-1.jpg);">
                       

                    </div>
                    <div class="slide-image " style="background-image: url(images/login-2.jpg);">
                

                    </div>


                </div>

            </div>

            <div class="loginContent">
                <!-- <?php
                 echo '<div >'. $showAlert .'</strong><button id="sFBtn">X</button></div>';
                
                ?> -->
                <div class="joinForm">
               
                    <div class="formContent1">
                        <h1>Join<span>Now</span></h1>
    
                        <form action="" method="post" class="form" id="form">
                            <div class="fileUpload">
                                <input type="file" name="fileupload"  id="fileupload" >
                            </div>
                            <div class="userName">
                                <input type="text" name="username"  id="userName" placeholder="Enter your Name" required>
                            </div>
                            <div class="age">
                                <input  type="number" name="age" id="age" placeholder="Enter your Age" required>
                            </div>
                            <div class="gender">
                                <input type="text" name="gender" id="gender" placeholder="Enter your Gender" required>
                            </div>
                            <div class="locality">
                                <input type="text" name="locality" id="locality" placeholder="Enter your Locality" required>
                            </div>
                            <div class="email">
                                <input type="emai" name="email" id="email" placeholder="Enter your Email Id" required>
                            </div>
                            <div class="password">
                                <input type="password" name="password" id="password" placeholder="Enter your Password" required>
                            </div>
                            <div class="Confirm_password">
                                <input type="password" name="cpassword" id="cpassword" placeholder="Confirm your Password" required>
                            </div>
                            <div class="pNo">
                                <input type="text" name="pno" id="pNo" placeholder="Enter your Phone Number" required>
                            </div>
                            <!-- <button class="formBtn">Submit</button> -->
                            <div id="formBtn">
                                <button type="submit" value="Signup" >Sign Up</button>
                            </div>
                            <div class="loginbtn">
                     
                                <a type="submit" value="Create Account" href="login.php"> <span>Already account?</span>login</a>
                            
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="JS/gym2.js"></script>

</html>