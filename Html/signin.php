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
    <title>Sign in</title>
</head>

<body>
    <form action="../php/signin_cheak.php" method="post">
        <div class="container">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="mb-3">
                <label for="enrollnment" class="form-label">Enrollment No</label>
                <input type="text" class="form-control" id="enrollnment" name="enrollnment">
            </div>

            <div class="mb-3">
                <label for="semester" class="form-label">Semester</label>
                <input type="text" class="form-control" id="semester" name="semester">
            </div>

            <div class="mb-3">
                <label for="branch" class="form-label">Branch</label>
                <input type="text" class="form-control" id="branch" name="branch">
            </div>

            <div class="mb-3">
                <label for="mobileno" class="form-label">Mobile No</label>
                <input type="text" class="form-control" id="mobileno" name="mobileno">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="mb-3">
                <label for="conformpassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="conformpassword" name="conformpassword">
            </div>


            <button type="submit" class="btn btn-primary" name="submit_data">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </div>
    </form>

</body>

</html>
<?php include('../HeaderFooter/Footer.php'); ?>