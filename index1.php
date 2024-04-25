<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Arrows</title>
    <link rel="stylesheet" href="css/style1.css" />
</head>

<body>


    <h1>Growing Div</h1>
    <div class="gmenu">
        <h3>Hover on This</h3>
        <img class="arrow" src="img/arrowd-r.png" alt="Up arrow">

        <div class="gsubmenu">
            <div class="subline1">Submenu 1</div>
            <div class="subline1">Submenu 2</div>
            <div class="subline1">Submenu 3</div>
            <div class="subline1">Submenu 4</div>
        </div>
    </div>

    <h1>Simpler Growing Div</h1>
    <div id="menu">
        <a>hover me</a>
        <ul id="list">
            <!-- Create a bunch, or not a bunch, of li's to see the timing. -->
            <li>item</li>
            <li>item</li>
            <li>item</li>
            <li>item</li>
            <li>item</li>
        </ul>
    </div>

    <h1>Transitioning menu</h1>
    <nav>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact Us</a>
        <a href="#">Links</a>
    </nav>


    <script src="js/arrow.js"></script>
</body>

</html>