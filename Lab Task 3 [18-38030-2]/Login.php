<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$UsernameErr = $PasswordErr = "";
$Username = $Password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{ 
    
      if (empty($_POST["Username"])) 
        {
          $UsernameErr = "Cannot be empty";
        } 
      else 
        {
          if(strlen($_POST["Username"]) < 2)
            {
              $UsernameErr = "Username must be more than 2 characters!";
            }
          else
            {
      
              if(!preg_match("/^[a-zA-Z-' ]*$/",$Username))
	             {
	               $UsernameErr = "Can contain a-z, A-Z, period, dash,underscore only";
	             }
              else 
                {
                  $Username = test_input($_POST["Username"]);
                }
            }
        }
    
  
  if (empty($_POST["Password"])) 
      {
        $PasswordErr = "Cannot be empty";
      } 
  else 
  {

    if(strlen($_POST["Password"]) <= 8)
      {
        $PasswordErr = "Password must be more than 8 characters!";
      }

      else
      {
        
        if (!preg_match("/^[a-zA-Z-' ]*#*%*@*$/",$Password)) 
          {
            $PasswordErr = " Password must contain at least one of the special characters (@, #, $, %)";
          }
          else
          {
            $Password = test_input($_POST["Password"]);
          }
      }
  
  }


        
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <br>
  <center><b>User Name:</b> <input type="text" name="Username">
  <span class="error"> <?php echo $UsernameErr;?></span>
  <br><br></center>

  <center><b>Password:</b> <input type="text" name="Password">
  <span class="error"> <?php echo $PasswordErr;?></span>
  <br><br></center>

  <center><input type="checkbox" id="rmmbr" name="rmmbr" value="Remember_Me">
  <label for="rmmbr">Remember Me</label></center><br>


  <center><input type="submit" name="submit" value="Submit"> <a href = "logout.php"><ul>Forgot Password</ul></a></center>
  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $Username;
echo "<br>";
echo $Password;
echo "<br>";

//echo var_dump($degree);

?>

</body>
</html>