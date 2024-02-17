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
?>
<!DOCTYPE html>
<html>
<head>
  <title>Timetable</title>
      <!-- Font Awesome Icons -->
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
  <style>
    body
    {
        background: #67B26F;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #4ca2cd, #67B26F);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #caaa29, #011F41); 
    }
    table 
    {
      border-collapse: collapse;
      width: 90%;
      margin: auto;
      box-shadow: 11px 11px 16px 9px rgba(0,0,0,0.71);
    }
    .Table_header
    {
        background-color: rgb(68, 66, 66);
        color: white;
    }
    th, td {
      border: 1px solid rgb(0,0,0);
      padding: 8px;
      text-align: center;
      font-weight: bold;
    }
    th 
    {
      background-color: #f2f2f2;
    }
    .Day
    {
        background-color: #9b9999;
    }
    .Week
    {
        background-color: #9b9999;
    }
    .blank
    {
        background-color: #fff;
    }
    .Holiday
    {
        background-color: red;
    }
    .Exam
    {
        background-color: rgb(94, 131, 169);
    }
    .Private_Study_Week
    {
        background-color: antiquewhite;
    }
    .A107CS
    {
        background-color: rgb(132, 208, 233);
    }
    .A102IN
    {
        background-color: rgb(255, 119, 0);
    }
    .A208ET
    {
        background-color: rgb(119, 214, 119);
    }
    .A110IN
    {
        background-color: rgb(132, 208, 233);
    }
    .A201IN
    {
        background-color: yellow;
    }
    .A201ET
    {
        background-color: #E4B1B1;
    }
    .A101IN
    {
        background-color: rgb(247, 247, 115);
    }
  </style>
</head>
<body>

    <!-- navigation bar -->
