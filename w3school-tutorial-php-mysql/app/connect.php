<?php

$conn = new mysqli('db','root','arifoglu','mysql');

/////////////////////////////////////////////////////////
/////////////////////////////////////////MySQLi Procedural
/////////////////////////////////////////////////////////
if(!$conn)
{
    die("connection failed" . mysqli_connect_error());
}
echo "connected succesfully" ;

/////////////////////////////////////////////////////////
////////////////////////////////////MySQLi Object-Oriented
/////////////////////////////////////////////////////////

// if($conn->connect_error)
// {
//     die("connection failed" . $conn->connect_error );
// }
// echo "connected succesfully";

?>