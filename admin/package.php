<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages Admin Dashboard</title>
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

        .packages-list {
            margin-top: 20px;
        }

        .packages-list table {
            width: 100%;
            border-collapse: collapse;
        }

        .packages-list th, .packages-list td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .packages-list th {
            background-color: #f4f4f4;
        }

        .packages-list tr:hover {
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
        <h2>Packages Admin</h2>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Packages</a></li>
            <li><a href="#">Bookings</a></li>
            <li><a href="#">Customers</a></li>
            <li><a href="#">Reviews</a></li>
            <li><a href="#">Settings</a></li>
        </ul>
    </div>

    <div class="content">
        <header>
            <h1>Package Management</h1>
        </header>

        <div class="stats">
            <div class="stat">
                <h3>Total Packages</h3>
                <p>30</p>
            </div>
            <div class="stat">
                <h3>Available Packages</h3>
                <p>18</p>
            </div>
            <div class="stat">
                <h3>Total Bookings</h3>
                <p>200</p>
            </div>
        </div>

        <div class="packages-list">
            <h2>Manage Packages</h2>
            <table>
                <thead>
                    <tr>
                        <th>Package ID</th>
                        <th>Package Name</th>
                        <th>Place ID</th>
                        <th>Hotel ID</th>
                        <th>Vehicle ID</th>
                        <th>Advance Payment</th>
                        <th>Package Date</th>
                        <th>Package Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>P101</td>
                        <td>Holiday Package</td>
                        <td>Place101</td>
                        <td>Hotel101</td>
                        <td>V101</td>
                        <td>$150</td>
                        <td>2025-05-01</td>
                        <td>Beach Resort, 7 Days</td>
                        <td>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>P102</td>
                        <td>Mountain Adventure</td>
                        <td>Place102</td>
                        <td>Hotel102</td>
                        <td>V102</td>
                        <td>$200</td>
                        <td>2025-06-15</td>
                        <td>Mountain Trekking, 5 Days</td>
                        <td>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>P103</td>
                        <td>City Tour</td>
                        <td>Place103</td>
                        <td>Hotel103</td>
                        <td>V103</td>
                        <td>$100</td>
                        <td>2025-07-10</td>
                        <td>City Exploration, 3 Days</td>
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
