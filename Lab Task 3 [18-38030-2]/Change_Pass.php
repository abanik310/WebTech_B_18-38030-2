<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 


<?php

$CPasswordErr = $RNPasswordErr = $NPasswordErr = "";
$CPassword = $RNPassword = $NPassword = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["CPassword"])) {
            $CPasswordErr = "Input Current Password";
        } else {
            $CPassword = test_input($_POST["CPassword"]);
        }
        if (empty($_POST["NPassword"])) {
            $NPasswordErr = "Input New Password";
        } else {
            $NPassword = test_input($_POST["NPassword"]);
            if ($NPassword == $CPassword) {
                $NPasswordErr = "New Password should not be same as the Current Password";
                $CPassword = $NPassword = $RNPassword = "";
            }
        }
        if (empty($_POST["RNPassword"])) {
            $RNPasswordErr = "Input New Password";
        } else {
            $RNPassword = test_input($_POST["RNPassword"]);
            if ($RNPassword != $NPassword) {
                $RNPasswordErr = " New Password must match with the Retyped Password";
                $CPassword = $NPassword = $RNPassword = "";
            }
        }
    }




function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <br>
  <b>Current Password &emsp; &emsp;&nbsp;&nbsp; &emsp;:</b> <input type="text" name="CPassword">
  <span class="error"> <?php echo $CPasswordErr;?></span>
  <br><br>

  <b style="color: green">New Password &emsp; &emsp; &nbsp;&nbsp;&nbsp; &emsp;&emsp;:</b> <input type="text" name="NPassword">
  <span class="error"> <?php echo $NPasswordErr;?></span>
  <br><br>

  <b style="color: red">Retype New Password &emsp; &emsp;:</b> <input type="text" name="RNPassword">
  <span class="error"> <?php echo $RNPasswordErr;?></span>
  <br><br>

  


  <input type="submit" name="submit" value="Submit"> 
  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo "Previous Password : ", $CPassword;
echo "<br>";
echo "New Password : ", $NPassword;
echo "<br>";



?>


</body>
</html>