<?php
include("sqlAndSessionsConnection.php");

 if(isset($_POST['submit'])){
      $bookId=$_POST['bookId'];
      $bookName=$_POST['bookName'];   
      $stock="IN_STOCK";
      $issuedBy="NULL";
      $query="insert into books (bookId,bookName,stock,issuedBy) 
      values('$bookId','$bookName','$stock','$issuedBy')";
     
      if(mysqli_query($conn,$query)){
         ?>
          <Script>
              alert("Book Added Successfull");
              window.location.href = 'addBookFront.php';
          </Script>
        <?php
      }
     else{
          ?>
          <Script>
            alert("Book with given Id Already Exists");
             window.location.href = 'addBookFront.php';
         </Script>
         <?php
     }
}
?>