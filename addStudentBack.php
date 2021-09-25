<?php
include("sqlAndSessionsConnection.php");

 if(isset($_POST['submit'])){
      $studentRollNumber=$_POST['studentRollNumber'];
      $studentName=$_POST['studentName'];   
      $studentPhoneNumber=$_POST['studentPhoneNumber'];
      $query="insert into students (rollNumber,name,phoneNumber) 
      values('$studentRollNumber',' $studentName',' $studentPhoneNumber')";
     
      if(mysqli_query($conn,$query)){
         ?>
          <Script>
              alert("Student Added in Database");
              window.location.href = 'addStudentFront.php';
          </Script>
        <?php
      }
     else{
          ?>
          <Script>
            alert("Student given roll number Already Exists");
             window.location.href = 'addStudentFront.php';
         </Script>
         <?php
     }
}

?>