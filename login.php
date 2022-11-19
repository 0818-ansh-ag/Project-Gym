<?php
@include '_dbconnect.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $showAlert = false;
        $name = $_POST["name"];
        $password = $_POST["password"];

            $sql = "Select * from users where name='$name' AND password= '$password'";
            $result = mysqli_query($conn,$sql);
            $num = mysqli_num_rows($result);
            if($num == 1){
                $login = true;
                session_start();
                $_SESSION['loggedin']=true;
                $_SESSION['name']=$name;
                header("location: index.php");
            }
            else{
                $ShowAlert = "Invalid Credentials";

            }
            
    
    

    }
   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
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
                <div class="adminBtn">
                    <form action="adminlogin.php">
                        <span>Are you admin?<button id="admBtn">Admin</button></span>
                    </form>
                    
                </div>
                <div class="welcome">
                    <h1>Welcome <span> Back!</span></h1>
                    <p>Please login to see your account.</p>
                </div>
                <form action="" method="post">
                    <div class="formContent">
                        <label for="username">UserName</label>
                        <input type="text"  name="name"  id="username" placeholder="Enter UserName" required>
                    </div>
                    <div class="formContent">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter Password" required>
                    </div>

                    <div class="login-btn">
                        <button type="submit" value="Sign IN" >Login</button>
                    </div>

                    <div class="sign-in">
                     
                            <a type="submit" value="Create Account" href="signup.php"> <span>Need an account?</span> Sign-in</a>
                      
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="JS/gym2.js"></script>

</html>