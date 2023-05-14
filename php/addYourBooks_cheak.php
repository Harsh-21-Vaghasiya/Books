<?php
if (isset($_POST['submit_book_data'])) {


    include('../Database/connect.php');
    $bookowneremail = $_POST['bookoweneremail'];
    $bookname = $_POST['bookname'];
    $bookprice = $_POST['bookprice'];
    $bookbranch = $_POST['bookbranch'];
    $subject = $_POST['subject'];
    $semester = $_POST['semester'];
    $bookauthorname = $_POST['bookauthorname'];
    $mobileno = $_POST['mobileno'];
    $uploadscoverphoto = "../Database/uploadedcoverphoto/";
    $uploadsbookpdf = "../Database/uplodedbookpdf/";



       


    // Book cover Photo
if ($_FILES['bookCoverPhoto']) {
    
   $cover_photo_name =  $_FILES['bookCoverPhoto']['name'];
   $cover_photo_size =  $_FILES['bookCoverPhoto']['size'];
   $cover_photo_temp =  $_FILES['bookCoverPhoto']['tmp_name'];
   $cover_photo_type =  $_FILES['bookCoverPhoto']['type'];
   $book_cover_photo_name_database=$uploadscoverphoto.$cover_photo_name;

   if (!move_uploaded_file($cover_photo_temp,$uploadscoverphoto.$cover_photo_name)) {
    echo "<script>alert('Error in photo uploding.')</script>";
   }
}


   // Book Pdf
if ($_FILES['bookpdf']) {
    
   $cover_Book_Pdf_Name =  $_FILES['bookpdf']['name'];
   $cover_Book_Pdf_size =  $_FILES['bookpdf']['size'];
   $cover_Book_Pdf_temp =  $_FILES['bookpdf']['tmp_name'];
   $cover_Book_Pdf_type =  $_FILES['bookpdf']['type'];
   $book_cover_pdf_name_database=$uploadsbookpdf.$cover_Book_Pdf_Name;

   if (!move_uploaded_file($cover_Book_Pdf_temp,$uploadsbookpdf.$cover_Book_Pdf_Name)) {
    echo "<script>alert('Error in Pdf uploading.')</script>";
   }
}

$sql_add_book_in_database=$conn->prepare("INSERT INTO `books database`(`bookname`, `bookprice`, `semester`, `branch`, `subject`, `bookauthorname`,`book_cover_photo`, `book_Pdf`, `email`, `mobileno`) VALUES (?,?,?,?,?,?,?,?,?,?)");
$sql_add_book_in_database->bind_param("siissssssi", $bookname, $bookprice, $semester,$bookbranch,$subject,$bookauthorname,$book_cover_photo_name_database,$book_cover_pdf_name_database,$bookowneremail,$mobileno);

if ($sql_add_book_in_database->execute()) {
    echo "<script>alert('Record Successfully Inserted!!')</script>";
    // echo "<script>window.open('../Html/Home.php','_self')</script>";
    unset($_POST['submit_book_data']);
} else {
    echo "<script>alert('Error In Inserting.')</script>";
    exit();
}
    
}

?>