<nav>
    <a href="https://auston.edu.mm/" target="_blank"><img src="media/austonlogo.png" alt="Auston" width="120px" height="auto" class="Auston"></a>
    <input type="checkbox" id="hamburger" />
    <!-- <label for="hamburger">
      <i class="fa-solid fa-bars"></i>
    </label> -->
    <ul>
      
  
      <li>
        <a href="#Account" onclick="Student_PP()">Account</a>
      </li>
      <li>
        <a href="#Timetable" class="active" onclick="Timetable()">Timetable</a>
      </li>
      <li>
        <a href="#Attendance" onclick="Attendance()">Attendance</a>
      </li>
      <li>
        <a href="#Grades" onclick="Grades()">Grades</a>
      </li>
      <li>
        <a href="#HDIN Lecturers" onclick="HTML_Academic()">HDIN Lecturers</a>
      </li>
      <li>
        <a href="#Student Service" onclick="StudentService()">Student Service</a>
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


  <table id="3rd_timetable">
    <tr>
        <th colspan="14" class="Table_header">Higher Diploma in Infrastructure & Network_3rd Semester_27 Feb 2023</th>
    </tr>
    <tr>
        <th rowspan="2" class="Day">Day</th>
        <th class="Week">Week 1</th>
        <th class="Week">Week 2</th>
        <th class="Week">Week 3</th>
        <th class="Week">Week 4</th>
        <th class="Week">Week 5</th>
        <th class="Week">Week 6</th>
        <th class="Week">Week 7</th>
        <th class="Week">Week 8</th>
        <th class="Week">Week 9</th>
        <th class="Week">Week 10</th>
        <th class="Week">Week 11</th>
        <th class="Week">Week 12</th>
        <th class="Week">Week 13</th>
    </tr>
    <tr>
        <th class="Week">27-Feb</th>
        <th class="Week">6-Mar</th>
        <th class="Week">13-Mar</th>
        <th class="Week">20-Mar</th>
        <th class="Week">27-Mar</th>
        <th class="Week">3-Apr</th>
        <th class="Week">10-Apr</th>
        <th class="Week">17-Apr</th>
        <th class="Week">24-Apr</th>
        <th class="Week">1-May</th>
        <th class="Week">8-May</th>
        <th class="Week">15-19 May</th>
        <th class="Week">22-26 May</th>
    </tr>
    <tr>
        <td class="Day">Monday<br>2:00-5:00</td>
        <td class="blank">Orientation<br>Day</td>
        <td rowspan="2" style="background-color: rgb(94, 131, 169);">Office <br> Holiday</td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="Holiday">Armed<br>Forced Day</td>
        <td class="blank"></td>
        <td class="Holiday" rowspan="6">Thingyan<br>Holiday</td>
        <td class="Holiday">Thingyan<br>Holiday</td>
        <td class="A107CS">A107CS-C1<br>Room-3</td>
        <td class="Holiday">May Day</td>
        <td class="A107CS">A107CS-C1<br>Room-3</td>
        <td rowspan="3" class="Private_Study_Week">Private <br>Study <br>Week</td>
        <td rowspan="6" class="Exam">Exam <br>Week</td>
      </tr>
    <tr>
        <td class="Day">Tuesday<br>1:00-4:00</td>
        <td class="blank"></td>
        <td class="A102IN">A102IN-C3<br>Lab-2</td>
        <td class="A102IN">A102IN-C3<br>Lab-2</td>
        <td class="A102IN">A102IN-C3<br>Lab-2</td>
        <td class="A102IN">A102IN-C3<br>Lab-2</td>
        <td class="A102IN">A102IN-C3<br>Lab-2</td>
        <td class="A102IN">A102IN-C3<br>Lab-2</td>
        <td class="A102IN">A102IN-C3<br>Lab-2</td>
        <td class="A102IN">A102IN-C3<br>Lab-2</td>
    </tr>
    <tr>
        <td class="Day">Wednesday</td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="Holiday">Full Moon<br>Day of<br>Kasome</td>
        <td class="blank"></td>
    </tr>
    <tr>
        <td class="Day">Thursday <br>2:00-5:00</td>
        <td class="Holiday">Peasants'<br>Day</td>
        <td class="A107CS">A107CS-C1<br>Room-3</td>
        <td class="A107CS">A107CS-C1<br>Room-3</td>
        <td class="A107CS">A107CS-C1<br>Room-3</td>
        <td class="A107CS">A107CS-C1<br>Room-3</td>
        <td class="A107CS">A107CS-C1<br>Room-3</td>
        <td class="A107CS">A107CS-C1<br>Room-3</td>
        <td class="A107CS">A107CS-C1<br>Room-3</td>
        <td class="A107CS">A107CS-C1<br>Room-3</td>
        <td class="A107CS">A107CS-C1<br>Room-3</td>
        <td class="A107CS">A107CS-C1<br>Room-3</td>
    </tr>
    <tr>
        <td class="Day">Friday <br>2:00-5:00</td>
        <td class="blank"></td>
        <td class="A102IN">A102IN-C3<br>Lab-2</td>
        <td class="A102IN">A102IN-C3<br>Lab-2</td>
        <td class="A102IN">A102IN-C3<br>Lab-2</td>
        <td class="A102IN">A102IN-C3<br>Lab-2</td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td rowspan="2" class="Private_Study_Week">Private <br>Study <br>Week</td>
    </tr>
    <tr>
        <td class="Day">Saturday<br>1:00-4:00</td>
        <td class="A208ET">A208ET-C1<br>Room-1</td>
        <td class="A208ET">A208ET-C1<br>Room-1</td>
        <td class="A208ET">A208ET-C1<br>Room-1</td>
        <td class="A208ET">A208ET-C1<br>Room-1</td>
        <td class="A208ET">A208ET-C1<br>Room-1</td>
        <td class="Holiday">Thingyan<br>Holiday</td>
        <td class="A208ET">A208ET-C1<br>Room-1</td>
        <td class="A208ET">A208ET-C1<br>Room-1</td>
        <td class="A208ET">A208ET-C1<br>Room-1</td>
        <td class="A208ET">A208ET-C1<br>Room-1</td>
    </tr>
    <tr>
        <td colspan="3" class="A102IN">A102IN</td>
        <td colspan="4" class="A102IN">Virtualization - C3</td>
        <td colspan="4" class="A102IN">Sayar Thet</td>
        <td colspan="3" class="A102IN">Lab 2</td>
    </tr>
    <tr>
        <td colspan="3" class="A208ET">A208ET</td>
        <td colspan="4" class="A208ET">Project Management - C1</td>
        <td colspan="4" class="A208ET">U Stephen Seng</td>
        <td colspan="3" class="A208ET">Room 1</td>
    </tr>
    <tr>
        <td colspan="3" class="A107CS">A107CS</td>
        <td colspan="4" class="A107CS">Introduction to Programming - C1</td>
        <td colspan="4" class="A107CS">Dr Thet Htun Khine</td>
        <td colspan="3" class="A107CS">Room 3</td>
    </tr>
  </table>
  <br><br>
  <table id="2nd_timetable">
    <tr>
        <th colspan="14" class="Table_header">Higher Diploma in Infrastructure & Network(1 nov 2022 Term)-Class 2(HD Direct + Term 2)</th>
    </tr>
    <tr>
        <th rowspan="2" class="Day">Day</th>
        <th class="Week">Week 1</th>
        <th class="Week">Week 2</th>
        <th class="Week">Week 3</th>
        <th class="Week">Week 4</th>
        <th class="Week">Week 5</th>
        <th class="Week">Week 6</th>
        <th class="Week">Week 7</th>
        <th class="Week">Week 8</th>
        <th class="Week">Week 9</th>
        <th class="Week">Week 10</th>
        <th class="Week">Week 11</th>
        <th class="Week">Week 12</th>
        <th class="Week">Week 13</th>
    </tr>
    <tr>
        <th class="Week">31-Oct</th>
        <th class="Week">7-Nov</th>
        <th class="Week">14-Nov</th>
        <th class="Week">21-Nov</th>
        <th class="Week">28-Nov</th>
        <th class="Week">5-Dec</th>
        <th class="Week">12-Dec</th>
        <th class="Week">19-Dec</th>
        <th class="Week">26-Dec</th>
        <th class="Week">2-Jan</th>
        <th class="Week">9-Jan</th>
        <th class="Week">16-20 Jan</th>
        <th class="Week">23-27 Jan</th>
    </tr>
    <tr>
        <td class="Day">Monday<br>9:00-11:00</td>
        <td class="blank"></td>
        <td rowspan="2" class="Holiday">Tasaungnaing<br> Holiday</td>
        <td class="A110IN">A110IN<br>Room-3</td>
        <td class="blank"></td>
        <td class="A110IN">A110IN<br>Room-3</td>
        <td class="A110IN">A110IN<br>Room-3</td>
        <td class="A110IN">A110IN<br>Room-3</td>
        <td class="A110IN">A110IN<br>Room-3</td>
        <td class="A110IN">A110IN<br>Room-3</td>
        <td class="A110IN">A110IN<br>Room-3</td>
        <td class="A110IN">A110IN<br>Room-3</td>
        <td class="A110IN">A110IN<br>Room-3</td>
        <td rowspan="6" class="Exam">Exam <br>Week</td>
    </tr>
    <tr>
        <td class="Day">Monday<br>12:00-3:00</td>
        <td class="blank"></td>
        <td class="A201IN">A201IN<br>Room-3</td>
        <td class="blank"></td>
        <td class="A201IN">A201IN<br>Room-3</td>
        <td class="A201IN">A201IN<br>Room-3</td>
        <td class="A201IN">A201IN<br>Room-3</td>
        <td class="A201IN">A201IN<br>Room-3</td>
        <td class="A201IN">A201IN<br>Room-3</td>
        <td class="A201IN">A201IN<br>Room-3</td>
        <td class="A201IN">A201IN<br>Room-3</td>
        <td class="A201IN">A201IN<br>Room-3</td>
    </tr>
    <tr>
        <td class="Day">Tuesday</td>
        <td class="blank">Orientation<br>Day</td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
    </tr>
    <tr>
        <td class="Day">Wednesday<br>9:00-11:00</td>
        <td class="blank"></td>
        <td class="A201IN">A201IN<br>Room-3</td>
        <td class="A201IN">A201IN<br>Room-3</td>
        <td class="blank"></td>
        <td class="A201IN">A201IN<br>Room-3</td>
        <td class="A201IN">A201IN<br>Room-3</td>
        <td class="A201IN">A201IN<br>Room-3</td>
        <td class="A201IN">A201IN<br>Room-3</td>
        <td class="A201IN">A201IN<br>Room-3</td>
        <td class="Holiday">Independence<br>Day</td>
        <td class="A201IN">A201IN<br>Room-3</td>
        <td class="A201IN">A201IN<br>Room-3</td>
    </tr>
    <tr>
        <td class="Day">Thursday<br>9:00-11:00</td>
        <td class="blank"></td>
        <td class="A110IN">A110IN<br>Room-3</td>
        <td class="Holiday">National<br>Day</td>
        <td class="A110IN">A110IN<br>Room-3</td>
        <td class="A110IN">A110IN<br>Room-3</td>
        <td class="A110IN">A110IN<br>Room-3</td>
        <td class="A110IN">A110IN<br>Room-3</td>
        <td class="Holiday">Kayin New<br>Year Day</td>
        <td class="A110IN">A110IN<br>Room-3</td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
    </tr>
    <tr>
        <td class="Day">Friday</td>
        <td class="blank">Kahtein<br>Donation</td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
    </tr>
    <tr>
        <td colspan="3" class="A201IN">A201IN</td>
        <td colspan="4" class="A201IN">Forensics & Security Management</td>
        <td colspan="4" class="A201IN">U Wanna Tun</td>
        <td colspan="3" class="A201IN">Classroom 3</td>
    </tr>
    <tr>
        <td colspan="3" class="A110IN">A110IN</td>
        <td colspan="4" class="A110IN">Fundamentals of Information Systems</td>
        <td colspan="4" class="A110IN">Dr Phyu Hnin Thike</td>
        <td colspan="3" class="A110IN">classroom 3</td>
    </tr>
  </table>
  <br><br>
  <table id="1st_timetable">
    <tr>
        <th colspan="13" class="Table_header">Higher Diploma in Infrastructure & Network-Class 3-(27 Jun 2022 Term)</th>
    </tr>
    <tr>
        <th rowspan="2" class="Day">Day</th>
        <th class="Week">Week 1</th>
        <th class="Week">Week 2</th>
        <th class="Week">Week 3</th>
        <th class="Week">Week 4</th>
        <th class="Week">Week 5</th>
        <th class="Week">Week 6</th>
        <th class="Week">Week 7</th>
        <th class="Week">Week 8</th>
        <th class="Week">Week 9</th>
        <th class="Week">Week 10</th>
        <th class="Week">Week 11</th>
        <th class="Week">Week 12</th>
    </tr>
    <tr>
        <th class="Week">27-Jun</th>
        <th class="Week">4-Jul</th>
        <th class="Week">11-Jul</th>
        <th class="Week">18-Jul</th>
        <th class="Week">25-Jul</th>
        <th class="Week">1-Aug</th>
        <th class="Week">8-Aug</th>
        <th class="Week">15-Aug</th>
        <th class="Week">22-Aug</th>
        <th class="Week">29-Aug</th>
        <th class="Week">5-9 Sep</th>
        <th class="Week">12-16 Sep</th>
    </tr>
    <tr>
        <td class="Day">Monday<br>2:00-5:00</td>
        <td class="blank"></td>
        <td class="A201ET">A201ET<br>Room-3</td>
        <td class="A201ET">A201ET<br>Room-3</td>
        <td class="A201ET">A201ET<br>Room-3</td>
        <td class="A201ET">A201ET<br>Room-3</td>
        <td class="A201ET">A201ET<br>Room-3</td>
        <td class="A201ET">A201ET<br>Room-3</td>
        <td class="A201ET">A201ET<br>Room-3</td>
        <td class="A201ET">A201ET<br>Room-3</td>
        <td class="A201ET">A201ET<br>Room-3</td>
        <td class="A201ET">A201ET<br>Room-3</td>
        <td rowspan="6" class="Exam">Exam <br>Week</td>
    </tr>
    <tr>
        <td class="Day">Tuesday</td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="Holiday">Full Moon <br>Day of <br>Waso</td>
        <td class="Holiday">Martyrs' <br>Day</td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="Private_Study_Week">Private <br>Study <br>Week</td>
    </tr>
    <tr>
        <td class="Day">Wednesday<br>9:00-12:00</td>
        <td class="blank"></td>
        <td class="A101IN">A101IN<br>Room-3</td>
        <td class="A101IN">A101IN<br>Room-3</td>
        <td class="A101IN">A101IN<br>Room-3</td>
        <td class="A101IN">A101IN<br>Room-3</td>
        <td class="A101IN">A101IN<br>Room-3</td>
        <td class="A101IN">A101IN<br>Room-3</td>
        <td class="A101IN">A101IN<br>Room-3</td>
        <td class="A101IN">A101IN<br>Room-3</td>
        <td class="A101IN">A101IN<br>Room-3</td>
        <td class="A101IN">A101IN<br>Room-3</td>
    </tr>
    <tr>
        <td class="Day">Thursday<br>9:00-11:00</td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="Private_Study_Week" rowspan="3">Private <br>Study <br>Week</td>
    </tr>
    <tr>
        <td class="Day">Friday<br>9:00-12:00</td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="A201ET">A201ET<br>Room-3</td>
        <td class="A201ET">A201ET<br>Room-3</td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>
        <td class="blank"></td>        
    </tr>
    <tr>
        <td class="Day">Friday<br>2:00-5:00</td>
        <td class="A101IN">A101IN<br>Room-3</td>
        <td class="A101IN">A101IN<br>Room-3</td>
        <td class="A101IN">A101IN<br>Room-3</td>
        <td class="A101IN">A101IN<br>Room-3</td>
        <td class="A101IN">A101IN<br>Room-3</td>
        <td class="A101IN">A101IN<br>Room-3</td>
        <td class="A101IN">A101IN<br>Room-3</td>
        <td class="A101IN">A101IN<br>Room-3</td>
        <td class="A101IN">A101IN<br>Room-3</td>
        <td class="A101IN">A101IN<br>Room-3</td>
    </tr>
    <tr>
        <td colspan="3" class="A201ET">A201ET</td>
        <td colspan="4" class="A201ET">Microcontrollers, Sensors & Actuator</td>
        <td colspan="3" class="A201ET">Daw Wah Wah Aye</td>
        <td colspan="3" class="A201ET">classroom 3</td>
    </tr>
    <tr>
        <td colspan="3" class="A101IN">A101IN</td>
        <td colspan="4" class="A101IN">Computer Architecture & Network</td>
        <td colspan="3" class="A101IN">U Thet Zaw Aye</td>
        <td colspan="3" class="A101IN">Classroom 3</td>
    </tr>
  </table>
</body>
</html>
