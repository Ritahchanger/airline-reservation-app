<?php include("../components/bookingheader.php"); ?>
<?php include("../db.php"); ?>
<main class="main">      
   <div class="container bg-white  mt-4 p-5">

     <h1>BOOK YOUR FLIGHT</h1>

     <?php

     
     if(isset($_POST["submit"])){
        $sname=$_POST["sname"];
        $fname=$_POST["fname"];
        $email=$_POST["email"];
        $towhere=$_POST["towhere"];
        $persontype=$_POST["persontype"];
        $classtype=$_POST["classtype"];
        $wayflight=$_POST["wayflight"];
        $fligthday=$_POST["fligthday"];
        $returnday=$_POST["returnday"];
        $ticketno=$_POST["ticketno"];

        if(!empty($sname)&&!empty($fname)&&!empty($email)&&!empty($towhere)&&!empty($persontype)&&!empty($classtype)&&!empty($wayflight)&&!empty($fligthday)&&!empty($returnday)&&!empty($ticketno)){

            $query="SELECT email FROM `flights` WHERE email='$email'";
            $result=mysqli_query($conn,$query);
            if(mysqli_num_rows($result)>0){
                    echo "
                    <p style='color:red;font-size:1.7rem;'>This email has been used.!</p>
                    ";  
            }else{
                    $query="INSERT INTO `flights`(lname,fname,email,towhere,passengertype,waytype,flightday,returnday,viptype,ticketnumber) values ('$sname','$fname','$email','$towhere','$persontype','$classtype','$wayflight','$fligthday','$returnday','$ticketno');";
                    mysqli_query($conn,$query);
            }
    
        }
        else{
            echo "
             <p style='color:red;font-size:1.7rem;'>Fill all the fields.!</p>
            ";
        }

     }
     
     ?>

      <form action="booking.php" method="POST">

      <div class="input-group">
        <div class="form-floating">
            <input type="text" class="form-control" name="sname" id="floatingInputGroup1" placeholder="Sirname" style="height:60px;font-size:1.6rem;" value="<?php echo isset($_POST["sname"]) ? htmlspecialchars($_POST["sname"]): ""; ?>">
            <label for="floatingInputGroup1" style="font-size:1.8rem;">Sirname</label>
        </div>
        </div>
        
        <div class="input-group ">
        <div class="form-floating">
            <input type="text" name="fname" class="form-control" id="floatingInputGroup1" placeholder="Lastname" style="height:60px;font-size:1.6rem;"value="<?php echo isset($_POST["fname"]) ? htmlspecialchars($_POST["fname"]): ""; ?>">
            <label for="floatingInputGroup1" style="font-size:1.8rem;">Lastname</label>
        </div>
        </div>

        <div class="input-group" >
        <div class="form-floating">
            <input type="text" name="email" class="form-control" id="floatingInputGroup1" placeholder="Email" style="height:60px;font-size:1.8rem;"value="<?php echo isset($_POST["email"]) ? htmlspecialchars($_POST["email"]): ""; ?>">
            <label for="floatingInputGroup1" style="font-size:1.8rem;">Email</label>
        </div>
        </div>

        <div class="input-group ">
        <div class="form-floating">
            <input type="text" name="towhere" class="form-control" id="floatingInputGroup1" placeholder="To where" style="height:60px;font-size:1.8rem;"value="<?php echo isset($_POST["towhere"]) ? htmlspecialchars($_POST["towhere"]): ""; ?>">
            <label for="floatingInputGroup1" style="font-size:1.8rem;">To where</label>
        </div>
        </div>

        <div class="d-flex justify-content-between">

        <div class="form-floating"style="flex-basis:48%;">
          <p class="day_flight">Passenger</p>
            <select name="persontype" class="form-select" id="floatingSelect" aria-label="Floating label select example" style="height:60px; font-size:1.8rem;"value="<?php echo isset($_POST["persontype"]) ? htmlspecialchars($_POST["persontype"]): ""; ?>">
                <option value="Baby">Baby</option>
                <option value="Adult">Adult</option>
        </select>
         </div>

         <div class="form-floating" style="flex-basis:48%;">
         <p class="day_flight">Flight class</p>
            <select class="form-select" name="classtype" id="floatingSelect" aria-label="Floating label select example" style="height:60px; font-size:1.8rem;"value="<?php echo isset($_POST["classtype"]) ? htmlspecialchars($_POST["classtype"]): ""; ?>">
                <option value="Economy class">Economy class</option>
                <option value="Business class">Business class</option>
            </select>
         </div>

        </div>
       
        <p class="day_flight"style="margin-top:1rem;">Flight itineraries:</p>
        <div class="form-floating input-group">
            <select class="form-select" name="wayflight" id="floatingSelect" aria-label="Floating label select example" style="height:60px; font-size:1.8rem;"value="<?php echo isset($_POST["wayflight"]) ? htmlspecialchars($_POST["wayflight"]): ""; ?>">
                <option value="One-Way Flights">One-Way Flights</option>
                <option value="Round-Trip (Return) Flights">Round-Trip (Return) Flights</option>
            </select>
         </div>
        
        <div class="input-group">
        <div class="form-floating">
            <p class="day_flight">Flight day</p>
            <input type="date" class="form-control" name="fligthday" id="floatingInputGroup1"  style="height:60px;font-size:1.8rem;"value="<?php echo isset($_POST["flightday"]) ? htmlspecialchars($_POST["flightday"]): ""; ?>">
        </div>
        </div>
        <div class="input-group">
        <div class="form-floating">
            <p class="day_flight">Return day</p>
            <input type="date" class="form-control" name="returnday" id="floatingInputGroup1"style="height:60px;font-size:1.8rem;"value="<?php echo isset($_POST["returnday"]) ? htmlspecialchars($_POST["returnday"]): ""; ?>">
        </div>
        </div>

        <div class="input-group">
        <div class="form-floating">
            <input type="text" class="form-control" name="ticketno" id="floatingInputGroup1" placeholder="Ticket No" style="height:60px;font-size:1.8rem;"value="<?php echo isset($_POST["ticketno"]) ? htmlspecialchars($_POST["ticketno"]): ""; ?>">
            <label for="floatingInputGroup1" style="font-size:1.8rem;">Ticket No</label>
        </div>
        </div>


       <input type="submit" name="submit" value="SUBMIT" style="width:100%; font-size:1.8rem;" class="submit_btn">

      </form>

   </div>

</main>
<?php include("../components/bookingFooter.php")?>