<?php
include('includes/dbconnection.php');
?>
<?php
include('nav.php');
?>
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
                background-color:rgba(20, 70, 143, 1);
                font-size:25px;
                color:white;
                box-shadow:2px 2px 2px gray;
            }

            .c{
                height:50px;
                width:58%;
                border-radius:10px;
                margin-left: 10%;
                box-shadow:2px 2px 2px gray;
            }
            .d{
                height:50px;
                width:20%;
                border-radius:10px;
                margin-left:;
                margin-top: 50px;
                background-color:rgb(39, 84, 39);
                font-size:25px;
                color:white;
                box-shadow:2px 2px 2px gray;
            }
        </style>
        
    </head>
    <body>
    <br><br><br><br>
        
        <div style="margin-left:30%;height:auto;width:45%;border-radius:10px;box-shadow:2px 2px 2px gray;background-color:hsla(240, 8%, 88%, 0.305);font-size:25px;"><br>
            <h1 style="margin-left:30%;color:rgb(109, 123, 115)"> Update Details </h1>
            <form method="GET" action="">
                <div>
                    <input type="number" name="id" value="<?php if(isset($_GET['id'])){ } ?>" placeholder=" Enter Id " class="c" />
                    <input type="submit" value="Search" class="d" />
                </div>
                
            </form><br>
            <form method="post" action="">
                
                <?php
                   if(isset($_GET['id']))
                   {
                        $id = $_GET['id'];

                        $sql = "SELECT * FROM Register where Id='$id'";
                        $result = mysqli_query($con, $sql);

                        if(mysqli_num_rows($result)>0)
                        {
                            foreach ($result as $row) { 
                            ?>
                                 <div>
                                    <input type="text" name="id" value ="<?= $row['Id']; ?>" placeholder=" Enter Your Name " required class="a" />
                                </div><br>
                                <div>
                                    <input type="text" name="name" value ="<?= $row['Name']; ?>" placeholder=" Enter Your Name " required class="a" />
                                </div><br>

                                <div>
                                    <input type="email" name="email" value ="<?= $row['Email']; ?>"placeholder=" Email Address " required class="a" />
                                </div><br>

                                <div>
                                    <input type="number" name="mobile" value ="<?= $row['MobileNumber']; ?>"  placeholder=" Enter Mobile Number " required class="a" />
                                </div><br>

                                <div>
                                    <input type="password" name="password" value ="<?= $row['Password']; ?>" placeholder="Enter Password " required class="a" />
                                </div><br>

                                <div>
                                    <input type="password" name="confirmPassword" value ="<?= $row['ConfirmPassword']; ?>" placeholder="Enter Confirm Password " required class="a" />
                                </div>

                                <button type="submit" name="update" class="b"> Update </button>
                            <?php 
                            }
                        }
                    }  
                ?>
            
            
            </form><br>
        </div><br><br>
        
    </body>
</html>

<?php
	if(isset($_POST['update']))
	{
        $id= $_POST['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $password=$_POST['password'];
        $password1=$_POST['confirmPassword'];


        if($password  == $password1)
            {

                $query = mysqli_query($con, "update Register set Name = '$name', Email = '$email', MobileNumber = '$mobile', Password = '$password', ConfirmPassword= '$password1' where Id = '$id'");
                
                if ($query == TRUE) {
                    echo '<script>alert("Update Details Successfully")</script>';
                    }
                else
                    {
                        echo '<script>alert("Failed")</script>';;
                    }
            
            }
        else{
            echo '<script>alert("Password and Confirm Password are not Equals")</script>';
        }

	}
?>
