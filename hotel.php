<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels | Dooars Tour</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">

    <script>
        function navigateToBooking() {
            window.location.href = '/book';
        }
    </script>

    <style>
        /* Responsive Sidebar */
        .sidebar {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar h5 {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .form-control {
            margin-bottom: 10px;
        }

        /* Responsive Grid */
        @media (max-width: 768px) {
            .sidebar {
                margin-bottom: 20px;
            }
        }

        /* Auto-suggest dropdown */
        .suggestions {
            position: absolute;
            background: white;
            border: 1px solid #ccc;
            width: 100%;
            max-height: 200px;
            overflow-y: auto;
            z-index: 1000;
            display: none;
        }

        .suggestions div {
            padding: 8px;
            cursor: pointer;
        }

        .suggestions div:hover {
            background: #f1f1f1;
        }

        /* No hotels found message */
        .no-hotels-msg {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            color: #dc3545;
            padding: 20px;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <section class="hero">
        <div id="slider">
            <div class="slide active" style="background-image: url('Image/shot.jpg');"></div>
            <div class="slide" style="background-image: url('Image/shot4.jpg');"></div>
            <div class="slide" style="background-image: url('Image/shot2.jpg');"></div>
            <div class="slide" style="background-image: url('Image/shot3.jpg');"></div>
        </div>
        <div class="hhero-section">
            <div class="hhero-content">
                <!-- <h2 class="titleStyle">Best Hotels For You</h2> -->
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
            setInterval(showNextSlide, 4000);
        </script>
    </section>

    <div class="container mt-5">
        <div class="row w-100">
            <!-- Sidebar -->
            <aside class="col-lg-3 col-md-4">
                <div class="sidebar">
                    <h5>Search Destination</h5>
                    <input type="text" id="searchDestination" class="form-control" placeholder="Enter location"
                        onkeyup="showSuggestions(this.value)">
                    <div id="suggestions" class="suggestions"></div>

                    <h5>Filter by Price</h5>
                    <input type="number" id="minPrice" class="form-control" placeholder="Min Price">
                    <input type="number" id="maxPrice" class="form-control" placeholder="Max Price">

                    <h5>Filter by Rating</h5>
                    <select id="ratingFilter" class="form-control">
                        <option value="">Select Rating</option>
                        <option value="5">5 ⭐</option>
                        <option value="4">4+ ⭐</option>
                        <option value="3">3+ ⭐</option>
                        <option value="2">2+ ⭐</option>
                        <option value="1">1+ ⭐</option>
                    </select>

                    <button class="btn btn-primary w-100 mt-3" onclick="applyFilters()">Apply Filters</button>
                </div>
            </aside>

            <!-- Hotels Section -->
            <section class="col-lg-9 col-md-8">
                <div class="container py-4">
                    <div class="row" id="hotels-container">
                        <?php
                        include 'connection.php';

                        // Fetch all hotels initially
                        $sql = "SELECT * FROM hotel";
                        $result = $con->query($sql);
                        $hotelNames = [];

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '<div class="col-lg-4 col-md-6 mb-4 hotel-card" data-name="' . $row["h_name"] . '" data-price="' . $row["h_price"] . '" data-rating="' . $row["h_rating"] . '">
                                        <div class="card">
                                            <img src="Image/' . $row["h_image"] . '" class="card-img-top" alt="' . $row["h_name"] . '">
                                            <div class="card-body">
                                                <h5 class="card-title">' . $row["h_name"] . '</h5>
                                                <p><strong>Type:</strong> ' . $row["h_type"] . '</p>
                                                <p><strong>Address:</strong> ' . $row["h_address"] . '</p>
                                                <p><strong>Contact:</strong> ' . $row["h_contact"] . '</p>
                                                <p><strong>Price:</strong> Rs. ' . $row["h_price"] . '</p>
                                                <p><strong>Rating:</strong> ⭐ ' . $row["h_rating"] . '</p>
                                                <a href="hotel_details.php?id=' . $row["h_id"] . '" class="btn btn-primary">View Details</a>
                                            </div>
                                        </div>
                                    </div>';
                                $hotelNames[] = $row["h_name"];
                            }
                        } else {
                            echo '
                                <div class="col-lg-4 col-md-6 mb-4 hotel-card">
                                        <div class="card">
                                            <img src="Image/hot1.jpg" width="200" height="200">
                                            <div class="card-body">
                                            <p>No hotels found.</p>   
                                        </div>
                                </div>
                            ';
                        }

                        $con->close();
                        ?>

                        <script>
                            let hotelNames = <?php echo json_encode($hotelNames); ?>;

                            function showSuggestions(value) {
                                let suggestionsBox = document.getElementById("suggestions");
                                suggestionsBox.innerHTML = "";
                                if (value.length === 0) {
                                    suggestionsBox.style.display = "none";
                                    return;
                                }
                                let filteredNames = hotelNames.filter(name => name.toLowerCase().includes(value.toLowerCase()));
                                if (filteredNames.length > 0) {
                                    suggestionsBox.style.display = "block";
                                    filteredNames.forEach(name => {
                                        let div = document.createElement("div");
                                        div.innerHTML = name;
                                        div.onclick = function () {
                                            document.getElementById("searchDestination").value = name;
                                            suggestionsBox.style.display = "none";
                                            applyFilters();
                                        };
                                        suggestionsBox.appendChild(div);
                                    });
                                } else {
                                    suggestionsBox.style.display = "none";
                                }
                            }

                            function applyFilters() {
                                let searchQuery = document.getElementById("searchDestination").value.toLowerCase();
                                let minPrice = document.getElementById("minPrice").value;
                                let maxPrice = document.getElementById("maxPrice").value;
                                let selectedRating = document.getElementById("ratingFilter").value;
                                let hotelCards = document.querySelectorAll(".hotel-card");
                                let hotelsContainer = document.getElementById("hotels-container");

                                let visibleHotels = 0;
                                hotelCards.forEach(card => {
                                    let hotelName = card.getAttribute("data-name").toLowerCase();
                                    let hotelPrice = parseFloat(card.getAttribute("data-price"));
                                    let hotelRating = parseFloat(card.getAttribute("data-rating"));
                                    let matchesSearch = searchQuery === "" || hotelName.includes(searchQuery);
                                    let matchesPrice = (minPrice === "" || hotelPrice >= parseFloat(minPrice)) &&
                                        (maxPrice === "" || hotelPrice <= parseFloat(maxPrice));
                                    let matchesRating = selectedRating === "" || hotelRating >= parseFloat(selectedRating);

                                    if (matchesSearch && matchesPrice && matchesRating) {
                                        card.style.display = "block";
                                        visibleHotels++;
                                    } else {
                                        card.style.display = "none";
                                    }
                                });

                                let noHotelsMessage = document.getElementById("no-hotels-message");
                                if (visibleHotels === 0) {
                                    if (!noHotelsMessage) {
                                        noHotelsMessage = document.createElement("div");
                                        noHotelsMessage.id = "no-hotels-message";
                                        noHotelsMessage.classList.add("no-hotels-msg");
                                        noHotelsMessage.innerHTML = "<p>No hotels found.</p>";
                                        hotelsContainer.appendChild(noHotelsMessage);
                                    }
                                } else if (noHotelsMessage) {
                                    noHotelsMessage.remove();
                                }
                            }
                        </script>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php include 'include/footer.php'; ?>
</body>

</html>