
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dooars Tour Booking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            color: #2c3e50;
            background: #f8f9fa;
        }
        .booking-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(34, 139, 34, 0.4);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }
        .booking-container:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 30px rgba(34, 139, 34, 0.6);
        }
        .section-title {
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
            color: #145A32;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .btn-primary {
            background-color: #1E8449;
            border: none;
            transition: background 0.3s ease, transform 0.2s ease;
            font-size: 18px;
            padding: 12px;
            border-radius: 10px;
        }
        .btn-primary:hover {
            background-color: #145A32;
            transform: scale(1.07);
        }
        .booking-image {
            width: 100%;
            max-width: 500px;
            height: auto;
        }
        .suggestion-box {
            position: absolute;
            background: white;
            border: 1px solid #ccc;
            max-height: 150px;
            overflow-y: auto;
            width: 100%;
            display: none;
        }
        .suggestion-box div {
            padding: 8px;
            cursor: pointer;
        }
        .suggestion-box div:hover {
            background-color: #f1f1f1;
        }
        #typingEffect {
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            color: #1E8449;
            min-height: 30px;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-md-6 text-center">
                <img src="Image/boook.png" alt="Booking Illustration" class="img-fluid booking-image">
            </div>
            <div class="col-md-6">
                <div class="booking-container p-4">
                    <h2 class="section-title">Tour Booking</h2>
                    <form onsubmit="showWelcome(event)">
                        <div class="mb-3 position-relative">
                            <label class="form-label">Select Package</label>
                            <input type="text" class="form-control" id="selectedPackage" autocomplete="off" onkeyup="searchPackages()">
                            <div class="suggestion-box" id="suggestionBox"></div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No. of Adults</label>
                            <input type="number" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No. of Children</label>
                            <input type="number" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Travel Date</label>
                            <input type="date" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mt-3">Confirm Booking</button>
                    </form>
                    <div id="typingEffect"></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const urlParams = new URLSearchParams(window.location.search);
            const packageName = urlParams.get("package");
            if (packageName) {
                document.getElementById("selectedPackage").value = packageName;
            }
        });

        function showWelcome(event) {
            event.preventDefault();
            const text = "Thank You!! We will shortly connect with you";
            let index = 0;
            const typingEffect = document.getElementById("typingEffect");
            typingEffect.innerHTML = "";
            function typeText() {
                if (index < text.length) {
                    typingEffect.innerHTML += text.charAt(index);
                    index++;
                    setTimeout(typeText, 50);
                } else {
                    setTimeout(() => {
                        window.location.href = 'payment.php';
                    }, 2000);
                }
            }
            typeText();
        }

        function searchPackages() {
            const input = document.getElementById("selectedPackage").value.toLowerCase();
            const suggestionBox = document.getElementById("suggestionBox");
            const packages = ["Jungle Safari", "River Rafting", "Wildlife Tour", "Tea Garden Visit", "Mountain Trekking"];
            
            let filtered = packages.filter(pkg => pkg.toLowerCase().includes(input));
            
            if (filtered.length > 0) {
                suggestionBox.innerHTML = filtered.map(pkg => `<div onclick="selectPackage('${pkg}')">${pkg}</div>`).join('');
                suggestionBox.style.display = "block";
            } else {
                suggestionBox.style.display = "none";
            }
        }
        
        function selectPackage(name) {
            document.getElementById("selectedPackage").value = name;
            document.getElementById("suggestionBox").style.display = "none";
        }
    </script>
</body>
</html>