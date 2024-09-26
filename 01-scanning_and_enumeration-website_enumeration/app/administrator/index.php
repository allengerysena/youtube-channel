<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'admin' && $password === 'admin') {
        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Home</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        </head>
        <body>
            <div class="container">
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8">
                        <h2>Welcome, Admin!</h2>
                        <p>You have successfully logged in.</p>
                        <a href="index.php" class="btn btn-danger">Logout</a>
                    </div>
                </div>
            </div>
        </body>
        </html>
        ';
    } else {
        header('Location: index.php?error=1');
        exit();
    }
} else {
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>/administrator/</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-4">
                    <h2 class="text-center">/administrator/</h2>
                    <form action="index.php" method="POST">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </form>';
                    if (isset($_GET['error'])) {
                        echo '<div class="alert alert-danger mt-3" role="alert">Invalid username or password.</div>';
                    }
                    echo '
                </div>
            </div>
        </div>
    </body>
    </html>
    ';
}
?>
