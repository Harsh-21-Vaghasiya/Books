<?php 
if (isset($_POST['submit_data'])) {
    include('../Database/connect.php');
    $email=$_POST['email'];
    $name=$_POST['name'];
    $enrollnment=$_POST['enrollnment'];
    $semester=$_POST['semester'];
    $branch=$_POST['branch'];
    $mobileno=$_POST['mobileno'];
    $password=$_POST['password'];
    $conformpassword=$_POST['conformpassword'];

if ($password===$conformpassword) {
    $sql=$conn->prepare("INSERT INTO `users`(`email`, `mobileno`, `name`, `enrollnment`, `semester`, `branch`, `password`) VALUES (?,?,?,?,?,?,?)");
    $sql->bind_param("sssssss", $email, $mobileno, $name,$enrollnment,$semester,$branch,$password);
    
    if ($sql->execute()) {
        echo "<script>alert('Record Successfully Inserted!!')</script>";
        echo "<script>window.open('../Html/Home.php','_self')</script>";
        unset($_POST['submit_data']);
    } else {
        echo "<script>alert('Error In Inserting.')</script>";
        exit();
    }
}

}


?>