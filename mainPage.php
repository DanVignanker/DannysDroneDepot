<?php 
    session_start();
    if (empty($_SESSION['username'])) {
        header("location:loginSignup.html");
        exit();
    }

?>

<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

         <!-- Personal CSS -->
        <link href="mainPage.css" rel= "stylesheet">

        <!-- Google Icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Saira&display=swap" rel="stylesheet">

        <!-- Jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Browser Icon-->
        <link rel="icon" type="image/x-icon" href="images/mainpage/Logo.jpg">

        <!-- Browser Title-->
        <title>Home Page</title>

    </head>

    <style>
        body {
            margin-left: 10rem;
            margin-right: 10rem;
            background-color: rgba(240, 255, 240, 0.884);
        }
        .carousel-inner {
            height: 40rem;
            background: #000;
            color: white;
            position: relative;
        }
        .embed-container { 
            position: relative;
            padding-bottom: 0%; 
            height: 50rem; 
            overflow: hidden; 
            max-width: 100%; 
        } 
        .embed-container iframe, .embed-container object, .embed-container embed { 
            position: relative; 
            top: 0; 
            left: 0; 
            width: 100%; 
            height: 100%; 
        }
        .scheduleShoot {
            padding-top: 10rem;
        }
    </style>
    <body>
        <div class="center"> 
            <p> Welcome <?php echo $_SESSION['username']; ?> </p>
            <a href="logout.php" class="content-right"> Log Out </a> 
        </div>

        <h1 class="mt-3" > Featured Videos </h1>
        <div id="featuredVideos" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class='embed-container'>
                        <iframe src='https://www.youtube.com/embed/R1jZsbTLn5k' frameborder='0' allowfullscreen></iframe>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class='embed-container'>
                        <iframe src='https://www.youtube.com/embed/1U2aVQDbJ3o' frameborder='0' allowfullscreen></iframe>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class='embed-container'>
                        <iframe src='https://www.youtube.com/embed/lnCYIUv9Lko' frameborder='0' allowfullscreen></iframe>
                    </div>
                </div>
                <a class="carousel-control-prev" role="button" data-bs-target="#featuredVideos" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" role="button" data-bs-target="#featuredVideos" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>

        <div class="scheduleShoot">
            <h1 mt>Want to Schedule a Shoot?</h1>
            <h1>/h1>
        </div>

       
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

    </body>

</html>