<?php session_start();
$dropvalue = "all"; ?>
<?php include('../HeaderFooter/Header.php'); ?>
<?php
if ($_SESSION['loggedin']) {
    include('../Database/connect.php');
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php include('../Links/Links.php'); ?>
    <link href="../Css/main.css" rel="stylesheet">

    <style>
        /*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
        .hero {
            width: 100%;
            background-size: cover;
            position: relative;
            min-height: 60vh;
            padding: 160px 0 60px 0;
        }

        .hero h2 {
            font-size: 64px;
            font-weight: 700;
            margin-bottom: 20px;
        }




        .hero .btn-book-a-table {
            font-weight: 500;
            font-size: 14px;
            letter-spacing: 1px;
            display: inline-block;
            padding: 12px 36px;
            border-radius: 50px;
            transition: 0.5s;
            color: rgb(199, 16, 16);
            box-shadow: 0 8px 28px rgba(206, 18, 18, 0.2);
            text-decoration: none;
        }

        .hero .btn-book-a-table:hover {
            background: rgba(18, 37, 206, 0.8);
            box-shadow: 0 8px 28px rgba(206, 18, 18, 0.45);
            color: aliceblue;
        }


        @media (max-width: 640px) {
            .hero h2 {
                font-size: 36px;
            }

            .hero .btn-get-started {
                font-size: 14px;
            }
        }

        #showhidebooksbutton {
            display: flex;
            justify-content: center;
            margin: 5px;
        }

        .booksdropdownsection {
            display: flex;
            justify-content: center;
            margin: 5px;
        }

        .booksdropdown {
            display: flex;
            justify-content: center;
            margin: 5px;
        }

        #addyourbooks {
            display: flex;
            justify-content: center;
            margin: 5px;
            color: white;
        }

        #addyourbooks a {
            color: white;
            text-decoration: none;
        }
    </style>

</head>

<body>

    <div class="container homebody">

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="hero d-flex align-items-center section-bg">
            <div class="container">
                <div class="row justify-content-between gy-5">
                    <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                        <h2 data-aos="fade-up">Find your magical Books</h2>
                        <p data-aos="fade-up" data-aos-delay="100">Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
                        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                            <a href="#book-a-table" class="btn-book-a-table">Book a Table</a>
                        </div>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                        <img src="../ImagesLogo/log.jpg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
                    </div>
                </div>
            </div>
        </section><!-- End Hero Section -->

        <!-- Book chosing -->
        <div>

            <!-- <div class="tab-header text-center">
                <p>Book</p>
                <h3>Lunch</h3>
            </div> -->


            <div>
                <form action="maindatapage.php" method="POST" class="booksdropdownsection">

                    <div class="" type="button" aria-expanded="false">
                        <select name="booknamedropdown" class="dropdown btn btn-secondary dropdown-toggle booksdropdown">
                            <option value="all">All</option>
                            <option value="cn">cn</option>
                            <option value="vaghasiya">Something else here</option>

                        </select>
                    </div>
                    <input type="submit" value="dropvalue" name="dropvalue" class="btn btn-primary ">
                </form>
                <?php if (isset($_POST['dropvalue'])) {

                    $dropvalue = $_POST['booknamedropdown'];
                    echo $dropvalue;
                } ?>
            </div>

            <!-- Display only 3 books -->

            <div class="row gy-5" id="hideshow">
                <?php
                if ($dropvalue == "all") {
                    $query = "SELECT*from `books database`";
                    $query_run = mysqli_query($conn, $query);
                } else {
                    $query = "SELECT*from `books database` WHERE `subject`='$dropvalue'";
                    $query_run = mysqli_query($conn, $query);
                }
                $cheak = mysqli_num_rows($query_run) > 0;
                $var = 0;
                if ($cheak) {
                    while ($row = mysqli_fetch_assoc($query_run) ) {
                        $var = $var + 1;
                        $pathgh=$row['book_cover_photo'];
                ?>
                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="<?= $pathgh ?>" class="menu-img img-fluid" alt=""></a>
                            <h4>Magnam Tiste</h4>
                            <p class="ingredients">
                                Lorem, deren, trataro, filede, nerada
                            </p>
                            <p class="price">
                                $5.95
                            </p>
                        </div>

                <?php
                    }
                } else {
                    echo "not found";
                }
                ?>



            </div>

            <!-- dispaly all books -->

            <div class="row gy-5" id="showhide" style="display: none;">
                <?php
                if ($cheak) {
                    while ($row = mysqli_fetch_array($query_run)) {
                ?>
                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="../ImagesLogo/log.jpg" class="menu-img img-fluid" alt=""></a>
                            <h4>Magnam Tiste</h4>
                            <p class="ingredients">
                                Lorem, deren, trataro, filede, nerada
                            </p>
                            <p class="price">
                                $5.95
                            </p>
                        </div>

                <?php
                    }
                } else {
                    echo "not found";
                }
                ?>



            </div>




            <div id="showhidebooksbutton"> <button onclick="hide()" class="btn btn-primary">Show/Hide</button></div>

        </div><!-- End Lunch Menu Content -->
        <div id="addyourbooks"> <button class="btn btn-primary"><a href="../Html/addYourBooks.php">Add Your Books</a></button></div>
    </div>
    <script>
        // To hide the login button

        document.getElementById("loginbutton").style.display = "none";
        document.getElementById("signinbutton").style.display = "none";

        


        {
            //    show all books or not

            var a;

            function hide() {
                if (a == 1) {

                    document.getElementById("showhide").style.display = "";
                    document.getElementById("hideshow").style.display = "none";
                    return a = 0;
                } else {
                    document.getElementById("showhide").style.display = "none";
                    document.getElementById("hideshow").style.display = "";
                    return a = 1;

                }
            }
        }
    </script>


</body>

</html>
<?php include('../HeaderFooter/Footer.php'); ?>