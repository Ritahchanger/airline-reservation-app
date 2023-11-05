<?php session_start();

if (!isset($_SESSION['id'])) {
    header('Location: ../authentication/login.php');
    exit;
}
 ?>
<?php include("adminheader.php"); ?>
<main class="main" id="main">
    <section class="left_side_bar">
        <div class="show-menu">
        <a href="#" class="menu_icon">#&9776;</a>
        </div>
       <h2 class="title">HOME</h2>
       <div class="navigation">
         <ul class="navigation_ul flex">
            <li class="navigation_li"><a href="admins.php">ADMINS</a></li>
            <li class="navigation_li"><a href="flights.php">FLIGHTS</a></li>
            <li class="navigation_li"><a href="#">ROOMS</a></li>
         </ul>
       </div>
    </section> 

    <section class="main_section">

        <div class="admins_header_box">
            <div class="profile">
                <div class="profile_image">
                    <img src="./images/lina.jpg" alt="">
                </div>
                <div class="profile_details">
                    <div class="row_details">
                        <div class="col"><p class="labelname">SIRNAME</p></div>
                        <div class="col"><?php echo "<p class='administrator_name'>{$_SESSION['sirname']}</p>";?></div>
                    </div>
                    <div class="row_details">
                        <div class="col"><p class="labelname">LASTNAME</p></div>
                        <div class="col"><?php echo "<p class='administrator_name'>{$_SESSION['lastname']}</p>";?></div>
                    </div>
                    <div class="row_details">
                        <div class="col"><p class="labelname">EMAIL</p></div>
                        <div class="col"><?php echo "<p class='administrator_name'>{$_SESSION['email']}</p>";?></div>
                    </div>
                    <div class="row_details">
                        <div class="col"><p class="labelname">IDNO</p></div>
                        <div class="col"><?php echo "<p class='administrator_name'>{$_SESSION['idno']}</p>";?></div>
                    </div>
                </div>
                <div class="navigator_buttons">
                   <div class="apload_button">
                        <label for="image" class="apload_container">
                                <i class="fa-solid fa-upload" id="apload_icon"></i>
                            </label>
                            <input type="file" name="image" id="profile_image" accept="image/*" >
                   </div>
                   <div class="remove_profile">
                     <a href="#" class="hero_btn">REMOVE PROFILE IMAGE</a>
                   </div>
                </div>
            </div>
        </div>
        <p class="header_titles">BOARD OF STAFF</p>
        <div class="administrators_table">
            <table>
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>SIRNAME</td>
                        <td>LASTNAME</td>
                        <td>IDNO</td>
                        <td>EMAIL</td>
                        <td>PASSWORD</td>
                    </tr>
                </thead>
                <tbody>
                
                <?php 
                    include("../db.php");
                    $result=mysqli_query($conn,"SELECT * FROM `users`");
                    while($row=mysqli_fetch_assoc($result)){
                        echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['sname']}</td>
                        <td>{$row['lname']}</td>
                        <td>{$row['idno']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['passwd']}</td>
                        <td><a href='#'class='nav_buttons'>DELETE</a></td>
                        <td><a href='#'class='nav_buttons'>EDIT</a></td>
                        </tr>";
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </section>
</main>
<script>
document.querySelector("#apload_icon").addEventListener("click",()=>{
document.querySelector("#profile_image").click();
});
</script>
<?php include("adminfooter.php") ?>