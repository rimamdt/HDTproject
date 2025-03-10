<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourist Admin Dashboard</title>
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

.tourists-list {
    margin-top: 20px;
}

.tourists-list table {
    width: 100%;
    border-collapse: collapse;
}

.tourists-list th, .tourists-list td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.tourists-list th {
    background-color: #f4f4f4;
}

.tourists-list tr:hover {
    background-color: #f9f9f9;
}

    </style>
</head>
<body>

    <div class="sidebar">
        <h2>Tourist Admin</h2>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Tourists</a></li>
            <li><a href="#">Activities</a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Settings</a></li>
        </ul>
    </div>

    <div class="content">
        <header>
            <h1>Dashboard</h1>
        </header>

        <div class="stats">
            <div class="stat">
                <h3>Total Tourists</h3>
                <p>150</p>
            </div>
            <div class="stat">
                <h3>Total Bookings</h3>
                <p>320</p>
            </div>
            <div class="stat">
                <h3>Active Tourists</h3>
                <p>90</p>
            </div>
        </div>

        <div class="tourists-list">
            <h2>Recent Tourists</h2>
            <table>
                <thead> 
                    <tr>
                        <th>t_id</th>
                        <th>t_Name</th>
                        <th>t_Email</th>
                        <th>t_contact</th>
                        <th>t_gender</th>
                        <th>t_age</th>
                        <th>t_address</th>
                        <th>t_iddentity card</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>1</td>
                        <td>rima</td>
                        <td>rima@example.com</td>
                        <td>555555555</td>
                        <td>female</td>
                        <td>20</td>
                        <td>madarihat</td>
                        <td>voter id</td>
                        <td>
                        <button onclick="editUser(this)">Edit</button>
                        <button onclick="deleteUser(this)">Delete</button>
                    </td>
                    </tr>
                    <tr>
                    <td>1</td>
                        <td>rima</td>
                        <td>rima@example.com</td>
                        <td>555555555</td>
                        <td>female</td>
                        <td>20</td>
                        <td>madarihat</td>
                        <td>voter id</td>
                        <td>
                        <button onclick="editUser(this)">Edit</button>
                        <button onclick="deleteUser(this)">Delete</button>
                    </td>
                    </tr>
                    <tr>
                    <td>1</td>
                        <td>rima</td>
                        <td>rima@example.com</td>
                        <td>555555555</td>
                        <td>female</td>
                        <td>20</td>
                        <td>madarihat</td>
                        <td>voter id</td>
                        <td>
                        <button onclick="editUser(this)">Edit</button>
                        <button onclick="deleteUser(this)">Delete</button>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
