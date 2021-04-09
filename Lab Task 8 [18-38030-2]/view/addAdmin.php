<?php include_once "../controller/createAdmin.php" ?>

<!DOCTYPE html>
<html lang="en">

<title>Add Admin</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

/*front*/
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}

/*menu bar links*/
a:link, a:visited {
  background-color: w3-blue;
  color: black;
  border: 2px solid w3-blue;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: w3-blue;
  color: white;
}

/*dashboard gackground*/
  .Dashboard{ background-color: #0e9fdf; color: white; font-size: 25px; text-align: center;}

/*recent user*/
  .recentUser{ text-align: right; }

/*search bar*/
  .search{
  padding: 8px ;
  float: center;
  margin-top: 8px;
  margin-left: 40%;
  font-size: 17px;
  border: 1px solid grey;
  
  width: 40%;
  background: #f1f1f1;
}

</style>
<body class="w3-light-grey">



<!-- Top container -->
<div class="w3-bar w3-top w3-blue w3-large" style="z-index:4">
  <input class="search" type="text" placeholder="Search.." name="search">
  
  <button type="submit"><i class="fa fa-search"></i></button>

  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right"><a href="../controller/signOut.php" class = 'welcome_color'>Log Out</a><br></span>
</div>

<!--Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <!--<div class="w3-col s4"><br>-->
     <!-- <img src="https://i.pinimg.com/736x/ea/69/dc/ea69dc6226e72a33f82d3add20b470df.jpg" class="w3-circle w3-margin-right" style="width:60px">
    </div>
    <div class="w3-col s8 w3-bar"><br>
      <span>Welcome, <strong>Mike</strong></span><br>
      <h3 class='welcome_color'> Welcome <?php echo $_SESSION["name"] ?> </h3><br>-->
      <h5 class="Dashboard">Add Admin</h5>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    
    <a href="adminDash.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-dashboard fa-fw"></i>  Dash Board</a>
    <a href="addAdmin.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>  Add Admin</a>
    <a href="addCourse.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-diamond fa-fw"></i>  Add Course</a>
    <a href="addTeacher.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Add Teacher</a>
    <a href="addStudent.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Add Student</a>
    <a href="viewAllAdmins.php" class="w3-bar-item w3-button w3-padding" ><i class="fa fa-bank fa-fw"></i>View All Admin</a>
    <a href="viewAllTeachers.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw" ></i>  View All Teacher</a>
    <a href="viewAllStudents.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  View All Student</a>
    <a href="viewAllCourse.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-diamond fa-fw"></i>  View All Course</a>
    <br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    
  </header>
 
    <form name="myform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" onsubmit="validateform()" class="form">
 
  <hr>
  
  
  <h2 id="demo" style="display:none">&nbsp;&nbsp;&nbsp;&nbsp;Admin adding . . .</h2>

  <div class="w3-container">

    <ul class="w3-ul w3-card-4 w3-white">
      <li class="w3-padding-16">

        <center>Name &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp; &emsp; &nbsp;&nbsp;&nbsp; &emsp;&emsp;<sup style="color: red;">*</sup> <input type="text" name="name" id="name" onkeyup="checkName()" onblur="checkName()">
        <span id="nameErr"></span><br>

        Password &emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp; &emsp; &nbsp; &emsp;&emsp;<sup style="color: red;">*</sup> <input type="password" name="password" id="password" onkeyup="checkPass()" onblur="checkPass()"> <span id="passErr"></span><br>

        

                Retype Password &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&emsp; &emsp; &emsp;&emsp;<sup style="color: red;">*</sup> <input type="password" name="rePass" id="rePass" onkeyup="checkrePass()" onblur="checkrePass()"> <span id="rePassErr"></span><br>

                Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp; &emsp; &nbsp;&nbsp;&nbsp; &emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp; &emsp; &nbsp;&nbsp;<sup style="color: red;">*</sup> <input type="email" name="email" onkeyup="checkEmail()" onblur="checkEmail()"> <span id="emailErr"></span><br>

                 Organization ID  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp; &emsp; &nbsp;&nbsp;&nbsp; &emsp;&emsp;<sup style="color: red;">*</sup> <input type="text" name="oid" id="oid" onkeyup="checkID()" onblur="checkID()"> <span id="oidErr"></span><br>

                Gender &nbsp; &nbsp;&nbsp;&nbsp; &emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp; &emsp; &nbsp;&nbsp;&nbsp; &emsp;&emsp;
                <input type="radio" name="gender"  value="female"> Female
                <input type="radio" name="gender"  value="male"> Male
                <input type="radio" name="gender"  value="other"> Other
                <span id="genderErr"></span><br>
                <br><br>

                Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp; &emsp; &nbsp;&nbsp;&nbsp; &emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp; &emsp; &nbsp;&nbsp; &nbsp;&nbsp;<input type="date" name="dob"> <span style="color:orangered"> <span id="dobErr"></span><br>
                <input type="file" name="image"><br><br>
                
                <input style="background-color: #0e9fdf;color: white;"type="submit"  name="Submit" onclick="document.getElementById('demo').style.display='block'">
                
      </li>
      
    </ul>
  </div></center>
  </form>
        <h3><?php echo isset($msg) ?></h3>
  <hr>
  

  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
    
    <p style="text-align: center;">Copyright © <?php echo date("Y"); ?></p>
  </footer>

  <!-- End page content -->
</div>


</body>
</html>
