<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<style>
body {
  font-family: "Lato", sans-serif;
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
  transition: 0.5s;
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

@media screen and (max-height: 450px) {
  .sideNav {padding-top: 15px;}
  .sideNav a {font-size: 18px;}
}
</style>
<body>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Politeknik Brunei </span>

<div id="sideNav" class="sideNav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="dashboard.php">Dashboard</a>
    <a href="#">Home</a>
    <a href="#">Settings</a>
    <a href="index.php">Logout</a>
</div>

<div>
  <h3>Student Name:</h3>
  <p>Muhammad Adam Danish bin Shukri</p>
  <h3>Student ID:</h3>
  <P>20FTT1452</P>
  <h3>Account Created:</h3>
  <p>26/2/2021</p>
</div>
</body>
</html>

<script>
function openNav() {
  document.getElementById("sideNav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("sideNav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}
</script>