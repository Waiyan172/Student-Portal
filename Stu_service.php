<?php
date_default_timezone_set('Asia/Rangoon');
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
$hostname = "localhost:3306";
$username = "root";
$password = "w@iy@n1921";
$database = "auston";
$connect = mysqli_connect($hostname,$username,$password,$database);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Student Service Team Section</title>
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="CSS_AU_SS.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="navigation.css" />
  </head>
  <body style="background: #67B26F;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #4ca2cd, #67B26F);  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #caaa29, #011F41); ">
  <nav style="display: flex; flex-wrap: wrap-reverse; padding-top: 10.5px;">
    <a href="https://auston.edu.mm/" target="_blank"><img src="media/austonlogo.png" alt="Auston" width="120px" height="auto" ></a>
    <input type="checkbox" id="hamburger" />
    <ul>
      <li>
        <a href="#Account"   onclick="Student_PP()" style="text-decoration: none;">Account</a>
      </li>
      <li>
        <a href="#Timetable" onclick="Timetable()" style="text-decoration: none;">Timetable</a>
      </li>
      <li>
        <a href="#Attendance" style="text-decoration: none;" onclick="Attendance()">Attendance</a>
      </li>
      <li>
        <a href="#Grades" style="text-decoration: none;" onclick="Grades()">Grades</a>
      </li>
      <li>
        <a href="#HDIN Lecturers" onclick="HTML_Academic()" style="text-decoration: none;">HDIN Lecturers</a>
      </li>
      <li>
        <a href="#Student Service" class="active" onclick="StudentService()" style="text-decoration: none;">Student Service</a>
      </li>
    </ul>
  </nav>

<script>
  function StudentService() {
      location='Stu_service.php';
  }

  function HTML_Academic() {
      location='HTML_Academic.html';
  }

  function Timetable() {
      location='Timetable.php';
  }

  function Grades() {
      location='Grade.php';
  }

  function Attendance() {
      location='Attendance.php';
  }

  function Student_PP() {
      location='stu_pp.php';
  }
</script>


    <section>
      <div class="row">
        <h1 style="color: #f3c510;">Student Service Team</h1>
      </div>
      <div class="row">
        <!-- Column 1-->
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="media/Nguwah.png" />
            </div>
            <h3>Nguwah</h3>
            <p>Head of Student Service</p>
            <div class="icons">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin"></i>
              </a>
              
              </a>
              <a href="#">
                <i class="fas fa-envelope"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Column 2-->
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="media/Ayeik.png" />
            </div>
            <h3>Ayeik</h3>
            <p>Senior student service executive</p>
            <div class="icons">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin"></i>
              </a>
             
              <a href="#">
                <i class="fas fa-envelope"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Column 3-->
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="media/July.png" />
            </div>
            <h3>July</h3>
            <p>Junior student service executive</p>
            <div class="icons">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin"></i>
              </a>
             
              <a href="#">
                <i class="fas fa-envelope"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Column 4-->
        <div class="column">
            <div class="card">
              <div class="img-container">
                <img src="media/thaw.png" />
              </div>
              <h3>Thaw Thaw</h3>
              <p>Junior student service executive</p>
              <div class="icons">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                  <i class="fab fa-linkedin"></i>
                </a>
                
                <a href="#">
                  <i class="fas fa-envelope"></i>
                </a>
              </div>
            </div>
          </div>
         
      </div>
    </section>
  </body>
</html>