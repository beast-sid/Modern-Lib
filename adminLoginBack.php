<?php
include("sqlConnection.php");

 if(isset($_POST['submit'])){
      $adminId=$_POST['adminId'];
      $password=$_POST['password'];
      $query="select * from admins";//query for fetching admin table
      $result=mysqli_query($conn,$query);// to store the whole admin table in  result
      $flag=0;
      if($result){
            while($row = mysqli_fetch_array($result, MYSQLI_NUM))// it stores the rows of admin database in $row one by one
            {
                if($row[0]==$adminId && $row[2]==$password){
                    $flag=1;
                    session_start();
                    $_SESSION["adminId"] =$adminId;// Setting session variables here,session variables are global variables
                    $_SESSION["password"]=$password;// Setting session variables here
                    ?>
                       <Script>
                          alert("Logged In Successfully");
                          window.location.href = 'issueBookFront.php';
                       </Script>
                     <?php
                    break;
                }
            }
          if($flag==0){
              ?>
                 <Script>
                    alert("Admin does not exists");
                    window.location.href = 'adminLoginFront.php';
                </Script>
             <?php
          }
      }

}