<?php
include("sqlConnection.php");

 if(isset($_POST['submit'])){
      $adminId=$_POST['adminId'];
      $adminName=$_POST['adminName'];   
      $password=$_POST['password'];
      $query="insert into admins (employeeId,name,password) 
      values('$adminId','$adminName','$password')";
     
      if(mysqli_query($conn,$query)){
        ?> 
          <Script>
              alert("Admin SignUp Successfull");
              window.location.href = 'adminSignUpFront.php';
          </Script>
        <?php
        
      }
     else{
          ?>
          <Script>
            alert("Admin with given employee id Already Exists");
             window.location.href = 'adminSignUpFront.php';
         </Script>
         <?php
         
         
        
     }
}
?>