<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Door</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('bgimage.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .door-container {
            position: relative;
            width: 200px;
            height: 300px;
        }

        .door {
            position: absolute;
            width: 100%;
            height: 100%;
            background-image: url('pink door.jpg');
            background-size: cover;
            background-position: center;
            transition: opacity 0.3s ease;
        }

        .door:hover {
            background-image: url('pinkopen.jpg');
        }
    </style>
</head>
<body>
    <div class="door-container">
        <div class="door"></div>
    </div>
</body>
</html>
