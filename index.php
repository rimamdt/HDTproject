<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Himalayan Dooars Tour</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .headerButton {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: '5px';
        }

        .btn1 {
            text-decoration: none;
            padding: 8px 20px;
            border-radius: 5px;
            outline: none;
            border: none;
            cursor: pointer;
            color: yellow;
            margin: 5px;
            font-size: 20px;
        }

        .btn1:hover {
            color: black;
            background-color: yellow;
        }

        .btn2 {
            text-decoration: none;
            padding: 8px 20px;
            border-radius: 5px;
            outline: none;
            border: none;
            cursor: pointer;
            background-color: white;
            margin: 5px;
            font-size: 20px;
            color: black;
        }

        .btn2:hover {
            background-color: gainsboro;
        }

        .topTourPackageContainer {
            width: 100%;
            margin: auto;
            text-align: center;
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        .topTourPackageContainer {
            padding: 20px;
        }

        .topTourHead {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .package-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .package {
            background: white;
            width: 300px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            padding: 15px;
        }

        .package:hover {
            transform: scale(1.05);
        }

        .package img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .package h3 {
            margin: 10px 0;
            color: #0275d8;
        }

        .details {
            font-size: 14px;
            color: #555;
            margin-bottom: 10px;
        }

        .price {
            font-size: 18px;
            color: #e74c3c;
            font-weight: bold;
        }

        .view-more {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 15px;
            background: #0275d8;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .view-more:hover {
            background: #025aa5;
        }

        .topTourHead {
            margin-top: 10px;
            margin-bottom: 25px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            /* font-style: italic; */
            color: darkblue;
            font-size: 24px;
            font-weight: bold;
        }

        .testContainer {
            background-color: lightgray;
            margin: 10px;
        }

        .title {
            text-align: center;
            margin-top: 20px;
        }

        .testimonials {
            display: flex;
            justify-content: center;
            margin: 0 2rem;
            gap: 2rem;
            margin-bottom: 20px;
        }

        .testimonial {
            background-color: #E0FFFF;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            transition: 0.3s ease-in-out;
        }

        .testimonial:hover {
            transform: translateX(0.4rem) translateY(-1rem);
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        .info {
            display: flex;
            justify-content: right;
            gap: 1rem;
            align-items: center;
            margin-top: 1rem;
        }

        .info img {
            border-radius: 3rem;
            height: 3rem;
        }

        .details span {
            font-size: 0.9rem;
        }

        @media screen and (min-width: 280px) and (max-width: 768px) {
            .testimonials {
                flex-direction: column;
                margin: 0;
            }

            .testimonial {
                justify-content: center;
            }

            .info {
                flex-direction: column;
                justify-content: center;
            }
        }

        .userImage {
            width: 50px;
            hight: 50px;
        }

        .attractions-section {
            text-align: center;
            padding: 40px;
            background-color: #fff;
        }

        .section-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .section-title .highlight {
            color: #28a745;
        }

        .attractions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 0 20px;
        }

        .attraction-card {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .attraction-card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
        }

        .attraction-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            display: block;
        }

        .card-title {
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            color: #fff;
            text-align: center;
            padding: 10px;
            font-size: 18px;
            font-weight: bold;
            text-transform: capitalize;
        }

        .whyUsContainer {
            background-color: lightyellow;
            text-align: center;
            max-width: 100%;
            margin: 10px 10px;
            padding: 20px;
        }

        .cards {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .card {
            background: #98FB98;
            padding: 20px;
            width: 300px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: left;
        }

        .card h3 {
            font-size: 20px;
            color: #800080;
            margin-bottom: 10px;
        }

        .card p {
            color: #000;
            font-size: 14px;
        }
    </style>

</head>

<body>

    <!-- Background Slider -->
    <section class="hero">
        <div id="slider">
            <div class="slide" style="background-image: url('Image/ind.jpg');"></div>
            <div class="slide" style="background-image: url('Image/ele.jpg');"></div>
            <div class="slide" style="background-image: url('Image/nar.jpg');"></div>
            <div class="slide" style="background-image: url('Image/RIMA.jpg');"></div>
        </div>

        <!-- Hero Section -->

        <div class="hhero-section">
            <div class="hhero-content">
                <h2 class="titleStyle">Discover the World with Us</h2>
                <p class="headerText">Let's start your adventure today!</p>

                <div class="headerButton">
                    <a href="packages.php" class='btn1'>GET STARTED</a>
                    <a href="about.php" class='btn2'>Explore About Himalayan Dooars Tour</a>
                </div>
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
    <!-- why us  -->
    <div class="whyUsContainer">
        <h2 class="topTourHead">Why Choose Us?</h2>
        <div class="cards">
            <div class="card">
                <h3>✅ Best Price Guarantee</h3>
                <p>We offer the best prices in the market without compromising on quality.</p>
            </div>
            <div class="card">
                <h3>✅ 24/7 Customer Support</h3>
                <p>Our dedicated team is available round-the-clock to assist you.</p>
            </div>
            <div class="card">
                <h3>✅ Handpicked Destinations</h3>
                <p>Experience the most stunning locations carefully selected by experts.</p>
            </div>
            <div class="card">
                <h3>✅ Customizable Packages</h3>
                <p>Plan your trip just the way you want with tailor-made travel packages.</p>
            </div>
        </div>
    </div>
   <!-- Top Tours Section -->
<div class="topTourPackageContainer">
    <h2 class="topTourHead">Top Tour Packages</h2>
    <div class="package-list">
        <?php
        include 'connection.php';
        $sql = "SELECT * FROM packages limit 8";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="package">
                        <img src="Image/' . $row["image"] . '" alt="' . $row["p_name"] . '">
                        <h3>' . $row["p_name"] . '</h3>
                        <p class="details">' . $row["p_duration"] . '</p>
                        <p class="details">' . $row["p_description"] . '</p>
                        <p class="price">RS ' . $row["p_price"] . '</p>
                        <a href="package_details.php?id=' . $row["p_id"] . '" class="view-more">View More</a>
                      </div>';
            }
        } else {
            echo "<p>No packages found.</p>";
        }
        $con->close();
        ?>
    </div>
