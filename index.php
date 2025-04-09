<?php
require_once 'includes/auth.php';
require_once 'includes/db.php';
redirectIfNotLoggedIn();
?>

<?php include 'includes/header.php'; ?>

<div class="row">
    <div class="col-md-4 mb-4">
        <div class="card bg-primary text-white">
            <div class="card-body">
                <h5 class="card-title">Today's Appointments</h5>
                <h2 class="display-4">12</h2>
                <a href="appointments.php" class="text-white">View All</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card bg-success text-white">
            <div class="card-body">
                <h5 class="card-title">Total Customers</h5>
                <h2 class="display-4">45</h2>
                <a href="customers.php" class="text-white">View All</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card bg-info text-white">
            <div class="card-body">
                <h5 class="card-title">Monthly Revenue</h5>
                <h2 class="display-4">$3,450</h2>
                <a href="reports.php" class="text-white">View Reports</a>
            </div>
        </div>
    </div>
</div>

<div class="card mt-4">
    <div class="card-header">
        <h4>Recent Appointments</h4>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Customer</th>
                    <th>Service</th>
                    <th>Date/Time</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John Doe</td>
                    <td>Full Wash</td>
                    <td>Today, 10:00 AM</td>
                    <td><span class="badge bg-success">Completed</span></td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>Interior Cleaning</td>
                    <td>Today, 11:30 AM</td>
                    <td><span class="badge bg-warning">In Progress</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
