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
        <img class="aca-bgimg" src="assets/bgimages/118.jpg" alt="">
    </div>
    <div class="aca-navbar">
        <ul id="aca-navLinks">
            <li class="aca-navLists"><a href="#overview">Overview</a></li>
            <li class="aca-navLists"><a href="#programme-structure">Programme Structure</a></li>
            <li class="aca-navLists"><a href="#research-facilities">Research Facilities</a></li>
            <li class="aca-navLists"><a href="#career-opportunities">Career Opportunities</a></li>
            <li class="aca-navLists"><a href="#faculty-staff">Faculty & Staff</a></li>
            <li class="aca-navLists"><a href="#events-news">Events & News</a></li>
            <li class="aca-navLists"><a href="#alumni-giving">Alumni & Giving</a></li>
            <li class="aca-navLists"><a href="#contact-us">Contact Us</a></li>
        </ul>
    </div>

    <article class="article-wrapper">
        <h1 class="title">M.Tech - Structural Engineering</h1>

        <nav class="side-nav">
            <ul class="side-nav-list">
                <li class="side-nav-item"><a href="#">Computer Science & Engineering</a></li>
                <li class="side-nav-item"><a href="#">Computer Science & Engineering -<br> Artificial Intelligence</a>
                </li>
                <li class="side-nav-item"><a href="#">Computer Science & Engineering -<br> Data Science</a></li>
                <li class="side-nav-item"><a href="#">Computer Science & Engineering -<br> Cyber Security</a></li>
                <li class="side-nav-item"><a href="#">Information Science & Engineering</a></li>
                <li class="side-nav-item"><a href="#">Electronics & Communication <br> Engineering</a></li>
                <li class="side-nav-item"><a href="#">Mechanical Engineering</a></li>
                <li class="side-nav-item"><a href="#">Civil Engineering</a></li>
                <li class="side-nav-item"><a href="#">Masters of Business Administration</a></li>
                <li class="side-nav-item"><a href="#">MTech - Structural Engineering</a></li>
            </ul>
        </nav>

        <div class="main-content">
            <section id="overview">
                <h2 class="subhead">Overview</h2>
                <p class="article-paragraph">Overview content goes here...</p>
            </section>

            <section id="programme-structure">
                <h2 class="subhead">Programme Structure</h2>
                <p class="article-paragraph">Programme structure details go here...</p>
            </section>

            <section id="research-facilities">
                <h2 class="subhead">Research Facilities</h2>
                <p class="article-paragraph">Information about research facilities goes here...</p>
            </section>

            <section id="career-opportunities">
                <h2 class="subhead">Career Opportunities</h2>
                <p class="article-paragraph">Career opportunities information goes here...</p>
            </section>

            <section id="faculty-staff">
                <h2 class="subhead">Faculty & Staff</h2>
                <p class="article-paragraph">Faculty and staff information goes here...</p>
            </section>

            <section id="events-news">
                <h2 class="subhead">Events & News</h2>
                <p class="article-paragraph">Latest events and news go here...</p>
            </section>

            <section id="alumni-giving">
                <h2 class="subhead">Alumni & Giving</h2>
                <p class="article-paragraph">Alumni information and giving opportunities go here...</p>
            </section>

            <section id="contact-us">
                <h2 class="subhead">Contact Us</h2>
                <p class="article-paragraph">Contact information goes here...</p>
            </section>
        </div>
    </article>

    <div class="Footer"><?php include "src/footer.php"; ?></div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const navLinks = document.querySelectorAll('#aca-navLinks a, .side-nav-list a');

            navLinks.forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);

                    if (targetElement) {
                        const windowHeight = window.innerHeight;
                        const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
                        const offsetPosition = targetPosition - (windowHeight * 0.20);

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>
</body>

</html>