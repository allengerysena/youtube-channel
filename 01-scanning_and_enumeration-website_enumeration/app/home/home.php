<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username === 'admin' && $password === 'ARXc27a0I8RuvG2oj1WM') {
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
}
