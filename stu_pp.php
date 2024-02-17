<?php
date_default_timezone_set('Asia/Rangoon');
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
session_start();
include 'LoginCode.php';
$hostname = "localhost:3306";
$username = "root";
$password = "w@iy@n1921";
$database = "auston";
$connect = mysqli_connect($hostname,$username,$password,$database);
$email = $_SESSION['email'];

$select_data = "SELECT * FROM students where Email = '$email'";
$runselect_data = $connect->query($select_data);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Profile Page</title>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="crossorigin="anonymous"referrerpolicy="no-referrer"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap"rel="stylesheet"/>
    <link rel="stylesheet" href="navigation.css" />
    <meta name="author" content="Codeconvey" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>

	  <link rel="stylesheet" href="stu_ppStyle.css">
</head>
<body>
  <!-- navigation bar -->
  <nav style="display: flex; flex-wrap: wrap-reverse; padding-top: 10.5px;">
    <a href="https://auston.edu.mm/" target="_blank"><img src="media/austonlogo.png" alt="Auston" width="120px" height="auto" ></a>
    <input type="checkbox" id="hamburger" />
    <ul>
      <li>
        <a href="#Account"  class="active" onclick="Student_PP()" style="text-decoration: none;">Account</a>
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
        <a href="#Student Service" onclick="StudentService()" style="text-decoration: none;">Student Service</a>
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
		
  <section class="section">
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">

    <!-- Student Profile -->
    <div class="student-profile py-4">
    <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm ">
          <div class="card-header bg-transparent text-center">
            <img class="profile_img" src="media/Cat.png" alt="student dp" style="border-color: #caaa29;">
            <h3><?php while ($row = mysqli_fetch_assoc($runselect_data)) {
                        echo "<h3>".$row['Student_Name']."</h3>"; }?></h3>
          </div>
          <hr style="background-color: white;">
          <div class="card-body">
          <?php
          foreach ($runselect_data as $value_data) 
          {
                echo "<p>"."<strong>"."Student ID   :          "."</strong>".$value_data["Student_id"]."</p>";
                echo "<p>"."<strong>"."Email   :          "."</strong>".$value_data["Email"]."</p>";
                echo "<p>"."<strong>"."Program   :          "."</strong>".$value_data["Program"]."</p>";
          }
            ?>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
            <?php
            foreach ($runselect_data as $value_data) 
            {
            echo "<tr>";
            echo "<td><b>Name</b></td>";
            echo "<td>:</td>";
            echo "<td >".$value_data['Student_Name']."</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td><b>Email</b></td>";
            echo "<td>:</td>";
            echo "<td >".$value_data['Email']."</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td><b>Student ID</b></td>";
            echo "<td>:</td>";
            echo "<td >".$value_data['Student_id']."</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td><b>Program</b></td>";
            echo "<td>:</td>";
            echo "<td >".$value_data['Program']."</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td><b>Phone Number</b></td>";
            echo "<td>:</td>";
            echo "<td >".$value_data['PhNumber']."</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td><b>Address</b></td>";
            echo "<td>:</td>";
            echo "<td >".$value_data['Address']."</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td><b>Date of Birth</b></td>";
            echo "<td>:</td>";
            echo "<td >".$value_data['DOB']."</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td><b>Gender</b></td>";
            echo "<td>:</td>";
            echo "<td >".$value_data['Gender']."</td>";
            echo "</tr>";
            }
            ?>
            </table>
          </div>
        </div>
          <div style="height: 26px"></div>
        <!-- <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Other Information</h3>
          </div>
          <div class="card-body pt-0">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div> -->
      </div>
    </div>
    </div>
    </div>
    <!-- partial -->
           
    		</div>
		</div>
    </div>
  </section>
</body>
</html>