<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Admin Dashboard</title>

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
                    <h2>Hotels</h2>
                    <table class="table table-bordered table-striped">
                        <thead class="table-success">
                            <tr>
                                <th>Package ID</th>
                                <th>Package Name</th>
                                <th>Place ID</th>
                                <th>Hotel ID</th>
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
                                
                                
                                <td>2025-05-01</td>
                                <td>Beach Resort, 7 Days</td>
                                <td>
                                    <button class="btn btn-warning btn-sm" onclick="editUser(this)">Edit</button>
                                    <button class="btn btn-danger btn-sm" onclick="deleteUser(this)">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>P102</td>
                                <td>Mountain Adventure</td>
                                <td>Place102</td>
                                <td>Hotel102</td>
                               
                                <td>2025-06-15</td>
                                <td>Mountain Trekking, 5 Days</td>
                                <td>
                                    <button class="btn btn-warning btn-sm" onclick="editUser(this)">Edit</button>
                                    <button class="btn btn-danger btn-sm" onclick="deleteUser(this)">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>P103</td>
                                <td>City Tour</td>
                                <td>Place103</td>
                                <td>Hotel103</td>
                                
                                <td>2025-07-10</td>
                                <td>City Exploration, 3 Days</td>
                                <td>
                                    <button class="btn btn-warning btn-sm" onclick="editUser(this)">Edit</button>
                                    <button class="btn btn-danger btn-sm" onclick="deleteUser(this)">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>