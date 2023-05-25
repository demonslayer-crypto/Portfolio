<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/69b71160be.js" crossorigin="anonymous"></script>

    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">
   
</head>

<body>

    <!-- Header Design -->
    <header class="header">
        <a href="#" class="logo">My Portfolio</a>

        <i class='bx bx-menu' id="menu-icon"></i>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#projects">Projects</a>
            <a href="#certificates">Certificates</a>
            <a href="#contact">Contact Me</a>

        </nav>
    </header>

    <!-- home section design -->
    <section class="home" id="home">
        <div class="home-content">
            <h3>Hello, It's Me</h3>
            <h1>Khushwant Chand</h1>
            <h3>And I'm a <span class="multiple-text">Frontend developer!</span></h3>
            <p> Talented individual with in-depth knowledge of Designing and Development tools and coding languages. Currently ensuing as a trainee in <span>ICE Technology Lab</span>, Patna Branch to become a <span>Full-Stack Developer</span>. Also employed as a<span> Cloud Infrastructure Services Analyst in Capegemini</span>.</p>
            <div class="social-media">
                <a href="https://www.facebook.com/me/" target="_blank"><i class='bx bxl-facebook'></i></a>
                <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                <a href="#" target="_blank"><i class='bx bxl-instagram-alt'></i></a>
                <a href="https://www.linkedin.com/in/khushwant-chand-5b17701b7/?lipi=urn%3Ali%3Apage%3Ad_flagship3_feed%3BaHwh90UiTIuBaHhdVO9eJQ%3D%3D" target="_blank"><i class='bx bxl-linkedin'></i></a>
            </div>
            <a href="https://drive.google.com/drive/folders/1WMt4eeAQnyPloDOGd2HAx6Xncl89DRso?usp=share_link" class="btn" target="_blank">Download CV</a>
        </div>

        <div class="home-img">
            <img src="images/myself.jpg" alt="Photo">
        </div>

    </section>

    <!-- about section design    -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="images/about.jpeg" alt="about ">
        </div>

        <div class="about-content">
            <h2 class="heading">About <span>Me</span></h2>
            <h3>Carrier Objective</h3>
            <p>To make my best endeavors towards the work
                allotted to me by the company with the help of my
                soft skills, educational knowledge and the power to
                bring innovation at work. Also, allowing myself to
                use the opportunity as a new learning experience
                of an organization. Has an open mind and a flair for
                interacting with people from diverse backgrounds.
                Disciplined, energetic and a strong sense of
                ownership who can employ a structured approach
                to assigned tasks. Seeks a nurturing environment
                that provides active mentorship and supports
                individual and collective growth and perseverance.
                Prefers to work at a multinational organization with
                defined systems and processes as well as strong
                channels of networking.</p>
            <a href="About.php" target="_blank" class="btn">Read More</a>
        </div>
    </section>

    <!-- project section design -->
    <section class="projects" id="projects">
        <h2 class="heading">Latest <span>Projects</span></h2>

        <div class="project-container">
            <div class="project-box">
                <i class='bx bx-shopping-bag'></i>
                <h3>E-Commerce Website</h3>
                <p>E-Commerce website is a very efficient way of learning of all the basic components which is required in how the website as well as it helps to get a proper idea about how a website.</p>
                <a href="https://projectsofkhushwant.nicepage.io/?version=f93207f5-8f86-45a0-aa85-a7fa46b52e4f" target="_blank" class="btn">Read More</a>
            </div>

            <div class="project-container">
                <!-- <div class="project-box">
                    <i class='bx bx-extension'></i>
                    <h3>Google Extensions</h3>
                    <p>Extensions are software programs built on web technologies (such as HTML, CSS, and JavaScript) that enable users to customize the Chrome browsing experience.</p>
                    <a href="https://projectsofkhushwant.nicepage.io/?version=f93207f5-8f86-45a0-aa85-a7fa46b52e4f" target="_blank" class="btn">Read More</a>
                </div> -->

                <div class="project-container">
                    <div class="project-box">
                        <i class='bx bx-food-menu'></i>
                        <h3>Online Calaculator</h3>
                        <p>An online calculator has a different purpose: it is an interactive software tool that is designed to process a predefined set of mathematical functions in order to simulate a business process.</p>
                        <a href="https://projectsofkhushwant.nicepage.io/?version=f93207f5-8f86-45a0-aa85-a7fa46b52e4f" target="_blank" class="btn">Read More</a>
                    </div>

                    <div class="project-container">
                        <div class="project-box">
                        <i class="fa-regular fa-robot"></i>
                            <h3>Line Following Robot</h3>
                            <p>Line Follower Robot (LFR) is a simple autonomously guided robot that follows a line drawn on the ground to either detect a dark line on a white surface or a white line on a dark.</p>
                            <a href="https://projectsofkhushwant.nicepage.io/?version=f93207f5-8f86-45a0-aa85-a7fa46b52e4f" target="_blank" class="btn">Read More</a>
                        </div>
                    </div>
    </section>

    <!-- certificate section design -->
    <section class="certificates" id="certificates">
        <h2 class="heading">My <span>Certifications</span></h2>

        <div class="certificate-container">
            <div class="certificate-box">
                <img src="images/fsd.png" alt="certificates">
                <div class="certificate-layer">
                    <h4>Full Stack Development</h4>
                    <p>It is the process of designing, creating, testing and deploying a computer web application fron start to finish.</p>
                    <a href="#" target="_blank"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <div class="certificate-box">
                <img src="images/c++1.avif" alt="certificates">
                <div class="certificate-layer">
                    <h4>C++ Programming Workshop</h4>
                    <p>It is a high-level, general-purpose programming language. It can be used to develop operating systems, browsers, games, and so on.</p>
                    <a href="https://drive.google.com/file/d/1AmL2IWLhVzCxoAWpvPUZmJL4FzlZYV-V/view?usp=share_link" target="_blank"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <div class="certificate-box">
                <img src="images/py.png" alt="certificates">
                <div class="certificate-layer">
                    <h4>Python Programming Workshop</h4>
                    <p>It is a high-level, general-purpose programming language. It is dynamically typed and garbage collected and supports multiple programming paradigms.</p>
                    <a href="https://drive.google.com/file/d/1ROJUUTpZoGwPEvCmlPEnSxRuniF192_Z/view?usp=share_link" target="_blank"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <div class="certificate-box">
                <img src="images/ethical.jpg" alt="certificates">
                <div class="certificate-layer">
                    <h4>Ethical Hacking Workshop</h4>
                    <p>It involves an authorized attempt to gain unauthorized access to a computer system, application, or data. This practice helps to identify potential security threats and protect our system.</p>
                    <a href="https://drive.google.com/file/d/1b61LH_dbVnw9A60wRR1piP-TB7eUsTgn/view?usp=share_link" target="_blank"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <!-- <div class="certificate-box">
                <img src="images/1.jpeg" alt="certificates">
                <div class="certificate-layer">
                    <h4>Full Stack Development</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum, fugiat.</p>
                    <a href="#" target="_blank"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <div class="certificate-box">
                <img src="images/1.jpeg" alt="certificates">
                <div class="certificate-layer">
                    <h4>Full Stack Development</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum, fugiat.</p>
                    <a href="#" target="_blank"><i class='bx bx-link-external'></i></a>
                </div> -->
        </div>
        </div>
    </section>

    <!-- contact section design -->
    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me!</span></h2>

        <form method="post" action="database.php">
            <div class="input-box">
                <input type="text" name="Full_Name" placeholder="Full Name">
                <input type="email" name="E_Mail" placeholder="Email Address">
            </div>

            <div class="input-box">
                <input type="number" name="Mob_No" placeholder="Mobile Number">
                <input type="text" name="Email_Sub" placeholder="Email Subject">
            </div>

            <textarea cols="30" name="Text" rows="10" placeholder="Your Message"></textarea>
            <input type="submit" name="submit" value="Send Message" class="btn">
        </form>
    </section>

    <!-- footer design -->
    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2023 by Khushwant | All Rights Reserved.</p>
        </div>

        <div class="footer-iconTop">
            <a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
        </div>
    </footer>

    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- typed js -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    <!-- custom js -->
    <script src="js/script.js"></script>
</body>

</html>