
<html>

<body>

<?php

$con =mysqli_real_connect("localhost","falak","naaz@123");

if (!$con)

  {

  die('Could not connect: ' . mysqli_error());

  }

 

mysql_select_db("falak", $con);

 

$sql="INSERT INTO contactform (name,email,phonenumber,subject,message)

VALUES

('$_POST[name]','$_POST[email]','$_POST[phonenumber]','$_POST[subject]','$_POST[message]')";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

echo "1 record added";

 

mysql_close($con)

?>

</body>

</html>