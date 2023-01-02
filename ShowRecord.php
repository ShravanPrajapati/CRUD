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
            th {
                border: 2px solid black;
                }
            td {
                border: 1px solid black;
            }
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
        </style>
	</head>
    <body>   <br><br> <br>
    <form method="post" action="">
        <div style="margin-left:30%;height:auto;width:40%;border-radius:10px;box-shadow:2px 2px 2px gray;background-color:hsla(240, 8%, 88%, 0.305);font-size:25px;"><br>
                <h1 style="margin-left:30%;color:rgb(109, 123, 115)"> Show Records </h1><br>
                <div>
                    <input type="number" name="id" placeholder=" Enter Id " class="a" />
                </div>
                <h3 style="margin-left:45%;color:rgb(109, 123, 115)">OR</h3>
                <div>
                    <input type="email" name="email" placeholder=" Enter Email Address " class="a" />
                </div>
                <button type="submit" name="show" class="b"> Show With Id or Email </button>
                <button type="submit" name="show1" class="b"> Show All Data </button>
            <br><br><br>
        </div>
    </form>
    </body>
</html>
<?php
if(isset($_POST['show']))
{
    $id= $_POST['id'];
    $email = $_POST['email'];

        $sql = "SELECT Id,Name,Email, MobileNumber FROM Register where Id='$id' || Email ='$email' ";
        $result = mysqli_query($con, $sql);

        echo "<table border='2px solid black' width='100%' style='margin-left:5px;' >";
        echo '<tr>.<th>Id</th>.<th>Name</th>.<th>Email</th>.<th>MobileNumber</th>.</tr>';
        while ($row = mysqli_fetch_assoc($result)) { 
            echo "<tr>";
            foreach ($row as $field => $value) { 
                echo "<td>" . $value . "</td>"; 
            }
            echo "</tr>";
        }
        echo "</table>";
}
?>
<?php
if(isset($_POST['show1']))
{
    $id= $_POST['id'];
            
        $sql = "SELECT Id,Name,Email, MobileNumber FROM Register ";
        $result = mysqli_query($con, $sql);

        echo "<table border='2px solid black' width='100%' style='margin-left:5px;' >";
        echo '<tr>.<th>Id</th>.<th>Name</th>.<th>Email</th>.<th>MobileNumber</th>.</tr>';
        while ($row = mysqli_fetch_assoc($result)) { 
            echo "<tr>";
            foreach ($row as $field => $value) { 
                echo "<td>" . $value . "</td>"; 
            }
            echo "</tr>";
        }
        echo "</table>";
}
?>