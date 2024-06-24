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
    <link rel="stylesheet" href="css\courses.css?v=<?php echo time(); ?>">
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
    <div class="BannerContent">
        <div class="pinMoto">
            <div class="slideText" id="slide-text">
                <b>
                    <h1 class="moto">
                        WE <br />
                        DON'T JUST <br />
                        DREAM IT, <br />
                        <div class="engine">WE ENGINEER IT.</div>
                    </h1>
                </b>
            </div>
            <div class="backgroundDiv">
                <video class="backgroundVideo" src="assets/video/video.mp4" autoplay loop muted></video>
            </div>
        </div>
        <div class="overflowDiv">
            <div class="hero">
                <div class="hero-inner" id="section-3">
                    <figure></figure>
                </div>
            </div>

            <div class="contentText">
                <div class="content__inner">
                    <h1 class="content__title">Some Happy Little Text</h1>
                    <h3 class="content__author">By Bob Ross</h3>
                    <p>
                        A thin paint will stick to a thick paint. The shadows are just
                        like the highlights, but we're going in the opposite direction.
                        When you do it your way you can go anywhere you choose.
                    </p>
                    <blockquote>
                        When you do it your way you can go anywhere you choose.
                    </blockquote>

                    <blockquote>Don't fight it, use what happens.</blockquote>

                    <p>
                        Let's build some happy little clouds up here. Everyone is going to
                        see things differently - and that's the way it should be. Let's do
                        that again. A tree needs to be your friend if you're going to
                        paint him. That's why I paint - because I can create the kind of
                        world I want - and I can make this world as happy as I want it.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="scrollable-container">
        <!-- Your scrollable content goes here -->

        <section class="cards-container">

            <div class="scroll-reveal-section"><!-- BEGIN Reveal panel section -->
                <div class="Transition-Left">
                    <div class="item">
                        <div class="image-holder">
                            <img src="assets\bgimages\4 (38).jpg">
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
                            <img src="assets\bgimages\4 (51).jpg">
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
                            <img src="assets\bgimages\DSC08211_2_3_4_5.jpg">
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
    <section class="courses-section">
        <div class="wrapper">
            <h1>ACADEMIC PROGRAMS</h1>
            <div class="cards_wrapper">
                <button class="prev" style="color: #ffffff; background-color: #ff0000;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                    </svg>
                </button>
                </button>
                <div class="cards">
                    <div class="card">
                        <img src="./images/image1.webp" alt="">
                        <div>
                            <span class="card-title">CSE</span>
                            <span class="card-subtitle">Computer Science & Engineering</span>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./images/image2.webp" alt="">
                        <div>
                            <span class="card-title">CSE-AI</span>
                            <span class="card-subtitle">Computer Science & Engineering -<br> Artificial
                                Intelligence</span>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./images/image3.webp" alt="">
                        <div>
                            <span class="card-title">CSE-DS</span>
                            <span class="card-subtitle">Computer Science & Engineering -<br> Data Science</span>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./images/image1.webp" alt="">
                        <div>
                            <span class="card-title">CSE-CY</span>
                            <span class="card-subtitle">Computer Science & Engineering -<br> Cyber Security</span>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./images/image2.webp" alt="">
                        <div>
                            <span class="card-title">ISE</span>
                            <span class="card-subtitle">Information Science & Engineering</span>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./images/image3.webp" alt="">
                        <div>
                            <span class="card-title">ECE</span>
                            <span class="card-subtitle">Electronics & Communication <br> Engineering</span>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./images/image1.webp" alt="">
                        <div>
                            <span class="card-title">ME</span>
                            <span class="card-subtitle">Mechanical Engineering</span>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./images/image2.webp" alt="">
                        <div>
                            <span class="card-title">CE</span>
                            <span class="card-subtitle">Civil Engineering</span>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./images/image3.webp" alt="">
                        <div>
                            <span class="card-title">MBA</span>
                            <span class="card-subtitle">Masters of Business Administration</span>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./images/image3.webp" alt="">
                        <div>
                            <span class="card-title">M.Tech</span>
                            <span class="card-subtitle">Structural Engineering</span>
                        </div>
                    </div>
                </div>
                <button class="next" style="color: #ffffff; background-color: #0000ff;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                    </svg>
                </button>
            </div>
        </div>
    </section>


    <section class="college-section">
        <div>
            <div class="college-container">
                <div class="college-header">
                    <h1>CAMPUS LIFE</h1>
                    <h2>Our thriving residential campus is home to a community of creative and accomplished people from
                        around the world.</h2>
                    <div class="college-header-image">
                        <img src="assets\bgimages\IMG_9641.jpg" alt="Header Image">
                    </div>

                    <hr>
                    <div class="cls">
                        <div class="cl1">
                            <h1>600+ </h1>
                            <p>Organized student groups </p>
                        </div>
                        <div class="cl2">
                            <h1>81</h1>
                            <p>Undergraduate student residences</p>

                        </div>
                        <div class="cl3">
                            <h1>14000+</h1>
                            <p>Students living on campus</p>

                        </div>
                    </div>


                    <hr>
                    <br>

                    <div class="clbutton">
                        <button>More about Campus life</button>
                    </div>
                    <br>
                    <br>
                    <br>



                </div>


                <div class="college-section">

                    <h1>CAMPUS NEWS</h1>
                    <br>
                    <br>

                    <div class="news-text">
                        <p>Stories about people, research, and innovation across the Farm</p>
                    </div>

                    <br>
                    <br>



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
                    <br>
                    <br>
                    <div class="clbutton">
                        <button>More about Campus News</button>
                    </div>
                </div>
                <div class="college-section">
                    <h1>EXTRA CURRICULAR ACTIVITIES</h1>
                    <br>

                    <div class="news-text">
                        <p>Stories about people, research, and innovation across the Farm</p>
                    </div>
                    <br>
                    <br>



                    <div class="college-grid-container">
                        <div class="college-grid-item">
                            <img src="images/ncc.jpg" alt="Image 1">
                            <p>Explore the vibrant city life and bustling streets.</p>
                        </div>
                        <div class="college-grid-item">
                            <img src="https://images.unsplash.com/photo-1491172700640-4f1a131a3670?crop=entropy&cs=srgb&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MTI3NjY2ODV8&ixlib=rb-4.0.3&q=85"
                                alt="Image 2">
                            <p>Discover the beauty of nature in its purest form.</p>
                        </div>
                        <div class="college-grid-item">
                            <img src="images/computer.jpg" alt="Image 3">
                            <p>Embark on an adventure and create lasting memories.</p>
                        </div>
                    </div>
                    <br>
                    <br>

                    <div class="clbutton">
                        <button>More about Extra curricular activities</button>
                    </div>
                </div>
                <br>
                <br>

                <div class="college-section">
                    <h1>SPORTS AND FITNESS</h1>
                    <br>
                    <div class="news-text">
                        <p>Stories about people, research, and innovation across the Farm</p>
                    </div>
                    <br>
                    <br>

                    <div class="college-grid-container">
                        <div class="college-grid-item">
                            <img src="images/footballhome.jpg" alt="Image 1">
                            <p>Explore the vibrant city life and bustling streets.</p>
                        </div>
                        <div class="college-grid-item">
                            <img src="images/ground.jpg" alt="Image 2">
                            <p>Discover the beauty of nature in its purest form.</p>
                        </div>
                        <div class="college-grid-item">
                            <img src="images/cricket.jpg" alt="Image 3">
                            <p>Embark on an adventure and create lasting memories.</p>
                        </div>
                    </div>
                    <br>
                    <br>

                    <div class="clbutton">
                        <button>More about Sports and Fitness</button>
                    </div>
                </div>
                <br>

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
                        the course, I've successfully switched careers, working as a Software Engineer at a VR startup.
                        "
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
                        " Thank you for the wonderful experience! I now have a job I really enjoy, and make a good
                        living
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
                        Awesome teaching support from TAs who did the bootcamp themselves. Getting guidance from them
                        and
                        learning from their experiences was easy.
                    </p>
                    <p class="campus-news-paragraph">
                        " The staff seem genuinely concerned about my progress which I find really refreshing. The
                        program
                        gave me the confidence necessary to be able to go out in the world and present myself as a
                        capable
                        junior developer. The standard is above the rest. You will get the personal attention you need
                        from
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
                        professionals who can help me learn programming step by step. I was encouraged to enroll by a
                        former
                        student of theirs who can only say wonderful things about the program. The entire curriculum and
                        staff
                        did not disappoint. They were very hands-on and I never had to wait long for assistance. The
                        agile
                        team
                        project, in particular, was outstanding. It took my learning to the next level in a way that no
                        tutorial
                        could ever have. In fact, I've often referred to it during interviews as an example of my
                        developent
                        experience. It certainly helped me land a job as a full-stack developer after receiving multiple
                        offers.
                        100% recommend! "
                    </p>
                </article>
            </main>
        </div>
    </section>
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
                        <img src="assets/logos/Microsoft-Logo-PNG.png" alt="Ted Lasso" srcset="">
                    </div>
                    <div class="item1">
                        <img src="assets/logos/wipro.png" alt="CODA" srcset="">
                    </div>
                    <div class="item1">
                        <img src="assets/logos/ey.png" alt="Prehistoric Planet" srcset="">
                    </div>
                    <div class="item1">
                        <img src="assets/logos/amazon.png" alt="The Long Game" srcset="">
                    </div>
                    <div class="item1">
                        <img src="assets/logos/infosys.jpg" alt="Sidney" srcset="">
                    </div>
                    <div class="item1">
                        <img src="assets/logos/TCS logo.jpg" alt="Shantaram" srcset="">
                    </div>
                    <div class="item1">
                        <img src="assets\logos\hcl.png" alt="Suspicion">
                    </div>
                    <div class="item1">
                        <img src="assets\logos\Rakuten.jpg" alt="SEE">
                    </div>
                </div>

            </div>
            <div class="marquee" data-duration="5">
                <div class="marquee__group">
                    <div class="item1">
                        <img src="httpsassets\logos\amazon.png" alt="Five Days at Memorial" srcset="">
                    </div>
                    <div class="item1">
                        <img src="assets\logos\hcl.png" alt="The Morning Show" srcset="">
                    </div>
                    <div class="item1">
                        <img src="assets\logos\Microsoft-Logo-PNG.png" alt="Grey Hound" srcset="">
                    </div>
                    <div class="item1">
                        <img src="assets\logos\TCS logo.jpg" alt="Defending Jacob" srcset="">
                    </div>
                    <div class="item1">
                        <img src="assets\logos\Wipro.png" alt="Foundation" srcset="">
                    </div>
                    <div class="item1">
                        <img src="assets\logos\infosys.jpg" alt="Dickinson" srcset="">
                    </div>
                    <div class="item1">
                        <img src="assets\logos" alt="Servant">
                    </div>
                    <div class="item1">
                        <img src="assets\logos\Rakuten.jpg" alt="Home Before Dark">
                    </div>
                </div>

            </div>
            <div class="marquee" data-duration="7">
                <div class="marquee__group">
                    <div class="item1">
                        <img src="assets\logos\ey.png" alt="Ted Lasso" srcset="">
                    </div>
                    <div class="item1">
                        <img src="assets\logos\wipro.png" alt="CODA" srcset="">
                    </div>
                    <div class="item1">
                        <img src="assets\logos\amazon.png" alt="Prehistoric Planet" srcset="">
                    </div>
                    <div class="item1">
                        <img src="assets\logos\infosys.jpg" alt="The Long Game" srcset="">
                    </div>
                    <div class="item1">
                        <img src="assets\logos\hcl.png" alt="Sidney" srcset="">
                    </div>
                    <div class="item1">
                        <img src="assets\logos\TCS logo.jpg" alt="Shantaram" srcset="">
                    </div>
                    <div class="item1">
                        <img src="assets\logos\Microsoft-Logo-PNG.png" alt="Suspicion">
                    </div>
                    <div class="item1">
                        <img src="assets\logos\Rakuten.jpg" alt="SEE">
                    </div>
                </div>

            </div>
        </section>
        <br>
        <br>

        <div class="resource-section">
            <br>
            <br>
            <br>
            <h1>RESEARCH</h1>
            <br>
            <div class="news-text">
                <p>Stories about people, research, and innovation across the Farm</p>
            </div>
            <br>
            <br>
            <hr>

            <div class="research">
                <div class="cl1">
                    <h1>15 Institutes </h1>
                    <p>cross disciplinary boundaries </p>
                </div>
                <div class="cl2">
                    <h1>20 Libraries</h1>
                    <p>hold over 12 million items</p>

                </div>
                <div class="cl3">
                    <h1>$1.98 Billion</h1>
                    <p>sponsored research budget</p>

                </div>

            </div>
            <div class="clbutton">
                <button>More about Research</button>
            </div>
            <br>
            <br>

        </div>

    </div>
    <!-- <div class="spacer"></div> -->
    <div class="Footer"><?php include "src/footer.php"; ?></div>
    <script src="js/effect.js"></script>
    <script src="js/index.js"></script>

</body>

</html>