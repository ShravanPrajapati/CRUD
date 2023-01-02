<?php  
// define variables to empty values  
$nameErr = $emailErr = $mobileErr = $passwordErr = $confirmPasswordErr = "";  
$name = $email = $mobile = $password = $confirmPassword = "";  
  
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
//String Validation  
    if (empty($_POST['name'])) {  
         $nameErr = "Name is required";  
    } else {  
        $name = input_data($_POST["name"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                $nameErr = "Only alphabets and white space are allowed";  
            }  
    }  
      
    //Email Validation   
    if (empty($_POST["email"])) {  
            $emailErr = "Email is required";  
    } else {  
            $email = input_data($_POST["email"]);  
            // check that the e-mail address is well-formed  
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                $emailErr = "Invalid email format";  
            }  
     }  
    
    //Number Validation  
    if (empty($_POST["mobile"])) {  
            $mobileErr = "Mobile number is required";  
    } else {  
            $mobile = input_data($_POST["mobile"]);  
            // check if mobile no is well-formed  
            if (!preg_match ("/^[0-9]*$/", $mobile) ) {  
            $mobileErr = "Only numeric value is allowed.";  
            }  
        //check mobile no length should not be less and greator than 10  
        if (strlen ($mobile) != 10) {  
            $mobileErr = "Mobile no must contain 10 digits.";  
            }  
    }   
      
    // //Empty Field Validation  
    // if (empty ($_POST["gender"])) {  
    //         $genderErr = "Gender is required";  
    // } else {  
    //         $gender = input_data($_POST["gender"]);  
    // }  
    
    if(!empty($_POST["password"])) {
        if (strlen($_POST["password"]) <= '6') {
            $passwordErr = "Your Password Must Contain At Least 6 Characters!";
        } 
        else{
            $passwordErr = "";
        }
    }
    else{
        $passwordErr = "Password is required"; 
    }
    
    if(!empty($_POST["confirmPassword"])) {
        
        if ($_POST["password"] && $_POST["confirmPassword"]) {
            
        } 
        else{
            $confirmPasswordErr = "Password and Confirm Password not match";
        }
    }
    else{
        $confirmPasswordErr = "Confirm Password is required"; 
    }
 
}  
function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
?> 