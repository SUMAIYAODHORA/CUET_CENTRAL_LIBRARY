

<?php
include 'dbconn.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from pdf.pdf_file where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Deleted successfully";
    }
    else
    {
        echo "Book is not found";
    }
}
?>

