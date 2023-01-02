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
                background-color:rgba(189, 11, 11, 1);
                font-size:25px;
                color:white;
                box-shadow:2px 2px 2px gray;
            }
        </style>
        
    </head>
    <body>
    <br><br><br><br>
        <form method="post" action="">
        <div style="margin-left:30%;height:auto;width:40%;border-radius:10px;box-shadow:2px 2px 2px gray;background-color:hsla(240, 8%, 88%, 0.305);font-size:25px;"><br>
                <h1 style="margin-left:30%;color:rgb(109, 123, 115)"> Delete Records </h1><br>
                <div>
                    <input type="number" name="id" placeholder=" Enter Id " class="a" />
                </div>
                <h3 style="margin-left:45%;color:rgb(109, 123, 115)">OR</h3>
                <div>
                    <input type="text" name="email" placeholder=" Enter Email Address "  class="a" />
                </div>

                <button type="submit" name="delete" class="b"> Delete </button>
            <br><br><br>
        </div><br><br>
        </form>
        
    </body>
</html>

<?php
	if(isset($_POST['delete']))
	{
        $id= $_POST['id'];
        $email=$_POST['email'];
        if($id != Null || $email != Null)
        {
            // $sql = mysqli_query($con, "SELECT * FROM register WHERE Id = '$id' || Email = '$email' ");
            
            
            $query = mysqli_query($con, "DELETE FROM register WHERE Id = '$id' || Email = '$email' ");

            if($query)
            {
                echo '<script>alert("Delete Record Successfully")</script>';
            }
            else
            {
                echo '<script>alert("Failed")</script>';
            }
        }
        else{
            echo '<script>alert("Please Enter any Id")</script>';
        }	
	}
?>
