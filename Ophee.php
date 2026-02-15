<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ravenshaw University</title>
    <link rel="stylesheet" href="CSS/menu.css">
    <link rel="icon" type="image/x-icon" href="image/logo1.png">
    <link rel="stylesheet" href="CSS/style.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .cs-card {
            cursor: pointer;
            text-align: center;
            border-radius: 8px;
            box-shadow: 1px 1px 2px #555;
            background-position: center;
            background-size: cover;
            transition: transform 0.5s;
            margin-top: 5rem;
        }

        .cs-card:hover {
            transform: translateY(-10px);
        }

        .cs-card a {
            text-decoration: none;
            color: black;
            font-size: x-large;
        }
    </style>
</head>

<body>
    <?php include "Home-page/header.php"; ?>

    <?php include "Home-page/Logobar.php"; ?>

    <?php include "Home-page/navbar.php"; ?>


    <!-- head-design -->
    <div class="head-design">
        <img src="Images/Home/Footer/bg1.png" alt="Your Image" class="Headimg" />
        <div class="text1"><a href="#">OHEPEE</a></div>
    </div>

    <!-- body -->
    <div class="container-sm pt-5">
        <!-- 1st Row -->
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-4 my-4">
                <div class="cs-card" style="height: 30rem;">
                    <img src="Images/Research/logos-for-ravenshaw-website-1-pa5hmvh03jlawobt79ij2pfcu35o52qy53tnz32cw4.jpg"
                        alt="..."><br><br>
                    <a style="font-size: 2rem;" href="COE.php">Centre For
                        Environment & Public Health</a>
                </div>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-4 my-4">
                <div class="cs-card" style="height: 30rem;">
                    <img src="Images/Research/logos-for-ravenshaw-website-2-pa5hn7owke213lu27wsoh4cck3hfx53gisaz7ok8n8.jpg"
                        alt=".."><br><br>
                    <a style="font-size: 2rem;" href="CFO.php">Centre For
                        Odishan Studies</a>
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>

    <?php include "Home-page/Footer.php"; ?>
</body>

</html>