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
    <link rel="stylesheet" href="css\animation.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css\index.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css\course.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css\footer.css?v=<?php echo time(); ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <style>
        .spacer {
            height: 100vh;
        }
    </style>
</head>

<body>
    <div class="navBar"><?php include "src/navbar.php"; ?></div>
    <div class="scrollable-container">
        <!-- Your scrollable content goes here -->
        <div class="container">
            <b>
                <h1 class="moto">
                    WE <br />
                    DON'T JUST <br />
                    DREAM IT, <br />
                    <div class="engine">WE ENGINEER IT.</div>
                </h1>
            </b>
        </div>
        <section class="sectionMain">
            <div class="panels" id="panelContainer">
                <div class="panel one" id="panel_1">
                    <div class="clip">
                        <div class="video_clip">
                            <video src="assets/video/video.mp4" autoplay loop muted></video>
                        </div>
                    </div>
                </div>

                <div class="panel two" id="panel_2">
                    <div class="clip">
                        <img class="imageBg"
                            src="https://svcengg.edu.in/wp-content/uploads/2022/11/vlcsnap-2020-08-10-00h20m48s262.jpg"
                            alt="Background Image" />
                    </div>
                </div>
            </div>
        </section>

        <section class="cards-container">

            <div class="scroll-reveal-section"><!-- BEGIN Reveal panel section -->
                <div class="Transition-Left">
                    <div class="item">
                        <div class="image-holder">
                            <img
                                src="https://images.pexels.com/photos/19557055/pexels-photo-19557055/free-photo-of-snowy-peak-of-the-pic-du-midi-dossau-mountain.jpeg?auto=compress&cs=tinysrgb&w=600">
                        </div>

                        <div class="text-holder">
                            <div class="card-scroll">
                                <h1 class="card-heading">ABOUT COLLEGE</h1>
                                <p class="card-text">For over decade SVCE has provided
                                    peerless academic,
                                    administrative and pastoral support to students hoping to
                                    succeed and beyond. From academic aspirations to the simple
                                    day-to-day challenges of living, we understand the
                                    importance of every part of the student journey.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="item">

                        <div class="image-holder">
                            <img
                                src="https://images.pexels.com/photos/19557055/pexels-photo-19557055/free-photo-of-snowy-peak-of-the-pic-du-midi-dossau-mountain.jpeg?auto=compress&cs=tinysrgb&w=600">
                        </div>

                        <div class="text-holder">
                            <div class="card-scroll">
                                <h1 class="card-heading">OUR VISION</h1>
                                <p class="card-text"> To
                                    be a premier institute for addressing
                                    the challenges in
                                    global perspective.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">

                        <div class="image-holder">
                            <img
                                src="https://images.pexels.com/photos/14705563/pexels-photo-14705563.jpeg?auto=compress&cs=tinysrgb&w=600">
                        </div>

                        <div class="text-holder">
                            <div class="card-scroll">
                                <h1 class="card-heading">OUR MISSION</h1>
                                <p class="card-text">
                                <ul>
                                    <li class="card-text">
                                        M1: Nurture students with professional and ethical outlook
                                        to identify needs, analyze, design and innovate
                                        sustainable solutions through lifelong learning in service
                                        of society as individual or a team.
                                    </li>
                                    <br />
                                    <li class="card-text">
                                        M2: Establish state-of-the-art Laboratories and
                                        Information Resource centre for education and research.
                                    </li>
                                    <br />
                                    <li class="card-text">
                                        M3: Collaborate with Industry, Government Organization and
                                        Society to align the curriculum and outreach activities.
                                    </li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- END Reveal panel section -->
        </section>
        <div class="Transition-Left">
            <div class="Accreditation-container">
                <h1 class="AccreditationTitle">Accreditation & Rankings</h1>
                <div class="Accreditation-slider">
                    <div class="Accreditation-slide-track">
                        <div class="Accreditation-slide">
                            <img src="assets/Approvals/aicte-logo.png" height="128" width="128" alt />
                        </div>
                        <div class="Accreditation-slide">
                            <img src="assets/Approvals/b-naac.png" height="128" width="128" alt />
                        </div>
                        <div class="Accreditation-slide">
                            <img src="assets/Approvals/karnataka-state-gvt.png" height="128" width="128" alt />
                        </div>
                        <div class="Accreditation-slide">
                            <img src="assets/Approvals/nba.png" height="128" width="128" alt />
                        </div>
                        <div class="Accreditation-slide">
                            <img src="assets/Approvals/i-guage.png" height="128" width="128" alt />
                        </div>
                        <div class="Accreditation-slide">
                            <img src="assets/Approvals/vtu-logo.png" height="128" width="128" alt />
                        </div>
                        <div class="Accreditation-slide">
                            <img src="assets/Approvals/aicte-logo.png" height="128" width="128" alt />
                        </div>
                        <div class="Accreditation-slide">
                            <img src="assets/Approvals/b-naac.png" height="128" width="128" alt />
                        </div>
                        <div class="Accreditation-slide">
                            <img src="assets/Approvals/karnataka-state-gvt.png" height="128" width="128" alt />
                        </div>
                        <div class="Accreditation-slide">
                            <img src="assets/Approvals/nba.png" height="128" width="128" alt />
                        </div>
                        <div class="Accreditation-slide">
                            <img src="assets/Approvals/i-guage.png" height="128" width="128" alt />
                        </div>
                        <div class="Accreditation-slide">
                            <img src="assets/Approvals/vtu-logo.png" height="128" width="128" alt />
                        </div>
                        <div class="Accreditation-slide">
                            <img src="assets/Approvals/aicte-logo.png" height="128" width="128" alt />
                        </div>
                        <div class="Accreditation-slide">
                            <img src="assets/Approvals/b-naac.png" height="128" width="128" alt />
                        </div>
                        <div class="Accreditation-slide">
                            <img src="assets/Approvals/karnataka-state-gvt.png" height="128" width="128" alt />
                        </div>
                        <div class="Accreditation-slide">
                            <img src="assets/Approvals/nba.png" height="128" width="128" alt />
                        </div>
                        <div class="Accreditation-slide">
                            <img src="assets/Approvals/i-guage.png" height="128" width="128" alt />
                        </div>
                        <div class="Accreditation-slide">
                            <img src="assets/Approvals/vtu-logo.png" height="128" width="128" alt />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Courses-container fade-in">
            <h1>Academic Programs</h1>
            <h2>UNDERGRADUATE PROGRAMMES</h2>
            <ul class="list fade-in">
                <li class="item">
                    <div class="card">
                        <div class="card-title">CSE</div>
                        <div class="card-info">Computer Science & Engineering</div>
                        <div class="card-photo">
                            <img class="card-img" src="assets/courses/cs.jpg" alt="Photo 1">
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="card">
                        <div class="card-title">CSE-AI</div>
                        <div class="card-info">Computer Science & Engineering - Artificial Intelligence</div>
                        <div class="card-photo">
                            <img class="card-img" src="assets/courses/ai.jpg" alt="Photo 2">
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="card">
                        <div class="card-title">CSE-DS</div>
                        <div class="card-info">Computer Science & Engineering - <br>Data Science</br></div>
                        <div class="card-photo">
                            <img class="card-img" src="assets/courses/ds.jpg" alt="Photo 3">
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="card">
                        <div class="card-title">CSE-CY</div>
                        <div class="card-info">Computer Science & Engineering-<br>Cyber Security</br></div>
                        <div class="card-photo">
                            <img class="card-img" src="assets/courses/cyber.jpg" alt="Photo 4">
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="card">
                        <div class="card-title">ISE</div>
                        <div class="card-info">Information Science & Engineering</div>
                        <div class="card-photo">
                            <img class="card-img" src="assets/courses/is.jpg" alt="Photo 5">
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="card">
                        <div class="card-title">ECE</div>
                        <div class="card-info">Electronics and Communication Engineering</div>
                        <div class="card-photo">
                            <img class="card-img" src="assets/courses/ece.jpg" alt="Photo 6">
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="card">
                        <div class="card-title">MECH</div>
                        <div class="card-info">Mechanical Engineering</div>
                        <div class="card-photo">
                            <img class="card-img" src="assets/courses/mech.jpg" alt="Photo 7">
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="card">
                        <div class="card-title">CIVIL</div>
                        <div class="card-info">Civil Engineering</div>
                        <div class="card-photo">
                            <img class="card-img" src="assets/courses/civil.png" alt="Photo 8">
                        </div>
                    </div>
                </li>
            </ul>
            <h2>POSTGRADUATE PROGRAMMES</h2>
            <ul class="list fade-in">
                <li class="item">
                    <div class="card">
                        <div class="card-title">MBA</div>
                        <div class="card-info">Master of Business Administration</div>
                        <div class="card-photo">
                            <img class="card-img" src="assets/courses/mba.jpg" alt="Photo 1">
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="card">
                        <div class="card-title">M.TECH</div>
                        <div class="card-info">M.TECH - Structural Engineering</div>
                        <div class="card-photo">
                            <img class="card-img" src="assets/courses/mtech.png " alt="Photo 2">
                        </div>
                    </div>
                </li>
            </ul>
            <div class="header-container fade-in">
                <h2>RESEARCH</h2>
                <div class="background-image">
                    <div class="text-container">
                        <p>Explore our cutting-edge research initiatives.</p>
                    </div>
                </div>


                <div class="btn-container">
                    <a href="#" class="btn">Know More</a>
                </div>
            </div>
        </div>
        <div class="spacer"></div>
        <div class="Footer"><?php include "src/footer.php"; ?></div>

        <script src="js/index.js"></script>
</body>

</html>