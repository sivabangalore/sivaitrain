 <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
<title>get Data</title>
</head>
<body>
<form action="get.php" method="GET">
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
    <body>

<h2>ALL DATA</h2>

<table>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>address</th>
  </tr>
  <tr> 


</head>
<?php
$server = "localhost";
$user = "id8941657_dbuser";
$pass = "siva@";
$dbname = "id8941657_databasename";
 
//Creating connection for mysqli
 
$conn = new mysqli($server, $user, $pass, $dbname);
 
//Checking connection
 
if($conn->connect_error){
 die("Connection failed:" . $conn->connect_error);
}
 
$id = mysqli_real_escape_string($conn, $_GET['id']);
$name = mysqli_real_escape_string($conn, $_GET['name']);
$address = mysqli_real_escape_string($conn, $_GET['address']);
 
$sql = "SELECT * FROM siva";
 $result = mysqli_query($conn, $sql);
    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
    ?>


<?php
   while($row = mysqli_fetch_array($result)) { 
    echo "<tr><td>" .$row["id"] . "</td> <td>"  .$row["name"] .  "</td> <td>" .$row["address"] .  "</td></tr>";

    } 


 

?>

  
</table>

</body>
</html>

</body>
</html>