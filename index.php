<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="body">
    <header>Taxi Database</header>
    <div id="menu">
        <a href="index.php">HOME</a>
    </div>
    <div class="side">

        <div id="something" class="articles" onclick="change('1')">
            <h1>New York</h1>
            <img src="https://image.newyork.se/wp-content/uploads/2012/07/taxi-is-a-great-way-to-travel-in-new-york.jpg" alt="taxi from somewhere around the world">
        </div>

        <div id="something" class="articles" onclick="change('2')">
            <h1>London</h1>
            <img src="https://cdn.pocket-lint.com/r/s/1200x/assets/images/142333-apps-feature-best-taxi-apps-getting-you-a-cab-in-london-image1-abjefw2pxl.jpg" alt="taxi from somewhere around the world">
        </div>

        <div id="something" class="articles" onclick="change('3')">
            <h1>Tokyo</h1>
            <img src="https://m2y8i8f9.rocketcdn.me/wp-content/uploads/tokyo-taxi-colours-and-lines.jpg" alt="taxi from somewhere around the world">
        </div>

    </div>

    <div class="post">
            <div id="rubrik">Welcome</div>
            <div id="info">This is the Taxi Database where you can read interesting information about taxi cars from different parts of the world. Press one of our interesting articles to the left to read about the taxi cars in a particular city</div>
            <div id="writer">Enjoy! </div>
        </div>

    <!-- <footer>Brought to you by Samuel</footer> -->
</body>

<script src="script.js"></script>
</html>