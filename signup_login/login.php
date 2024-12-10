<?php
require_once '';
?>
session_start();
if(isset($_POST["login"])){
    $email=mysqli_real_escape_string($connection,$_POST["email"]);
$pswd=mysqli_real_escape_string($connection,$_POST["pswd"]);

if($email!=""&& $pswd!=""){
    $sql1="SELECT * FROM dbname WHERE email='{$email}'AND pswd='{$pswd}'";
    $result_set1=mysqli_query($connection,$sql);

    if(mysql_num_rows($result_set1)==1)
{
    $row=mysqli_fetch_assoc($result_set1);
    $SESSION['user_id']=$row['userid'];
    header("Location:login.php");
}
}
}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="left-section">
            
            <!--<h1> Shop the Latest Smartphones with Unmatched Deals and Features!</h1>-->
        </div>
        <div class="right-section">
            <div class="form-container">
                <h2>Sign In</h2>
                <p>Create an account? <a href="page.php">Sign Up</a></p>
                <form action="#">
                    <!--<div class="input-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" id="fullname" required>
                    </div>-->
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" required>
                    </div>
                    <div class="input-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" required placeholder="Must be at least 6 characters" >
                        <i class="far fa-eye-slash"></i>
                        
                    </div>
                    <!--<div class="input-group">
                        <label for="confirmpassword">Confirm Password</label>
                        <input type="confirmpassword" id="confirmpassword" required>
                    </div>-->
                    <!--<div class="checkbox-group">
                        <input type="checkbox" id="newsletter">
                        <label for="newsletter">Sign up for email updates</label>
                    </div>-->
                    <button type="submit" class="signup-btn">Sign In</button>
                    <section class="copy legal">
                        <p><span class="small">By continuing,you agree to accept our <a href="#">Privacy Policy</a> &amp;<a href="#"><br>Terms of Service</a>.</span></p>
                    </section>
                </form>
            </div>
        </div>
    </div>
</body>
</html>