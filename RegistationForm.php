<?php
include('includes/dbconnection.php');
include('nav.php');
// include('RegistationFormValidation.php');
?>

RegistationFormValidation
<html>
    <head>
        <title>Registation Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <style>
            .a{
                height:50px;
                width:80%;
                border-radius:10px;
                margin-left: 10%;
                box-shadow:2px 2px 2px gray;
            }
            .b{
                height:50px;
                width:80%;
                border-radius:10px;
                margin-left: 10%;
                margin-top: 50px;
                background-color:rgb(39, 84, 39);
                font-size:25px;
                color:white;
                box-shadow:2px 2px 2px gray;
            }
            .error {
                color: #FF0001;
                margin-left: 10%;
                font-size:18px;
            }
            .c{
                margin-left: 10%;
            }

        </style>
        
    </head>
    <body>
    <br><br><br><br>
    
        <div style="margin-left:30%;height:auto;width:45%;border-radius:10px;box-shadow:2px 2px 2px gray;background-color:hsla(240, 8%, 88%, 0.305);font-size:25px;"><br>
            <form method="post" action="">
                <h1 style="margin-left:30%;color:rgb(109, 123, 115)"> Registation Form </h1><br>
                <div>
                    <input type="text" name="name" placeholder=" Enter Your Name " required class="a" /><br>
                </div><br>

                <div>
                    <input type="email" name="email" placeholder=" Email Address " required class="a" /><br>
                </div><br>

                <div>
                    <input type="number" name="mobile"  placeholder=" Enter Mobile Number " required class="a" minlength="10" maxlength="10" /><br>
                </div><br>

                <div>
                    <input type="password" name="password" placeholder="Enter Password " required class="a" /><br>
                </div><br>

                <div>
                    <input type="password" name="confirmPassword" placeholder="Enter Confirm Password " required class="a" /><br>
                </div>

                <button type="submit" name="submit" class="b"> Signup </button>
            </form><br>
        </div><br><br>
        
    </body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        // if($nameErr == "" && $emailErr == "" && $mobileErr == "" && $passwordErr == "" && $confirmPasswordErr == "") 
        // { 
            $name=$_POST['name'];
            $email=$_POST['email'];
            $mobile=$_POST['mobile'];
            $password=$_POST['password'];
            $password1=$_POST['confirmPassword'];

            if($password  == $password1)
            {
                $query=mysqli_query($con, "insert into Register(Id, Name, Email, MobileNumber , Password , ConfirmPassword) value('','$name', '$email', '$mobile', '$password', '$password1' )");
                
                if ($query) {
                    echo '<script>alert("successfully registered")</script>';
                    }
                else
                    {
                    echo '<script>alert("Something Went Wrong. Please try again")</script>';
                    }
            }

            else{
                echo '<script>alert("Password and Confirm Password are not equal")</script>';
           }   
        // } 
    }
?>
