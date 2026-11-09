<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description"
          content="Angely Caseñas - BSIT Student and Aspiring Web Developer">

    <title>Angely Caseñas | Portfolio</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<!-- ================= NAVIGATION ================= -->

<header class="navbar">

    <div class="container nav-container">

        <a href="#home" class="logo">
            AC<span>.</span>
        </a>

        <button class="menu-toggle" id="menuToggle">
            ☰
        </button>

        <nav class="nav-menu" id="navMenu">

            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#projects">Projects</a>
            <a href="{{ route('certificates') }}">Certificates</a>
            <a href="#contact">Contact</a>

        </nav>

        <button type="button" class="theme-switch" id="themeSwitch"
            aria-label="Toggle dark mode">
            <span class="switch-circle"></span>
        </button>

    </div>

</header>


    <!-- ================= HOME ================= -->

    <main>

        <section class="hero" id="home">

            <div class="container hero-container">

                <div class="hero-content">

                    <p class="small-title">
                        HELLO, I'M
                    </p>

                    <h1>
                        Angely<br>
                        <span>Caseñas</span>
                    </h1>

                    <p class="hero-description">
                        A Bachelor of Science in Information Technology
                        student and aspiring web developer who enjoys
                        creating simple, useful, and user-friendly systems.
                    </p>

                    <div class="hero-buttons">

                       <a href="{{ asset('files/Resume.pdf') }}"
                              class="btn btn-outline"
                              target="_blank">
                            My Resume
                        </a>

                    </div>

                </div>


                <div class="hero-profile">

                    <div class="profile-circle">

                        <img src="{{ asset('images/profile.jpg') }}"
                             alt="Profile Picture"
                             style="width: 300px; height: 300px; object-fit: cover; border-radius: 50%;">

                    </div>

                    <p class="profile-caption">
                        BSIT Student • Aspiring Developer
                    </p>

                </div>

            </div>

        </section>


        <!-- ================= ABOUT ================= -->

        <section class="section" id="about">

            <div class="container">

                <div class="section-heading">

                    <p class="section-label">
                        ABOUT ME
                    </p>

                    <h2>
                        A little bit about me.
                    </h2>

                </div>


                <div class="about-grid">

                    <div class="about-text">

                        <p>
                            Hi! I'm Angely Caseñas, 22 yrs old living in San Isidro Tomas Oppus Southern Leyte.
                            I'm currently taking Bachelor of Science Information Technology major in Programming in Southern Leyte State University. 
                            A student with an interest in programming and web development.
                        </p>

                        <p>
                            I enjoy learning how websites and applications
                            work and turning ideas into simple and
                            functional systems.
                        </p>

                        <p>
                            Through my school projects, I have gained
                            experience working with Laravel, PHP,
                            MySQL, JavaScript, HTML, and CSS.
                        </p>

                    </div>


                    <div class="about-info">

                        <div class="info-item">

                            <span>Education</span>

                            <strong>
                                Bachelor of Science in Information Technology
                            </strong>

                        </div>


                        <div class="info-item">

                            <span>Focus</span>

                            <strong>
                                Web Development & Programming
                            </strong>

                        </div>


                        <div class="info-item">

                            <span>Currently Learning</span>

                            <strong>
                                Laravel, PHP & Modern Web Development
                            </strong>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- ================= SKILLS ================= -->

        <section class="section section-light" id="skills">

            <div class="container">

                <div class="section-heading">

                    <p class="section-label">
                        MY SKILLS
                    </p>

                    <h2>
                        Technologies I work with.
                    </h2>

                </div>


                <div class="skills-grid">

                    <div class="skill-card">

                        <div class="skill-number">
                            01
                        </div>

                        <h3>
                            HTML & CSS
                        </h3>

                        <p>
                            Creating clean and responsive website
                            layouts and interfaces.
                        </p>

                    </div>


                    <div class="skill-card">

                        <div class="skill-number">
                            02
                        </div>

                        <h3>
                            JavaScript
                        </h3>

                        <p>
                            Adding interaction and functionality
                            to web applications.
                        </p>

                    </div>


                    <div class="skill-card">

                        <div class="skill-number">
                            03
                        </div>

                        <h3>
                            PHP & Laravel
                        </h3>

                        <p>
                            Building web applications using
                            Laravel and PHP.
                        </p>

                    </div>


                    <div class="skill-card">

                        <div class="skill-number">
                            04
                        </div>

                        <h3>
                            MySQL
                        </h3>

                        <p>
                            Creating and managing databases
                            for web applications.
                        </p>

                    </div>


                    <div class="skill-card">

                        <div class="skill-number">
                            05
                        </div>

                        <h3>
                            Git & GitHub
                        </h3>

                        <p>
                            Managing source code and keeping
                            track of project changes.
                        </p>

                    </div>


                    <div class="skill-card">

                        <div class="skill-number">
                            06
                        </div>

                        <h3>
                            UI Design
                        </h3>

                        <p>
                            Designing simple and user-friendly
                            interfaces.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- ================= PROJECTS ================= -->

        <section class="section" id="projects">

            <div class="container">

                <div class="section-heading">

                    <p class="section-label">
                        MY WORK
                    </p>

                    <h2>
                        Selected projects.
                    </h2>

                </div>


                <div class="projects-grid">


                    <!-- PROJECT 1 -->

                    <article class="project-card">

                        <div class="project-number">
                            01
                        </div>

                        <div class="project-content">

                            <p class="project-type">
                                CAPSTONE PROJECT
                            </p>

                            <h3>
                                AniCheck
                            </h3>

                            <p>
                                An Android-based application designed
                                to detect the freshness of meat using colorimetric analysis.
                            </p>

                            <div class="project-tags">

                                <span>Android</span>
                                <span>AI</span>
                                <span>TensorFlow Lite</span>
                                <span>OpenCV</span>

                            </div>

                        </div>

                    </article>


                    <!-- PROJECT 2 -->

                    <article class="project-card">

                        <div class="project-number">
                            02
                        </div>

                        <div class="project-content">

                            <p class="project-type">
                                WEB SYSTEM
                            </p>

                            <h3>
                                Sports Event Management System
                            </h3>

                            <p>
                                A web-based system for managing sports
                                events, teams, schedules, scores,
                                and event information.
                            </p>

                            <div class="project-tags">

                                <span>PHP</span>
                                <span>Laravel</span>
                                <span>MySQL</span>
                                <span>JavaScript</span>

                            </div>

                        </div>

                    </article>


                    <!-- PROJECT 3 -->

                    <article class="project-card">

                        <div class="project-number">
                            03
                        </div>

                        <div class="project-content">

                            <p class="project-type">
                                WEB APPLICATION
                            </p>

                            <h3>
                                Flower Shop System
                            </h3>

                            <p>
                                A CRUD-based flower shop management
                                system for managing products,
                                prices, stock, and status.
                            </p>

                            <div class="project-tags">

                                <span>Laravel</span>
                                <span>PHP</span>
                                <span>MySQL</span>
                                <span>CRUD</span>

                            </div>

                        </div>

                    </article>


                    <!-- PROJECT 4 -->

                    <article class="project-card">

                        <div class="project-number">
                            04
                        </div>

                        <div class="project-content">

                            <p class="project-type">
                                PROGRESSIVE WEB APP
                            </p>

                            <h3>
                                Notes PWA
                            </h3>

                            <p>
                                A simple notes application designed
                                as a Progressive Web App with
                                installable and offline capabilities.
                            </p>

                            <div class="project-tags">

                                <span>PWA</span>
                                <span>JavaScript</span>
                                <span>HTML</span>
                                <span>CSS</span>

                            </div>

                        </div>

                    </article>


                </div>

            </div>

        </section>


        <!-- ================= CONTACT ================= -->

        <section class="contact-section" id="contact">

            <div class="container contact-container">

                <div>

                    <p class="section-label">
                        CONTACT
                    </p>

                    <h2>
                        Let's connect.
                    </h2>

                    <p class="contact-description">
                        If you would like to know more about my work,
                        projects, or skills, feel free to get in touch.
                    </p>

                </div>


                <div class="contact-links">

                    <a href="mailto:your-email@example.com">
                        <span>Email</span>
                        angelycasenas042@gmail.com
                    </a>

                    <a href="#">
                        <span>GitHub</span>
                        github.com/angelycasenas
                    </a>

                </div>

            </div>

        </section>

    </main>


    <!-- ================= FOOTER ================= -->

    <footer>

        <div class="container footer-container">

            <p>
                © {{ date('Y') }} Angely Caseñas. All rights reserved.
            </p>

            <a href="#home">
                Back to top ↑
            </a>

        </div>

    </footer>


    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>