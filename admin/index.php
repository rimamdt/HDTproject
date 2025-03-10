<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body> 
    <!-- Sidebar -->
    <div class="d-flex">
        <nav id="sidebar" class="bg-success p-3">
            <h3 class="text-white">HDT TOURS</h3>
            <div style="max-height: 380px; overflow-y: scroll;">
                <ul class="list-unstyled">
                    <li class="active"><a href="index.php" class="text-white"><i class="fas fa-home"></i> Dashboard</a></li>
                    <li><a href="Tourist.php" class="text-white"><i class="fa-solid fa-person"></i> Tourists</a></li>
                    <li><a href="user.php" class="text-white"><i class="fa-regular fa-user"></i> Users</a></li>
                    <li><a href="Hotel.php" class="text-white"><i class="fas fa-hotel"></i> Hotels</a></li>
                    <li><a href="Vehicle.php" class="text-white"><i class="fa-solid fa-car"></i> Vehicles</a></li>
                    <li><a href="Place.php" class="text-white"><i class="fas fa-map-marker-alt"></i> Places</a></li>
                    <li><a href="Package.php" class="text-white"><i class="fa-solid fa-gift"></i> Packages</a></li>
                    <li><a href="Booking Details.php" class="text-white"><i class="fa-solid fa-calendar-check"></i> Booking Details</a></li>
                    <li><a href="notifications.php" class="text-white"><i class="fas fa-bell"></i> Notifications</a></li>
                    <li><a href="profile.php" class="text-white"><i class="fa-regular fa-user"></i> Profile</a></li>
                    <li><a href="settings.php" class="text-white"><i class="fas fa-cog"></i> Settings</a></li>
                </ul>
            </div>
            <div class="upgrade-box text-white p-3 mt-4">
                <!-- <p>Upgrade your account for exclusive deals!</p> -->
                <button class="btn btn-light">Explore More</button>
            </div>
        </nav>

        <!-- Main Content -->
        <div class="container-fluid p-4">
<!-- Top Bar -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <!-- Title Section -->
    <h4 class="fw-bold" style="color:#28a745;">Tourism Dashboard</h4>

    <!-- Action Buttons -->
    <div class="d-flex align-items-center gap-3">

        <!-- Messages Button with Badge -->
        <div class="position-relative">
            <button class="icon-btn" onclick="window.location.href='massage.php'" style="transition: 0.3s; padding: 10px; border: none; background-color: transparent;">
                <i class="fas fa-comment" style="font-size: 20px; color: #28a745;"></i>
            </button>
            <span class="badge bg-danger position-absolute top-0 start-100 translate-middle" style="color:#fff;">3</span>
        </div>

        <!-- Notifications Button with Badge -->
        <div class="position-relative">
            <button class="icon-btn" onclick="window.location.href='notifications.php'" style="transition: 0.3s; padding: 10px; border: none; background-color: transparent;">
                <i class="fas fa-bell" style="font-size: 20px; color: #28a745;"></i>
            </button>
            <span class="badge bg-danger position-absolute top-0 start-100 translate-middle" style="color:#fff;">3</span>
        </div>

        <!-- Profile Section with Dropdown -->
        <div class="dropdown">
            <button class="profile-btn dropdown-toggle d-flex align-items-center" type="button" data-bs-toggle="dropdown" style="transition: 0.3s; border: none; background-color: transparent;">
                <img src="medial/women.png" alt="Profile" class="profile-img" style="width: 40px; height: 40px; border-radius: 50%; border: 2px solid #28a745;">
                <span class="ms-2 text-white" style="font-size: 16px;">Admin</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-end" style="transition: 0.3s;">
                <li><a class="dropdown-item" href="profile.php"><i class="fas fa-user-circle" style="color: #28a745;"></i> My Profile</a></li>
                <li><a class="dropdown-item" href="settings.php"><i class="fas fa-cog" style="color: #28a745;"></i> Settings</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-danger" href="index.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </div>

    </div>
