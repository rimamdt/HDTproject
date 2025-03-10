<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Details Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #333;
            color: white;
            padding-top: 20px;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar ul {
            list-style: none;
        }

        .sidebar ul li {
            margin: 20px 0;
            text-align: center;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            display: block;
            padding: 10px;
        }

        .sidebar ul li a:hover {
            background-color: #555;
        }

        .content {
            flex: 1;
            padding: 20px;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        header h1 {
            font-size: 24px;
        }

        .stats {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
        }

        .stat {
            background-color: #f4f4f4;
            padding: 20px;
            text-align: center;
            width: 30%;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .stat h3 {
            font-size: 18px;
            color: #333;
        }

        .stat p {
            font-size: 24px;
            font-weight: bold;
            color: #2ecc71;
        }

        .bookings-list {
            margin-top: 20px;
        }

        .bookings-list table {
            width: 100%;
            border-collapse: collapse;
        }

        .bookings-list th, .bookings-list td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .bookings-list th {
            background-color: #f4f4f4;
        }

        .bookings-list tr:hover {
            background-color: #f9f9f9;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 8px 16px;
            cursor: pointer;
            margin-right: 5px;
            border-radius: 4px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <h2>Booking Admin</h2>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Bookings</a></li>
            <li><a href="#">Packages</a></li>
            <li><a href="#">Customers</a></li>
            <li><a href="#">Reviews</a></li>
            <li><a href="#">Settings</a></li>
        </ul>
    </div>

    <div class="content">
        <header>
            <h1>Booking Details Management</h1>
        </header>

        <div class="stats">
            <div class="stat">
                <h3>Total Bookings</h3>
                <p>200</p>
            </div>
            <div class="stat">
                <h3>Upcoming Bookings</h3>
                <p>50</p>
            </div>
            <div class="stat">
                <h3>Completed Bookings</h3>
                <p>150</p>
            </div>
        </div>

        <div class="bookings-list">
            <h2>Manage Bookings</h2>
            <table>
                <thead>
                    <tr>
                        <th>Booking ID</th>
                        <th>Tour Cost</th>
                        <th>Tour Date</th>
                        <th>Package Type</th>
                        <th>Tour Type</th>
                        <th>Tourist Contact</th>
                        <th>Payment Type</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>B101</td>
                        <td>$200</td>
                        <td>2025-05-10</td>
                        <td>Luxury</td>
                        <td>Adventure</td>
                        <td>+1234567890</td>
                        <td>Credit Card</td>
                        <td>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>B102</td>
                        <td>$150</td>
                        <td>2025-06-15</td>
                        <td>Standard</td>
                        <td>City Tour</td>
                        <td>+0987654321</td>
                        <td>PayPal</td>
                        <td>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>B103</td>
                        <td>$180</td>
                        <td>2025-07-20</td>
                        <td>Premium</td>
                        <td>Nature</td>
                        <td>+1122334455</td>
                        <td>Bank Transfer</td>
                        <td>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    <script src="script.js"></script>
</body>
</html>
