<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="adminPanel.css">
</head>
<body style="background-color: gray;">
<div class="topnav">
  <h1 style="color: white;">ADMIN PANEL</h1> 
    <a class="active" href="dashboard.php">Dashboard</a>
    <div class="dropdown">
      <button class="dropbtn">Bookings</button>
      <div class="dropdown-content">
        <a href="newBookings.php">New Bookings</a>
        <a href="refundBookings.php">Refund Bookings</a>
        <a href="bookingRecords.php">Booking Records</a>
      </div>
    </div>
    <a href="#facilities">Features and Facilities</a>
    <a href="rooms.php">Rooms</a>
    <a href="#">Settings</a>
    <button style="width: 40px;background-color: inherit;border: none;margin-left:600px;margin-top:8px;"><img src="images\profile_icon.jpg" style="width:20px; height:20px;"></button>
</div>
</body>
</html>