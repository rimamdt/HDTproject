<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dooars Tour Payment</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            color: #2c3e50;
            background: linear-gradient(to right, #e0f7fa, #80cbc4);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 900px;
            width: 100%;
            background: rgba(202, 193, 193, 0.95);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(34, 139, 34, 0.4);
        }

        .payment-image {
            width: 100%;
            max-width: 400px;
            height: auto;
            margin-right: 20px;
        }

        .payment-container {
            flex: 1;
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
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #145A32;
            transform: scale(1.07);
        }

        .swal2-popup {
            font-size: 1.2em !important;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="container">
        <img src="Image/pay.png" alt="Payment Illustration" class="payment-image">
        <div class="payment-container">
            <h2 class="section-title">Payment</h2>
            <form onsubmit="processPayment(event)">
                <div class="mb-3">
                    <label class="form-label">Cardholder Name</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Card Number</label>
                    <input type="text" class="form-control" maxlength="16" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Expiration Date</label>
                    <input type="month" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">CVV</label>
                    <input type="password" class="form-control" maxlength="3" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Pay Now</button>
            </form>
        </div>
    </div>
    <script>
        function processPayment(event) {
            event.preventDefault();
            Swal.fire({
                icon: 'success',
                title: 'Thank You!!',
                text: 'Your Booking Is Sucessfull',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = 'index.php';
            });
        }
    </script>
</body>

</html>