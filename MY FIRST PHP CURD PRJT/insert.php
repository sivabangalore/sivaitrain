<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert Data</title>
</head>
<body>
<form action="insert.php" method="post">
<label>Name</label><input type="text" name="name" id="name"><br/><br/>
<label>phone</label><input type="text" name="phone" id="phone"><br/><br/>
<input type="submit" value="Submit">
</body>
</html><?php
$server = "localhost";
$user = "id8941657_name";
$pass = "Siva@1234";
$dbname = "id8941657_name";
 
//Creating connection for mysqli
 
$conn = new mysqli($server, $user, $pass, $dbname);
 
//Checking connection
 
if($conn->connect_error){
 die("Connection failed:" . $conn->connect_error);
}
 
$name = mysqli_real_escape_string($conn, $_POST['name']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
 
$sql = "INSERT INTO mytable (name, phone) VALUES ('$name', '$phone')";
 
if($conn->query($sql) === TRUE){
 echo "Record Added Sucessfully";
}
else
{
 echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();
?>