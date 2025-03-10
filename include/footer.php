<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Himalayan Dooars Tour - Footer</title>

    <style>
    #chat-icon {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: #008CBA;
        color: white;
        padding: 10px;
        border-radius: 50%;
        cursor: pointer;
    }

    .footer {
        background: rgba(0, 0, 0, 0.8);
        color: #fff;
        padding: 20px;
        margin-top: 30px;
        text-align: center;
    }

    .footer .links a {
        color: #FFD700;
        margin: 0 10px;
        text-decoration: none;
    }

    .footer .social-icons {
        margin-top: 10px;
    }

    .footer .social-icons img {
        width: 30px;
        margin: 0 5px;
    }

    .footer .contact-info {
        margin: 10px;
        font-size: 14px;
    }


    .footer-subscription {
        color: black;
        margin-bottom: 20px;
        width: 100%;
    }

    .footer-subscription-heading {
        font-size: 22px;
        font-weight: bold;
        margin-bottom: 10px;
        text-transform: uppercase;
        color: white;
    }

    .footer-subscription-text {
        font-size: 18px;
        margin-bottom: 15px;
        color: white;
    }

    .footer-input {
        padding: 8px 12px;
        font-size: 18px;
        border: 1px solid #fff;
        border-radius: 5px;
        width: 280px;
        text-align: center;
    }

    .subscribe-button {
        padding: 10px 16px;
        font-size: 18px;
        border: none;
        background-color: white;
        color: seagreen;
        cursor: pointer;
        border-radius: 5px;
        margin-left: 8px;
        font-weight: bold;
    }

    .subscribe-button:hover {
        background-color: #e9e9e9;
    }

    .contactStyle {
        margin: 0px;
        padding: 0px;
    }

    .lastStyle {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #191970;
        height: 50px;
        width: 100%;
        border-radius:10px;
        margin-top:5px;
    }
    .reserved{
        margin:0px;
        margin-left:10px;
    }
    .develop{
        margin:0px;
        margin-right:10px;
    }
    </style>
</head>

<body>
    <!-- Live Chat -->
    <div id="chat-icon">💬</div>
    <footer class="footer">
        <section class="footer-subscription">
            <p class="footer-subscription-heading">
                Join Our Community & Get the Best Vacation Deals!
            </p>
            <p class="footer-subscription-text">
                Subscribe to our newsletter for exclusive offers.
            </p>
            <div class="input-areas">
                <form>
                    <input class="footer-input" name="email" type="email" placeholder="Enter Your Email" required />
                    <button type="submit" class="subscribe-button">Subscribe</button>
                </form>
            </div>
        </section>

        <div class="contact-info">
            <p class="contactStyle">Email: contact@hdt.com</p>
            <p class="contactStyle">Phone: +123 456 7890</p>
            <p class="contactStyle">Address: 123 Street, City, Country</p>
        </div>
        <div class="links">
            <a href="about.php">About Us</a> |
            <a href="contact.php">Contact</a> |
            <a href="about.php">Terms & Conditions</a> |
            <a href="#">Privacy Policy</a>
        </div>
        <div class="lastStyle">
            <p class="reserved">&copy; 2025 Himalayan Dooars Tour | All Rights Reserved</p>
            <p class="develop">Designed & Developed by Rima Das...</p>
        </div>
    </footer>

    <!-- Footer -->
    <script>
    document.getElementById("chat-icon").addEventListener("click", function() {
        alert("Live chat coming soon!");
    });
    </script>
</body>

</html>