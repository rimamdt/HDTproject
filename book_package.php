<?php include 'include/navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Package</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <style>
        .bcontainer {
            display: flex;
            max-width: 1200px;
            margin: auto;
            gap: 20px;
            margin-top: 20px;
            background-color: rgba(236, 232, 232, 0.8);
        }

        /* Tour Package Section */
        .btour-package_details {
            width: 65%;
        }

        .bpackage-card {
            display: flex;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 15px;
        }

        .bimage-container {
            position: relative;
            width: 40%;
        }

        .bimage-container img {
            width: 100%;
            height: 100%;
            border-radius: 10px 0 0 10px;
        }

        .bbadge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #0056b3;
            color: white;
            padding: 5px 10px;
            font-size: 14px;
            border-radius: 5px;
        }

        .bpackage-details {
            padding: 15px;
            width: 60%;
        }

        .bpackage-details h3 {
            margin: 0;
            font-size: 20px;
            color: blue;
        }

        .bpackage-details p {
            font-size: 14px;
            color: #555;
            margin: 5px 0;
        }

        .bicons {
            margin-top: 10px;
        }

        .bicons i {
            font-size: 18px;
            margin-right: 10px;
            color: #0056b3;
        }

        .bbook-now {
            background: rgb(16, 82, 31);
            color: white;
            padding: 9px 14px;
            border: none;
            cursor: pointer;
            font-size: 13px;
            margin-top: 2px;
            border-radius: 4px;
        }


        .bexchange-icon {
            font-size: 20px;
            color: orange;
            float: right;
            margin-top: 10px;
            cursor: pointer;
        }

        /* Related package_details */
        .related-package_details {
            margin-top: 2px;
            padding: 15px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .related-package_details h4 {
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

        .places-to-visit {
            text-align: center;
            padding: 40px 20px;
            background: #f9f9f9;
            margin-top: 40px;
        }

        .places-to-visit h2 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #333;
            font-weight: 500;
            font-family: system-ui;
            font-style: italic;
        }
            .places-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 15px;
                justify-content: center;
                padding: 10px;
            }

            .place-card {
                position: relative;
                overflow: hidden;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .place-card img {
                width: 100%;
                height: 180px;
                object-fit: cover;
                display: block;
                transition: transform 0.3s ease;
            }

            .place-card:hover img {
                transform: scale(1.1);
            }

            .place-name {
                position: absolute;
                bottom: 0;
                width: 100%;
                background: rgba(0, 86, 179, 0.8);
                color: white;
                text-align: center;
                padding: 10px 0;
                font-size: 16px;
                transition: background 0.3s ease;
            }

            .place-card:hover .place-name {
                background: rgba(0, 86, 179, 1);
            }

            .bdetails-btn {
                background: olive;
                color: white;
                padding: 9px 14px;
                border: none;
                cursor: pointer;
                font-size: 12px;
                margin-top: 2px;
                border-radius: 4px;
                font-family: 'Poppins', sans-serif;
                /* Beautiful modern font */
                margin-top: 10px;
                border-radius: 5px;
                transition: background 0.3s ease;
            }

            .bdetails-btn:hover {
                background: #0056b3;
            }
    </style>

</head>

<body>

    <div class="bcontainer">
        <!-- Left Section: Tour package_details -->
        <div class="btour-package_details">
            <div class="bpackage-card">
                <div class="bimage-container">
                    <img src="Image/to1.jpg" alt="Tour Image">
                    <span class="bbadge">5N | 6D</span>
                </div>
                <div class="bpackage-details">
                    <h3>Dooars 5 Nights | 6 Days</h3>
                    <p><i class="fa fa-id-card"></i> PACKAGE ID: DOR002</p>
                    <p><i class="fa fa-map-marker-alt"></i> 2N LATAGURI - 3N JALDAPARA</p>
                    <div class="bicons">
                        <i class="fa fa-plane"></i>
                        <i class="fa fa-car"></i>
                        <i class="fa fa-hotel"></i>
                    </div>
                    <a href="booking.php">
                        <button class="bbook-now">BOOK NOW</button>
                    </a>
                    <a href="package_details.php">
                        <button class="bdetails-btn">DETAILS</button>
                    </a>

                    <i class="fa fa-exchange-alt exchange-icon"></i>
                </div>
            </div>

            <div class="bpackage-card">
                <div class="bimage-container">
                    <img src="Image/top3.jpg" alt="Tour Image">
                    <span class="bbadge">5N | 6D</span>
                </div>
                <div class="bpackage-details">
                    <h3>Buxa 3 Nights | 8 Days</h3>
                    <p><i class="fa fa-id-card"></i> PACKAGE ID: DOR002</p>
                    <p><i class="fa fa-map-marker-alt"></i> 2N LATAGURI - 3N JALDAPARA</p>
                    <div class="bicons">
                        <i class="fa fa-plane"></i>
                        <i class="fa fa-car"></i>
                        <i class="fa fa-hotel"></i>
                    </div>
                    <a href="booking.php">
                        <button class="bbook-now">BOOK NOW</button>
                    </a>
                    <a href="package_details.php">
                        <button class="bdetails-btn">DETAILS</button>
                    </a>

                    <i class="fa fa-exchange-alt exchange-icon"></i>
                </div>
            </div>
        </div>

        <!-- Related package_details -->
        <div class="related-package_details">
            <h4>Related package </h4>
            <div class="package">
                <img src="Image/top3.jpg" alt="Bhutan Package">
                <div class="package-details">
                    <p>Lataguri - Murti - Jaldapara - Buxa - Jayanti</p>
                    <a href="package_details.php" class="btn-sm">View Details</a>
                </div>
            </div>
            <div class="package">
                <img src="Image/pg2.jpg" alt="Bhutan Package">
                <div class="package-details">
                    <p>Lataguri - Murti - Jaldapara - Buxa - Jayanti</p>
                    <a href="package_details.php" class="btn-sm">View Details</a>
                </div>
            </div>
            <div class="package">
                <img src="Image/pg3.jpg" alt="Bhutan Package">
                <div class="package-details">
                    <p>Lataguri - Murti - Jaldapara - Buxa - Jayanti</p>
                    <a href="package_details.php" class="btn-sm">View Details</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Places to Visit Section -->
    <section class="places-to-visit">
        <h2>PLACES TO VISIT</h2>
        <div class="places-grid">
            <div class="place-card">
                <img src="image/top1.jpg" alt="Mahananda">
                <div class="place-name">Mahananda</div>
            </div>
            <div class="place-card">
                <img src="image/top2.jpg" alt="Chapramari">
                <div class="place-name">Chapramari</div>
            </div>
            <div class="place-card">
                <img src="image/toto.jpg" alt="Suntalekhola">
                <div class="place-name">Suntalekhola</div>
            </div>
            <div class="place-card">
                <img src="image/top3.jpg" alt="Buxa">
                <div class="place-name">Buxa</div>
            </div>
            <div class="place-card">
                <img src="image/riv.jpg" alt="Pasakha">
                <div class="place-name">Pasakha</div>
            </div>
        </div>
    </section>
    </div>

    <?php include 'include/footer.php'; ?>
</body>

</html>