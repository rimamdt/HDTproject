
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('image/log4.jpg') no-repeat center center/cover;
            font-family: Arial, sans-serif;
            position: relative;
        }
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* background: rgba(0, 0, 0, 0.5); */
        }
        .wrapper {
            background: transparent;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            width: 350px;
            text-align: center;
            position: relative;
            z-index: 1;
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        h1 {
            margin-bottom: 20px;
            font-size: 26px;
            color: #333;
        }
        .input-box {
            position: relative;
            margin-bottom: 15px;
        }
        .input-box input {
            width: 100%;
            padding: 12px;
            padding-left: 40px;
            border: 1px solid #ddd;
            border-radius: 8px;
            outline: none;
            transition: 0.3s;
        }
        .input-box input:focus {
            border-color:whitesmoke;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.3);
        }
        .input-box i {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: gray;
        }
        .btn {
            background: #007BFF;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }
        .btn:hover {
            background: #0056b3;
        }
        .signup-link {
            margin-top: 15px;
            color:white;
        }
        .signup-link a {
            color: #007BFF;
            text-decoration: none;
            font-weight: bold;
        }
        .signup-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <form method="POST">
            <h1>Login</h1>
            <div class="input-box">
                <input class="inputStyle" type="email"  name="email" placeholder="Email" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input class="inputStyle" type="password" name="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div style="display: flex; justify-content: space-between; flex-direction: row; margin-bottom: 10px;">
                <div class="remember-forget">
                    <label><input type="checkbox"> Remember</label>
                </div>
                <div>
                    <a href="#" style="color:white;">Forgot Password?</a>
                </div>
            </div>
            <button type="submit"name="submit" class="btn">Login</button>
            <div class="signup-link">
                <p>Don't have an account? <a href="signUp.php">Sign up</a></p>
            </div>
        </form>
    </div>
</body>
</html>
