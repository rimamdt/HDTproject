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
    <title>Tourism Admin Dashboard - Users</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <nav id="sidebar" class="bg-success p-3">
            <h3 class="text-white">HDT TOURS</h3>
            <div style="max-height: 380px; overflow-y: scroll;">
                <ul class="list-unstyled">
                    <li class="active"><a href="index.php" class="text-white"><i class="fas fa-home"></i> Dashboard</a>
                    </li>
                    <li><a href="Tourist.php" class="text-white"><i class="fa-solid fa-person"></i> Tourists</a></li>
                    <li><a href="user.php" class="text-white"><i class="fa-regular fa-user"></i> Users</a></li>
                    <li><a href="Hotel.php" class="text-white"><i class="fas fa-hotel"></i> Hotels</a></li>
                    <li><a href="Place.php" class="text-white"><i class="fas fa-map-marker-alt"></i> Places</a></li>
                    <li><a href="Package.php" class="text-white"><i class="fa-solid fa-gift"></i> Packages</a></li>
                    <li><a href="Booking Details.php" class="text-white"><i class="fa-solid fa-calendar-check"></i>
                            Booking Details</a></li>

                    <li><a href="profile.php" class="text-white"><i class="fa-regular fa-user"></i> Profile</a></li>
                    <li><a href="settings.php" class="text-white"><i class="fas fa-cog"></i> Settings</a></li>
                </ul>
            </div>
            <div class="upgrade-box text-white p-3 mt-4">
                <button class="btn btn-light">Explore More</button>
            </div>
        </nav>

        <!-- Main Content -->
        <div class="container-fluid p-4">
            <!-- Top Bar -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="fw-bold" style="color:#28a745;">Tourism Hotels Management</h4>
                <div class="d-flex align-items-center gap-3">
                    <!-- Messages Button -->
                    <div class="position-relative">
                        <button class="icon-btn" onclick="window.location.href='massage.php'"
                            style="border: none; background-color: transparent;">
                            <i class="fas fa-comment text-success fs-4"></i>
                        </button>
                        <span class="badge bg-danger position-absolute top-0 start-100 translate-middle">3</span>
                    </div>

                    <!-- Notifications Button -->
                    <div class="position-relative">
                        <button class="icon-btn" onclick="window.location.href='notifications.php'"
                            style="border: none; background-color: transparent;">
                            <i class="fas fa-bell text-success fs-4"></i>
                        </button>
                        <span class="badge bg-danger position-absolute top-0 start-100 translate-middle">3</span>
                    </div>

                    <!-- Profile Dropdown -->
                    <div class="dropdown">
                        <button class="profile-btn dropdown-toggle d-flex align-items-center" type="button"
                            data-bs-toggle="dropdown" style="border: none; background-color: transparent;">
                            <img src="media/women.png" alt="Profile" class="profile-img"
                                style="width: 40px; height: 40px; border-radius: 50%; border: 2px solid #28a745;">
                            <span class="ms-2 text-white">Admin</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="profile.php"><i
                                        class="fas fa-user-circle text-success"></i> My Profile</a></li>
                            <li><a class="dropdown-item" href="settings.php"><i class="fas fa-cog text-success"></i>
                                    Settings</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-danger" href="index.php"><i
                                        class="fas fa-sign-out-alt"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Search Box -->
            <div class="search-box input-group w-50 mb-3">
                <input type="text" id="searchBill" class="form-control" placeholder="Search Tours...">
                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
            </div>

            <!-- Content Section -->
            <div class="content">
    <div class="tourists-list mt-4">
        <h2>Users</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-success">
                <tr>
                    <th>U_ID</th>
                    <th>U_Name</th>
                    <th>U_Email</th>
                    <th>U_Contact</th>
                    <th>U_Gender</th>
                    <th>U_Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="userTable">
                <?php while ($row = $res->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['Id']; ?></td>
                        <td><?php echo htmlspecialchars($row['Name']); ?></td>
                        <td><?php echo htmlspecialchars($row['Email']); ?></td>
                          <td><?php echo htmlspecialchars($row['Password']); ?></td>
                        <td><?php echo htmlspecialchars($row['contact']); ?></td>
                        <td><?php echo htmlspecialchars($row['gender']); ?></td>
                      
                        <td>
                            <button class="btn btn-warning btn-sm" onclick="editUser(<?php echo $row['Id']; ?>)">Edit</button>
                            <button class="btn btn-danger btn-sm" onclick="deleteUser(<?php echo $row['Id']; ?>)">Delete</button>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

        function edituser(id) {
            if (confirm('Do you want to delete this user?')) {
                $.ajax({
                    url: 'edituser.php',
                    type: 'POST',
                    data: { id: id },
                    success: function(response) {
                        alert(response);
                        location.reload();
                    },
                    error: function() {
                        alert("Failed to edit user.");
                    }
                });
            }
        }
            // Here, redirect to the edit page or open a modal to edit user details
        }

        function deleteUser(id) {
            if (confirm('Do you want to delete this user?')) {
                $.ajax({
                    url: 'deleteuser.php',
                    type: 'POST',
                    data: { id: id },
                    success: function(response) {
                        alert(response);
                        location.reload();
                    },
                    error: function() {
                        alert("Failed to delete user.");
                    }
                });
            }
        }
    </script>
</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>