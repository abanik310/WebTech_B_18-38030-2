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

/*for button color*/
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/*for hover*/
button:hover {
  opacity: 0.8;
}

/*for Login Form sticky*/
h2.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  background-color: #0e9fdf;
  padding: 20px;
  font-size: 20px;
}

/*image container*/
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

/*password view*/
span.psw {
  float: right;
  padding-top: 16px;

}

        

/*login button*/
button.login {text-align: center;background-color: #008CBA;width: 50%;}

/*text box*/
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

    <script>
    function idAlert() 
    {
      var x = document.forms["myForm"]["id"].value;
      if (x == "") {
      alert("ID must be filled out");
      return false;
    }
}

</script>

<h2 class="sticky">Login Form</h2>

<form name="myForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form">
  <h1 style="text-align: center" class="textbox" >Online Evaluation System</h1>
  
  <div class="imgcontainer">
    <img src="https://i.pinimg.com/564x/ae/5c/47/ae5c47d4a6ac53b79dc88d763b4c8095.jpg" alt="Avatar" class="avatar" style="width:200px">
  </div>

  <div class="container" style="text-align: center">
    
    <p id="demo"></p>
    <input type="text" class="textbox" placeholder="Enter Organizational Id" style="text-align: center" name="id" onblur="idAlert()" required><br>
    
    <input class="textbox" type="password" placeholder="Enter Password" style="text-align: center" name="password" onblur="idAlert()" required><br><br>
       
        
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
