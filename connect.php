<?php
$username="localhost";
$servername="root";
$password="BHARAT@2003";
$conn=mysqli_connect($username,$servername,$password);
$sql="use bharat";
$result=mysqli_query($conn,$sql);
if($result){
    echo "Database connected";
}
else{
    echo "not connected";
    echo (mysql_err);
}

?>