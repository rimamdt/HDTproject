<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('image/reg1.jpg') no-repeat center center/cover;
            font-family: Arial, sans-serif;
        }
        .container {
            background:transparent;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .form-control {
            border-radius: 10px;
        }
        .btn-custom {
            background-color:seagreen;
            color: white;
            font-weight: bold;
            transition: 0.3s;
            border-radius: 10px;
        }
        .btn-custom:hover {
            background-color:yellow;
        }
        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">Tourism Registration</h1>
        <form id="registrationForm">
            <div class="mb-3">
                <label class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
                <span id="name_error" class="error"></span>
            </div>
            <div class="mb-3">
                <label class="form-label">Email:</label>
                <div class="input-group">
                    <input type="email" class="form-control" id="email" name="email">
                    <button type="button" class="btn btn-custom" onclick="email_sent_otp()">Send OTP</button>
                </div>
                <span id="email_error" class="error"></span>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="email_otp" placeholder="Enter OTP">
                <button type="button" class="btn btn-custom w-100 mt-2" onclick="email_verify_otp()">Verify OTP</button>
            </div>
            <div class="mb-3">
                <label class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
                <span id="password_error" class="error"></span>
            </div>
            <button type="button" class="btn btn-custom w-100" onclick="user_register()">Register</button>
            <div class="mt-3 text-success" id="register_msg"></div>
        </form>
    </div>
    
    <script>
        function email_sent_otp() {
            $('#email_error').html('');
            var email = $('#email').val().trim();
            if (email === '') {
                $('#email_error').html('Please enter an email ID');
                return;
            }
            $('.btn-custom').text('Sending..').prop('disabled', true);
            $.post('send_otp.php', { email: email, type: 'email' }, function(result) {
                if (result.trim() === 'done') {
                    alert('OTP sent successfully!');
                } else {
                    $('#email_error').html('Failed to send OTP. Try again.');
                }
                $('.btn-custom').text('Send OTP').prop('disabled', false);
            });
        }

        function email_verify_otp() {
            var email_otp = $('#email_otp').val().trim();
            if (email_otp === '') {
                alert('Please enter OTP');
                return;
            }
            $.post('check_otp.php', { otp: email_otp, type: 'email' }, function(result) {
                if (result.trim() === 'done') {
                    alert('OTP verified!');
                } else {
                    alert('Invalid OTP. Try again.');
                }
            });
        }

        function user_register() {
            $('#register_msg').html('');
            var name = $('#name').val().trim();
            var email = $('#email').val().trim();
            var password = $('#password').val().trim();
            if (name === '' || email === '' || password === '') {
                alert('Please fill all fields');
                return;
            }
            $.post('register_submit.php', { name: name, email: email, password: password }, function(result) {
                if (result.trim() === 'insert') {
                    $('#register_msg').html('Registration Successful!');
                    setTimeout(() => window.location.href = 'login.php', 1000);
                } else {
                    alert('Registration failed. Try again.');
                }
            });
        }
    </script>
</body>
</html>