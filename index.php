<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SVCE Bengaluru</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');
    </style>
    <link rel="stylesheet" href="src/navbar.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="src/footer.css">
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
                            <video src="assets\video\video.mp4" autoplay loop muted></video>
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

            </div><!-- END Reveal panel section -->
        </section>
        <div class="Accreditation-container">
            <h1 class="AccreditationTitle">Accreditation & Rankings</h1>
            <div class="Accreditation-slider">
                <div class="Accreditation-slide-track">
                    <div class="Accreditation-slide">
                        <img src="assets\Approvals\aicte-logo.png" height="128" width="128" alt />
                    </div>
                    <div class="Accreditation-slide">
                        <img src="assets\Approvals\b-naac.png" height="128" width="128" alt />
                    </div>
                    <div class="Accreditation-slide">
                        <img src="assets\Approvals\karnataka-state-gvt.png" height="128" width="128" alt />
                    </div>
                    <div class="Accreditation-slide">
                        <img src="assets\Approvals\nba.png" height="128" width="128" alt />
                    </div>
                    <div class="Accreditation-slide">
                        <img src="assets\Approvals\vtu-logo.png" height="128" width="128" alt />
                    </div>
                    <div class="Accreditation-slide">
                        <img src="assets\Approvals\aicte-logo.png" height="128" width="128" alt />
                    </div>
                    <div class="Accreditation-slide">
                        <img src="assets\Approvals\b-naac.png" height="128" width="128" alt />
                    </div>
                    <div class="Accreditation-slide">
                        <img src="assets\Approvals\karnataka-state-gvt.png" height="128" width="128" alt />
                    </div>
                    <div class="Accreditation-slide">
                        <img src="assets\Approvals\nba.png" height="128" width="128" alt />
                    </div>
                    <div class="Accreditation-slide">
                        <img src="assets\Approvals\vtu-logo.png" height="128" width="128" alt />
                    </div>
                </div>
            </div>
        </div>
        <div class="spacer"></div>
        <div class="Footer"><?php include "src/footer.php"; ?></div>
</body>

</html>