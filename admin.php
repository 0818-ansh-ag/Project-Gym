<?php
   @include '_dbconnect.php';

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $showAlert = false;
       $showError = false;
       $name = $_POST["username"];
       $age = $_POST["age"];
       $pno = $_POST["pno"];
       $alterpno = $_POST["alterpno"];
       $email = $_POST["email"];
       $city = $_POST["city"];
       $qualification = $_POST["qualification"];
       $achivement = $_POST["achivement"];
       $password = $_POST["password"];
       $cpassword = $_POST["cpassword"];
       $address = $_POST["address"];
       $exists = false;
    
       if(($password == $cpassword) && $exists == false){
           $sql = "INSERT INTO `admins` (`name`, `age`, `pno`, `alterpno`, `email`, `city`, `qualification`, `achivement`, `password`, `cpassword`, `address`) VALUES ('$name', '$age', '$pno', '$alterpno', '$email', '$city', '$qualification', '$achivement', '$password', '$cpassword', '$address')";
           $result = mysqli_query($conn,$sql);
           header("location: adminlogin.php");
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
    <title>Admin</title>
</head>
<link rel="stylesheet" href="Portfolio.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

<body>

    <!-- portfolio container -->

    <div class="portfolio">

        <!-- Aside  -->

        <div class="aside">
            <div class="logo">
                <a href="#"><span>Be</span>Fit</a>
            </div>
            <nav class="navbar">
                <ul>
                    <li id="Home"><a href="#" class="active"> <i class="fa fa-home"></i> Home</a></li>
                    <li id="About"><a href="#"> <i class="fa fa-users" aria-hidden="true"></i> Members</a></li>
                    <li id="Service"><a href="#"><i class="fa-solid fa-dumbbell"></i>Equipments</a></li>
                    <li id="SignUp"><a href="#"> <i class="fa fa-sign-in" aria-hidden="true"></i>Sign Up</a></li>
                    <li id="Contact"><a href="#"> <i class="fa fa-comment"></i> Contact</a></li>
                </ul>

            </nav>

        </div>

        <!-- main -->

        <div class="main">
            <div class="main-content">
                <div class="information">
                     <div class="infoContainer">
                        <div class="welcomeMessage">
                            <h1>WELCOME <span>ADMINISTRATOR</span></h1>
                        </div>
                        <div class="infoContent">
                            <div class="totalMember">
                                <span><i class="fa fa-users" aria-hidden="true" style="font-size:30px"></i></span>
                                <h2>Total Member</h2>
                            </div>
                            <div class="plans">
                                <span><i class="fa fa-tasks" aria-hidden="true" style="font-size:30px"></i></span>
                                <h2>Plans</h2>
                            </div>
                            <div class="equipment">
                                <span><i class="fa-solid fa-dumbbell" style="font-size:30px"></i></span>

                                <h2>Equipment</h2>
                            </div>
                            <div class="salary">
                                <!-- <span><i class="fa fa-money" aria-hidden="true"></i></span> -->
                                <i class="fa-solid fa-coins" style="font-size:30px"></i>
                                <h2>Total Salary</h2>
                            </div>
                        </div>
                     </div>

                </div>
                <div class="profilePic">
                    <div class="pic">
                        <img src="./image/WhatsApp Image 2020-11-12 at 11.57.52 PM.jpeg" alt="Ansh Goyal">
                    </div>
                    <div class="profileContainer">
                            <div class="profileContent">
                                <div class="adminName">
                                    <h3>Name: <span>Ansh Goyal</span></h3>
                                </div>
                                <div class="adminAge">
                                    <h3>Age: <span>19</span></h3>
                                </div>
                                <div class="adminPhone">
                                    <h3>Phone No.: <span>+918397867695</span></h3>
                                    
                                </div>
                                <div class="adminEmail">
                                    <h3>Email: <span>0818ansh.ag@gmail.com</span></h3>
                                </div>
                                <div class="adminAddress">
                                    <h3>Address: <span>Sirsa</span></h3>
                                </div>
                                <div class="adminCity">
                                    <h3>City: <span>Sirsa</span></h3>

                                </div>
                                <div class="adminQualification">
                                    <h3>Qualification: <span>Nutrition Expert</span></h3>

                                </div>
                                <div class="adminAchivement">
                                    <h3>Achivement: <span>Mr. Haryana</span></h3>

                                </div>
                            </div>
                    </div>
                    <div class="adminEdit">
                        <a href="editProfile.php">Edit Profile</a>
                    </div>

                </div>

            </div>

            <!-- about  -->
            <div class="About hidden">
                <div class="About-content " id="about">
                    <h1>Member List</h1>
                    
                    <div class="MemContainer">
                        <div class="MemHeading">
                            <h3>Member List</h3>
                            <a href="signup.php">+New</a>
                        </div>
                        <div class="TableInfo">
                            <div class="TableEntries">
                                <h3>Show entries</h3>
                                
                            </div>

                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">locality</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <?php
                                  @include '_dbconnect.php';
                                  $query = "select * from users";
                                  $result = mysqli_query($conn,$query);

                                  $total = mysqli_num_rows($result);
                              
                                   
                                    if($total!=0){
                                        
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                        echo "
                                        <tbody>
                                        <tr>
                                        <th>".$row['sno']."</th>
                                        <td>".$row['name']."</td>
                                        <td>".$row['age']."</td>
                                        <td>".$row['gender']."</td>
                                        <td>".$row['locality']."</td>
                                        <td>".$row['email']."</td>
                                        <td>".$row['pno']."</td>
                                        <td>
                                        <a href='update.php?sn=$row[sno]&nl=$row[name] & a=$row[age] & g=$row[gender] & local=$row[locality] & e=$row[email] & p=$row[pno]' >Edit</a> 
                                        <a href='delete.php?nl=$row[name]'>Delete</a>
                                        </td>
                                        </tr>
                                        </tbody>
                                        ";

                                    
                                    }

                                    }
                                    
                                    ?>
                                  
                                    </tbody>
                            </table>
                            
                        </div>

                    </div>
                </div>

            </div>

            <div class="services hidden">
                <div class="About-content " id="about">
                    <h1>Equipment List</h1>
                    
                    <div class="MemContainer">
                        <div class="MemHeading">
                            <h3>Equipment List</h3>
                            <a href="equipment.php">+New</a>
                        </div>
                        <div class="TableInfo">
                            <div class="TableEntries">
                                <h3>Show equipments</h3>
                                <div class="searchtable">
                                    <label for="search">Search: </label>
                                    <input type="text" id="search">

                                </div>
                            </div>

                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Equipment ID</th>
                                    <th scope="col">Equipment Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Unit</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php
                                 
                                  $query = "select * from equipment";
                                  $result = mysqli_query($conn,$query);

                                  $total = mysqli_num_rows($result);
                              
                                   
                                    if($total!=0){
                                        
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                        echo "
                                        <tbody>
                                        <tr>
                                        <th>".$row['sno']."</th>
                                        <td>".$row['eqid']."</td>
                                        <td>".$row['eqname']."</td>
                                        <td>".$row['eqdes']."</td>
                                        <td>".$row['equnit']."</td>
                                        <td>".$row['eqprice']."</td>
                                    
                                        <td>
                                        <a href='equipupdate.php?sn=$row[sno]&ei=$row[eqid] & en=$row[eqname] & ep=$row[eqprice] & eu=$row[equnit] & ed=$row[eqdes]' >Edit</a> 
                                        <a href='equipdelete.php?sn=$row[sno]'>Delete</a>
                                        </td>
                                        </tr>
                                        </tbody>
                                        ";

                                    
                                    }

                                    }
                                    
                                    ?>
                                  
                                    </tbody>
                                 
                            </table>
                            
                        </div>

                    </div>
                </div>
            </div>

            


            <!-- Sign Up page -->
            <div class="signUp hidden">
                <div class="Sign-content" id="Sign">
                    <h1>Sign Up</h1>
                    <div class="signContainer">
                        <div class="greeting">
                            <div class="greetingContent">
                                <h2>Welcome Admin</h2>
                                <p>Want To Create New Admin?</p>
                            </div>
                        </div>
                       
                        <div class="form">
                            <div class="formInnerBox">
                               
                                <div class="formContent">
                                    <form action="" method="post" class="form" id="form">
                                        <div class="userName">
                                            <input type="text" name="username"  id="userName" placeholder="Enter your Name" required>
                                        </div>
                                        <div class="age">
                                            <input  type="number" name="age" id="age" placeholder="Enter your Age" required>
                                        </div>
                                        <div class="pno">
                                            <input type="number" name="pno" id="Pno" placeholder="Enter your Phone Number" required>
                                        </div>
                                        <div class="alternatepno">
                                            <input type="number" name="alterpno" id="alterPno" placeholder="Enter your Alternate Number" required>
                                        </div>
                                        <div class="email">
                                            <input type="emai" name="email" id="email" placeholder="Enter your Email Id" required>
                                        </div>
                                        <div class="city">
                                            <input type="text" name="city" id="city" placeholder="Enter your City" required>
                                        </div>
                                        <div class= "qualification">
                                            <input type="text" name= "qualification" id= "qualification" placeholder="Enter your Qualification" required>
                                        </div>
                                        <div class="achivement">
                                            <input type="text" name="achivement" id="achivement" placeholder="Enter your Achivement" required>
                                        </div>
                                        <div class="password">
                                            <input type="password" name="password" id="password" placeholder="Enter your Password" required>
                                        </div>
                                        <div class="Confirm_password">
                                            <input type="password" name="cpassword" id="cpassword" placeholder="Confirm your Password" required>
                                        </div>
                                        <div class="address">
                                            <textarea name="address" id="address" cols="30" rows="10" placeholder="Enter your Address"></textarea>
                                        </div>
                                        <!-- <button class="formBtn">Submit</button> -->
                                        <div class="login-btn">
                                            <button type="submit" value="Signup" >Sign Up</button>
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

            <div class="contact hidden">
                <div class="Contact-content" id="Contact">
                    <h1>Contact Me</h1>
                    <div class="contactContainer">
                        <div class="greeting">
                            <div class="greetingContent">
                                <h2>Have You Any Questions?</h2>
                                <p>I'M AT YOUR SERVICE</p>
                            </div>
                        </div>
                        <div class="typesToInform">
                            <div class="typesToInformContent">
                                <div class="call">
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <h3>Call Us On</h3>
                                    <p>+91 8397867595</p>

                                </div>
                                <div class="location">
                                    <div class="icon">
                                        <i class="fa fa-map-marker-alt" ></i>
                                    </div>
                                    <h3>Home</h3>
                                    <p>#225 Aggarsain Colony, Sirsa</p>
                                </div>
                                <div class="email">
                                    <div class="icon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <h3>Email</h3>
                                    <p>0818ansh.ag@gmail.com</p>
                                </div>
                                <div class="website">
                                    <div class="icon">
                                        <i class="fa fa-globe"></i>
                                    </div>
                                    <h3>Website</h3>
                                    <p>Ansh-designer-0818.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="form">
                            <div class="formInnerBox">
                                <div class="message">
                                    <h3>SEND ME AN EMAIL</h3>
                                    <p>I'M VERY RESPONSIVE TO MESSAGES</p>
                                </div>
                                <div class="formContent">
                                    <input type="text" id="Name" placeholder="Name">
                                    <input type="text" id="Email" placeholder="Email">
                                    <input type="text" id="Subject" placeholder="Subject">
                                    <textarea name="Message" id="Message" placeholder="Message" ></textarea>
                                    <button id="Send">Send Message</button>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="ContactContainer">
                    </div> -->
                </div>
            </div>

            
        </div>

    </div>


</body>
<script src="Portfolio.js"></script>

</html>