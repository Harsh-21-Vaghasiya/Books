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
        .addyourbooksformstyle {
            padding: 30px;
        }
    </style>
    <title>Add Your Books</title>
</head>

<body>
    <div class=" border border-primary border-3 rounded  m-3">
        <form action="../php/addYourBooks_cheak.php" method="post" class="addyourbooksformstyle mx-auto" enctype="multipart/form-data">
            <div class="container">
                <div class="mb-3">
                    <label for="bookname" class="form-label">Book Name</label>
                    <input type="text" class="form-control" id="bookname" name="bookname">
                </div>

                <div class="mb-3">
                    <label for="bookprice" class="form-label">Book Price</label>
                    <input type="text" class="form-control" id="bookprice" name="bookprice">
                </div>

                <div class="mb-3">
                    <label class="form-label">Book Cover Photo</label>
                    <input type="file" class="form-control" id="bookcoverphoto" name="bookCoverPhoto">
                </div>

                <div class="mb-3">
                    <label for="bookpdf" class="form-label">Book Pdf</label>
                    <input type="file" class="form-control" id="bookpdf" name="bookpdf">
                </div>

                <div class="mb-3">
                    <label for="bookbranch" class="form-label">Branch</label>
                    <input type="text" class="form-control" id="bookbranch" name="bookbranch">
                </div>

                <div class="mb-3">
                    <label for="semester" class="form-label">Semester</label>
                    <div class=" form-control" type="button" aria-expanded="false">
                        <select name="semester" class="dropdown btn btn-secondary dropdown-toggle booksdropdown">

                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>


                        </select>
                    </div>

                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject">
                </div>

                <div class="mb-3">
                    <label for="bookauthorname" class="form-label">Book Author Name</label>
                    <input type="text" class="form-control" id="bookauthorname" name="bookauthorname">
                </div>


                <div class="mb-3">
                    <label for="bookoweneremail" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="bookoweneremail" aria-describedby="emailHelp" name="bookoweneremail">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <div class="mb-3">
                    <label for="mobileno" class="form-label">Mobile No</label>
                    <input type="text" class="form-control" id="mobileno" name="mobileno">
                </div>



                <button type="submit" class="btn btn-primary" name="submit_book_data">Submit</button>
                <button type="reset" class="btn btn-primary">Reset</button>
            </div>
        </form>
    </div>

</body>

</html>
<?php include('../HeaderFooter/Footer.php'); ?>