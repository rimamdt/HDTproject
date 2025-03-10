<?php include 'navbar.php'; ?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Package List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.css" rel="stylesheet">
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

</head>

<body>

    <!-- Header -->
    <!-- hero  -->
    <section class="hero">
        <div id="slider">
            <div class="slide" style="background-image: url('Image/herod1.jpg');"></div>
            <div class="slide" style="background-image: url('Image/herod2.jpg');"></div>
            <div class="slide" style="background-image: url('Image/herod3.jpg');"></div>
            <div class="slide" style="background-image: url('Image/herod4.jpg');"></div>
        </div>

        <!-- Hero Section -->

        <div class="hhero-section">
            <div class="hhero-content">
                <h2 class="titleStyle">Explore the World with Us</h2>
                <p class="headerText">Let's start your adventure today!</p>
            </div>
        </div>
        <script>
            let currentIndex = 0;
            const slides = document.querySelectorAll(".slide");

            function showNextSlide() {
                slides[currentIndex].classList.remove("active");
                currentIndex = (currentIndex + 1) % slides.length;
                slides[currentIndex].classList.add("active");
            }

            // Set the first slide to be visible
            slides[currentIndex].classList.add("active");

            // Change slide every 5 seconds
            setInterval(showNextSlide, 2000);
        </script>
    </section>
    <div class="container">
        <div class="room-bottom">

            <h3>Package List</h3>
            <div class="rom-btm">
                <div class="col-md-3 room-left">
                    <img src="Image/pg1.jpg" class="img-responsive" alt="Package Image">
                </div>
                <div class="col-md-6 room-midle">
                    <h4> Jaldapara Wildlife Sanctuary</h4>
                    <h6>Package Type: Wildlife</h6>
                    <h6>Advance Payment: 1500 per tourist</h6>
                </div>
                <div class="col-md-3 room-right">
                    <h5>Rs. 10000</h5>
                    <a href="package_details.php" class="view">Details</a>
                </div>
            </div>
            <div class="rom-btm">
                <div class="col-md-3 room-left">
                    <img src="Image/des1.jpg" class="img-responsive" alt="Package Image">
                </div>
                <div class="col-md-6 room-midle">
                    <h4> Assam | The City of Beauty</h4>
                    <h6>Package Type: Tea Garden</h6>
                    <h6>Advance Payment: 1000 per tourist</h6>
                </div>
                <div class="col-md-3 room-right">
                    <h5>Rs. 12000</h5>
                    <a href="package_details.php" class="view">Details</a>
                </div>
            </div>
            <div class="rom-btm">
                <div class="col-md-3 room-left">
                    <img src="Image/pg2.jpg" class="img-responsive" alt="Package Image">
                </div>
                <div class="col-md-6 room-midle">
                    <h4> Gorumara National Park</h4>
                    <h6>Package Type: Jungle Safari</h6>
                    <h6>Advance Payment: 1200 per tourist</h6>
                </div>
                <div class="col-md-3 room-right">
                    <h5>Rs. 10000</h5>
                    <a href="package_details.php" class="view">Details</a>
                </div>
            </div>
            <div class="rom-btm">
                <div class="col-md-3 room-left">
                    <img src="Image/pg1.jpg" class="img-responsive" alt="Package Image">
                </div>
                <div class="col-md-6 room-midle">
                    <h4> Jaldapara Wildlife Sanctuary</h4>
                    <h6>Package Type: Wildlife</h6>
                    <h6>Advance Payment: 1500 per tourist</h6>
                </div>
                <div class="col-md-3 room-right">
                    <h5>Rs. 10000</h5>
                    <a href="package_details.php" class="view">Details</a>
                </div>
            </div>
            <div class="rom-btm">
                <div class="col-md-3 room-left">
                    <img src="Image/pg1.jpg" class="img-responsive" alt="Package Image">
                </div>
                <div class="col-md-6 room-midle">
                    <h4> Jaldapara Wildlife Sanctuary</h4>
                    <h6>Package Type: Wildlife</h6>
                    <h6>Advance Payment: 1500 per tourist</h6>
                </div>
                <div class="col-md-3 room-right">
                    <h5>Rs. 10000</h5>
                    <a href="package_details.php" class="view">Details</a>
                </div>
            </div>
            <div class="rom-btm">
                <div class="col-md-3 room-left">
                    <img src="Image/pg4.jpg" class="img-responsive" alt="Package Image">
                </div>
                <div class="col-md-6 room-midle">
                    <h4> Jayanti</h4>
                    <h6>Package Type: Riverside & Nature</h6>
                    <h6>Advance Payment: 1000 per tourist</h6>
                </div>  
                <div class="col-md-3 room-right">
                    <h5>Rs. 9000</h5>
                    <a href="package_details.php" class="view">Details</a>
                </div>
            </div>
            <div class="rom-btm">
                <div class="col-md-3 room-left">
                    <img src="Image/pg3.jpg" class="img-responsive" alt="Package Image">
                </div>
                <div class="col-md-6 room-midle">
                    <h4> Buxa Tiger Reserve</h4>
                    <h6>Package Type: Wildlife & Trekking</h6>
                    <h6>Advance Payment: 1800 per tourist</h6>
                </div>
                <div class="col-md-3 room-right">
                    <h5>Rs. 14000</h5>
                    <a href="package_details.php" class="view">Details</a>
                </div>
            </div>
        </div>
    </div>


    <script src="script.js"></script>

    <?php include 'include/footer.php'; ?>
    </head>
    <style>
        .room-bottom {
            padding: 40px 0;
        }

        .room-bottom h3 {
            color: #4CAF50;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .rom-btm {
            background: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .room-left img {
            width: 100%;
            border-radius: 5px;
        }

        .room-midle {
            padding: 0 20px;
            flex: 1;
        }

        .room-midle h4 {
            color: #4CAF50;
            font-weight: bold;
            font-size: 20px;
        }

        .room-midle h6 {
            font-size: 14px;
            margin: 5px 0;
            color: #333;
        }

        .room-right {
            text-align: right;
        }

        .room-right h5 {
            font-size: 18px;
            color: #666;
            font-weight: bold;
        }

        .view {
            display: inline-block;
            padding: 8px 15px;
            background: #2196F3;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            font-size: 14px;
        }

        .view:hover {
            background: #0b7dda;
        }
    </style>


</html>