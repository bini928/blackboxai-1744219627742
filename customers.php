<?php
require_once 'includes/auth.php';
require_once 'includes/db.php';
redirectIfNotLoggedIn();
?>

<?php include 'includes/header.php'; ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Customers</h2>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCustomerModal">
        <i class="fas fa-plus"></i> Add Customer
    </button>
</div>

<div class="card">
    <div class="card-body">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Vehicle</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>(555) 123-4567</td>
                    <td>Toyota Camry (2020)</td>
                    <td>
                        <button class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>(555) 987-6543</td>
                    <td>Honda Accord (2019)</td>
                    <td>
                        <button class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Add Customer Modal -->
<div class="modal fade" id="addCustomerModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Customer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Vehicle Make</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Vehicle Model</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Vehicle Year</label>
                        <input type="number" class="form-control" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save Customer</button>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
