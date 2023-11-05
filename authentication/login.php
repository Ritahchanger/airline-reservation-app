<?php include("auth_header.php"); ?>

<div class="container" style="max-width:700px;">
<div class="row links">
       <a href="#" class="auth_links signup" style="color:blue;">LOGIN</a>
       <a href="signup.php" class="auth_links login"style=" background:hsl(240,60%,50%);">SIGNUP</a>
    </div>

<?php
include("../db.php");
session_start();
$email_error=" ";$password_error = "";

if (isset($_POST["submit"])) {
  $email = $_POST["email"];
  $password = $_POST["password"];
    if (strlen(trim($email)) !== 0 && strlen($password) !== 0) {
        $new_email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($new_email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Invalid Email";
        }
        else{
          $sql="SELECT * FROM `users` WHERE email='$email'";
          $result=mysqli_query($conn,$sql);

          if(mysqli_num_rows($result)===1){
            $row=$result->fetch_assoc();
            $hashed_password=$row["passwd"];
            if(password_verify($password,$hashed_password)){
              $loggedId=$row["id"];
              $loggedSname=$row["sname"];
              $loggedLname=$row["lname"];
              $loggedIDNO=$row["idno"];
              $loggedEmail=$row["email"];
              $position=$row["position"];


              $_SESSION["id"]=$loggedId;
              $_SESSION["sirname"]=$loggedSname;
              $_SESSION["lastname"]=$loggedLname;
              $_SESSION["email"]=$loggedEmail;
              $_SESSION["idno"]=$loggedIDNO;
              $_SESSION["position"]=$position;

              header("Location:../admin/home.php");
              
            }
            else{
              $password_error="Wrong password";
            }
          }

        }
    } else {
        $email_error = "Fill this field please";
        $password_error = "Fill this field please";
    }

}
?>



  <form action="login.php" class="form" id="login_form" method="POST" novalidate autocomplete="off">
    <div class="input_box">
      <input type="email" name="email"placeholder="Email">
    </div>
    <span class="login_error" style="color:red;"><?php if(isset($_POST["submit"])){echo $email_error;} ?></span>
    <div class="input_box">
      <input type="password" name="password"placeholder="Password">
    </div>
    <span class="login_error" style="color:red;"><?php if(isset($_POST["submit"])){echo $password_error;} ?></span>
    <input type="submit" class="submit" name="submit" value="LOGIN">
  </form>
</div>

<?php include("auth_footer.php"); ?>