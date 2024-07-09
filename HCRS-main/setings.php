<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="settings.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body style="background-color: gray;">
<?php require("C:\\xampp\\htdocs\\Hotelpro\\admin\\header.php"); ?>
<section id="settings">
    <h1 style="margin-left: 15px;"> SETTINGS</h1>
    <div class="genset" >
      <div class="cont">
        <h1>General Settings</h1>
        <h2>Hotel Title</h2>
        <p>Hotel Name</p>
        <h2>About Us</h2>
        <p>About Us content</p>
        <button class="black-button inline-button openSheetBtn" style="margin-right: 10px;"><i class="fas fa-edit"></i>Edit</button>
      </div>
    </div>
<div class="shutset cont" style="padding: 10px;">
<div>
    <h1>Shutdown Website</h1>
    <p>no customers can able to book the hotel when shutdown mode in enabled</p></div>
    <button class="black-button inline-button openSheetBtn2" style="margin-right: 30px;"><i class="fas fa-edit"></i>Edit</button>
</div>
<div class="conset">
  <div class="con">
        <div class="1p">
        <h1>Contact Settings</h1>
        <h2>Address</h2>
        <p>Vijayawada</p>
        <h2>Google Map</h2>
        <p>Hotel Location</p>
        <h2>Phone Numbers</h2>
        <i class="fa-solid fa-phone"></i><span>  12390480808</span>
        <br>
        <i class="fa-solid fa-phone"></i><span>  12390480808</span>
        <br>
        <h1>E-mail</h1>
        <i class="fas fa-envelope"></i><span> Email</span>
        </div>
        <div class="p2">
          
          <h2>Social links</h2>
          <div>
        <i class="fab fa-facebook-square"></i>
        <span>https://facebook.com/</span>
        <br>
        <i class="fab fa-instagram-square"></i>
        <span>https://instagram.com/</span>
        <br>
        <i class="fab fa-twitter-square"></i>
        <span>https://twitter.com/</span>
        


        </div>
<h1>Maps</h1>
        <iframe
    width="600"
    height="400"
    frameborder="0"
    style="border:0"
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d383342.42466739005!2d80.21122199887892!3d16.306652402332236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a393e648e478f55%3A0xe1d93d04a651c14e!2sGuntur%2C%20Andhra%20Pradesh!5e0!3m2!1sen!2sin!4v1641325924601!5m2!1sen!2sin"
  allowfullscreen>
    allowfullscreen=""
    aria-hidden="false"
    tabindex="0"
  ></iframe>
        </div>
        <div class="3p">
        <button class="black-button openSheetBtn3"><i class="fas fa-edit"></i>Edit</button>
      </div>
        <div class="sheet-container" id="sheetContainer">
  <div class="sheet">
    <button id="closeSheetBtn">X</button>
    <div class="field">
      <h1> General Settings</h1>
      <label for="nameInput"  style="font-size: 16px;">Hotel Name:</label>
      </br>
      <input type="text" id="nameInput">
      </br>
      </br>
      <label for="textarea" style="font-size: 16px;">About us:</label>
      </br>
      <textarea id="textarea" name="textarea1" rows="7" colums="150"></textarea>
      </br></br>
    <div style="text-align: center;">
      <button type="button" style="background-color:black;color:white;float:left;">cancel</button>
      <button type="button" style="background-color:black;color:white;float:right;">submit</button>
    </div>
    </div>
  </div>
</div>
<div class="sheet-container3" id="sheetContainer3">
  <div class="sheet3">
    <button id="closeSheetBtn3">X</button>
    
    
    <div class="field">
    
      <h1> Contacts Settings</h1>
      
      
      
      <label for="nameInput"  style="font-size: 16px;">Address:</label>
      </br>
      <input type="text" id="nameInput">
  
  </br>
      </br>
  
  <label for="nameInput1"  style="font-size: 16px;">Google map link</label>
      </br>
      <input type="text" id="nameInput1">
  
   </br></br>
   
   <label class="fl" style="font-size: 16px;">Phone Numbers</label>
      <div class="ig">
        <span class="igi"><i class="fa-solid fa-phone"></i></span>
        <input type="text" name="pn" id="pni" class="form-control shadow-none">
  </br></br>
        <span class="igi"><i class="fa-solid fa-phone"></i></span>
        <input type="text" name="pn" id="pni" class="form-control shadow-none">
      
       
  </div>
  </br></br>
  
  <label for="nameInput1"  style="font-size: 16px;">email</label>
      </br>
      <input type="text" id="nameInput1">
  
  </br></br>
  
   <label class="fl" style="font-size: 16px;">social links</label>
  </br>
      <div class="ig">
        <span class="igi"><i class="fab fa-facebook-square"></i></span>
        <input type="text" name="pn" id="pni" class="form-control shadow-none">
  </br>
        <span class="igi"><i class="fab fa-instagram-square"></i></span>
        <input type="text" name="pn" id="pni" class="form-control shadow-none">
  </br>
  <span class="igi"><i class="fab fa-twitter-square"></i></span>
        <input type="text" name="pn" id="pni" class="form-control shadow-none">
      </div>
  </br></br>
  
    <div style="text-align: center;">
      <button type="button" style="background-color:black;color:white;float:left;">cancel</button>
      <button type="button" style="background-color:black;color:white;float:right;">submit</button>
    </div>
    </div>
  </div>
</div>
<div class="sheet-container2" id="sheetContainer2">
  <div class="sheet2">
    <button id="closeSheetBtn2">X</button>
    <h1>SHUTDOWN THE WEBSITE</h1>
    <button id="toggleButton" class="off" onclick="toggleState()" width="680px">Off</button>
  </div>
</div>
    
   </div>
  </div>
  </div>

</div>
</div>
</section>
<script>
var openSheetBtns = document.querySelectorAll('.openSheetBtn');

  openSheetBtns.forEach(function(btn) {
    btn.addEventListener('click', function() {
      document.getElementById('sheetContainer').style.display = 'block';
    });
  });

  document.getElementById('closeSheetBtn').addEventListener('click', function() {
    document.getElementById('sheetContainer').style.display = 'none';
  });
  var openSheetBtns3 = document.querySelectorAll('.openSheetBtn3');

  openSheetBtns3.forEach(function(btn) {
    btn.addEventListener('click', function() {
      document.getElementById('sheetContainer3').style.display = 'block';
    });
  });

  document.getElementById('closeSheetBtn3').addEventListener('click', function() {
    document.getElementById('sheetContainer3').style.display = 'none';
  });
  var openSheetBtns2= document.querySelectorAll('.openSheetBtn2');

  openSheetBtns2.forEach(function(btn) {
    btn.addEventListener('click', function() {
      document.getElementById('sheetContainer2').style.display = 'block';
    });
  });

  document.getElementById('closeSheetBtn2').addEventListener('click', function() {
    document.getElementById('sheetContainer2').style.display = 'none';
  });
  function toggleState() {
    var button = document.getElementById("toggleButton");

    // Toggle between "on" and "off" states
    if (button.classList.contains("on")) {
      button.classList.remove("on");
      button.classList.add("off");
      button.innerHTML = "Off";
    } else {
      button.classList.remove("off");
      button.classList.add("on");
      button.innerHTML = "On";
    }
  }

</script>
</body>
</html>     
        
        
        
        

        
        

 

