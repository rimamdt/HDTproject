<?php include 'include/navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Packages - Himalayan Dooars Tour</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .package-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .book-btn {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            cursor: pointer;
        }

        .book-btn:hover {
            background-color: #218838;
        }

        .filter-section {
            margin-bottom: 20px;
        }

        .gallery img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

    </style>
</head>

<body>

    <!-- Hero Section -->
    <section class="hero">
        <div id="slider">
            <div class="slide" style="background-image: url('Image/tr1.jpg');"></div>
            <div class="slide" style="background-image: url('Image/tr2.jpg');"></div>
            <div class="slide" style="background-image: url('Image/tr3.jpg');"></div>
            <div class="slide" style="background-image: url('Image/tr4n.jpg');"></div>
        </div>

        <!-- Hero Section -->
        <div class="hhero-section">
            <div class="hhero-content">
                <h2 class="titleStyle">Lets Tour With Us</h2>
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


    <div class="container mt-4">
        <div class="filter-section">
            <input type="text" id="searchBox" class="form-control" placeholder="Search Packages...">
        </div>
        <div class="row" id="packageContainer">
            <div class="col-md-4 mb-4 package-card-container">
                <div class="card package-card">
                    <img src="image/tr1.jpg" alt="Package 1">
                    <div class="card-body">

                        <p>1N Lataguri - 2N Jaldapara - 1N Buxa - 2N Murti</p>
                        <p>PACKAGE ID: DR001</p>
                        <p>Price: 899</p>
                        <button class="book-btn" onclick="openBookingForm('Dooars 6 Nights | 7 Days')">BOOK NOW</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 package-card-container">
                <div class="card package-card">
                    <img src="image/tr2.jpg" alt="Package 2">
                    <div class="card-body">

                        <p>2N Lataguri - 2N Jaldapara - 2N Buxa - 1N Murti</p>
                        <p>PACKAGE ID: DR002</p>
                        <p>Price: 999</p>
                        <button class="book-btn" onclick="openBookingForm('Dooars 7 Nights | 8 Days')">BOOK NOW</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 package-card-container">
                <div class="card package-card">
                    <img src="image/tr3.jpg" alt="Package 3">
                    <div class="card-body">
                        <p>2N Lataguri - 2N Jaldapara - 2N Buxa - 1N Murti</p>
                        <p>PACKAGE ID: DR003</p>
                        <p>Price: 799</p>
                        <button class="book-btn" onclick="openBookingForm('Dooars 5 Nights | 6 Days')">BOOK NOW</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 package-card-container">
                <div class="card package-card">
                    <img src="image/tr3.jpg" alt="Package 3">
                    <div class="card-body">
                        <p>2N Lataguri - 2N Jaldapara - 2N Buxa - 1N Murti</p>
                        <p>PACKAGE ID: DR003</p>
                        <p>Price: 799</p>
                        <button class="book-btn" onclick="openBookingForm('Dooars 5 Nights | 6 Days')">BOOK NOW</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 package-card-container">
                <div class="card package-card">
                    <img src="image/tr3.jpg" alt="Package 3">
                    <div class="card-body">
                        <p>2N Lataguri - 2N Jaldapara - 2N Buxa - 1N Murti</p>
                        <p>PACKAGE ID: DR003</p>
                        <p>Price: 799</p>
                        <button class="book-btn" onclick="openBookingForm('Dooars 5 Nights | 6 Days')">BOOK NOW</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 package-card-container">
                <div class="card package-card">
                    <img src="image/tr3.jpg" alt="Package 3">
                    <div class="card-body">
                        <p>2N Lataguri - 2N Jaldapara - 2N Buxa - 1N Murti</p>
                        <p>PACKAGE ID: DR003</p>
                        <p>Price: 799</p>
                        <button class="book-btn" onclick="openBookingForm('Dooars 5 Nights | 6 Days')">BOOK NOW</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="bookingForm"
        style="display:none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
        <h4>Book Your Package</h4>
        <p id="selectedPackage"></p>
        <input type="text" class="form-control mb-2" placeholder="Your Name">
        <input type="email" class="form-control mb-2" placeholder="Your Email">
        <input type="tel" class="form-control mb-2" placeholder="Your Phone">
        <button class="book-btn" onclick="submitBooking()">Submit</button>
        <button class="btn btn-secondary mt-2" onclick="closeBookingForm()">Close</button>
    </div>

    <script>
        document.getElementById('searchBox').addEventListener('input', function () {
            let filter = this.value.toLowerCase();
            let cards = document.querySelectorAll('.package-card-container');
            cards.forEach(card => {
                let title = card.querySelector('.card-title').textContent.toLowerCase();
                card.style.display = title.includes(filter) ? 'block' : 'none';
            });
        });

        function openBookingForm(packageName) {
            document.getElementById('selectedPackage').textContent = `Package: ${packageName}`;
            document.getElementById('bookingForm').style.display = 'block';
        }

        function closeBookingForm() {
            document.getElementById('bookingForm').style.display = 'none';
        }

        function submitBooking() {
            alert('Booking submitted successfully!');
            closeBookingForm();
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <?php include 'include/footer.php'; ?>
</body>

</html>