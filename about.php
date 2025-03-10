<?php include 'navbar.php'; ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Himalayan Dooars Tour</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .section {
            display: flex;
            justify-content: center;
            gap: 40px;
            padding: 50px 20px;
            text-align: center;
        }

        .card {
            text-align: center;
            max-width: 300px;
        }

        .card img {
            width: 100%;
            height: auto;
        }

        .btn {
            background-color: #00AEEF;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
            border-radius: 5px;
        }

        .about {
            background-color: #f9f9f9;
            padding: 50px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            text-align: left;
            max-width: 1200px;
            margin: auto;
        }

        .about-text {
            max-width: 600px;
            background: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .about img {
            width: 400px;
            height: auto;
            border-radius: 5px;
        }

        .about h2 {
            color: #0073e6;
        }

        .about p {
            line-height: 1.6;
        }
    </style>
</head>

<body>


    <section class="about">
        <div class="about-text">
            <h2>ABOUT <strong>HIMALAYAN DOOARS TOUR</strong></h2>
            <p>Welcome to the Himalayan Dooars Tour, which is located at Madarihat, a small village in the Alipurduar
                subdivision of Alipurduar district, West Bengal, India. This village is situated on the outskirts of
                Jaldapara National Park, famous for Indian rhinoceros. It is one of the main tourist spots in North
                Bengal, surrounded by tea gardens, forests, hills, and small rivers, having great diversity in the
                population. The local train station, Madarihat, is connected by the newly converted broad gauge New
                Jalpaiguri-Alipurduar-Samuktala Road Line, passing through the forests and tea gardens of North Bengal.
            </p>
        </div>
        <img src="Image/tra1.png" alt="Jaldapara Nature Retreats">
    </section>

    <section class="section">
        <div class="card">
            <img src="Image/ab.png" alt="Travel Booking">
            <p>Book your travel destination without any tension</p>
        </div>
        <div class="card">
            <img src="Image/tra2.jpg" alt="Easy Booking">
            <p>It's easy to book, Let's do travel with HDT</p>
            <a href="contact.php" class="btn">Click to know more</a>
        </div>
        <div class="card">
            <img src="Image/tra3.jpg" alt="Family Travel">
            <p>Enjoy travel with your family with HDT</p>
        </div>
    </section>


    <?php include 'include/footer.php'; ?>
</body>

</html>