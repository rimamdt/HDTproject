<?php include 'navbar.php'; ?>
<?php
include 'connection.php';

$p_id = isset($_GET['p_id']) ? intval($_GET['p_id']) : 0;

if ($p_id > 0) {
    // Fetch package details
    $query = "SELECT p_id, p_name, p_duration, p_price, p_description, image 
              FROM packages 
              WHERE p_id = $p_id";
    $result = $con->query($query);

    if ($result->num_rows > 0) {
        $package = $result->fetch_assoc();
    } else {
        echo "<p>Package not found.</p>";
        exit;
    }
} else {
    echo "<p>Invalid package selection.</p>";
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package Details | Himalayan Dooars Tour</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-image: url('image/dp2.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .package-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
            overflow: hidden;
        }

        .package-image img {
            width: 100%;
            height: 350px;
            object-fit: cover;
        }

        .package-details {
            padding: 20px;
        }

        .book-form {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-book {
            background: #28a745;
            color: white;
            width: 100%;
        }

        .container {
            width: 90%;
            margin: auto;
        }

        h2 {
            color: #1a57a5;
        }

        .day-box {
            display: flex;
            align-items: flex-start;
            background: #e9f5e9;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .day-icon {
            font-size: 24px;
            margin-right: 15px;
            color: #28a745;
        }

        /* Related Packages */
        .related-packages {
            margin-top: 10px;
            padding: 15px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .related-packages h4 {
            font-size: 20px;
            margin-bottom: 15px;
            color: #333;
            border-bottom: 2px solid #0056b3;
            display: inline-block;
        }

        .package {
            display: flex;
            align-items: center;
            background: #f9f9f9;
            padding: 3px;
            border-radius: 8px;
            margin-bottom: 1px;
        }

        .package img {
            width: 80px;
            height: 80px;
            border-radius: 5px;
            margin-right: 15px;
        }

        .package-details p {
            margin: 0;
            font-size: 14px;
            color: #333;
        }

        .package-details {
            padding: 14px;
        }

        .btn-sm {
            display: inline-block;
            padding: 5px 10px;
            background: #0056b3;
            color: white;
            text-decoration: none;
            font-size: 14px;
            border-radius: 5px;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <div class="package-card">
                    <div class="package-image">
                    <img src="image/<?= htmlspecialchars($package['image']) ?>" alt="Package Image">
                    </div>
                    <div class="package-details">
                        <h3><?= htmlspecialchars($package['p_name']) ?> - <?= htmlspecialchars($package['p_duration']) ?></h3>
                        <p><strong>Package ID:</strong> DR001</p>
                        <p><i class="fas fa-map-marker-alt"></i> Lataguri → Murti → Jaldapara → Buxa</p>
                        <p><strong>Package Type:</strong> Wildlife & Nature Tour</p>
                        <p><strong>Package Cost:</strong> Rs.<?= number_format($package['p_price'], 2) ?> / Per Head</p>
                        <h5>Itinerary:</h5>
                        <div class="day-box">
                            <i class="fas fa-calendar-day day-icon"></i>
                            <p><strong>Day 1:</strong> Arrival at Jaigaon, check-in at hotel.</p>
                        </div>
                        <div class="day-box">
                            <i class="fas fa-calendar-day day-icon"></i>
                            <p><strong>Day 2:</strong> Transfer to Thimphu, sightseeing at Buddha Point, Memorial
                                Chorten.</p>
                        </div>
                        <div class="day-box">
                            <i class="fas fa-calendar-day day-icon"></i>
                            <p><strong>Day 3:</strong> Thimphu city tour, visit Royal Palace, local markets.</p>
                        </div>
                        <div class="day-box">
                            <i class="fas fa-calendar-day day-icon"></i>
                            <p><strong>Day 1:</strong> Arrival at Jaigaon, check-in at hotel.</p>
                        </div>
                        <div class="day-box">
                            <i class="fas fa-calendar-day day-icon"></i>
                            <p><strong>Day 1:</strong> Arrival at Jaigaon, check-in at hotel.</p>
                        </div>
                        <div class="day-box">
                            <i class="fas fa-calendar-day day-icon"></i>
                            <p><strong>Day 1:</strong> Arrival at Jaigaon, check-in at hotel.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="book-form">
                    <h4>SEND US A QUERY!</h4>
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Your Phone">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" placeholder="Your Message"></textarea>
                        </div>
                        <a href="booking.php" class="btn btn-book">package request</a>
                    </form>
                </div>
                <!-- Related Packages -->
                <div class="related-packages">
                    <h4>Related Packages</h4>
                    <div class="package">
                        <img src="Image/pg2.jpg" alt="Bhutan Package">
                        <div class="package-details">
                            <p>Lataguri - Murti - Jaldapara - Buxa - Jayanti</p>
                            <a href="packages.php" class="btn-sm">View Details</a>
                        </div>
                    </div>
                    <div class="package">
                        <img src="Image/pg3.jpg" alt="Bhutan Package">
                        <div class="package-details">
                            <p>Lataguri - Murti - Jaldapara - Buxa - Jayanti</p>
                            <a href="packages.php" class="btn-sm">View Details</a>
                        </div>
                    </div>
                    <div class="package">
                        <img src="Image/pg2.jpg" alt="Bhutan Package">
                        <div class="package-details">
                            <p>Lataguri - Murti - Jaldapara - Buxa - Jayanti</p>
                            <a href="packages.php" class="btn-sm">View Details</a>
                        </div>
                    </div>
                    <div class="package">
                        <img src="Image/pg2.jpg" alt="Bhutan Package">
                        <div class="package-details">
                            <p>Lataguri - Murti - Jaldapara - Buxa - Jayanti</p>
                            <a href="packages.php" class="btn-sm">View Details</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>


    <?php include 'include/footer.php'; ?>
</body>

</html>