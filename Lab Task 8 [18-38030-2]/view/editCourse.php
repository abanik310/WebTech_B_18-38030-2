<!--<?php
require_once '../controller/updateCourse.php';
require_once '../controller/viewCourse.php';
if (isset($_GET["c-id"]))
    $course = viewCourse($_GET["c-id"]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course | Edit</title>
</head>
<style>
    input[type=text],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        border-color: blue;
    }

    input[type=password],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        border-color: blue;
    }

    input[type=email],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        border-color: blue;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        border-color: whitesmoke;
        font-size: 20px;
    }

    input[type=submit]:hover {
        background-color: #45a049;

    }

    .form {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        margin: 5%;
        font-size: 18px;

    }

    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: gray;
        color: white;
        text-align: center;
    }
</style>

<body>

    <body>
        <?php include_once "../controller/updateCourse.php" ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form">
            <h1 style=" inline-size: 500px; background-color:#45a049 ; text-align: center; color:white">Edit Course Information</h1><br><br>
            Course Name<sup style="color: red;">*</sup> <input value="<?php if (isset($course)) echo $course['name'] ?>" type="text" name="name"> <span style="color:orangered"><?php echo $nameErr; ?><br><br></span>
            Course Id<sup style="color: red;">*</sup> <input type="hidden" value="<?php if (isset($course)) echo $course['c-id'] ?>" type="text" name="c-id"> <span style="color:orangered"><?php echo $cidErr; ?><br><br></span>
            Assigned Teacher (id) <input value="<?php if (isset($course)) echo $course['t-id'] ?>" type="t-id" name="t-id"> <span style="color:orangered"> <?php echo $tidErr; ?><br><br></span>
            Section
            <select name="section" id="section" value="<?php if (isset($course)) echo $course['section'] ?>">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
                <option value="G">G</option>
                <option value="H">H</option>
                <option value="I">I</option>
                <option value="J">J</option>
                <option value="K">K</option>
                <option value="M">M</option>s
                <option value="N">N</option>
                <option value="O">O</option>
                <option value="P">P</option>
            </select>
            <span style="color:orangered"> <?php echo $sectionErr; ?><br><br></span>
            <input type="submit" name="Submit">
        </form>
        <h3><?php echo isset($msg) ?></h3>

    </body>
    <div class="footer">
        <footer>
            <h2>Copyright &#169;</h2>
        </footer>
    </div>-->


<?php
require_once '../controller/updateCourse.php';
require_once '../controller/viewCourse.php';
if (isset($_GET["c-id"]))
    $course = viewCourse($_GET["c-id"]);
?>
<title>Edit Course</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}

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

  .Dashboard{ background-color: #0e9fdf; color: white; font-size: 25px; text-align: center;}

  .recentUser{ text-align: right; }

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
      <h5 class="Dashboard">Edit Course</h5>
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
 <?php include_once "../controller/updateCourse.php" ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form">
 
  <hr>

  <div class="w3-container">

    <ul class="w3-ul w3-card-4 w3-white">
      <li class="w3-padding-16">

        <center>

            Course Name  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&emsp; &nbsp;&nbsp;&nbsp; &emsp;&emsp;<sup style="color: red;">*</sup> <input value="<?php if (isset($course)) echo $course['name'] ?>" type="text" name="name"> <span style="color:orangered"><?php echo $nameErr; ?><br><br></span>

            Course Id &emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp; &emsp; &nbsp; &emsp;&emsp;<sup style="color: red;">*</sup> <input type="text" value="<?php if (isset($course)) echo $course['c-id'] ?>" type="text" name="c-id"> <span style="color:orangered"><?php echo $cidErr; ?><br><br></span>

            Assigned Teacher (id)  &nbsp; &nbsp;&nbsp;&nbsp; &emsp; &emsp;&emsp;<input value="<?php if (isset($course)) echo $course['t-id'] ?>" type="t-id" name="t-id"> <span style="color:orangered"> <?php echo $tidErr; ?><br><br></span>

            Section &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp; &emsp; &nbsp;&nbsp;&nbsp; &emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp; &emsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp; &emsp; &nbsp;&nbsp;&nbsp; &emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select name="section" id="section" value="<?php if (isset($course)) echo $course['section'] ?>">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
                <option value="G">G</option>
                <option value="H">H</option>
                <option value="I">I</option>
                <option value="J">J</option>
                <option value="K">K</option>
                <option value="M">M</option>s
                <option value="N">N</option>
                <option value="O">O</option>
                <option value="P">P</option>
            </select>
            <span style="color:orangered"> <?php echo $sectionErr; ?><br><br></span>                
                
                <input style="background-color: #0e9fdf;color: white;"type="submit" name="Submit">
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
