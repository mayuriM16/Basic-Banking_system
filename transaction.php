<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Transaction</title> 
<style>
body {
  margin: 0;
  border:0;
  background-image:url(https://cdn.hipwallpaper.com/i/62/34/qHphPl.jpg);
  background-size:100% 100%;
  background-attachment:fixed;
}
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
  color: white;
  text-align: center;
  padding: 14px 16px;
  font-family: verdana;
  text-decoration: none;
  font-size: 16px;
}

.topnav b {
  float: left;
  text-align: center;
  padding: 14px 16px;
  font-family: verdana;
  font-size: 16px;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

button{
 color:white;
 width:200px;
 height:40px;
 font-size:20px;
 font-wight:bold;
 background-color: green;
 font-family: verdana;
}
.tb {
  color: violet;
  background-color: white;
  width: 380px;
  margin-left: 700px;
  margin-top:-40px; 
  border: 6px solid black;
  border-radius: 16px;
}

</style>
</head>

<body>

<div class="topnav">
  <a href="index.html"><font color=yellow>HOME</font></a>
  <a href="history.php">HISTORY</a>
  <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcFlb6R-_lZBRZN4sILnDVWtWlYk1sZW9rzg&usqp=CAU' alt='The Spark' width='50' height='50'> 
</div>
<h2 style="color: yellow;">The Spark bank</h2>
<center>
    <h1><font size=+3 style="color: darkblue; font-style: verdana; margin-left: 650px;">TRANSACTION</h1>
<div class="tb">
  <form action="temp1.php" method="get">
     <br>
    <b><font size=+3>Transfer From : </b>
      <?php
      $send=$_GET['id'];
      echo "$send";
      $_SESSION["SENTER"]=$send;
      ?>
    <br><br>
    <b>Transfer To : </b>
      <select name="receiver" id="dropdown"; required>
      <option value="">select</option>
      <?php
        $conn = mysqli_connect('localhost','root',"","customer");
        $res=mysqli_query($conn,"SELECT name FROM account where name!='$sender'");
        while($row = mysqli_fetch_array($res))
        {
          echo("<option>"." ".$row['name']."</option>");
        }
      ?>
    </select>
    <br><br>
    <b>Amount : </b>
    <input name="amount" value="" type="number" min="1" required>
    <input type="hidden" name="SENDER"  option value=$_GET[ID]>
    <br><br>
    <button class="button" type="submit">Transaction</button>
    <br><br>
  </form>
 
</div>
</center>
</body>
</style>
</html>
