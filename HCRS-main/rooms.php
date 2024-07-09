<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="adminPanel.css">
</head>
<body style="background-color: gray;">
<?php require('C:\xampp\htdocs\Hotel Project\Admin_Panel\header.php'); ?>
<!--Add-->
  <div id="add" style=" width: 500px;height: 300px;overflow: auto;background-color: white;display: none;position:sticky;top:10px;left: 400px;">
  <button style="margin-left:450px;background-color: inherit;border: none;" onclick="document.getElementById('add').style.display='none'">X</button>
    <div class="grid-container">
      <div style="margin-left: 15px;">
        <h3>Type</h3><input type="text"/>
        <h3>Price</h3><input type="text"/>
        <h3>Adult(Max..)</h3><input type="text"/>
      </div>
      <div>
        <h3>Area</h3><input type="text"/>
        <h3>quantity</h3><input type="text"/>
        <h3>Children(Max..)</h3><input type="text"/>
      </div>
    </div>
    <div style="margin-left: 15px;">
      <h3>Features</h3>
      <div class="grid-container">
        <div class="item">
          <input type="checkbox" id="a"><label for="a">bedroom</label>
        </div>
        <div class="item">
          <input type="checkbox" id="b"><label for="b">balcony</label>
        </div>
        <div class="item">
          <input type="checkbox" id="c"><label for="c">kitchen</label>
        </div>
      </div>
      <h3>Facilities</h3>
      <div class="grid-container">
        <div class="item">
          <input type="checkbox" id="a"><label for="a">Wifi</label>
        </div>
        <div class="item">
          <input type="checkbox" id="b"><label for="b">Air Conditioner</label>
        </div>
        <div class="item">
          <input type="checkbox" id="c"><label for="c">Telivision</label>
        </div>
        <div class="item">
          <input type="checkbox" id="c"><label for="c">Spa</label>
        </div>
        <div class="item">
          <input type="checkbox" id="c"><label for="c">Room Heater</label>
        </div>
      </div>
      <h3>Description</h3>
      <textarea rows="5" cols="50"></textarea></br></br>
      <button onclick="document.getElementById('add').style.display='none'" class="tdbutton2">Cancel</button>
      <button class="tdbutton2">Submit</button>
    </div>
  </div>
  <!--rooms-->
  <div id="rooms" style="overflow: scroll;height:500px;">
    <h2>ROOMS</h2>
    <div style="background-color: darkgrey;">
      <button onclick="document.getElementById('add').style.display='block'" style="margin-left: 1170px;background-color:black;color:white;margin-top:8px;">ADD</button>
      <table style="width:100%;margin-bottom:10px;margin-top:8px;">
        <tr>
          <th>S.NO</th>
          <th>TYPE</th>
          <th>ROOM NO</th>
          <th>PRICE</th>
          <th>STATUS</th>
          <th>ACTIONS</th>
        </tr>
        <tr>
          <td>1</td>
          <td>Simple Room</td>
          <td>101</td>
          <td>Rs.300</td>
          <td><button class="tdbutton2">active</button></td>
          <td><button onclick="document.getElementById('add').style.display='block'" class="tdbutton2">EDIT</button><button class="tdbutton2">DELETE</button></td>
        </tr>
        <tr>
          <td>2</td>
          <td>Luxury Room</td>
          <td>304</td>
          <td>Rs.500</td>
          <td><button class="tdbutton2">active</button></td>
          <td><button onclick="document.getElementById('add').style.display='block'" class="tdbutton2">EDIT</button><button class="tdbutton2">DELETE</button></td>
        </tr>
      </table>
    </div>
  </div>
</body>
</html>