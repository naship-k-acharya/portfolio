@extends('layout')
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Resume</title>
  <meta name="description" content="simple CV example created with HTML and CSS">
  <meta name="author" content="Fly Nerd">
  <link rel="icon" href="./img/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel='shortcut icon' href="/images/favicon.ico" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
<style>
body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f5f5f5;
}

header {
  background-color: hsl(211, 81%, 70%);
  color: rgb(9, 9, 9);
  background: url('images/pngegg.png');
  height: 370px;
  background-attachment: fixed;
  padding: 40px 0;
  font-weight: 3em;
  text-align: center;
}

h1 {
  margin: 2em;
  font-size: 2.5em;
}

section p {
  margin: 20px 0;
  font-size: 1.1em;
  line-height: 1.6;
}

.social-icons {
  margin-top: 30px;
}

.social-icons a {
  color: white;
  text-decoration: none;
  margin: 0 15px;
  font-size: 1.5em;
  transition: transform 0.3s ease;
}

.social-icons a:hover {
  transform: translateY(-3px);
}

.cont {

  padding: 40px 20px;
  background-color: #e7ebee
}

main {
  max-width: 1200px;
  margin: 0 auto;
}

h3 {
  color: #007bff;
  margin-bottom: 20px;
  font-size: 1.8em;
}

.course,
.skill-box,
.school,
.job-title {
  background-color: rgb(241, 242, 246);
  color: black;
  border-radius: 10px;
  padding: 30px;
  margin-bottom: 40px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
}

.course:hover,
.skill-box:hover,
.school:hover,
.job-title:hover {
  transform: translateY(-5px);
}

.skill-boxes {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 30px;
}

ul {
  list-style-type: none;
  padding: 0;
}

ul li {
  margin-bottom: 15px;
  font-size: 1.2em;
}

ul li::before {
  content: "\2022";
  color: #007bff;
  font-weight: bold;
  display: inline-block;
  width: 1em;
  margin-left: -1em;
}

.school {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.school span {
  font-weight: bold;
  font-size: 1.2em;
}

.school strong {
  font-size: 1.2em;
}

.job-title {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.job-title span {
  font-size: 1.2em;
}

.job-title strong {
  font-size: 1.2em;
}

</style>
</head>

<body>
    <header>
      <h1>MY RESUME</h1>
      <section>
        <p>Hello! I am Naship Kumar Acharya. I work as an interface and front-end developer. I'm focused, dedicated, hard-working, and willing to learn in a changing and challenging environment.</p>
        <div class="social-icons">
          <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
          <a href="https://github.com/naship-k-acharya" target="_blank"><i class="fab fa-github-alt"></i></a>
          <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </section>
    </header>
    <div class="cont">
      <main>
        <section class="courses">
          <h3>Courses & Workshops</h3>
          <article class="course">
            <div class="title">
              <h4>Intro to HTML and CSS</h4>
            </div>
            <div class="description">
              <p>Build styled, well-structured websites. Learn how to use HTML5 standard to create websites. Understand CSS syntax, selectors, and units. Learn about code editors and a browser's Developer Tools.</p>
            </div>
          </article>
          <article class='course'>
            <div class='title'>
              <h4>The Web Developer Bootcamp</h4>
            </div>
            <div class="descrition">
              <p>Learn how to create full-stack web applications from scratch using HTML, CSS, JavaScript, jQuery, VanillaJS, NodeJS, MongoDB.</p>
            </div>
          </article>
          <article class='course'>
            <div class='title'>
              <h4> Web Programming with JavaScript</h4>
            </div>
            <div class="descrition">
              <p>Learn how to create web apps and prototypes with JavaScript, represent and exchange data using JavaScript Object Notation (JSON), and how to access RESTful APIs on the web.</p>
            </div>
          </article>
          
          {{--  here is other course --}}
          
        </section>
        <section class="skills">
          <h3>Skills</h3>
          <div class="skill-boxes">
            <div class="skill-box">
              <h4>Good knowledge</h4>
              <ul>
                <li>HTML5</li>
                <li>CSS</li>
                <li>JavaScript</li>
                <li>Bootstrap</li>
                <li>SQL</li>
                <li>C/C++</li>
                <li>Python</li>
                <li>Laravel</li>
              </ul>
            </div>
            <div class="skill-box">
              <h4>Basic knowledge</h4>
              <ul>
                <li>jQuery</li>
                <li>NodeJS</li>
                <li>Machine learning</li>
              </ul>
            </div>
            <div class="skill-box">
              <h4>Languages</h4>
              <ul>
                <li>🇳🇵 Nepal - Native speaker</li>
                <li>🇬🇧 English - Intermediate</li>
                <li>🇮🇳 Indian - Intermediate</li>
              </ul>
            </div>
          </div>
        </section>
        <section class="education">
          <h3>Education</h3>
          <article>
            <div class="description">
              Primary school
            </div>
            <div class="school">
              <span>2015-2018</span> <strong>BBAS Memorial school</strong>
            </div>
            
          </article>
          <article>
            <div class="description">
              Mathemathics
            </div>
            <div class='school'>
              <span>2019-2021</span> <strong>Kalika Multiple Campus</strong>
            </div>
            
          </article>
          <article>
             <div class="description">
              Bachelor in Information And Technologu
            </div>
            <div class='school'>
              <span>2022-2025</span> <strong>Ambition Colllege</strong>
            </div>
           
          </article>
          <!-- other education experiences -->
        </section>
        <section class="experience">
          <h3>Experience</h3>
          <article>
            <div class="job-title">
              <span> ......</span> <strong>XXXXXX</strong><br> <strong>Position:</strong> Web developer Intern
            </div>
            <!-- other job experiences -->
          </article>
        </section>
      </main>
    </div>
  </body>
  
</html>