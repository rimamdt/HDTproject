<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dooars Tour History</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #e0f7fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 80%;
            max-width: 900px;
        }
        h2 {
            color: #00796b;
            font-size: 28px;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
            border-radius: 10px;
            overflow: hidden;
        }
        th, td {
            padding: 15px;
            text-align: center;
        }
        th {
            background-color: #00796b;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f1f1f1;
        }
        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 24px;
            background-color: #00796b;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 16px;
            transition: 0.3s;
        }
        .btn:hover {
            background-color: #004d40;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Your Dooars Tour History</h2>
        <table>
            <tr>
                <th>Package Name</th>
                <th>Travel Date</th>
                <th>Booking Status</th>
            </tr>
            <tr>
                <td>Jungle Safari</td>
                <td>2025-03-20</td>
                <td>Confirmed</td>
            </tr>
            <tr>
                <td>Tea Garden Tour</td>
                <td>2025-04-05</td>
                <td>Pending</td>
            </tr>
            <tr>
                <td>River Rafting</td>
                <td>2025-05-10</td>
                <td>Cancelled</td>
            </tr>
            <tr>
                <td>Jaldapara Wildlife Safari</td>
                <td>2025-06-15</td>
                <td>Confirmed</td>
            </tr>
            <tr>
                <td>Bhutan Cultural Tour</td>
                <td>2025-07-08</td>
                <td>Pending</td>
            </tr>
            <tr>
                <td>Darjeeling Hill Station Trip</td>
                <td>2025-08-20</td>
                <td>Confirmed</td>
            </tr>
        </table>
        <a href="index.php" class="btn">Back to Home</a>
    </div>
</body>
</html>
