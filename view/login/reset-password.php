<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

// Include config file
require_once "connect.php";
include '../../controller/login/reset-password.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <!-- header -->
    <?php include '../partials/header.php' ?>
    <!-- bootstrap -->
    <?php include '../../public/bootstrap/bootstrap.php'; ?>
    <style type="text/css">
    body {
        font-size: 1.65em;
    }

    #wrapper {
        width: 500px;
        height: 200px;
        margin: 50px auto;
        display: flex;
    }

    .center {
        width: 50%;
        height: 50%;
        margin: auto;
    }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="center">
            <h2>Reset Password</h2>
            <p>Please fill out this form to reset your password.</p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
                    <label>New Password</label>
                    <input type="password" name="new_password" class="form-control"
                        value="<?php echo $new_password; ?>">
                    <span class="help-block"><?php echo $new_password_err; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control">
                    <span class="help-block"><?php echo $confirm_password_err; ?></span>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <a class="btn btn-link" href="/index.php">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>
<!-- footer -->
<?php include '../partials/footer.php' ?>

</html>