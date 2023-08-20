<?php
$servername = "sql213.epizy.com:3306";
$username = "epiz_33467032";
$password = "2E0qWjqX2vNjod";
$db_name= "epiz_33467032_Ringly";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$device=$_SERVER["HTTP_USER_AGENT"];
$ip=$_SERVER['REMOTE_ADDR'];
date_default_timezone_set("Africa/Cairo");
$date= date("Y-m-d h:i:sa");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $op=$_POST['num']; //'num': '0', 'us': user, 'bs': pass
    $user= $_POST['us'];
    $pass= $_POST['bs'];
    $sql = "INSERT INTO users ( user_name, user_pass, time_created, more_info) 
            VALUES (".$user.", ".$pass.", ".$date.", ".$device.")";
echo "done";

    // switch($_POST["ord"])
}

?>