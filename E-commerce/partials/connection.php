<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "samay bhavan";

$conn = mysqli_connect($server,$username,$password,$database);
if(!$conn){         
    // echo "successfully conneceted to the database";
// }
// else{
//     
die("error" . mysqli_connect_error());
}

?>