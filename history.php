<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['myInput'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `history` WHERE CONCAT(`transaction no`, `userid`, `ruserid`, `amount`, `updated`, `rupdate`, `timestamp`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `history`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "intern1");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!Doctype html>
<html lang="en">
    
    <head>
        <title>User</title>
        <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
        <style>
            table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid red;
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

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px black;
  float: left;
  width: 80%;
  background: white;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: red;
  color: black;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: yellow;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
        </style>
    </head>
    
    <body id="bg"  >
    <body>
        
          
        
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
            <a href="Users.php"><b>About</b></a>
            <a href=""><b>Services</b></a>
            <a href="#"><b>Clients</b></a>
            
          </div><br>
          <form class="example" action="users.php" method="post">
            <input type="text"  name="myInput" placeholder=" Search for user....">
            <button name="search" value="Filter" type="submit"> <i class="fa fa-search"><b>  Search </b></i></button>
            
            <br><br><br><br>
          <div id="main">
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;<b>More</b></span>
          </div>
          <br>

            
            <table class=styled-table>
            <thead>
                <tr>
                    <th>Transaction Number</th>
                    <th>Sender Name</th>
                    <th>Receiver Name</th>
                    <th>Transaction Amount</th>
                    <th>Sender Balance</th>
                    <th>Receiver Balance</th>
                    <th>Timestamp</th>
                </tr>
</thead>
      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr class=active-row>
                    <td><?php echo $row['transaction no'];?></td>
                    <td><?php echo $row['userid'];?></td>
                    <td><?php echo $row['ruserid'];?></td>
                    <td><?php echo $row['amount'];?></td>
                    <td><?php echo $row['updated'];?></td>
                    <td><?php echo $row['rupdate'];?></td>
                    <td><?php echo $row['timestamp'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
		<hr />
       
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

