<?php
 $dbhost = "localhost";//Standard as per server credentials
 $dbuser = "root";//Standard as per server credentials
 $dbpass = "";//Standard as per database password
 $db = "library";//Standard as per database name
 $conn =mysqli_connect($dbhost,$dbuser,$dbpass,$db);// return true or false as per db connection establishment

if($conn==false){
    echo "Server error";
}
?>