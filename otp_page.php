<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP</title>
    <style>
        body { background-color: #f8f9fa; }
        .container { max-width: 400px; margin: 50px auto; padding: 20px; background: white; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0,0,0,0.1); }
        h2 { text-align: center; margin-bottom: 20px; }
        input { width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ddd; border-radius: 5px; }
        button { width: 100%; padding: 10px; background: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; }
        button:hover { background: #0056b3; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Enter OTP</h2>
        <form id="otp-form">
            <input type="text" id="otp" name="otp" placeholder="Enter OTP" required>
            <button type="submit">Verify</button>
        </form>
    </div>

    <script>
        document.getElementById("otp-form").addEventListener("submit", function(event) {
            event.preventDefault();
            let otp = document.getElementById("otp").value;

            fetch("verify_otp.php", {
                method: "POST",
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                body: "otp=" + otp
            })
            .then(response => response.text())
            .then(data => {
                console.log(data); // Debugging output
                if (data.trim() === "verified") {
                    alert("Signup successful!");
                    window.location.href = "login.php";
                } else if (data.trim() === "db_error") {
                    alert("Database error. Try again.");
                } else if (data.trim() === "session_expired") {
                    alert("Session expired. Please sign up again.");
                    window.location.href = "signup.html";
                } else {
                    alert("Invalid OTP. Try again.");
                }
            })
            .catch(error => console.error("Error:", error));
        });
    </script>
</body>
</html>
