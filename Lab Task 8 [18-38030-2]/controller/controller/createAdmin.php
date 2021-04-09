

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script>  
        function validateform(){  
        var name=document.myform.name.value;  
        var password=document.myform.password.value;
        var rePass=document.myform.rePass.value; 
        var email=document.myform.email.value;  
        var gender=document.myform.gender.value; 
        var dob=document.myform.dob.value;
        var oid=document.myform.oid.value;  
        
          
        if (name==null || name=="")
        {  
          alert("Name can't be blank");  
          return false;  
        }
        else if(password.length<6)
          {  
          alert("Password must be at least 6 characters long.");  
          return false;  
          } 

        else if(rePass!=password)
          {  
          alert("Password Miss-Match.");  
          return false;  
          }  

        else if (email==null || email=="")
        {  
          alert("Email can't be blank");  
          return false;  
        }

        else if (gender==null || gender=="")
        {  
          alert("Gender can't be blank");  
          return false;  
        }

        else if (dob==null || dob=="")
        {  
          alert("Date of Birth can't be blank");  
          return false;  
        }

        else if (oid==null || oid=="")
        {  
          alert("OID can't be blank");  
          return false;  
        }
        }
        function checkEmpty() {
            if (document.myform.name.value = "") 
            {
                alert("Name can't be blank");
                return false;  
            }

            else if (document.myform.password.value = "") 
            {
                alert("Password can't be blank");
                return false;  
            }

            else if (document.myform.rePass.value = "") 
            {
                alert("Re-Password can't be blank");
                return false;  
            }

            else if (document.myform.email.value = "") 
            {
                alert("Email can't be blank");
                return false;  
            }

            else if (document.myform.gender.value = "") 
            {
                alert("Gender can't be blank");
                return false;  
            }

            else if (document.myform.dob.value = "") 
            {
                alert("DOB can't be blank");
                return false;  
            }

            else if (document.myform.oid.value = "") 
            {
                alert("OID can't be blank");
                return false;  
            }
          }  
        function checkName() 
        {
            if (document.getElementById("name").value == "") {
                document.getElementById("nameErr").innerHTML = "Name can't be blank";
                document.getElementById("nameErr").style.color = "red";
                document.getElementById("name").style.borderColor = "red";
            }else{
                document.getElementById("nameErr").innerHTML = "";
                document.getElementById("name").style.borderColor = "black";
            }
            
        }
        function checkPass()
        {
            if (document.getElementById("password").value == "") {
                document.getElementById("passErr").innerHTML = "Password can't be blank";
                document.getElementById("passErr").style.color = "red";
                document.getElementById("password").style.borderColor = "red";
            }else if(document.getElementById("password").value.length<6){
                document.getElementById("password").style.borderColor = "red";
                document.getElementById("passErr").style.color = "red";
                document.getElementById("passErr").innerHTML = "Password must be at least 6 characters long.";
            }
            else{
                document.getElementById("passErr").innerHTML = "";
                document.getElementById("passErr").style.color = "red";
                document.getElementById("password").style.borderColor = "black";
            }
        }

        function checkrePass()
        {
            if (document.getElementById("rePass").value == "") 
            {
                document.getElementById("rePassErr").innerHTML = "Re-Password can't be blank";
                document.getElementById("rePassErr").style.color = "red";
                document.getElementById("rePass").style.borderColor = "red";
            }
            else if(document.getElementById("rePass").value != document.getElementById("password").value)
            {
                document.getElementById("rePass").style.borderColor = "red";
                document.getElementById("rePassErr").style.color = "red";
                document.getElementById("rePassErr").innerHTML = "Password Miss-Matched! ";
            }
            else
            {
                document.getElementById("rePassErr").innerHTML = "";
                document.getElementById("rePassErr").style.color = "red";
                document.getElementById("rePass").style.borderColor = "black";
            }
        }

        function checkID() 
        {
            if (document.getElementById("oid").value == "") 
            {
                document.getElementById("oidErr").innerHTML = "ID can't be blank";
                document.getElementById("oidErr").style.color = "red";
                document.getElementById("oid").style.borderColor = "red";
            }
            else{
                document.getElementById("oidErr").innerHTML = "";
                document.getElementById("oid").style.borderColor = "black";
            }
            
        }

        function checkEmail() 
        {
        if (document.getElementById("email").value == "") 
            {
                document.getElementById("email").innerHTML = "Email can't be blank";
                document.getElementById("email").style.color = "red";
                document.getElementById("email").style.borderColor = "red";
            }
        else if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(myForm.email.value))
            {
                return (true)
            }
                alert("You have entered an invalid email address!")
                return (false)
        }  

        function checkGender()
{
    var genderM=myform.gender_male.value;
    var genderF=myform.gender_female.value;

    if(genderM.checked==genderF.checked=="" )
       {
            alert("You must select male or female");
            return false;
       }   
 }

 
        
</script>  
</head>
<body>
 
  
</form>  
</body>
</html>