</div>


<!-- feature  -->

    <!-- <section class="featured-tours">
        <div class="about-container">
            <h2>TOUR PACKAGES</h2>
            <div class="carousel-container">
                <button class="carousel-prev">&#10094;</button>
                <div class="carousel">
                    <div class="tour-card">
                        <img src="https://www.beyondholiday.in/img/packages/dooars/1.jpg"
                            alt="Dooars 3 Nights | 4 Days">
                        <h3>Dooars 3 Nights | 4 Days</h3>
                        <p>🌿 LATAGURI - JALDAPARA - GORUMARA</p>
                        <button class="view-details" onclick="window.location.href='package_details.php';"> VIEW DETAIL
                        </button>
                    </div>
                    <div class="tour-card">
                        <img src="https://www.beyondholiday.in/img/packages/dooars/2.jpg"
                            alt="Dooars 4 Nights | 5 Days">
                        <h3>Dooars 4 Nights | 5 Days</h3>
                        <p>🌿 LATAGURI - BUXA - JAYANTI - JALDAPARA</p>
                        <button class="view-details" onclick="window.location.href='package_details.php';"> VIEW DETAILS
                        </button>
                    </div>
                    <div class="tour-card">
                        <img src="https://www.beyondholiday.in/img/packages/dooars/1.jpg"
                            alt="Dooars 5 Nights | 6 Days">
                        <h3>Dooars 5 Nights | 6 Days</h3>
                        <p>🌿 GORUMARA - BUXA - JAYANTI - CHILAPATA</p>
                        <button class="view-details" onclick="window.location.href='package_details.php';"> VIEW DETAILS
                        </button>
                    </div>
                    <div class="tour-card">
                        <img src="https://www.beyondholiday.in/img/packages/dooars/1.jpg"
                            alt="Dooars 5 Nights | 6 Days">
                        <h3>Dooars 5 Nights | 6 Days</h3>
                        <p>🌿 GORUMARA - BUXA - JAYANTI - CHILAPATA</p>
                        <button class="view-details" onclick="window.location.href='package_details.php';"> VIEW DETAIL
                        </button>
                    </div>
                    <div class="tour-card">
                        <img src="https://www.beyondholiday.in/img/packages/dooars/1.jpg"
                            alt="Dooars 5 Nights | 6 Days">
                        <h3>Dooars 5 Nights | 6 Days</h3>
                        <p>🌿 GORUMARA - BUXA - JAYANTI - CHILAPATA</p>
                        <button class="view-details" onclick="window.location.href='package_details.php';">VIEW
                            DETAIL</button>
                    </div>
                    <div class="tour-card">
                        <img src="https://www.beyondholiday.in/img/packages/dooars/1.jpg"
                            alt="Dooars 5 Nights | 6 Days">
                        <h3>Dooars 5 Nights | 6 Days</h3>
                        <p>🌿 GORUMARA - BUXA - JAYANTI - CHILAPATA</p>
                        <button class="view-details" onclick="window.location.href='package_details.php';"> VIEW
                            DETAILS</button>
                    </div>
                </div>
                <button class="carousel-next">&#10095;</button>
            </div>
        </div>
    </section>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const prevButton = document.querySelector(".carousel-prev");
        const nextButton = document.querySelector(".carousel-next");
        const carousel = document.querySelector(".carousel");

        let index = 0;
        const totalCards = document.querySelectorAll(".tour-card").length;
        const cardWidth = document.querySelector(".tour-card").offsetWidth + 20; // Adjust spacing

        nextButton.addEventListener("click", function() {
            if (index < totalCards - 3) {
                index++;
                carousel.style.transform = `translateX(-${index * cardWidth}px)`;
            }
        });

        prevButton.addEventListener("click", function() {
            if (index > 0) {
                index--;
                carousel.style.transform = `translateX(-${index * cardWidth}px)`;
            }
        });
    });
    </script> -->

    <!-- <div class="container">
        <div class="welcome-section">
            <h1>Welcome to <span>Himalayan Dooars Tour</span></h1>
            <p>
                Welcome to theHimalayan Dooars Tour, which is located at Madarihat, a small village in the Alipurduar
                subdivision of Alipurduar district, West Bengal, India. This village is situated on the outskirts of
                Jaldapara National Park, famous for Indian rhinoceroses. It is one of the main tourist spots in North
                Bengal, surrounded by tea gardens, forests, hills, and small rivers, showcasing great diversity in
                population.
            </p>
            <p>
                The local train station, Madarihat, is connected by the newly converted broad-gauge New
                Jalpaiguri-Alipurduar-Samuktala Road Line. The train line passes through the forests and tea gardens of
                North Bengal.
            </p>
            <a href="#" class="view-more">View More</a>
        </div>
        <div class="query-form">
            <h2>Send Your Query!</h2>
            <form action="#">
                <input type="email" placeholder="Email Address" required>
                <input type="text" placeholder="Phone" required>
                <textarea placeholder="Your Message" rows="4" required></textarea>
                <div class="captcha">
                    <span>Solve This:</span>
                    <input type="text" placeholder="Answer" required>
                </div>
                <button type="submit">Request Packages</button>
            </form>
        </div>
    </div> -->

    <!-- Popular Attractions Section -->
    <section class="attractions-section">
        <h2 class="section-title">POPULAR <span class="highlight">ATTRACTION</span></h2>
        <div class="attractions-grid">
            <div class="attraction-card" data-url="dooars.php?attraction=Jaldapara">
                <img src="Image/natu.jpg" alt="Jaldapara">
                <div class="card-title">Jaldapara</div>
            </div>
            <div class="attraction-card" data-url="packages.html?attraction=Punakha Dzong">
                <img src="Image/mountain.jpg" alt="Punakha Dzong">
                <div class="card-title">Punakha Dzong</div>
            </div>
            <div class="attraction-card" data-url="packages.html?attraction=Pasakha">
                <img src="Image/pexels-ali-akdemir-2055469759-30037320.jpg" alt="Pasakha">
                <div class="card-title">Pasakha</div>
            </div>
            <div class="attraction-card" data-url="packages.html?attraction=Tiger Nest">
                <img src="Image/pexels-myersmc16-919278.jpg" alt="Tiger Nest">
                <div class="card-title">Tiger Nest</div>
            </div>
            <div class="attraction-card" data-url="packages.html?attraction=Jayanti">
                <img src="Image/pexels-photo-3131634.jpeg" alt="Jayanti">
                <div class="card-title">Jayanti</div>
            </div>
            <div class="attraction-card" data-url="packages.html?attraction=Gorumara">
                <img src="Image/1.jpg" alt="Gorumara">
                <div class="card-title">Gorumara</div>
            </div>
            <div class="attraction-card" data-url="packages.html?attraction=Lataguri">
                <img src="Image/2.jpg" alt="Lataguri">
                <div class="card-title">Lataguri</div>
            </div>
            <div class="attraction-card" data-url="packages.html?attraction=Totopara">
                <img src="Image/toto.jpg" alt="Totopara">
                <div class="card-title">Totopara</div>
            </div>
        </div>
    </section>

    <script>
        // Add event listeners to each attraction card
        document.querySelectorAll('.attraction-card').forEach(card => {
            card.addEventListener('click', function () {
                const url = this.getAttribute('data-url');
                if (url) {
                    window.location.href = url;
                }
            });
        });
    </script>

    <section id="testimonials" class="testContainer">
        <div class="title">
            <h2 class="topTourHead">Happy Customers</h2>
        </div>
        <div class="testimonials">
            <div class="testimonial">
                <p style="font-style:italic">"Hotels are really good. Very comfortable bed and family friendly."</p>
                <div class="info">
                    <img src="Image/user.png" class="userImage">
                    <div class="details">
                        <h4>Nabanita Chakroborty</h4>
                        <span>CEO - Techno Web Solutions</span>
                    </div>
                </div>
            </div>
            <div class="testimonial">
                <p style="font-style:italic">"Very good services. Really nice customer care service."</p>
                <div class="info">
                    <img src="Image/user.png" class="userImage">
                    <div class="details">
                        <h4>Komal Yadav</h4>
                        <span>IT Employee</span>
                    </div>
                </div>
            </div>
            <div class="testimonial">
                <p style="font-style:italic">"Love to travel with City Life, best in business. Highly Recommended."
                </p>
                <div class="info">
                    <img src="Image/user.png" class="userImage">
                    <div class="details">
                        <h4>Aman Sheth</h4>
                        <span>Businessman</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include 'include/footer.php'; ?>
</body>


<style>
    .featured-tours {
        background: #f0f8ff;
        padding: 40px 0;
        text-align: center;
    }

    .featured-tours h2 {
        margin-bottom: 25px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        /* font-style: italic; */
        color: darkblue;
        font-size: 24px;
        font-weight: bold;
    }

    .about-container {
        max-width: 2000px;
        margin: auto;
        overflow: hidden;
    }

    .carousel-container {
        position: relative;
        width: 100%;
        overflow: hidden;
        float: left;
    }

    .carousel {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

    .tour-card {
        background: white;
        border-radius: 10px;
        padding: 15px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
        flex: 0 0 30%;
        margin: 10px;
    }

    .tour-card img {
        width: 100%;
        border-radius: 10px;
    }

    .view-details {
        background: #4CAF50;
        color: white;
        border: none;
        padding: 10px;
        cursor: pointer;
        border-radius: 5px;
        font-size: 12px;
    }

    .carousel-prev,
    .carousel-next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(0, 0, 0, 0.5);
        color: white;
        border: none;
        cursor: pointer;
        padding: 10px;
        font-size: 20px;
        z-index: 100;
    }

    .carousel-prev {
        left: 10px;
    }

    .carousel-next {
        right: 10px;
    }
</style>

</html>