<?php
$conn = new mysqli("localhost", "root", "", "hdtproject");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$res = $conn->query("SELECT * FROM user");

if (!$res) {
    die("Query failed: " . $conn->error); 
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Admin Panel</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
        }
        .sidebar {
            width: 200px;
            background: #333;
            color: white;
            padding: 15px;
            height: 100vh;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            padding: 10px;
            cursor: pointer;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        button {
            padding: 5px 10px;
            margin: 2px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <ul>
            <li>Dashboard</li>
            <li>Users</li>
            <li>Settings</li>
            <li>Logout</li>
        </ul>
    </div>
    <div class="content">
        <h1>User Management</h1>
        <input type="text" id="search" placeholder="Search Users..." onkeyup="searchUser()">
        <table>
            <thead>
                <tr>
                    <th>U_ID</th>
                    <th> U_Name</th>
                    <th> U_Email</th>
                    <th>U_Contact</th>
                    <th>U_Gender</th>
                    <th>U_Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="userTable">
                <?php while ($row = $res->fetch_assoc()): ?>

                <tr>
                    
                    <td><?php echo $row['user_id'];?></td>
                    <td><?php echo htmlspecialchars( $row['user_name']);?></td>
                    <td><?php echo htmlspecialchars( $row['user_contact']);?></td>
                    <td><?php echo htmlspecialchars( $row['user_gender']);?></td>
                    <td><?php echo htmlspecialchars( $row['user_email']);?></td>
                    <td><?php echo htmlspecialchars( $row['user_password']);?></td>
                    <td>
                        <button onclick="editUser(this)">Edit</button>
                        <button onclick="deleteUser(<?php echo $row['user_id'];?>)">Delete</button>
                    </td>
                </tr>
               <?php endwhile ;?>
            </tbody>
        </table>
    </div>
    <script>
        function searchUser() {
            let input = document.getElementById('search').value.toLowerCase();
            let rows = document.querySelectorAll('#userTable tr');
            rows.forEach(row => {
                let name = row.cells[1].textContent.toLowerCase();
                let email = row.cells[2].textContent.toLowerCase();
                if (name.includes(input) || email.includes(input)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }
        function editUser(button) {
            let row = button.parentNode.parentNode;
            let name = row.cells[1].textContent;
            let email = row.cells[2].textContent;
            alert('Edit User: ' + name + ' (' + email + ')');
        }
        function deleteUser(user_id) {
            if(confirm('do you want to delete this messege ?')){
            
            $.ajax({
                url:'deleteuser.php',
                type:'POST',
                data:{id:user_id},
                success:function(response){location.reload()};
            });
        }
            
    }
    </script>
</body>
</html>
