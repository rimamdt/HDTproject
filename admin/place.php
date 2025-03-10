<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <style>* {
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

.places-list {
    margin-top: 20px;
}

.places-list table {
    width: 100%;
    border-collapse: collapse;
}

.places-list th, .places-list td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.places-list th {
    background-color: #f4f4f4;
}

.places-list tr:hover {
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
        <h2>Place Admin</h2>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Places</a></li>
            <li><a href="#">Bookings</a></li>
            <li><a href="#">Reviews</a></li>
            <li><a href="#">Settings</a></li>
        </ul>
    </div>

    <div class="content">
        <header>
            <h1>Place Management</h1>
        </header>

        <div class="stats">
            <div class="stat">
                <h3>Total Places</h3>
                <p>45</p>
            </div>
            <div class="stat">
                <h3>Active Places</h3>
                <p>30</p>
            </div>
            <div class="stat">
                <h3>Inactive Places</h3>
                <p>15</p>
            </div>
        </div>

        <div class="places-list">
            <h2>Manage Places</h2>
            <table>
                <thead>
                    <tr>
                    <th>p_id</th>
                        <th>p_Name</th>
                        <th>p_description</th>
                        <th>p_address</th>
                        <th>p_tour season</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mountain</td>
                        <td>Himalayas</td>
                        <td>Mount Everest</td>
                        <td>2023</td>
                
                        <td>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Mountain</td>
                        <td>Himalayas</td>
                        <td>Mount Everest</td>
                        <td>2023</td>
                       
                        <td>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Mountain</td>
                        <td>Himalayas</td>
                        <td>Mount Everest</td>
                        <td>2023</td>
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
