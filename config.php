<?php
$host = "127.0.0.2";
$db_name = "globalan_sparks";
//$db_name = "awasthiandsons";
$username = "globalan_sparks";
$password = "root";
$con = mysqli_connect($host,$username,$password,$db_name);
if($con->connect_error)
{
    die('connection failed'.$con->connect_error);
}else{

}

?>