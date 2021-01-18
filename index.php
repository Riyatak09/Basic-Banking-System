<!Doctype html>
<html lang="en">
    
    <head>
        <title>Bank Transfer System</title>
        <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
        <style>
        .button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: green; 
  color: white; 
  border: 2px solid #4CAF50;
}
.button1:hover {
  background-color: white;
  color: black;
}
        /* Style the footer */
.footer {
  background-color: lightblue;
  padding: 10px;
  text-align: center;
            
         
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
    background: url('https://as2.ftcdn.net/jpg/01/16/98/97/500_F_116989778_1rZiA78n9Rzka3Ah3tPqmXu2s5XOxuIp.jpg') no-repeat center fixed;     
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
  transition: margin-right .8s;
 padding-top: 0px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 0px;}
  .sidenav a {font-size: 18px;}

}
/* Header/logo Title */
.header {
  padding: 100px;
  text-align: center;
  width: 100%;
  height: 100%;
  background-size: 100%;
/* Heading font size */
.header h1 {
  font-size: 40px;
  align: center;
}

        </style>
    </head>
    
    <body id="bg"  >
    <body>
    <?php

/* Database connection settings */
$host = 'localhost';
$user = 'id15834089_root';
$pass = 'Onj>h2#ehc=I=aKZ';
$db = 'id15834089_internship';
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
          <div class="header">
          <h1 style="font-size:40px;">Easy Money Transfer</h1>
          <button onclick="location.href='transfer.php'" class="button button1">Send Money</button>
          <br><br><br><br><br>
          </div>
          <div class="footer">
  <p>Made By Riya Tak</p>
  <p>Intern at The Sparks Foundation</p>
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




</html>

