<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include('../Links/Links.php'); ?>
  <style>
    .img-fluid-header {
      width: 30px;
    height: 30px;
    border-radius: 50%;
    margin-top: 4px;
    margin-right: 1rem;
    border: 2px solid white;
    }
    .navbar
    {
      position: fixed;
    
			
			width: 100%;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container-fluid">
  <div><img class="logo img-fluid img-fluid-header" src="../ImagesLogo/log.jpg" alt="logo"></div>

      <a class="navbar-brand" href="#">Harsh</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
           <!-- sign in -->
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../Html/signin.php" id="signinbutton">Signin</a>
          </li>

           <!-- Login -->
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../Html/login.php" id="loginbutton">Login</a>
          </li>

          <!-- Logout -->
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../Html/logout.php" id="logoutButton">Logout</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <script>
    // $('#logoutButton').hide();
  </script>
</body>

</html>