<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="./assets/css/navbar.css">
    <link rel="stylesheet" href="./assets/css/index.css">
    <script defer src="./assets/js/app.js"></script>
    <script src="https://kit.fontawesome.com/186f1479cd.js" crossorigin="anonymous"></script>
</head>
<body>

    <nav class="navbar">
        <div class="navdiv">
            <div class="title"><h1>My Portfolio</h1></div>
            <div class="menu">
                <ul class="menu-list">
                    <li><a href="#home" class="active">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <div class="btn">
                        <button><span>n mode</span></button>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container">
        <div class="main-container">
            <main>
                <div class="hero" id="home">
                    <div class="info">
                        <div class="wrap">
                            <div class="title-main">
                                <h1>Hi! I'm Macren L. Lim</h1>
                            </div>
                            <div class="info1 up">
                                <span>Passionate about web development, graphic design, and digital media. Dedicated to learning and creating meaningful projects.</span>
                            </div>
                            <div class="links">
                                <div class="link left">
                                    <a href="https://github.com/lim6739" target="_blank"><i class="fa-brands fa-github"></i></a>
                                </div>
                                <div class="link left">
                                    <a href="https://www.facebook.com/macren.lim.3/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                                </div>
                                <div class="link left">
                                    <a href="https://www.instagram.com/limmacren/" target="_blank"><i class="fa-brands fa-square-instagram"></i></a>
                                </div>
                                <div class="link left">
                                    <a href="https://www.linkedin.com/in/limmacren" target="_blank"><i class="fa-brands fa-square-linkedin"></i></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="img">
                            <img src="./assets/img/macren.png" alt="Profile Pic" width="350px">
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div class="section">
            <div class="section1" id="about">
                <div class="skillsInfo2 hidden">
                    <div>
                        <img src="./assets/img/workspace.png" alt="workspace.png" width="350px">
                    </div>
                    <div class="aboutMe">
                        <div class="about">
                            <div class="title2 right">
                                <h2>ABOUT ME</h2>
                            </div>
                            <h2 class="h2 right">Hi! I'm Macren L. Lim</h2>
                            <span class="right">A student pursuing a degree in Information Technology. Through hands-on projects, I’ve gained valuable experience in web development, graphic design, and digital media. I’m passionate about creating innovative solutions and am dedicated to honing my skills to deliver impactful projects with creativity and commitment.</span>
                        </div>
                    </div>
                </div>
                <div class="divskills hidden">
                    <div class="skill">
                        <span class="tech"><h2>My Skills</h2></span>
                    </div>
                    <div class="skillsImg">
                        <div class="skillsInfo">
                            <div class="skillsImg1">
                                <div class="logo hidden">
                                    <div class="logos">
                                        <img src="./assets/img/html.png" alt="html.png">
                                        <span>HTML</span>
                                    </div>
                                </div>
                                <div class="logo hidden">
                                    <div class="logos">
                                        <img src="./assets/img/css.png" alt="css.png">
                                        <span>CSS</span>
                                    </div>
                                </div>
                                <div class="logo hidden">
                                    <div class="logos">
                                        <img src="./assets/img/js.png" alt="js.png">
                                        <span>JavaScript</span>
                                    </div>
                                </div>
                                <div class="logo hidden">
                                    <div class="logos">
                                        <img src="./assets/img/php.png" alt="php.png">
                                        <span>Php</span>
                                    </div>
                                </div>
                                <div class="logo hidden">
                                    <div class="logos">
                                        <img src="./assets/img/bootstrap.png" alt="bootstrap.png">
                                        <span>Bootstrap</span>
                                    </div>
                                </div>
                                <div class="logo hidden">
                                    <div class="logos">
                                        <img src="./assets/img/figma.png" alt="figma.png">
                                        <span>Figma</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section2" id="projects">
                <div class="titlecard hidden">
                    <h2>Projects</h2>
                </div>
                <div class="allCard">
                    <div class="project-row">
                        <div class="project-img left">
                            <img src="./assets/img/Projects/BorrowingSystem.png" alt="Project 1">
                        </div>
                        <div class="project-description">
                            <h3 class="r right">SMART Borrowing System at BASC</h3>
                            <p class="r right">A digital solution for tracking, managing, and organizing faculty equipment with QR code technology.</p>
                            <div class="redirect r right">
                                <a href="http://localhost/BorrowingSystem/index.php" target="_blank">
                                    <i class="fa-solid fa-up-right-from-square"></i>
                                    <span>Live Demo</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="project-row">
                        <div class="project-description">
                            <h3 class="l left">Academic Information System</h3>
                            <p class="l left">Manage students, professors, and academic records. Check your records and manage your academic information efficiently.</p>
                            <div class="redirect l left">
                                <a href="http://localhost/student_system/account/login.php" target="_blank">
                                    <i class="fa-solid fa-up-right-from-square"></i>
                                    <span>Live Demo</span>
                                </a>
                            </div>
                        </div>
                        <div class="project-img right">
                            <img src="./assets/img/Projects/AIS.png" alt="Project 2">
                        </div>
                    </div>
                    <div class="project-row">
                        <div class="project-img left">
                            <img src="./assets/img/Projects/DocumentReq.png" alt="Project 2">
                        </div>
                        <div class="project-description">
                            <h3 class="r right">Document Request System UI Design</h3>
                            <p class="r right">A user-friendly interface prototype for streamlining document requests, designed with Figma to enhance accessibility and efficiency.</p>
                            <div class="redirect r right">
                                <a href="https://www.figma.com/proto/eVolBR1XMflxpCAXsEphAI/Integration-of-Kiosk-and-Queue-System?page-id=0%3A1&node-id=264-927&p=f&t=eBjO3i8JDiof5Lw1-0&scaling=min-zoom&content-scaling=fixed&starting-point-node-id=1%3A3" target="_blank">
                                    <i class="fa-solid fa-up-right-from-square"></i>
                                    <span>Live Demo</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="project-row">
                        <div class="project-description">
                            <h3 class="l left">Student Management System</h3>
                            <p class="l left">A web-based platform for efficient management of student data, enabling CRUD operations to streamline administrative tasks.</p>
                            <div class="redirect l left">
                                <a href="http://localhost/student_crud/index.php" target="_blank">
                                    <i class="fa-solid fa-up-right-from-square"></i>
                                    <span>Live Demo</span>
                                </a>
                            </div>
                        </div>
                        <div class="project-img right">
                            <img src="./assets/img/Projects/SMS.png" alt="Project 2">
                        </div>
                    </div>
                </div>
            </div>
            <div class="section3" id="contact">
                    <div class="titlecard hidden">
                        <h2>Contact</h2>
                    </div>
                <div class="sect3">
                    <div class="contacts left">
                        <div class="cont">
                            <div class="contInf">
                                <i class="fa-solid fa-phone"></i>
                                <p>+63 910 724 4070</p>
                            </div>
                        </div>
                        <div class="cont">
                            <div class="contInf">
                                <i class="fa-solid fa-envelope"></i>
                                <p>limmacren@gmail.com</p>
                            </div>
                        </div>
                        <div class="cont">
                            <div class="contInf">
                                <i class="fa-solid fa-location-dot"></i>
                                <p>Dona Remedios Trinidad, Bulacan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <span>© 2025 Macren Lacsina Lim. All Rights Reserved.</span>
        </footer>
    </div>
    <script>
        document.querySelectorAll('.navbar ul a').forEach(link => {
            link.addEventListener('click', function() {
                document.querySelector('.navbar ul a.active').classList.remove('active');
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>