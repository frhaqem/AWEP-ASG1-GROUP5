<!DOCTYPE html>
<html>
 
<style>

  /*tags css*/
body {
  font-family: "Lato", sans-serif;
  background-color: #b3ccff;
}

img{
  text-align: center;
  width: 400px;
  height: 250px;
}

/*ID css*/

#main{
  font-size: 28px;
  font-weight: bold;
  display: inline-block;
  
}

#entosp{
  text-align: center;
  margin-left: 30%;
}

#line{
  border: 1px solid black;
  
}

#cap{
  border: 1px solid black;
  display: inline-block;
  height: 400px;
  width: 40%;
}
#pb{
  text-align: center;
}

#time{
  
  display: inline-block;
  float: right;
}

#t5,th,td{
  border: 1px solid black ;
  border-collapse: collapse;
  text-align: center;
}

#t5{
  width: 100%;
  height:76%;
}

#last5{
  border: 1px solid black;
  height: 300px;
  width: 40%;
  float: right;
  display :inline-block ;
  justify-content: flex-end;
}

#id{
  width: 50px;
  height: 50px;
}

#captable{
  width: 100%;

}

/*navigation css*/
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

@media screen and (max-height: 450px) {
  .sideNav {padding-top: 15px;}
  .sideNav a {font-size: 18px;}
}
</style>
  
<body>

  
  <!--   side navigation  -->
 <span style="font-size:30px;cursor:pointer" onclick="openNav()"> &#9776;</span>
 <!-- <h1 style="font-size: 48px; font-weight: bolder; text-align: center;"> Politeknik Brunei </h1> -->
  

 
<div id="sideNav" class="sideNav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="dashbord.php">Dashboard</a>

        <a href="#">Settings</a>
        <a href="index.php">Logout</a>
    </div>

  <!-- logo -->
<div id="pb">
  <img src="pblogo.png">
</div>


<!--   main body -->

<div>
   <div id="main">
    <?php 
        $uname = $_POST["user"];
        $pass = $_POST["pass"];

        echo "Welcome" . " $uname"; 



     ?>
    </div>
    <br>

<!-- time -->
    <div id="time">
        <p style="font-weight: bold;">Date & time logged in:</p>
        <?php
        date_default_timezone_set('Asia/Brunei');
            $day = date("d");
            $month = date("M");
            $year = date("Y");
            $hour = date("h");
            $minute = date("i");
            $sec = date("s");

            echo "<h1> $day $month $year, $hour:$minute:$sec</h1>";
        ?>
    </div>
</div>
    <br><br><br><br><br><br>

    <!-- line -->
    <div id="line"></div>
    <br>

    <!-- CAPACITY -->
    <div id="cap">
      <h2 style="text-align: center;">Current capacity: <p id="count"></p></h2>

      <table id="captable">
        <tr>
          <th>No.</th>
          <th>Name</th>
          <th>Date & Time</th>
        </tr>

        <tr>
          <td>1</td>
          <td>Zam</td>
          <td>25 Feb 2022, 03:21:10</td>
        </tr>
      </table>

      <br>
      <br>
      <button id="entosp">Enter Politeknik Brunei</button>
    </div>

    <!-- last 5 login -->

    <div id="last5"> 
      <h2 style="text-align: center;">Last 5 logged-in:</h2>

      <table id="t5">
        <tr>
          <th>Name</th>
          <th>Date & Time</th> 
        </tr>

        <tr>
          <td>Zam</td>
          <td>25 Feb 2022, 03:21:10</td>
        </tr>

        <tr>
          <td>Far</td>
          <td>25 Feb 2022, 03:17:09</td>
        </tr>

        <tr>
          <td>Han</td>
          <td>25 Feb 2022, 02:59:18</td>
        </tr>

        <tr>
          <td>Adam</td>
          <td>25 Feb 2022, 02:47:20</td>
        </tr>

        <tr>
          <td>Danish</td>
          <td>25 Feb 2022, 02:32:54</td>
        </tr>
      </table>
    </div>



</body>


   
  
</html>



<script>
  var count = 75;
  // count = parseInt(localStorage.getItem("count"));
  

// navigation scripts

function openNav() {
  document.getElementById("sideNav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.getElementById("pb").style.marginLeft = "250px";
  document.getElementById("cap").style.marginLeft = "250px";

}

function closeNav() {
  document.getElementById("sideNav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
  document.getElementById("pb").style.marginLeft = "0";
  document.getElementById("cap").style.marginLeft = "0";
}

function enterosp() {

  if (count =>75) {
    alert("Full capacity reached")
  }
  else{
    count = count+1;
      }
  
  console.log(count);
  document.getElementById("count").innerHTML = count;
}

document.getElementById("entosp").addEventListener("click", enterosp);


</script>
