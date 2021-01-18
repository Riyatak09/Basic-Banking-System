<!Doctype html>
<html lang="en">
  
  <head>
      <title>Bank Transfer System</title>
      <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
      <style>
        /* Full-width input fields */
input[type=text], input[type=name] {
width: 100%;
padding: 15px;
margin: 5px 0 22px 0;
display: inline-block;
border: none;
background: #f1f1f1;
}

input[type=text]:focus, input[type=name]:focus {
background-color: #ddd;
outline: none;
}

hr {
border: 1px solid #f1f1f1;
margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
background-color: #c05e31;
color: white;
padding: 14px 20px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 100%;
opacity: 0.9;
}

button:hover {
opacity:1;
}



/* Extra styles for the cancel button */
.cancelbtn {
padding: 14px 20px;
background-color: #490a0a;
}



/* Add padding to container elements */
.container {
padding: 16px;
}

/* Clear floats */
.clearfix::after {
content: "";
clear: both;
display: table;
}
          .iconify { width: 35px; height: 15px; }
          .iconify { color: white; }
        
ul {
list-style-type: none;
margin: 0;
padding: 0;
overflow: hidden;
background-color: rgb(224, 48, 72);
}

li {
float: right;
}

li a {
display: block;
color: rgb(53, 3, 3);
text-align: center;
padding: 14px 20px;
text-decoration: none;
}

li a:hover {
background-color: rgb(218, 205, 211);
}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}
body {
font-family: "Lato", sans-serif;
transition: background-color .5s;
}

.sidenav {
height: 100%;
width: 0;
position: fixed;
z-index: 1;
top: 100;
left: 0;
background-color: rgb(214, 226, 228);
overflow-x: hidden;
transition: 0.5s;
padding-top: 100px;
}

.sidenav a {
padding: 8px 8px 8px 32px;
text-decoration: none;
font-size: 25px;
color: #818181;
display: block;
transition: 0.3s;
}

.sidenav a:hover {
color: #f1f1f1;
}

html {    
  background:url(https://as2.ftcdn.net/jpg/01/16/98/97/500_F_116989778_1rZiA78n9Rzka3Ah3tPqmXu2s5XOxuIp.jpg);    
  background-size: cover;
  padding-top: -40px;
  
}

.sidenav .closebtn {
position: absolute;
top: 0;
right: 25px;
font-size: 36px;
margin-left: 50px;
}

#main {
transition: margin-left .5s;
padding-top: 0px;
}

@media screen and (max-height: 450px) {
.sidenav {padding-top: 0px;}
.sidenav a {font-size: 18px;}

}
input[type=number], select, textarea {
width: 100%;
padding: 12px;
border: 1px solid #ccc;
border-radius: 4px;
resize: vertical;
}
input[type=submit] {
background-color: red;
color: white;
padding: 12px 20px;
border: none;
border-radius: 4px;
cursor: pointer;
float: center;
}

input[type=submit]:hover {
background-color: pink;
}

table {
font-family: arial, sans-serif;
border-collapse: collapse;
width: 100%;
}

td, th {
border: 1px solid #cee029;
text-align: center;
padding: 8px;
}

tr:nth-child(even) {
background-color: #dddddd;
}
          .iconify { width: 35px; height: 15px; }
          .iconify { color: white; }
        
ul {
list-style-type: none;
margin: 0;
padding: 0;
overflow: hidden;
background-color:pink;
}

li {
float: right;
}

li a {
display: block;
color: rgb(53, 3, 3);
text-align: center;
padding: 14px 20px;
text-decoration: none;
}

li a:hover {
background-color: green;
}

      </style>
  </head>
  
  <body id="bg"  >
  <body>
  <?php

  
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'intern1';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
$conn = new mysqli($host, $user, $pass, $db);
/* Your query */
$result = $mysqli->query("SELECT user FROM customer ") or die($mysqli->error);
$result1 = $mysqli->query("SELECT balance FROM customer ") or die($mysqli->error);
$result2 = $mysqli->query("SELECT user FROM customer ") or die($mysqli->error);

