<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

h2.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  background-color: #0e9fdf;
  padding: 20px;
  font-size: 20px;
}


.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;

}

        


button.login {text-align: center;background-color: #008CBA;width: 50%;}
input.textbox {text-align: center; width: 50%;}




/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }

  

}
</style>
</head>
<body>
    <?php include_once "../controller/signin.php" ?>

<h2 class="sticky">Login Form</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form">
  
  <div class="imgcontainer">
    <img src="https://i.pinimg.com/564x/ae/5c/47/ae5c47d4a6ac53b79dc88d763b4c8095.jpg" alt="Avatar" class="avatar" style="width:200px">
  </div>

  <div class="container" style="text-align: center">
    
    
    <input type="text" class="textbox" placeholder="Enter Organizational Id" style="text-align: center" name="id" required><br>
    
    <input class="textbox" type="password" placeholder="Enter Password" style="text-align: center" name="password" required><br><br>
       
        
    <button  type="submit" class="login">Login </button><br> 

    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  

  <footer class="w3-container w3-padding-16 w3-light-grey">
    
    <div class="container" style="text-align: center">
    <p>Copyright © <?php echo date("Y"); ?></p>
</div>
  </footer>
</form>

</body>
</html>
