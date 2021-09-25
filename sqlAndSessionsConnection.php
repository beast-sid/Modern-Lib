<?php
session_start();
 if(!isset($_SESSION["adminId"]) || ! isset($_SESSION["password"])){
     ?>
       <Script>
            alert("Admin Login Required");
            window.location.href = 'adminLoginFront.php';
       </Script>
     <?php
     exit();
 }
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "library";
 $conn =mysqli_connect($dbhost,$dbuser,$dbpass,$db);

if(!($conn)){
    echo "Server error";
}

?>