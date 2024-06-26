<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SVCE Bengaluru</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');
    </style>
    <link rel="stylesheet" href="css\navbar.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css\academics.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css\footer.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="navBar"><?php include "src/navbar.php"; ?></div>
    <div class="aca-img">
        <img class="aca-bgimg" src="assets/bgimages/111.jpg" alt="">
    </div>
    <div class="aca-navbar">
        <ul id="aca-navLinks">
            <li class="aca-navLists">
                <a href="#">Overview</a>
            </li>
            <li class="aca-navLists">
                <a href="#">Programme Structure</a>
            </li>
            <li class="aca-navLists">
                <a href="academics.php">Fees</a>
            </li>
            <li class="aca-navLists">
                <a href="#">Research Facilities</a>
            </li>
            <li class="aca-navLists">
                <a href="#">Career Oppurtunities</a>
            </li>
            <li class="aca-navLists">
                <a href="#">Faculty & Staff</a>
            </li>
            <li class="aca-navLists">
                <a href="#">Events & News</a>
            </li>
            <li class="aca-navLists">
                <a href="#">Alumni & Giving</a>
            </li>   
            <li class="aca-navLists">
                <a href="#">Contact Us</a>
            </li>
        </ul>
    </div>
    <div class="aca-article">
        <div class="aca-overview">
            <div class="aca-grid-item">
                <h2>Article 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor tellus vel velit bibendum, vel malesuada ipsum tincidunt.</p>
            </div>
            <div class="aca-grid-item">
                <h2>Handbook</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor tellus vel velit bibendum, vel malesuada ipsum tincidunt.</p>
            </div>
        </div>
        <div class="aca-course">
            <div class="aca-grid-item">
                <h2>Article 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor tellus vel velit bibendum, vel malesuada ipsum tincidunt.</p>
            </div>
            <div class="aca-grid-item">
                <h2>Career Options</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor tellus vel velit bibendum, vel malesuada ipsum tincidunt.</p>
            </div>
        </div>
        <div class="aca-peos">
            <div class="aca-grid-item">
                <h2>Article 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor tellus vel velit bibendum, vel malesuada ipsum tincidunt.</p>
            </div>
            <div class="aca-grid-item">
                <h2>Article 2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor tellus vel velit bibendum, vel malesuada ipsum tincidunt.</p>
            </div>
        </div>
        <div class="aca-pos">
            <div class="aca-grid-item">
                <h2>Article 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor tellus vel velit bibendum, vel malesuada ipsum tincidunt.</p>
            </div>
            <div class="aca-grid-item">
                <h2>Article 2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor tellus vel velit bibendum, vel malesuada ipsum tincidunt.</p>
            </div>
        </div>
        <div class="aca-psos">
            <div class="aca-grid-item">
                <h2>Article 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor tellus vel velit bibendum, vel malesuada ipsum tincidunt.</p>
            </div>
            <div class="aca-grid-item">
                <h2>Article 2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor tellus vel velit bibendum, vel malesuada ipsum tincidunt.</p>
            </div>
        </div>
        <div class="aca-fees">
            <div class="aca-grid-item">
                <h2>Article 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor tellus vel velit bibendum, vel malesuada ipsum tincidunt.</p>
            </div>
            <div class="aca-grid-item">
                <h2>Article 2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor tellus vel velit bibendum, vel malesuada ipsum tincidunt.</p>
            </div>
        </div>
    </div>
    <!-- <div class="spacer"></div> -->
    <div class="Footer"><?php include "src/footer.php"; ?></div>
</body>

</html>