
<?php
include("sqlAndSessionsConnection.php");
 if(isset($_POST['submit'])){
      $bookId=$_POST['bookId'];
      $studentId=$_POST['studentId'];  
      $query1="select * from students where rollNumber='$studentId'";
      $student=mysqli_query($conn,$query1);
      $flag=0;
     
     while($row = mysqli_fetch_array($student, MYSQLI_NUM)){
         if($row[0]==$studentId){
             $flag=1;
             break;
         }
     }
     
     if($flag==0){
         ?> 
           <Script>
               alert("Enter the valid Student Id");
               window.location.href = "issueBook.php?id=<?php echo $bookId?>"
           </Script>
         <?php
          exit();
     }
     else{
         $stock="IN_STOCK";
         $issuedBy="NULL";
         $issue=mysqli_query($conn,"update books set stock='$stock',issuedBy=' $issuedBy' where bookId='$bookId'");
         if($issue){
             ?> 
               <Script>
                   alert("Book Returned Successfully");
                   window.location.href = "returnBookFront.php"
               </Script>
             <?php
         }
     }
}
?>