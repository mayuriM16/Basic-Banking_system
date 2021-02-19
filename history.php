<?php
 $conn= new mysqli('localhost','root','','customer'); //mysqlite connection
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM history";
$result = $conn->query($sql);

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
	<Title>customer</Title>
	<style> 
        body {
              margin: 0;
              border:0;
              background-image:url(https://media.istockphoto.com/photos/white-studio-background-picture-id1040250650?k=6&m=1040250650&s=612x612&w=0&h=Ve0znmMwCbVyo66uIfeSrSYRuHau85oBiVIv1OplATs=);
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
             height:50px;
             font-size:30px;
             font-wight:bold;
             background-color:grey;
            font-family: Arial, Helvetica, sans-serif;
            border-radius: 12%;
          }
        table { 
            margin-left: 660px; 
            font-size: large; 
            border: 2px solid black; 
        } 
 
        th,td
         { 
            font-weight: bold; 
            border: 2px green; 
            padding: 10px; 
            background-color: lightblue; 
            color: white;
            text-align: center;
            font-style: 'verdana';  
        } 
        th{
            background-color: blue;
        }
    </style> 
</head>
<body>
	<div class="topnav">
  <a href="index.html"><font color=yellow>HOME</font></a>
  <a href="history.php">HISTORY</a>
  <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcFlb6R-_lZBRZN4sILnDVWtWlYk1sZW9rzg&usqp=CAU' alt='The Spark' width='50' height='50'>
  </div>
    <section> 
    	<h2 style="color: yellow;">The Spark bank</h2>
    	<h1><font size=+3 style="margin-left: 660px;">TRANSACTION HISTORY</font></h1> 
        <!-- TABLE CONSTRUCTION--> 
        <table> 
            <tr> 
                <th>SENDER</th> 
                <th>RECEIVER</th> 
                <th>TRANSFERRED_AMOUNT</th>  
            </tr> 
            <?php   // LOOP TILL END OF DATA  
                while($rows=$result->fetch_assoc()) 
                { 
             ?> 
            <tr> 
                <td><?php echo $rows['sender'];?></td> 
                <td><?php echo $rows['receiver'];?></td> 
                <td><?php echo $rows['amount'];?></td>  
            </tr> 
            <?php 
                } 
             ?> 
        </table> 
        
    </section>
</body>
</html>