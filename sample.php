<?php
@include '_dbconnect.php';
if(isset($_POST['submit'])){
  $name = mysqli_real_escape_string($conn,$_POST['name']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $age = md5($_POST['age']);
  $gender = md5($_POST['gender']);
  $locality = md5($_POST['locality']);
  $password = md5($_POST['pass$password']);
  $pno = md5($_POST['pno']);

  $select = " SELECT * FROM user WHERE email = '$email' && password = '$password' && name = '$name' && age = '$age' && locality = '$locality' && gender = '$gender' && pno = '$pno' ";
  $result = mysqli_query($conn,$select);

  if(mysqli_num_rows($result)>0){
    $error[] = 'user already exist!';

  }
  else{
    "INSERT INTO user(name,age,gender,locality,email,password,pno) VALUES('$name', '$age', '$gender', '$locality', '$email', '$password', '$pno')";
    echo "You data is inserted";
    mysqli_query($conn,$insert);
    header('location:login.php');
  }
};
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     include '_dbconnect.php';
    //     $name = $_POST["name"];
    //     $age = $_POST["age"];
    //     $gender = $_POST["gender"];
    //     $locality = $_POST["locality"];
    //     $email = $_POST["email"];
    //     $password = $_POST["password"];
    //     $pno = $_POST["pno"];
    //     $exists = false;

    //         $sql = "INSERT INTO `user` (`name`, `age`, `gender`, `locality`, `email`, `password`, `pno`) VALUES ('$name', '$age', '$gender', '$locality', '$email', '$password', '$pno')";
    //         if(!$sql){
    //             echo "Your data is inserted in table";
    //         }
    
    

    // }
   
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
    Welcome To Sign UP Page
    <?php
      if(isset($error)){
        foreach($erro as $error){
            echo '<span class = "error-msg">'.$error.'</span>';
        };
      };
    ?>
    <form action="/Project4-Gym_Website/signup.php" method="post" class="form" id="form">
                        <div class="userName">
                            <input type="text" name="name"  id="userName" placeholder="Enter your Name" required>
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
                        <div class="pNo">
                            <input type="text" name="pno" id="pNo" placeholder="Enter your Phone Number" required>
                        </div>
                        <!-- <button class="formBtn">Submit</button> -->
                        <button type="submit" id="formBtn">Submit</button>
                    </form>
    
</body>
</html>