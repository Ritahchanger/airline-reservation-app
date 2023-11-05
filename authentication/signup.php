<?php include("auth_header.php"); ?>

<div class="container">
<?php

include("../db.php");

session_start();

if(isset($_POST["submit"])){
  $sname=$_POST["sname"];
  $lname=$_POST["lname"];
  $idno=$_POST["idno"];
  $email=$_POST["email"];
  $password=$_POST["password"];
  $storedPassword=password_hash($password,PASSWORD_BCRYPT,['COST=>12']);
  $position=$_POST["position"];



  $query="CREATE TABLE IF NOT EXISTS users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    sname VARCHAR(100) NOT NULL,
    lname VARCHAR(100) NOT NULL,
    idno VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    passwd VARCHAR(100) NOT NULL,
    position VARCHAR(100) NOT NULL
    );";
  

  mysqli_query($conn,$query);
  $query_email="SELECT email FROM `users`WHERE email='$email'";
  $email_query_result=mysqli_query($conn,$query_email);
  if(mysqli_num_rows($email_query_result)>0){
    echo "<p class='color:red'>That email is already used:</p> ";
  }else{
     $place_values="INSERT INTO users(sname,lname,idno,email,passwd,position) VALUES('$sname','$lname','$idno','$email',
    '$storedPassword','$position')";
     $result=mysqli_query($conn,$place_values);
     header("Location:login.php");
   
  }

}

?>
  <form action="signup.php" method="POST" class="form" id="sign_up"novalidate autocomplete="off">
    <div class="row">
      <a href="login.php" class="auth_links login"style=" background:hsl(240,60%,50%);">LOGIN</a>
       <a href="#" class="auth_links signup"style="color:blue;">SIGN UP</a>
    </div>
   <div class="row input_rows">
     <div class="input_box">
      <p class="input_title">Sirname</p>
      <input type="text" name="sname"placeholder="Sirname"value="<?php echo isset($_POST["sname"]) ? htmlspecialchars($_POST["sname"]): " "; ?>"id="sname">
      <span class="error" id="sname_error">Fill this field</span>
    </div>
    <div class="input_box">
    <p class="input_title">First name</p>
      <input type="text" name="lname"placeholder="Lastname"value="<?php echo isset($_POST["lname"]) ? htmlspecialchars($_POST["lname"]): " "; ?>"id="lname">
      <span class="error" id="lname_error">Fill this field</span>
    </div>
   </div>
    <div class="input_box">
    <p class="input_title">ID no</p>
      <input type="text" name="idno"placeholder="Id no"value="<?php echo isset($_POST["idno"]) ? htmlspecialchars($_POST["idno"]): " "; ?>"id="idno">
      <span class="error" id="idno_error">Fill this field</span>
    </div>
    <div class="input_box">
    <p class="input_title">Email</p>
      <input type="email" name="email"placeholder="Email"value="<?php echo isset($_POST["email"]) ? htmlspecialchars($_POST["email"]): " "; ?>"id="email">
      <span class="error" id="email_error">Fill this field</span>
    </div>
   <div class="row input_rows">
   <div class="input_box">
      <p class="input_title">Password</p>
      <input type="password" name="password"placeholder="Password" value="<?php echo isset($_POST["password"]) ? htmlspecialchars($_POST["password"]): " "; ?>"autocomplete="off"id="password">
      <span class="error" id="password_error"autocomplete="off">Fill this field</span>
    </div>
    <div class="input_box">
      <p class="input_title">Comfirm Password</p>
      <input type="password" name="comfirmpassword"placeholder="Comfirm password"value="<?php echo isset($_POST["confirmpassword"]) ? htmlspecialchars($_POST["comfirmpassword"]): " "; ?>"autocomplete="off"id="confirm_password">
      <span class="error" id="comfirm_password_error">Fill this field</span>
    </div>
   </div>
   <div class="input_box">
   <p class="input_title">Position</p>
      <select name="position" id="position"name="position"value="<?php echo isset($_POST["position"]) ? htmlspecialchars($_POST["position"]): " "; ?>">
        <!-- <option value="#"></option> -->
        <option value="Manager">Manager</option>
        <option value="Directory">Director</option>
        <option value="Managerial secretary">Managerial secretary</option>
      </select>
      <span class="error" id="position_error">Fill this field</span>
    </div>
    <input type="submit" class="submit" name="submit" value="SUBMIT">
 
  </form>
</div>
<script src="authenticate.js">
 
</script>
<?php include("auth_footer.php"); ?>