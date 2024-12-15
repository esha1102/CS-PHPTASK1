<?php
// Set content type to HTML
header("Content-Type: text/html");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>summer page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barriecito&family=Gemunu+Libre:wght@200..800&family=Goldman:wght@400;700&family=Lexend+Deca:wght@100..900&family=Modak&family=Rubik+Dirt&family=Rubik+Distressed&display=swap" rel="stylesheet">
    <style>
        body {
          margin: 0;
          height: 100vh;
          background: rgb(167, 119, 70) url("autumnbg.jpg") no-repeat center center;
          background-size: cover; /* Ensures the background covers the entire screen */
          display: flex;
          justify-content: center;
          align-items: center;
          font-family: "Unica One", sans-serif;
          font-weight: 600;
          font-style: normal;
          color:rgb(246, 235, 235);
        }

        .center-text {
            font-size: 2rem;
            text-align: center;
            margin: 20px 20px 20px 80px;
        }
        .buttoo{
            color:rgb(56, 47, 47);
            padding: 0;
            margin: 600px 40px 0 0;
        }
    </style>
</head>
<body>
    <div class="center-text">
    <div class="center-text">
    <?php
        // Echo first sentence
        echo "Nature's first green is gold,          ";
         echo"  Her hardest hue to hold. Her early leaf's a flower;        ";
         echo" But only so an hour. Then leaf subsides to leaf.  ";
          echo"  So Eden sank to grief, So dawn goes down to day. Nothing gold can stay.     ";
    ?>
</div>
</div>
    </div>
    </div>
    <div class="buttoo">
        <a href="index.html">
        <button> BACK </button>
    </a>
</body>
</html>


    
