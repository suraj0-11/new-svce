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
        <section class="heading">
  <div class="content">
    <div class="lockup">

      <div class="icon">
        <img src="https://tv.apple.com/assets/brands/TV_App_Logo-d343000dfd3ca454ca8705a7aa7dcf4f.png" alt="" srcset="">
      </div>
      <h2 class="headline">Watch Apple&nbsp;TV+ anywhere <br class="large">on the Apple&nbsp;TV&nbsp;app.</h2>
      <p class="blurb">
        Find the Apple TV app on your favorite Apple devices. Or watch Apple TV+ online at <a href="#">tv.apple.com</a>.
      </p>
    </div>
  </div>
</section>
<section class="marquees__wrapper">
  <div class="marquee" data-duration="5" data-reverse="true">
    <div class="marquee__group">
      <div class="item1">
        <img src="https://is2-ssl.mzstatic.com/image/thumb/GT66HoV8VJL1IZwaqos_TQ/756x425.jpg" alt="Ted Lasso" srcset="">
      </div>
      <div class="item1">
        <img src="https://is1-ssl.mzstatic.com/image/thumb/zRCSBlp0LjwClRXsjyDNYQ/756x425.jpg" alt="CODA" srcset="">
      </div>
      <div class="item1">
        <img src="https://is1-ssl.mzstatic.com/image/thumb/vPnF3gIE_xEMoXPI1SyluA/756x425.jpg" alt="Prehistoric Planet" srcset="">
      </div>
      <div class="item1">
        <img src="https://is4-ssl.mzstatic.com/image/thumb/GwU4Qm-NLXeNi7M5bxpX-g/756x425.jpg" alt="The Long Game" srcset="">
      </div>
      <div class="item1">
        <img src="https://is3-ssl.mzstatic.com/image/thumb/d6sprLP3-1W-OlED4ZlzOg/756x425.jpg" alt="Sidney" srcset="">
      </div>
      <div class="item1">
        <img src="https://is5-ssl.mzstatic.com/image/thumb/PWsYggMXgU6kQrxaB3MZPQ/756x425.jpg" alt="Shantaram" srcset="">
      </div>
      <div class="item1">
        <img src="https://is3-ssl.mzstatic.com/image/thumb/kVTKGnVvCdFlB1sZeKa8YQ/756x425.jpg" alt="Suspicion">
      </div>
      <div class="item1">
        <img src="https://is5-ssl.mzstatic.com/image/thumb/7SeRlnCzKlgeqrg6-ixkig/738x416.jpg" alt="SEE">
      </div>
    </div>

  </div>
  <div class="marquee" data-duration="5">
    <div class="marquee__group">
      <div class="item1">
        <img src="https://is5-ssl.mzstatic.com/image/thumb/ewq0-5ZSairVdRtcg43s0w/738x416.jpg" alt="Five Days at Memorial" srcset="">
      </div>
      <div class="item1">
        <img src="https://is3-ssl.mzstatic.com/image/thumb/AWDRdQz0nepFpnsUNiTDuw/738x416.jpg" alt="The Morning Show" srcset="">
      </div>
      <div class="item1">
        <img src="https://is1-ssl.mzstatic.com/image/thumb/oANBVngpEJDvHRhdyozySA/738x416.jpg" alt="Grey Hound" srcset="">
      </div>
      <div class="item1">
        <img src="https://is4-ssl.mzstatic.com/image/thumb/L4WNJNV3nbmyAL6MQSeGuw/738x416.jpg" alt="Defending Jacob" srcset="">
      </div>
      <div class="item1">
        <img src="https://is2-ssl.mzstatic.com/image/thumb/qYEYYvFXN2O4zEuCcBSbjw/738x416.jpg" alt="Foundation" srcset="">
      </div>
      <div class="item1">
        <img src="https://is3-ssl.mzstatic.com/image/thumb/3iAbZQ4pznOpDRenkvOhNA/738x416.jpg" alt="Dickinson" srcset="">
      </div>
      <div class="item1">
        <img src="https://is2-ssl.mzstatic.com/image/thumb/6tJakyTEtS0vrgdc9POZpg/738x416.jpg" alt="Servant">
      </div>
      <div class="item1">
        <img src="https://is1-ssl.mzstatic.com/image/thumb/mqP1mK0HzuFhIBXsd_Q_SA/738x416.jpg" alt="Home Before Dark">
      </div>
    </div>

  </div>
  <div class="marquee" data-duration="7">
    <div class="marquee__group">
      <div class="item1">
        <img src="https://is2-ssl.mzstatic.com/image/thumb/GT66HoV8VJL1IZwaqos_TQ/756x425.jpg" alt="Ted Lasso" srcset="">
      </div>
      <div class="item1">
        <img src="https://is1-ssl.mzstatic.com/image/thumb/zRCSBlp0LjwClRXsjyDNYQ/756x425.jpg" alt="CODA" srcset="">
      </div>
      <div class="item1">
        <img src="https://is1-ssl.mzstatic.com/image/thumb/vPnF3gIE_xEMoXPI1SyluA/756x425.jpg" alt="Prehistoric Planet" srcset="">
      </div>
      <div class="item1">
        <img src="https://is4-ssl.mzstatic.com/image/thumb/GwU4Qm-NLXeNi7M5bxpX-g/756x425.jpg" alt="The Long Game" srcset="">
      </div>
      <div class="item1">
        <img src="https://is3-ssl.mzstatic.com/image/thumb/d6sprLP3-1W-OlED4ZlzOg/756x425.jpg" alt="Sidney" srcset="">
      </div>
      <div class="item1">
        <img src="https://is5-ssl.mzstatic.com/image/thumb/PWsYggMXgU6kQrxaB3MZPQ/756x425.jpg" alt="Shantaram" srcset="">
      </div>
      <div class="item1">
        <img src="https://is3-ssl.mzstatic.com/image/thumb/kVTKGnVvCdFlB1sZeKa8YQ/756x425.jpg" alt="Suspicion">
      </div>
      <div class="item1">
        <img src="https://is5-ssl.mzstatic.com/image/thumb/7SeRlnCzKlgeqrg6-ixkig/738x416.jpg" alt="SEE">
      </div>
    </div>

  </div>
