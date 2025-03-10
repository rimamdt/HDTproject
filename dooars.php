<?php include 'include/navbar.php'; ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Himalayan Dooars Tour</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background-color: #f5f5f5;
}

/* Hero Section */
.hero {
    position: relative;
    width: 85%;
    height: 60vh;
    background: url('Image/do1.png') no-repeat center center/cover;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
    margin: 40px auto;
    border-left: 5px solid #4CAF50;
    border-right: 5px solid #4CAF50;
    border-radius: 10px;
    overflow: hidden;
    cursor: pointer;
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.hero:hover {
    transform: scale(1.05);
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.3);
}

.hero .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.4);
}

.hero-content {
    position: relative;
    z-index: 2;
}

.hero h1 {
    font-size: 50px;
    font-weight: 700;
}

.hero p {
    font-size: 22px;
    font-weight: 300;
    margin-top: 10px;
}

/* About Section */
.about {
    max-width: 900px;
    margin: 50px auto;
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    text-align: justify;
}

.about h2 {
    font-size: 28px;
    font-weight: 600;
    color: #1e3a34;
    text-transform: uppercase;
    margin-bottom: 10px;
    text-align: center;
}

.about h2 span {
    color: #4CAF50;
}

.about p {
    font-size: 16px;
    line-height: 1.6;
    color: #555;
    margin-bottom: 15px;
}

/* Button */
.btn {
    display: block;
    width: fit-content;
    margin: 20px auto;
    background: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

.btn:hover {
    background: #388E3C;
}

/* Places to Visit Section */
.places-to-visit {
    text-align: center;
    padding: 50px 0;
}

.places-to-visit h2 {
    font-size: 30px;
    font-weight: 700;
    color: #1e3a34;
    text-transform: uppercase;
    margin-bottom: 10px;
}

.places-to-visit .carousel-container {
    position: relative;
    width: 90%;
    margin: auto;
    overflow: hidden;
}

.places-to-visit .carousel {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.places-to-visit .card {
    min-width: 250px;
    margin: 10px;
    border-radius: 10px;
    overflow: hidden;
    position: relative;
    transition: transform 0.3s ease-in-out;
}

.places-to-visit .card:hover {
    transform: scale(1.05);
}

.places-to-visit .card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
    border-radius: 10px;
}

.places-to-visit .card .location {
    position: absolute;
    top: 10px;
    left: 10px;
    background-color: #003366;
    color: white;
    padding: 5px 10px;
    border-radius: 5px;
    font-size: 14px;
}

.nav-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 51, 102, 0.8);
    color: white;
    border: none;
    cursor: pointer;
    padding: 10px;
    border-radius: 50%;
    transition: 0.3s;
}

.nav-btn:hover {
    background-color: #4CAF50;
}

.prev {
    left: -20px;
}

.next {
    right: -20px;
}

/* Scroll to Top Button */
.scroll-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: #4CAF50;
    color: white;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    display: none;
    transition: 0.3s;
}

.scroll-top:hover {
    background: #388E3C;
}

    </style>
</head>
<body>

    <section class="hero" id="heroImage">
        <div class="overlay"></div>
        <div class="hero-content">
            <h1>Himalayan Dooars Tour</h1>
            <p>Discover the Unexplored Beauty</p>
        </div>
    </section>

    <section class="about">
        <h2>ABOUT <span>HIMALAYAN DOOARS</span></h2>
        <p>
            Nestled in the foothills of the Eastern Himalayas, the **Himalayan Dooars** is a paradise of lush greenery, breathtaking landscapes, and diverse wildlife
            Nestled in the foothills of the Eastern Himalayas, the **Himalayan Dooars** is a paradise of lush greenery, breathtaking landscapes, and diverse wildlife.
            
            Nestled in the foothills of the Eastern Himalayas, the **Himalayan Dooars** is a paradise of lush greenery, breathtaking landscapes, and diverse wildlife.
            Nestled in the foothills of the Eastern Himalayas, the **Himalayan Dooars** is a paradise of lush greenery, breathtaking landscapes, and diverse wildlife..
        </p>
        <a href="book_package.php">
            <button class="btn">Explore All Packages</button>
        </a>

    </section>

    <section class="places-to-visit">
        <h2>PLACES TO VISIT</h2>

        <div class="carousel-container">
            <button class="nav-btn prev" onclick="moveSlide(-1)"><i class="fas fa-chevron-left"></i></button>

            <div class="carousel">
                <a href="dooars_packages.php"><div class="card"><img src="image/top1.jpg"><span class="location">Mahananda</span></div></a>
                <a href="dooars_packages.php"><div class="card"><img src="image/top2.jpg"><span class="location">Chapramari</span></div></a>
                <a href="dooars_packages.php"><div class="card"><img src="image/toto.jpg"><span class="location">Suntalekhola</span></div></a>
                <a href="dooars_packages.php"><div class="card"><img src="image/top3.jpg"><span class="location">Buxa</span></div></a>
                <a href="dooars_packages.php"><div class="card"><img src="image/riv.jpg"><span class="location">Pasakha</span></div></a>
                <a href="dooars_packages.php"><div class="card"><img src="image/top1.jpg"><span class="location">Mahananda</span></div></a>
                <a href="dooars_packages.php"><div class="card"><img src="image/top2.jpg"><span class="location">Chapramari</span></div></a>
                <a href="dooars_packages.php"><div class="card"><img src="image/toto.jpg"><span class="location">Suntalekhola</span></div></a>
                <a href="dooars_packages.php"><div class="card"><img src="image/top3.jpg"><span class="location">Buxa</span></div></a>
                <a href="dooars_packages.php"><div class="card"><img src="image/riv.jpg"><span class="location">Pasakha</span></div></a>
            </div>

            <button class="nav-btn next" onclick="moveSlide(1)"><i class="fas fa-chevron-right"></i></button>
        </div>
    </section>

    <button class="scroll-top" id="scrollTopBtn"><i class="fas fa-arrow-up"></i></button>

    <?php include 'include/footer.php'; ?>

    <script>
        let index = 0;

        function moveSlide(step) {
            const carousel = document.querySelector('.carousel');
            const cards = document.querySelectorAll('.card');
            const totalCards = cards.length;
            const cardWidth = cards[0].offsetWidth + 6; // 10px gap

            index += step;

            if (index < 0) {
                index = totalCards - 1;
            } else if (index >= totalCards) {
                index = 0;
            }

            carousel.style.transform = `translateX(${-index * cardWidth}px)`;
        }

        document.addEventListener("DOMContentLoaded", () => {
            setInterval(() => moveSlide(1), 5000); // Auto-slide every 3 seconds
        });

        // Scroll to top button functionality
        const scrollBtn = document.getElementById("scrollTopBtn");
        window.addEventListener("scroll", () => {
            if (window.scrollY > 7) {
                scrollBtn.style.display = "block";
            } else {
                scrollBtn.style.display = "none";
            }
        });

        scrollBtn.addEventListener("click", () => {
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    </script>

</body>
</html>

