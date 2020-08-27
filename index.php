<!-- Version 1.3 | August 19, 2020 -->
<!-- Made by Sebastian L.-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sebastian Llerena</title>
        <link rel="shortcut icon" href="images/watermelon.png" type="image/x-icon"/>
        <link rel = "stylesheet" href = "styles/index.css">
        <script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>

    <body style="margin: 0">
        <div class="main-container">
            <div class="side-box">
            </div>
            <div class="center-box">
                <!--- Welcome Banner Start -->
                <div class="banner">
                    <img src="images/profilePic3.jpg" class="profilePic">
                    <div id="shuffled">
                        <h1 class="shuffled" style="letter-spacing: 6px;">S</h1>
                        <h1 id="mainTitle" class="shuffled"></h1>
                    </div>
                    <h2>4th Year Computer Science Student at the University of Florida</h2>
                    <div>
                        <a href="https://www.linkedin.com/in/sebastian-llerena/" target="_blank" class="link" title="LinkedIn">
                            <i class="fab fa-linkedin icon"></i>
                        </a>
                        <a href="https://github.com/llerenabarruetos" target="_blank" class="link" title="GitHub">
                            <i class="fab fa-github icon"></i>
                        </a>
                        <a href="mailto: llerenabarruetos@ufl.edu" target="_blank" title="Email: llerenabarruetos@ufl.edu" class="link">
                            <i class="fas fa-envelope-square icon"></i>
                        </a>
                        <a href="includes/Llerena-Sebastian.pdf" target="_blank" class="link" title="Resume">
                            <i class="fa fa-file-alt icon "></i>
                        </a>
                    </div>
                </div>
                <!--- Welcome Banner End -->
                <!--- About Start -->
                <div class="about">
                    <h1>About Me</h1>
                    <p>Welcome to my page! I am a rising senior at the University of Florida majoring in Computer Science with a minor in Engineering Innovation. I am expecting to graduate in Spring 2021 and am currently looking for a full-time Software Engineering position.</p>
                    <p>Thank you for stopping by!</p>
                </div>
                <!--- About End -->
                <!--- Projects Start -->
                <div class="about projects">
                    <h1>Projects</h1>
                    <a href="LifesCoin" style="text-decoration: none; color: white;" title="LifesCoin.com">
                        <div class="bigProjectBox lifescoinBg">
                            <h1>LifesCoin</h1>
                            <p>Social Media | Started December 2019</p>
                            <img src="images/LifescoinIcon.png">
                        </div>
                    </a>
                    <a href="LakeDeep" style="text-decoration: none; color: white;" title="LakeDeep.org">
                        <div class="bigProjectBox lakedeepBg">
                            <h1>LakeDeep</h1>
                            <p>We Make Games | Started May 2019</p>
                            <img src="images/ducksReflected.png" class="ducks">
                        </div>
                    </a>
                     <a href="LakeDevs" style="text-decoration: none; color: white;" title="LakeDevs.com">
                        <div class="bigProjectBox lakedevsBg">
                            <h1>LakeDevs</h1>
                            <p>Freelance Web Development | Started January 2020</p>
                            <img src="images/LakeDevsLogo.png">
                        </div>
                    </a>
                </div>
                <!--- Projects End -->
                <!--- Contact Start -->
                <div class="contact">
                    <h1>Contact</h1>
                    <form action="includes/sendEmail.php" method="post" class="contactForm">
                        <p style="margin: 0 0 0.4rem;">Name</p>
                        <input type="text" name="name" placeholder="Your Name*" required="required" oninvalid="this.setCustomValidity('Please Enter Your Name')" oninput="setCustomValidity('')">
                        <p>Email</p>
                        <input type="text" name="email" placeholder="Your Email*" required="required" oninvalid="this.setCustomValidity('Please Enter Your Email')" oninput="setCustomValidity('')">
                        <p>Subject</p>
                        <input type="text" name="subject" class="subjectOfMessage" placeholder="Subject of Message*" required="required" oninvalid="this.setCustomValidity('Please Enter a Subject')" oninput="setCustomValidity('')">
                        <p>Message</p>
                        <textarea name="message" required="required" oninvalid="this.setCustomValidity('Please Enter a Message')" oninput="setCustomValidity('')"></textArea>
                        <button type="submit" name="submit" class="whiteButton">Send Message</button>
                    </form>
                </div>
                <!--- Contact End -->
            </div>
            <div class="side-box">
            </div>
        </div>
        <div class="footer">Made with CSS Flexbox</div>

        <script src="js/loadLetters.js"></script>
        <script>
            SlowTypeString("ebastian Llerena", "mainTitle", 65);
        </script>
    </body>
</html>