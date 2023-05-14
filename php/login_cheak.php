<?php 
$login=false;
if (isset($_POST['submit_login_data'])) {
    include('../Database/connect.php');
    $email=$_POST['loginemail'];
    $password=$_POST['loginpassword'];

// cheak user is exist or not

$searchUser = "SELECT * FROM `users` WHERE `email` = '$email'";
$searchUserResult = Select_Record($searchUser, $conn);

if($searchUserResult->num_rows > 0) {


    // if user is exist then cheak email and password


    $done = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";
    $doneSearch = Select_Record($done,$conn);
    $result = mysqli_fetch_array($doneSearch);

    if($doneSearch->num_rows > 0) {
    
            echo "<script>alert('Successfully Login in !!')</script>";
            
            $login = true;

            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['name'] = $result['name'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['phoneno'] = $result['mobileno'];
            $_SESSION['enrollnment'] = $result['enrollnment'];
            $_SESSION['semester'] = $result['semester'];
            $_SESSION['branch'] = $result['branch'];


            echo "<script>window.open('../Html/maindatapage.php','_self')</script>";
        
    } else {    
        echo "<script>alert('Password is not coorect !!')</script>";
        echo "<script>window.open('../Html/login.php','_self')</script>";
    }
} else {
    echo "<script>alert('User Does not Exist !!')</script>";
    echo "<script>window.open('../Html/signin.php','_self')</script>";
}


}
