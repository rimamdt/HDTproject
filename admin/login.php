<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Himalayan Dooars Tour</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            background: #fbeee6;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            /* background: #c4b8b8; */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        .image-section {
            padding-right: 20px;
        }
        .image-section img {
            width: 300px;
            border-radius: 10px;
        }
        .form-section {
            width: 100%;
        }
        .form-section h2 {
            text-align: center;
            color: #2d4d22;
            margin-bottom: 20px;
        }
        .input-group {
            margin-bottom: 15px;
        }
        .input-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .btn {
            width: 100%;
            padding: 10px;
            background: #2d4d22;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }
        .btn:hover {
            background: #1f3415;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="image-section">
            <img src="https://img.freepik.com/free-vector/forgot-password-concept-illustration_114360-1123.jpg?uid=R189501572&ga=GA1.1.1003562026.1740722884&semt=ais_hybrid" alt="Travel">
        </div>
        <div class="form-section">
            <h2>ADMIN LOGIN</h2>
            <form>
                <div class="input-group">
                    <label>Email or Username</label>
                    <input type="text" placeholder="Enter email or username" required>
                </div>
                <div class="input-group">
                    <label>Password</label>
                    <input type="password" placeholder="Enter password" required>
                </div>
                <button type="submit" class="btn">Login</button>
            </form>
        </div>
    </div>
</body>
</html>







