<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<style>

body{
  font-family: "Lato", sans-serif;
  background-color: #b3ccff;
}

img{
  text-align: center;
  width: 400px;
  height: 250px;
}

#pb{
  text-align: center;
}

#main{
  text-align: center;
  border: 1px solid black;
  width: 40%;
  margin-left: 5%;
  margin-top: -16%;

}

#ticket{
  text-align: center;
  border: 1px solid black;
  width: 40%;
  margin-left: 5%;
  margin-bottom: 40%;
}

#ticketForm{
  text-align: center;
  border: 1px solid black;
  width: 40%;
  margin-left: 53%; 

}


.sideNav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.2s;
  padding-top: 60px;
}
.sideNav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}
.sideNav a:hover {
  color: #f1f1f1;
}
.sideNav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.error {
color: #FF0000;
}

@media screen and (max-height: 450px) {
  .sideNav {padding-top: 15px;}
  .sideNav a {font-size: 18px;}
}
</style>
<body>



<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

<div id="pb">
  <img src="pblogo.png">
</div>

<div id="sideNav" class="sideNav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="dashboard.php">Dashboard</a>
    <a href="homepage.php">Home</a>
    <a href="#">Settings</a>
    <a href="login.php">Logout</a>
</div>


<div id="ticketForm">

<?php

//define variables 
$name = $_POST['name'];
$studid  = $_POST['studid'];
$floor  = $_POST['floor'];
$room  = $_POST['room'];
$health  = $_POST['health'];


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST['name'])) {
      $nameErr = "Field should not be empty!";
    } else {
      $name = $_POST['name'];
    }

    if (empty($_POST['studid'])) {
        $studidErr = "Field should not be empty!";
      } else {
        $studid = $_POST['studid'];
      }

    if(!empty($_POST['floor'])) {
        $selected = $_POST['floor'];
      
    }

    if(!empty($_POST['room'])) {
        $selected = $_POST['room'];
      
    }

    if(!empty($_POST['health'])) {
        $health = $_POST['health'];
    }
}

?>

<h3>Please fill in before entering OSP</h3>
<form action="dashboard.php" method="post" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>

<p><span class="error">* required field</span></p>

Name: <input type="text" name="name" value="<?php echo $name?>">
<span class="error">*</span>

<br><br>

Student ID: <input type="text" name="studid" value="<?php echo $studid?>">
<span class="error">*</span>
<br><br>

Floor: 
<select name="floor" id="floor">
    <option value="Select">Select</option>
    <option value="Level 5">Level 5</option>
    <option value="Level 6">Level 6</option>
    <option value="Level 7">Level 7</option>
    <option value="Level 8">Level 8</option>
    <option value="Level 9">Level 9</option>
</select>

<br><br>

Room: 
<select name="room" id="room">
    <option value="Select">Select</option>
    <option value="Room 5.03">Room 5.03</option>
    <option value="Room 5.04">Room 5.04</option>
    <option value="Room 6.03">Room 6.03</option>
    <option value="Room 6.04">Room 6.04</option>
    <option value="Room 7.03">Room 7.03</option>
    <option value="Room 7.04">Room 7.04</option>
    <option value="Room 8.03">Room 8.03</option>
    <option value="Room 8.03">Room 8.04</option>
    <option value="Room 9.03">Room 9.03</option>
    <option value="Room 9.03">Room 9.04</option>
</select>

<br><br>

Have you updated your health status?
<select name="health" id="health">
    <option value="Select">Select</option>
    <option value="Yes">Yes</option>
    <option value="No">No</option>
</select>


<br><br>

<input type="submit" value="Submit" name="submit">

<br>

</form>
</div>

<div id="main">
  <h3>Student Name:</h3>
  <?php echo $name ?>
  <h3>Student ID:</h3>
  <?php echo $studid ?>
  <h3>Account Created:</h3>
  <p>26/2/2021</p>

  <h3> <a href="https://form.jotform.com/220081663672050">Update your health status</a> </h3>
</div>

<br>


<div id="ticket" action ="dashboard.php" method="get">
<h3>Here is your ticket! Please take a screenshot before entering PB.</h3>

<?php

echo "Name:"." ".$name;
echo "<br><br>";
echo "Student ID:"." ".$studid;
echo "<br><br>";
echo "Floor:"." ".$floor;
echo "<br><br>";
echo "Room:"." ".$room;
echo "<br><br>";
echo "Updated health status:"." ".$health;
echo "<br><br>";

?>
</div>





</body>
</html>

<script>
function openNav() {
  document.getElementById("sideNav").style.width = "250px";
  // document.getElementById("main").style.marginLeft = "250px";
  
}
function closeNav() {
  document.getElementById("sideNav").style.width = "0";
  // document.getElementById("main").style.marginLeft = "0";
  
}
</script>
