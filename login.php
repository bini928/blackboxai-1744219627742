<?php
session_start();
require_once 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // In a real application, you would verify against database
    // This is a simplified example for demonstration
    if ($username === 'admin' && $password === 'admin123') {
        $_SESSION['user_id'] = 1;
        $_SESSION['username'] = $username;
        header('Location: index.php');
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
?>

<?php include 'includes/header.php'; ?>

<div class="row justify-content-center mt-5">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Login</h4>
            </div>
            <div class="card-body">
                <?php if (isset($error)): ?>
                    <div class="alert alert-danger"><?php echo $error; ?></div>
                <?php endif; ?>
                <form method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
