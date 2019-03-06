<?php
$servername = "localhost";
$username = "falak";
$password = "naaz@123";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
<?php
$servername = "localhost";
$username = "falak";
$password = "naaz@123";
$dbname = "contactform";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO contactform (name, email, phonenumber,subject,message)
VALUES ('John', 'john@example.com','9087979','gfhg','gjfyjfyf')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<?php 
$servername = "localhost";
$username = "falak";
$password = "naaz@123";
mysql_connect("$servername", "$username", "$password"); 
mysql_select_db($database); 

$sql = "INSERT INTO 'contactform' (name,email,phonenumber,subject,message) VALUES '"+Name+"','"+email+"','"+phonenumber+"','"+subject+"','"+message+"'; "; 

mysql_query($sql) 
?>