</section>
<footer>
  <div class="footer__content">
    <div class="logo">
      <svg viewBox="0 0 256 315" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid">
        <g>
          <path d="M213.803394,167.030943 C214.2452,214.609646 255.542482,230.442639 256,230.644727 C255.650812,231.761357 249.401383,253.208293 234.24263,275.361446 C221.138555,294.513969 207.538253,313.596333 186.113759,313.991545 C165.062051,314.379442 158.292752,301.507828 134.22469,301.507828 C110.163898,301.507828 102.642899,313.596301 82.7151126,314.379442 C62.0350407,315.16201 46.2873831,293.668525 33.0744079,274.586162 C6.07529317,235.552544 -14.5576169,164.286328 13.147166,116.18047 C26.9103111,92.2909053 51.5060917,77.1630356 78.2026125,76.7751096 C98.5099145,76.3877456 117.677594,90.4371851 130.091705,90.4371851 C142.497945,90.4371851 165.790755,73.5415029 190.277627,76.0228474 C200.528668,76.4495055 229.303509,80.1636878 247.780625,107.209389 C246.291825,108.132333 213.44635,127.253405 213.803394,167.030988 M174.239142,50.1987033 C185.218331,36.9088319 192.607958,18.4081019 190.591988,0 C174.766312,0.636050225 155.629514,10.5457909 144.278109,23.8283506 C134.10507,35.5906758 125.195775,54.4170275 127.599657,72.4607932 C145.239231,73.8255433 163.259413,63.4970262 174.239142,50.1987249" fill="currentColor"></path>
        </g>
      </svg>
    </div>
    <span class="separator"></span>
    <div class="copy">
      <i>Not</i> designed by Apple
    </div>
  </div>
</footer>
        <div class="spacer"></div>
        <div class="Footer"><?php include "src/footer.php"; ?></div>

        <script src="js/index.js"></script>
</body>

</html>