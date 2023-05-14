<?php include('../HeaderFooter/Header.php'); ?>
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



    </div>
</body>

</html>
<?php include('../HeaderFooter/Footer.php'); ?>