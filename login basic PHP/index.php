<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
    <style>
        .warp{
            width: 100%;
            max-width: 400px;
            margin: 40px auto;
        }
    </style>
</head>
<body>
    <div class="warp">
        <h1 class="h3 mb-3 text-center">Login</h1>
        <?php if(isset($_GET['incorrect'])): ?>
            <div class="alert alert-warning">
                Incorrect Email or Password!
            </div>
        <?php elseif(isset($_GET['profile'])): ?>
            <div class="alert alert-danger">
                Please Login First
            </div>
        <?php endif ?>
        
        <form action="_actions/login.php" method="post">
            <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
            <input type="password" class="form-control mb-3" name="password" placeholder="Password" required>
            <button type="submit" class="w-100 btn btn-lg btn-primary">Login</button>
        </form>
    </div>
</body>
</html>