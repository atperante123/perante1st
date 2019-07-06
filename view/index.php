<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User</title>
</head>
<body>
    <form action="dataprocessor.php" method="POST">
        <input type="hidden" name="action" value="insert">
        name: <input type="text" name="name"><br>
        email: <input type="text" name="email"><br>
        username: <input type="text" name="username"><br>
        password: <input type="password" name="password"><br>
        <button type="submit" name="btnAdd">Add User</button>
    </form>
</body>
</html>