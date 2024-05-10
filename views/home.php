<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
</head>
<body>
<h1>Welcome to MVC App</h1>
<ul>




    <?php
    require_once __DIR__ . '/../models/User.php';

    foreach(User::getAllUsers() as $user): ?>



        <li><?php echo $user['name']; ?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>

