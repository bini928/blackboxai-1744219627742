<?php
require_once 'includes/auth.php';
require_once 'includes/db.php';
redirectIfNotLoggedIn();
?>

<?php include 'includes/header.php'; ?>

<h2 class="mb-4">Business Reports</h2>

<div class="row">
    <div class="col-md-6 mb-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Monthly Revenue</h5>
            </div>
            <div class="card-body">
                <canvas id="revenueChart" height="200"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-4">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Service Popularity</h5>
            </div>
            <div class="card-body">
                <canvas id="serviceChart" height="200"></canvas>
            </div>
        </div>
    </div>
</div>

<div class="card mb-4">
    <div class="card-header bg-info text-white">
        <h5 class="mb-0">Recent Transactions</h5>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Customer</th>
                    <th>Service</th>
                    <th>Amount</th>
                    <th>Payment Method</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2023-11-15</td>
                    <td>John Doe</td>
                    <td>Premium Wash</td>
                    <td>$25.00</td>
                    <td>Credit Card</td>
                </tr>
                <tr>
                    <td>2023-11-14</td>
                    <td>Jane Smith</td>
                    <td>Interior Cleaning</td>
                    <td>$35.00</td>
                    <td>Cash</td>
                </tr>
                <tr>
                    <td>2023-11-13</td>
                    <td>Robert Johnson</td>
                    <td>Basic Wash</td>
                    <td>$15.00</td>
                    <td>Credit Card</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
// Revenue Chart
const revenueCtx = document.getElementById('revenueChart').getContext('2d');
const revenueChart = new Chart(revenueCtx, {
    type: 'bar',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov'],
        datasets: [{
            label: 'Monthly Revenue ($)',
            data: [1200, 1500, 1800, 2000, 2200, 2500, 2800, 3000, 2700, 2900, 3100],
            backgroundColor: 'rgba(13, 110, 253, 0.5)',
            borderColor: 'rgba(13, 110, 253, 1)',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

// Service Chart
const serviceCtx = document.getElementById('serviceChart').getContext('2d');
const serviceChart = new Chart(serviceCtx, {
    type: 'pie',
    data: {
        labels: ['Basic Wash', 'Premium Wash', 'Interior Cleaning'],
        datasets: [{
            data: [45, 30, 25],
            backgroundColor: [
                'rgba(13, 110, 253, 0.5)',
                'rgba(25, 135, 84, 0.5)',
                'rgba(255, 193, 7, 0.5)'
            ],
            borderColor: [
                'rgba(13, 110, 253, 1)',
                'rgba(25, 135, 84, 1)',
                'rgba(255, 193, 7, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true
    }
});
</script>

<?php include 'includes/footer.php'; ?>
