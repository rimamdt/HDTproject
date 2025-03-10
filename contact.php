<?php include 'include/navbar.php'; ?>
<?php include 'connection.php'; // Include database connection ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Contact</title>

    <!-- Bootstrap & jQuery -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container py-5">
        <div class="row align-items-center">
            <!-- Left Side - Image -->
            <div class="col-md-6 text-center">
                <img src="Image/contact.jpg" alt="Illustration" class="img-fluid">
            </div>

            <!-- Right Side - Contact Form -->
            <div class="col-md-6">
                <h2 class="text-center">Quick Contact</h2>
                <p class="text-center">Always Be In Touch With Us</p>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = trim($_POST["name"]);
                    $email = trim($_POST["email"]);
                    $phone = trim($_POST["phone"]);
                    $message = trim($_POST["message"]);
                    $subject = "General Inquiry"; // Default subject

                    // Validate input
                    if (!empty($name) && !empty($email) && !empty($message)) {
                        $stmt = $con->prepare("INSERT INTO contact_us (name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?)");
                        $stmt->bind_param("sssss", $name, $email, $phone, $subject, $message);

                        if ($stmt->execute()) {
                            echo "<script>
                                Swal.fire({
                                    title: 'Thank You!!',
                                    text: 'We will shortly connect with you',
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                }).then(() => {
                                    window.location.href = 'index.php';
                                });
                            </script>";
                        } else {
                            echo "<script>
                                Swal.fire('Error', 'Something went wrong. Please try again.', 'error');
                            </script>";
                        }
                        $stmt->close();
                    } else {
                        echo "<script>
                            Swal.fire('Error', 'Please fill in all required fields.', 'error');
                        </script>";
                    }
                }
                ?>

                <form class="p-3 border rounded shadow" method="POST">
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                    </div>
                    <div class="mb-3">
                        <input type="tel" name="phone" class="form-control" placeholder="Phone">
                    </div>
                    <div class="mb-3">
                        <textarea name="message" class="form-control" placeholder="Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-danger w-100">SUBMIT</button>
                </form>
            </div>
        </div>

        <!-- Contact Info Section -->
        <div class="row mt-4">
            <div class="col-lg-4 col-md-4">
                <div class="card-body d-flex align-items-center">
                    <div class="me-3">
                        <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon1.png" />
                    </div>
                    <div>
                        <h6 class="fw-bold">Address</h6>
                        <p>Madarihat<br>Alipurduar</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="card-body d-flex align-items-center">
                    <div class="me-3">
                        <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon2.png" />
                    </div>
                    <div>
                        <h6 class="fw-bold">Phone</h6>
                        <p>+91 86951 32825<br>98326 20455</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="card-body d-flex align-items-center">
                    <div class="me-3">
                        <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon3.png" />
                    </div>
                    <div>
                        <h6 class="fw-bold">Email</h6>
                        <p>hdt@tourism.com<br>rima@tourism.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'include/footer.php'; ?>
</body>

</html>
