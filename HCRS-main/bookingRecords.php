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
  
  <!--booking records-->
  <div id="booking_records" style="overflow: scroll;height:500px">
    <h2>Booking Records</h2>
    <div style="background-color: darkgrey;">
      <input type="text" placeholder="Search.." style="border-radius:20px;width:200px;height:20px;margin-left:500px;margin-top:8px">
      <table style="width:100%;margin-bottom:10px;margin-top:8px;">
        <tr>
          <th>S.NO</th>
          <th>USER DETAILS</th>
          <th>ROOM DETAILS</th>
          <th>BOOKING DETAILS</th>
          <th>STATUS</th>
          <th>ACTION</th>
        </tr>
        <tr>
          <td>1</td>
          <td><b>ID.NO:</b>21bq1a0504<br/><b>Name:</b>xyz<br/><b>Phone No:</b>1234567890</td>
          <td><b>Room:</b>Simple Room<br/><b>Price:</b>Rs.300</td>
          <td><b>Check-in:</b>01-01-2024<br/><b>Check-out:</b>04-01-2024<br/><b>No.of Persons:</b>3<br/>
          <b>Paid:</b>Rs.900<br/></td>
          <td style="color: green;"><b>Booked</b></td>
          <td><button class="tdbutton1">Delete</button></td>
        </tr>
      </table>
    </div>
  </div>
  
</body>
</html>