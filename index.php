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
    <link rel="stylesheet" href="css\campus-life.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css\campusnews.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css\footer.css?v=<?php echo time(); ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <style>
        .spacer {
            height: 100vh;
            background-color: white;
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
    <div></div>
    <div>
        <div class="college-container">
            <div class="college-header">
                <h1>COLLEGE LIFE</h1>
                <h2>Our thriving residential campus is home to a community of creative and accomplished people from
                    around the world.</h2>
                <div class="college-header-image">
                    <img src="https://wallpapers.com/images/hd/taipei-city-art-4k-ultra-widescreen-dz45lm3r94lu42up.jpg"
                        alt="Header Image">
                </div>
            </div>
            <div class="college-section">
                <h1>STUDENT LIFE</h1>
                <div class="college-grid-container">
                    <div class="college-grid-item">
                        <img src="https://images.unsplash.com/photo-1622431062669-ed38267b6de5?crop=entropy&cs=srgb&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MTI3NjYzNDJ8&ixlib=rb-4.0.3&q=85"
                            alt="Image 1">
                        <p>Explore the vibrant city life and bustling streets.</p>
                    </div>
                    <div class="college-grid-item">
                        <img src="https://images.unsplash.com/photo-1491172700640-4f1a131a3670?crop=entropy&cs=srgb&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MTI3NjY2ODV8&ixlib=rb-4.0.3&q=85"
                            alt="Image 2">
                        <p>Discover the beauty of nature in its purest form.</p>
                    </div>
                    <div class="college-grid-item">
                        <img src="https://images.unsplash.com/photo-1592417817038-d13fd7342605?crop=entropy&cs=srgb&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MTI3NjU5NTV8&ixlib=rb-4.0.3&q=85"
                            alt="Image 3">
                        <p>Embark on an adventure and create lasting memories.</p>
                    </div>
                </div>
            </div>
            <div class="college-section">
                <h1>ARTS AND CULTURE</h1>
                <div class="college-grid-container">
                    <div class="college-grid-item">
                        <img src="https://images.unsplash.com/photo-1622431062669-ed38267b6de5?crop=entropy&cs=srgb&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MTI3NjYzNDJ8&ixlib=rb-4.0.3&q=85"
                            alt="Image 1">
                        <p>Explore the vibrant city life and bustling streets.</p>
                    </div>
                    <div class="college-grid-item">
                        <img src="https://images.unsplash.com/photo-1491172700640-4f1a131a3670?crop=entropy&cs=srgb&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MTI3NjY2ODV8&ixlib=rb-4.0.3&q=85"
                            alt="Image 2">
                        <p>Discover the beauty of nature in its purest form.</p>
                    </div>
                    <div class="college-grid-item">
                        <img src="https://images.unsplash.com/photo-1592417817038-d13fd7342605?crop=entropy&cs=srgb&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MTI3NjU5NTV8&ixlib=rb-4.0.3&q=85"
                            alt="Image 3">
                        <p>Embark on an adventure and create lasting memories.</p>
                    </div>
                </div>
            </div>
            <div class="college-section">
                <h1>SPORTS AND FITNESS</h1>
                <div class="college-grid-container">
                    <div class="college-grid-item">
                        <img src="https://images.unsplash.com/photo-1622431062669-ed38267b6de5?crop=entropy&cs=srgb&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MTI3NjYzNDJ8&ixlib=rb-4.0.3&q=85"
                            alt="Image 1">
                        <p>Explore the vibrant city life and bustling streets.</p>
                    </div>
                    <div class="college-grid-item">
                        <img src="https://images.unsplash.com/photo-1491172700640-4f1a131a3670?crop=entropy&cs=srgb&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MTI3NjY2ODV8&ixlib=rb-4.0.3&q=85"
                            alt="Image 2">
                        <p>Discover the beauty of nature in its purest form.</p>
                    </div>
                    <div class="college-grid-item">
                        <img src="https://images.unsplash.com/photo-1592417817038-d13fd7342605?crop=entropy&cs=srgb&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MTI3NjU5NTV8&ixlib=rb-4.0.3&q=85"
                            alt="Image 3">
                        <p>Embark on an adventure and create lasting memories.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="campus-news-container">
        <h1 class="campus-news-heading">
            <center>CAMPUS NEWS</center>
        </h1>
        <h3 class="campus-news-subheading">
            <center>Stories about people, research, and innovation across the Farm.</center>
        </h3>
        <main class="campus-news-grid">
            <article
                class="campus-news-testimonial campus-news-grid-col-span-2 campus-news-flow campus-news-bg-primary-400 campus-news-quote campus-news-text-neutral-100">
                <div class="campus-news-flex">
                    <!-- <div>
                    <img src="./images/image-daniel.jpg" alt="daniel clifford">
                </div>
                <div>
                    <h2 class="campus-news-name">Daniel Clifford</h2>
                    <p class="campus-news-position">Verified Graduate</p>
                </div> -->
                </div>
                <p class="campus-news-paragraph">
                    I received a job offer mid-course, and the subjects I learned were current, if not more so,
                    in the company I joined. I honestly feel I got every penny's worth.
                </p>
                <p class="campus-news-paragraph">
                    " I was an EMT for many years before I joined the bootcamp. I've been looking to make a
                    transition and have heard some people who had an amazing experience here. I signed up
                    for the free intro course and found it incredibly fun! I enrolled shortly thereafter.
                    The next 12 weeks was the best - and most grueling - time of my life. Since completing
                    the course, I've successfully switched careers, working as a Software Engineer at a VR startup. "
                </p>
            </article>
            <article
                class="campus-news-testimonial campus-news-flow campus-news-bg-secondary-400 campus-news-text-neutral-100">
                <div class="campus-news-flex">
                    <!-- <div>
                    <img src="./images/image-jonathan.jpg" alt="Jonathan Walters">
                </div>
                <div>
                    <h2 class="campus-news-name">Jonathan Walters</h2>
                    <p class="campus-news-position">Verified Graduate</p>
                </div> -->
                </div>
                <p class="campus-news-paragraph">
                    The team was very supportive and kept me motivated
                </p>
                <p class="campus-news-paragraph">
                    " I started as a total newbie with virtually no coding skills. I now work as a mobile engineer
                    for a big company. This was one of the best investments I've made in myself. "
                </p>
            </article>
            <article
                class="campus-news-testimonial campus-news-flow campus-news-bg-neutral-100 campus-news-text-secondary-400">
                <div class="campus-news-flex">
                    <!-- <div>
                    <img src="./images/image-jeanette.jpg" alt="Jeanette Harmon">
                </div>
                <div>
                    <h2 class="campus-news-name">Jeanette Harmon</h2>
                    <p class="campus-news-position">Verified Graduate</p>
                </div> -->
                </div>
                <p class="campus-news-paragraph">
                    An overall wonderful and rewarding experience</p>
                <p class="campus-news-paragraph">
                    " Thank you for the wonderful experience! I now have a job I really enjoy, and make a good living
                    while doing something I love. "
                </p>
            </article>
            <article
                class="campus-news-testimonial campus-news-grid-col-span-2 campus-news-flow campus-news-bg-secondary-500 campus-news-text-neutral-100">
                <div class="campus-news-flex">
                    <!-- <div>
                    <img class="campus-news-border-primary-400" src="./images/image-patrick.jpg" alt="Patrick Abrams">
                </div>
                <div>
                    <h2 class="campus-news-name">Patrick Abrams</h2>
                    <p class="campus-news-position">Verified Graduate</p>
                </div> -->
                </div>
                <p class="campus-news-paragraph">
                    Awesome teaching support from TAs who did the bootcamp themselves. Getting guidance from them and
                    learning from their experiences was easy.
                </p>
                <p class="campus-news-paragraph">
                    " The staff seem genuinely concerned about my progress which I find really refreshing. The program
                    gave me the confidence necessary to be able to go out in the world and present myself as a capable
                    junior developer. The standard is above the rest. You will get the personal attention you need from
                    an incredible community of smart and amazing people. "
                </p>
            </article>
            <article
                class="campus-news-testimonial campus-news-flow campus-news-bg-neutral-100 campus-news-text-secondary-400">
                <div class="campus-news-flex">
                    <!-- <div>
                    <img src="./images/image-kira.jpg" alt="Kira Whittle">
                </div>
                <div>
                    <h2 class="campus-news-name">Kira Whittle</h2>
                    <p class="campus-news-position">Verified Graduate</p>
                </div> -->
                </div>
                <p class="campus-news-paragraph">
                    Such a life-changing experience. Highly recommended!
                </p>
                <p class="campus-news-paragraph">
                    " Before joining the bootcamp, I've never written a line of code. I needed some structure from
                    professionals who can help me learn programming step by step. I was encouraged to enroll by a former
                    student of theirs who can only say wonderful things about the program. The entire curriculum and
                    staff
                    did not disappoint. They were very hands-on and I never had to wait long for assistance. The agile
                    team
                    project, in particular, was outstanding. It took my learning to the next level in a way that no
                    tutorial
                    could ever have. In fact, I've often referred to it during interviews as an example of my developent
                    experience. It certainly helped me land a job as a full-stack developer after receiving multiple
                    offers.
                    100% recommend! "
                </p>
            </article>
        </main>
    </div>
    <div>
        <section class="heading">
            <div class="content">
                <div class="lockup">
                    <h2 class="headline">Sri Venkateshwara College Of Engineering <br class="large">
                        Placement Drives
                    </h2>
                    <p class="blurb">
                        We try our best to get students there dream placements <a href="#">svcengg.edu.in</a>.
                    </p>
                </div>
            </div>
        </section>
        <section class="marquees__wrapper">
            <div class="marquee" data-duration="5" data-reverse="true">
                <div class="marquee__group">
                    <div class="item1">
                        <img src="https://is2-ssl.mzstatic.com/image/thumb/GT66HoV8VJL1IZwaqos_TQ/756x425.jpg"
                            alt="Ted Lasso" srcset="">
                    </div>
                    <div class="item1">
                        <img src="https://is1-ssl.mzstatic.com/image/thumb/zRCSBlp0LjwClRXsjyDNYQ/756x425.jpg"
                            alt="CODA" srcset="">
                    </div>
                    <div class="item1">
                        <img src="https://is1-ssl.mzstatic.com/image/thumb/vPnF3gIE_xEMoXPI1SyluA/756x425.jpg"
                            alt="Prehistoric Planet" srcset="">
                    </div>
                    <div class="item1">
                        <img src="https://is4-ssl.mzstatic.com/image/thumb/GwU4Qm-NLXeNi7M5bxpX-g/756x425.jpg"
                            alt="The Long Game" srcset="">
                    </div>
                    <div class="item1">
                        <img src="https://is3-ssl.mzstatic.com/image/thumb/d6sprLP3-1W-OlED4ZlzOg/756x425.jpg"
                            alt="Sidney" srcset="">
                    </div>
                    <div class="item1">
                        <img src="https://is5-ssl.mzstatic.com/image/thumb/PWsYggMXgU6kQrxaB3MZPQ/756x425.jpg"
                            alt="Shantaram" srcset="">
                    </div>
                    <div class="item1">
                        <img src="https://is3-ssl.mzstatic.com/image/thumb/kVTKGnVvCdFlB1sZeKa8YQ/756x425.jpg"
                            alt="Suspicion">
                    </div>
                    <div class="item1">
                        <img src="https://is5-ssl.mzstatic.com/image/thumb/7SeRlnCzKlgeqrg6-ixkig/738x416.jpg"
                            alt="SEE">
                    </div>
                </div>

            </div>
            <div class="marquee" data-duration="5">
                <div class="marquee__group">
                    <div class="item1">
                        <img src="https://is5-ssl.mzstatic.com/image/thumb/ewq0-5ZSairVdRtcg43s0w/738x416.jpg"
                            alt="Five Days at Memorial" srcset="">
                    </div>
                    <div class="item1">
                        <img src="https://is3-ssl.mzstatic.com/image/thumb/AWDRdQz0nepFpnsUNiTDuw/738x416.jpg"
                            alt="The Morning Show" srcset="">
                    </div>
                    <div class="item1">
                        <img src="https://is1-ssl.mzstatic.com/image/thumb/oANBVngpEJDvHRhdyozySA/738x416.jpg"
                            alt="Grey Hound" srcset="">
                    </div>
                    <div class="item1">
                        <img src="https://is4-ssl.mzstatic.com/image/thumb/L4WNJNV3nbmyAL6MQSeGuw/738x416.jpg"
                            alt="Defending Jacob" srcset="">
                    </div>
                    <div class="item1">
                        <img src="https://is2-ssl.mzstatic.com/image/thumb/qYEYYvFXN2O4zEuCcBSbjw/738x416.jpg"
                            alt="Foundation" srcset="">
                    </div>
                    <div class="item1">
                        <img src="https://is3-ssl.mzstatic.com/image/thumb/3iAbZQ4pznOpDRenkvOhNA/738x416.jpg"
                            alt="Dickinson" srcset="">
                    </div>
                    <div class="item1">
                        <img src="https://is2-ssl.mzstatic.com/image/thumb/6tJakyTEtS0vrgdc9POZpg/738x416.jpg"
                            alt="Servant">
                    </div>
                    <div class="item1">
                        <img src="https://is1-ssl.mzstatic.com/image/thumb/mqP1mK0HzuFhIBXsd_Q_SA/738x416.jpg"
                            alt="Home Before Dark">
                    </div>
                </div>

            </div>
            <div class="marquee" data-duration="7">
                <div class="marquee__group">
                    <div class="item1">
                        <img src="https://is2-ssl.mzstatic.com/image/thumb/GT66HoV8VJL1IZwaqos_TQ/756x425.jpg"
                            alt="Ted Lasso" srcset="">
                    </div>
                    <div class="item1">
                        <img src="https://is1-ssl.mzstatic.com/image/thumb/zRCSBlp0LjwClRXsjyDNYQ/756x425.jpg"
                            alt="CODA" srcset="">
                    </div>
                    <div class="item1">
                        <img src="https://is1-ssl.mzstatic.com/image/thumb/vPnF3gIE_xEMoXPI1SyluA/756x425.jpg"
                            alt="Prehistoric Planet" srcset="">
                    </div>
                    <div class="item1">
                        <img src="https://is4-ssl.mzstatic.com/image/thumb/GwU4Qm-NLXeNi7M5bxpX-g/756x425.jpg"
                            alt="The Long Game" srcset="">
                    </div>
                    <div class="item1">
                        <img src="https://is3-ssl.mzstatic.com/image/thumb/d6sprLP3-1W-OlED4ZlzOg/756x425.jpg"
                            alt="Sidney" srcset="">
                    </div>
                    <div class="item1">
                        <img src="https://is5-ssl.mzstatic.com/image/thumb/PWsYggMXgU6kQrxaB3MZPQ/756x425.jpg"
                            alt="Shantaram" srcset="">
                    </div>
                    <div class="item1">
                        <img src="https://is3-ssl.mzstatic.com/image/thumb/kVTKGnVvCdFlB1sZeKa8YQ/756x425.jpg"
                            alt="Suspicion">
                    </div>
                    <div class="item1">
                        <img src="https://is5-ssl.mzstatic.com/image/thumb/7SeRlnCzKlgeqrg6-ixkig/738x416.jpg"
                            alt="SEE">
                    </div>
                </div>

            </div>
        </section>
    </div>
    <div class="spacer"></div>
    <div class="Footer"><?php include "src/footer.php"; ?></div>

    <script src="js/index.js"></script>
</body>

</html>