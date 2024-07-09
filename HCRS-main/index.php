<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="adminPanel.css">
</head>
<body>
<script>
      function checkPwd() {
        let inputVal = document.getElementById("pwd").value;
        if(inputVal=="abc"){
          document.getElementById('err_msg').innerHTML="";
          window.location.href="dashboard.php";  
        }
        else{
          document.getElementById('err_msg').innerHTML="Password is incorrect";  
        }
      }
    </script>
  <div style="margin-left: 450px;margin-top:70px;text-align:center;width: 300px;height: 250px;">
    <img src="images\profile_icon.jpg" style="width:200px; height:200px;">
    <h1>Username</h1>
    <h2>Password</h2>
    <h3 id="err_msg" style="color: red;"></h3>
    <input type="password" id="pwd"/></br></br>
    <input type="submit" onclick="checkPwd();" value="Login"/>
  </div>
</body>
</html>