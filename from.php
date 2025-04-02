<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input {
            display: block;
        }
    </style>
</head>
<body>
    <form action="process.php" method="GET">
    <input type="password" name="password">
    <input type="text" name="username">
    <div>
            <button type="submit">Send</button>
            <button type="reset">Reset</button>
        </div>
    </form>
</body>
</html>