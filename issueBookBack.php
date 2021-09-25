
<?php
include("sqlAndSessionsConnection.php");
 if(isset($_POST['submit'])){
      $bookId=$_POST['bookId'];
      $studentId=$_POST['studentId'];  
      $query1="select * from students where rollNumber='$studentId'";//it gives that student table which has above roll no.
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
         $stock="OUT_OF_STOCK";
         $issue=mysqli_query($conn,"update books set stock='$stock',issuedBy='$studentId' where bookId='$bookId'");
         // this query will update book table in which stock is set to"out of stock",issued by set to student id,  book id is the the above given book id.
         if($issue){
             ?> 
               <Script>
                   alert("Book Issued Successfully");
                   window.location.href = "issueBookFront.php"
               </Script>
             <?php
         }
     }
}
?>