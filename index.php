<?php include 'contact.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Roshan's Website</title>
</head>
<body>

  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero"><h1><span> R</span>oshan's <span>P</span>rofile</h1></a>
        </div>
        <div class="nav-list">
          <div class="hamburger"><div class="bar"></div></div>
          <ul>
            <li><a href="#hero" data-after="Home">Home</a></li>
            <li><a href="#projects" data-after="Projects">Projects</a></li>
            <li><a href="#about" data-after="About">About</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>




  <section id="hero">
    <div class="hero container">
      <div>
        <h1>A step towards<span></span></h1>
        <h1>Scripterts Zone<span></span></h1>
        <a href="#projects" type="button" class="cta">MY Portfolio</a>
        <div class="logo-img">
          <img src="logo.jpg">
        </div>
      </div>
    </div>
  </section>





  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Projects & <span>Skills</span></h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>Made a Startup</h1>
            <h2>The long time vision</h2>
            <p>I've made my own startup "Eagaloid Technologies" at the age of 17 and managed to get few considerable projects from local clients. I've build an website to promote my business and the preview of my website is attached on right.</p>
        <a href="https://www.eagaloid.com" target="_blank" class="cta">VIEW PROJECT</a>
        </div>
          <div class="project-img">
            <img src="eagaloid.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Designer</h1>
            <h2>To be creative is the only goal</h2>
            <p>I've created posters is order to promote my business to my contacts and as a result I've good few positive responses. I've made poster for my college events and fuction and managed to win first price too.</p>
          <a href="https://www.linkedin.com/posts/roshan-ramesh-b172431b9_poster-ive-made-for-corona-awareness-won-activity-6748478375624617984-s9jY" target="_blank" class="cta">VIEW DESIGN</a>
        </div>
          <div class="project-img">
            <img src="desi.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Ideator</h1>
            <h2>One Idea and a whole different world</h2>
            <p>I truely belive in my ideas and started participating in Hackathons and Ideatons conducted by PSG CAS innovation council and won first price too. Both idea and my work has been uploaded in my LinkedIn profile.</p>
          <a href="https://www.linkedin.com/posts/roshan-ramesh-b172431b9_edutool-activity-6748480982095134720-79I6" target="_blank" class="cta">VIEW IDEA</a>
        </div>
          <div class="project-img">
            <img src="ide.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Typewriter</h1>
            <h2>Fast and clean</h2>
            <p>I've completed Junior and Senior in Typewriting government exams with an excellent type speed. I type fast and clean, so that I belive I could complete projects on time and my type speed wont be a problem for it anyway.</p>
          <a href="https://www.eagaloid.com/vision" target="_blank" class="cta">VIEW WORK</a>
        </div>
          <div class="project-img">
            <img src="typ.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>English Excellence</h1>
            <h2>I speak, I write</h2>
            <p>I've was left to a suiuation where managing the digital marketing part of my company was my reponsibilty. I write professional emails and content of my blog myself. I started a blog as a subdomain of my startup and started posting articles on the things I feel interesting.</p>
          <a href="https://www.eagaloid.com/blog" target="_blank" class="cta">VIEW BLOG</a>
        </div>
          <div class="project-img">
            <img src="eng.jpg" alt="img">
          </div>
        </div>
      </div>
    </div>
  </section>



  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="logo.jpg" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">About <span>me</span></h1>
        <h2>Full Stack Developer</h2>
        <p>I'm Roshan, full stack web developer. I'm good at HTML5,CSS,PHP when it comes to web development. I have made few websites in my past days and have given them in my Projects Sextion. I'm good at leadership skills, communication, marketing, generating ideas, fast typing and a few more to be mention. I've attached my resume in below given link. Kindly Take a look. Thankyou!</p>
        <a href="https://drive.google.com/file/d/1TZhBamAn9mtADWpYhwVesHTmQiPo1RwR/view" target="_blank" class="cta">Download Resume</a>
      </div>
    </div>
  </section>



  <section id="contact">
    <div class="contact container">
      <div><h1 class="section-title">Contact <span>Roshan</span></h1></div>
      <div class="contact-form">
        <form id="contact-form" method="post" action="contact.php">
          <input name="name" type="type" class="form-control" placeholder="Your Name" required>
          <br>
          <input name="email" type="email" class="form-control" placeholder="Email" required>
          <br>
          <input name="number" type="number" class="form-control" placeholder="Phone Number" required>
          <br>
      <textarea name="message" class="form-control" placeholder="Message" row="4" required> </textarea>
        <br>
      <input type="submit" class="form-control-submit"  value="SEND MESSAGE">
      </form>
      </div>
      <br>
      <br>
      <br>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png"/></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+91 7867977742</h2>
            <h2>+91 6382283129</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png"/></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>iamroshanramesh@gmail.com</h2>
            <h2>eagaloid@gmail.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png"/></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>42/32, Gowtham Appartment, Mahavishnu Nagar, Angeripalayam Road, Tirupur 641-603</h2>
          </div>
        </div>
      </div>
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.837522631235!2d76.76709651386301!3d11.491642691838594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8bed2968db915%3A0xf8ea79c492099181!2sEbbanad%2C%20Tamil%20Nadu%20643206!5e0!3m2!1sen!2sin!4v1609079307205!5m2!1sen!2sin"
     width="1500" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <br>
    <br>
    <br>

  </section>



  <section id="footer">
    <div class="footer container">
      <div class="brand"><h1><span>R</span>oshan's <span>P</span>rofile</h1></div>
      <h2>Reach me out here</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="https://www.linkedin.com/in/roshan-ramesh-b172431b9/" target="_blank"><img src="https://img.icons8.com/bubbles/100/000000/linkedin.png"/></a>
        </div>
        <div class="social-item">
          <a href="https://github.com/iamroshanramesh" target="_blank"><img src="https://img.icons8.com/bubbles/100/000000/github.png"/></a>
        </div>
        <div class="social-item">
          <a href="https://twitter.com/iamroshanramesh" target="_blank"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png"/></a>
        </div>

      </div>
      <p>Copyright © 2020 Roshan. All rights reserved</p>
    </div>
  </section>

  <script src="./app.js"></script>


</body>
</html>
