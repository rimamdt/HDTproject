<?php
include 'navbar.php';
include 'connection.php';

if (!isset($_GET['id'])) {
    echo "<div class='container mt-5 text-center'><h3>Hotel not found!</h3></div>";
    exit();
}

$hotel_id = intval($_GET['id']);
$sql = "SELECT * FROM hotel WHERE h_id = $hotel_id";
$result = $con->query($sql);

if ($result->num_rows == 0) {
    echo "<div class='container mt-5 text-center'><h3>Hotel not found!</h3></div>";
    exit();
}

$hotel = $result->fetch_assoc();
$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $hotel['h_name']; ?> | Himalayan Dooars Tour</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        .hotel-banner {
            background: url('Image/<?php echo $hotel["h_image"]; ?>') no-repeat center center/cover;
            height: 300px;
        }
        .details-card {
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="hotel-banner d-flex align-items-center justify-content-center">
        <h1 class="text-white shadow-lg"> <?php echo $hotel['h_name']; ?> </h1>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <div class="details-card">
                    <h2><?php echo $hotel['h_name']; ?></h2>
                    <p><strong>Type:</strong> <?php echo $hotel['h_type']; ?></p>
                    <p><strong>Address:</strong> <?php echo $hotel['h_address']; ?></p>
                    <p><strong>Contact:</strong> <?php echo $hotel['h_contact']; ?></p>
                    <p><strong>Price per Night:</strong> Rs. <?php echo $hotel['h_price']; ?></p>
                    <p><strong>Rating:</strong> ⭐ <?php echo $hotel['h_rating']; ?></p>
                    <p><strong>Description:</strong> <?php echo $hotel['description']; ?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="details-card text-center">
                    <h3>Book Now</h3>
                    <p>Reserve your stay at <?php echo $hotel['h_name']; ?> today!</p>
                    <a href="booking.php?hotel_id=<?php echo $hotel['h_id']; ?>" class="btn btn-primary w-100">Book Now</a>
                </div>
            </div>
        </div>
    </div>
    <?php include 'include/footer.php'; ?>
</body>
</html>
