<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
	<link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&family=Montserrat:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Noto+Sans+Mende+Kikakui&family=Ubuntu&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="./script.js" />
    <link
      rel="stylesheet"
      href="./bootstrap-5.2.2-dist/css/bootstrap.min.css"
    />
    <style>
        body
        {
            /* background-image: url("./images/set-tools-with-copy-space.jpg"); */
            background-size: cover;
        }
        .img1
        {
          height: 300px;
          width: 300px;
        }
        .pro
        {
          text-align: center;
          background-image: url(./red-black-brush-stroke-banner-background-perfect-canva.jpg);
          background-size: cover;
          color: white;
          border-radius: 10px;
        }
        
    </style>
</head>
<body>
    <!-- - navbar -->
    <nav class="navbar navbar-expand-lg navigation p-3 bg">
      <div class="container-fluid">
        <a class="navbar-brand" id="active" href="#">VEBBOX CONSTRUCTIONS</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarNavDropdown"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a
                class="nav-link active"
                id="active"
                aria-current="page"
                href="./index1.php"
                >HOME</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" id="active" href="#">SERVICES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="active" href="#">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="active" href="#">LATEST PROJECTS</a>
            </li>
 

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="active"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                RECORDS
              </a>
              <ul class="dropdown-menu" style="background-color: #6d111175">
                <li>
                <a class="dropdown-item" id="activee" href="./ownrec.php">CUSTOMER RECORDS</a>
                </li>
                
                <li>
                <a class="dropdown-item" id="activee" href="./suprec.php">SUPPLIERS RECORDS</a>
                </li>


                <li>
                <a class="dropdown-item" id="activee" href="./conrec.php">CONTRACTOR RECORDS</a>
                </li>
              </ul>
     
            </li>
            <li class="nav-item">
              <a class="nav-link" id="active" href="./index1.php">LOGOUT</a>
            </li>

            <!-- <li class="nav-item">
              <a class="nav-link" id="active" href="./admin.php">ADMIN</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
    <!-- //records// -->
</body>
<script src="./bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>
</html>







