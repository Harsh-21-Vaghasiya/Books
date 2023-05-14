<?php include('../HeaderFooter/Header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include('../Links/Links.php'); ?>
    <link href="../Css/main.css" rel="stylesheet">
    <style>

    </style>
    <title>Login</title>
</head>

<body>
    <form action="../php/login_cheak.php" method="post">
        <div class="container">
            <div class="mb-3">
                <label for="loginemail" class="form-label">Email address</label>
                <input type="email" class="form-control" id="loginemail" name="loginemail">
            </div>
            <div class="mb-3">
                <label for="loginpassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="loginpassword" name="loginpassword">
            </div>



            <button type="submit" class="btn btn-primary" name="submit_login_data">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </div>
    </form>
    

    <script>
// $('#logoutButton').hide();
document.getElementById("logoutButton").style.display="none";

    </script>
</body>

</html>
<?php include('../HeaderFooter/Footer.php'); ?>