</div>




            <!-- Search Box -->
            <div class="search-box input-group w-50 mb-3">
                <input type="text" id="searchBill" class="form-control" placeholder="Search Tours...">
                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
            </div>

            <!-- Action Buttons -->
            <div style="max-height: 460px; overflow-y: scroll;">
                <div class="row mt-4 justify-content-center">
                    <div class="col-md-3 mb-3">
                        <button class="btn btn-success btn-block btn-lg action-btn">Add New Tour</button>
                    </div>
                    <div class="col-md-3 mb-3">
                        <button class="btn btn-primary btn-block btn-lg action-btn">View Packages</button>
                    </div>
                    <div class="col-md-3 mb-3">
                        <button class="btn btn-danger btn-block btn-lg action-btn">View Reviews</button>
                    </div>
                </div>

                <!-- Stats Cards -->
                <!-- Card Section with New Layout and Design -->
<div class="container mt-4">
    <div class="row">
        <!-- Total Bookings Card -->
        <div class="col-md-3 mb-4">
            <div class="card shadow-sm rounded border-0" style="background-color: #f9f9f9;">
                <div class="card-body text-center">
                    <h5 class="card-title text-muted">Total Bookings</h5>
                    <h3 class="card-text text-success">1,245</h3>
                    <p class="text-muted">Total confirmed bookings</p>
                    <div class="card-footer bg-transparent border-0">
                        <button class="btn btn-outline-success btn-sm w-100">View Details</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Revenue Card -->
        <div class="col-md-3 mb-4">
            <div class="card shadow-sm rounded border-0" style="background-color: #f9f9f9;">
                <div class="card-body text-center">
                    <h5 class="card-title text-muted">Revenue</h5>
                    <h3 class="card-text text-primary">$25,430</h3>
                    <p class="text-muted">Total revenue generated</p>
                    <div class="card-footer bg-transparent border-0">
                        <button class="btn btn-outline-primary btn-sm w-100">View Earnings</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Active Users Card -->
        <div class="col-md-3 mb-4">
            <div class="card shadow-sm rounded border-0" style="background-color: #f9f9f9;">
                <div class="card-body text-center">
                    <h5 class="card-title text-muted">Active Users</h5>
                    <h3 class="card-text text-info">58</h3>
                    <p class="text-muted">Active users currently exploring tours</p>
                    <div class="card-footer bg-transparent border-0">
                        <button class="btn btn-outline-info btn-sm w-100">Manage Users</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Bookings Card -->
        <div class="col-md-3 mb-4">
            <div class="card shadow-sm rounded border-0" style="background-color: #f9f9f9;">
                <div class="card-body text-center">
                    <h5 class="card-title text-muted">Pending Bookings</h5>
                    <h3 class="card-text text-danger">15</h3>
                    <p class="text-muted">Bookings waiting for approval</p>
                    <div class="card-footer bg-transparent border-0">
                        <button class="btn btn-outline-danger btn-sm w-100">View Pending</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <!-- Latest Tour Bookings -->
        <div class="col-md-12 mb-4">
            <div class="card shadow-lg rounded border-0">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">Latest Tour Bookings</h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Package</th>
                                <th>Tourist</th>
                                <th>Destination</th>
                                <th>Status</th>
                                <th>Total</th>
                                <th>Payment</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tour #101</td>
                                <td>Ahan</td>
                                <td>Jaldapara</td>
                                <td><span class="badge bg-warning">Pending</span></td>
                                <td>$18.99</td>
                                <td>Credit Card</td>
                            </tr>
                            <tr>
                                <td>Tour #102</td>
                                <td>Silvia</td>
                                <td>Lepchakha</td>
                                <td><span class="badge bg-success">Confirmed</span></td>
                                <td>$30.99</td>
                                <td>Debit Card</td>
                            </tr>
                            <tr>
                                <td>Tour #103</td>
                                <td>John</td>
                                <td>Bhutan</td>
                                <td><span class="badge bg-danger">Canceled</span></td>
                                <td>$22.99</td>
                                <td>PayPal</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Tour Package Stats & Details -->
    <div class="row mt-4">
    



                <!-- Top Places -->
                <div class="container mt-4">
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="card shadow-sm rounded border-0">
                                <div class="card-header bg-warning text-white">
                                    <h5 class="mb-0">Top Visited Places</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Jaldapara
                                            <span class="badge badge-primary">4.5/5</span>
                                            <button class="btn btn-sm btn-secondary">View Details</button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Lepchakha
                                            <span class="badge badge-primary">4.2/5</span>
                                            <button class="btn btn-sm btn-secondary">View Details</button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Lataguri
                                            <span class="badge badge-primary">4.8/5</span>
                                            <button class="btn btn-sm btn-secondary">View Details</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent User Reviews -->
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="card shadow-sm rounded border-0">
                                <div class="card-header bg-light text-dark">
                                    <h5 class="mb-0">User Reviews</h5>
                                </div>
                                <div class="card-body">
                                    <h3>4.8/5</h3>
                                    <p>Based on 497 reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                
                <!-- Tour Reviews & Filters -->
                <div class="container mt-4">
                    <div class="row mt-4">
                        <div class="col-md-6 mb-4">
                            <div class="card shadow-lg rounded border-0">
                                <div class="card-header bg-danger text-white">
                                    <h5 class="mb-0">Tour Reviews</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <strong>Jaldapara</strong> - Rating: 4.7/5
                                            <div class="progress mt-2" style="height: 10px;">
                                                <div class="progress-bar bg-success" style="width: 90%"></div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <strong>Bhutan</strong> - Rating: 4.8/5
                                            <div class="progress mt-2" style="height: 10px;">
                                                <div class="progress-bar bg-success" style="width: 96%"></div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <strong>Jayanti</strong> - Rating: 3.6/5
                                            <div class="progress mt-2" style="height: 10px;">
                                                <div class="progress-bar bg-warning" style="width: 78%"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="card shadow-lg rounded border-0">
                                <div class="card-header bg-info text-white">
                                    <h5 class="mb-0">Tour Filters & Sorting</h5>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="filterPlace">Filter by Place Type</label>
                                            <select class="form-control" id="filterPlace">
                                                <option>All</option>
                                                <option>Mountain</option>
                                                <option>River</option>
                                                <option>Forest</option>
                                                <option>Villages</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="sortRating">Sort by Rating</label>
                                            <select class="form-control" id="sortRating">
                                                <option>Highest to Lowest</option>
                                                <option>Lowest to Highest</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block">Apply Filters</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tour Stats Chart -->
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="card shadow-sm rounded border-0">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Tour Statistics</h5>
                            </div>
                            <div class="card-body">
                                <canvas id="ordersChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Tour Bookings Table -->
                <div class="recent-order">
                    <h1 class="mt-4 mb-4">Recent Tour Bookings</h1>
                    <div style="max-height: 450px; overflow-y: auto;">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th><input type="checkbox"></th>
                                        <th>Package Type</th>
                                        <th>Tourist Name</th>
                                        <th>Destinations</th>
                                        <th>Price</th>
                                        <th>Total Price</th>
                                        <th>Booking Status</th>
                                        <th>Payment Method</th>
                                        <th>Email</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="orderData">
                                    <!-- Dynamic Data will be loaded here using AJAX -->
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>#101</td>
                                        <td>Ahan</td>
                                        <td>Lepchakha</td>
                                        <td>2</td>
                                        <td>$18.99</td>
                                        <td><span class="badge bg-warning text-dark">Pending</span></td>
                                        <td>Credit Card</td>
                                        <td>himalayan@gmail.com</td>
                                        <td>
                                            <button class="btn btn-info btn-sm">View</button> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>#102</td>
                                        <td>Silvia</td>
                                        <td>Bhutan</td>
                                        <td>3</td>
                                        <td>$30.99</td>
                                        <td><span class="badge bg-success">Confirmed</span></td>
                                        <td>Debit Card</td>
                                        <td>silvia@yahoo.com</td>
                                        <td>
                                            <button class="btn btn-info btn-sm">View</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script for Chart -->
    <script>
        const ctx = document.getElementById('ordersChart').getContext('2d');
        const ordersChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Tour Bookings',
                    data: [12, 19, 3, 5, 2, 3],
                    borderColor: 'rgba(28, 172, 22, 1)',
                    fill: false
                }]
            },
            options: {
                scales: {
                    x: {
                        beginAtZero: true
                    },
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