?>
      
      <ul>
      <li><a href="index.php"><b><span class="iconify" data-icon="mdi-home" data-inline="false"></span>Home</b></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li><a href="Users.php"><b><span class="iconify" data-icon="mdi-people" data-inline="false"></span>Users</span></b></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;
            <li><a href="transfer.php"><b><span class="iconify" data-icon="mdi-rupee" data-inline="false"></span>Transfer</span></b></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;
            <li><a href="history.php"><b><span class="iconify" data-icon="mdi-history" data-inline="false"></span>Transaction History</b></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;
          
          
        </ul>
        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href="#"><b>About</b></a>
          <a href="#"><b>Services</b></a>
          <a href="#"><b>Clients</b></a>
          
        </div>
        <div id="main">
          <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;<b>More</b></span>
        </div>
        <form action="transfer.php" style="border:10px solid rgb(221, 103, 103)">
          <div class="container">
        <label for="userid"><b>Sender User Id</b></label><br><br>
        <select  id="userid" name="userid" required>
  <option  name="userid" value="" selected disabled hidden>Select Sender user id</option> <br>
  
  <?php
  while ($row = mysqli_fetch_array($result)) {
      echo "<option id=userid name=userid  value='" . $row['user'] . "'>" . $row['user'] . "</option>";
  }


  
  ?>        
</select> <br> <br>
<label for="ruserid"><b>Benificery User Id</b></label><br><br>
        <select  id="ruserid" name="ruserid" required>
  <option  name="ruserid" value="" selected disabled hidden>Select Benificery user id</option><br>
  <?php
  while ($row = mysqli_fetch_array($result2)) {
      echo "<option   value='" . $row['user'] . "'>" . $row['user'] . "</option>";
  }


  
  ?>        
</select> <br><br>

        
        <label for="name"><b>Amount</b></label><br><br>
        
        <input type="text" placeholder="Amount" name="amount" required>
        <div class="clearfix">
        <input  name="submit" id="submit" onclick="myFunction()" name="" type="submit" value="Transfer">
        </div>  
        
        <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
          document.getElementById("main").style.marginLeft = "250px";
          document.body.style.backgroundColor = "black";
        }
        
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
          document.getElementById("main").style.marginLeft= "0";
          document.body.style.backgroundColor = "white";
        }
      </script>
        
        
  </body>

  <?php


if(isset($_GET['submit']))  
{   
  $number1 = $_GET['amount']; 
  
  $userid = $_GET['userid'];  
  $ruserid = $_GET['ruserid']; 

  
$sql5="SELECT balance FROM customer WHERE user='$userid '";
$result5=mysqli_query($conn, $sql5); 
$row=mysqli_fetch_assoc($result5) ;
$money= $row['balance'];
$sql8="SELECT balance FROM customer WHERE user='$ruserid '";
$result5=mysqli_query($conn, $sql8); 
$row5=mysqli_fetch_assoc($result5) ;
$money1= $row5['balance'];
$sql6="SELECT user FROM customer WHERE userid='$userid '";
$result6=mysqli_query($conn, $sql6); 
$row1=mysqli_fetch_assoc($result6) ;
$name= $row1['user'];

$sql9="SELECT user FROM customer WHERE userid='$ruserid '";
$result9=mysqli_query($conn, $sql9); 
$row3=mysqli_fetch_assoc($result9) ;
$name1= $row3['user'];
$sum =  $money-$number1;
$sum1 =  $number1+$money1;  
  


$conn=mysqli_connect("localhost","root","","intern1");
$query = "UPDATE `customer` SET `balance`='".$sum."' WHERE `user` = '".$userid."'";
$result = mysqli_query($conn, $query);
$query9 = "UPDATE `customer` SET `balance`='".$sum1."' WHERE `user` = '".$ruserid."'";
$result10 = mysqli_query($conn, $query9);


$sql7 = "INSERT INTO history( `userid`, `ruserid`, `amount`, `updated`, `rupdate`) VALUES ('$userid','$ruserid','$number1','$sum','$sum1')";
$query = mysqli_query($conn, $sql7);



if($result)
{   echo ' <div class="container">';
echo '<h2>Last Transaction Details</h2>';

echo '<table class=styled-table>';
echo '<thead>';
echo ' <tr>';
echo '<th>Sender User Id</th>';
echo '<th>Receiver User Id</th>';
echo ' <th>Amount Deposited</th>';
echo '  <th>Sender Balance</th>';
echo '  <th>Receiver Balance</th>';

echo ' </tr>';
echo '</thead>';

echo ' <tr class=active-row>';
echo " <td> $userid ";
echo " <td> $ruserid ";

echo " <td> $number1";
echo " <td> $sum";
echo " <td> $sum1 ";

echo ' </tr>';
          
echo ' </table>';
echo ' </form>';
echo '	<hr />';
echo '</div>';
}else{
echo ' <div class="container">';
echo 'Data has not been Updated';
echo '</div>';
}
mysqli_close($conn);
}

?>


</html>