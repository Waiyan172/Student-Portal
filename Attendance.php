<?php
date_default_timezone_set('Asia/Rangoon');
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
session_start();

$hostname = "localhost:3306";
$username = "root";
$password = "w@iy@n1921";
$database = "auston";
$connect = mysqli_connect($hostname,$username,$password,$database);

// Check connection
if ($connect ->connect_error) {
    die("Connection failed: " . $connect -> connect_error);
}
$email = $_SESSION['email'];
$vir_sql = "SELECT * FROM virtualization where email = '$email'";
$vir_result = $connect->query($vir_sql);

$PM_sql = "SELECT * FROM project_management where email = '$email'";
$PM_result = $connect->query($PM_sql);

$c_pro_sql = "SELECT * FROM c_programming where email = '$email'";
$c_pro_result = $connect->query($c_pro_sql);

$forensic_sql = "SELECT * FROM forensics where email = '$email'";
$forensic_result = $connect->query($forensic_sql);

$IS_sql = "SELECT * FROM fundamentals_of_is where email = '$email'";
$IS_result = $connect->query($IS_sql);

$arduino_sql = "SELECT * FROM microcontroller_arduino where email = '$email'";
$arduino_result = $connect->query($arduino_sql);

$nw_sql = "SELECT * FROM network_mikrotik where email = '$email'";
$nw_result = $connect->query($nw_sql);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

    <title>Attendance</title>

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
            font-family: "Poppins", sans-serif;
            background-color: #FFCB05;
        }
        td
        {
            border: 1.5px solid rgb(0,0,0);
            padding: 8px;
            padding-top: 15px;
            padding-bottom: 15px;
            margin: auto;
            font-size: 10pt;
        }
        .introduction
        {
            color: #FFCB05;
            background-color: #011F41;
            font-size: 12pt;
            /* font-weight: bold; */
        }
        .sub
        {
            background-color: #FFCB05;
        }
        table
        {
            border-collapse: collapse;
            overflow-y: auto;
            width: 2200px;
            text-align: center;
        }
    </style>
  </head>
  <body>
    <!-- navigation -->
    <nav>
      <a href="https://auston.edu.mm/" target="_blank"><img src="media/austonlogo.png" alt="Auston" width="120px" height="auto" class="Auston"></a>
      <input type="checkbox" id="hamburger" />
      <label for="hamburger">
        <i class="fa-solid fa-bars"></i>
      </label>
      <ul>
      <li>
        <a href="#Account"  onclick="Student_PP()" style="text-decoration: none;">Account</a>
      </li>
      <li>
        <a href="#Timetable" onclick="Timetable()" style="text-decoration: none;">Timetable</a>
      </li>
      <li>
        <a href="#Attendance"  class="active" style="text-decoration: none;" onclick="Attendance()">Attendance</a>
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

<!-- attendance -->
    <table>
        <tr>
            <td class="introduction" style="padding-top: 20px; padding-bottom: 20px;">Subject ID</td>
            <td class="introduction"  style="width: 250px;">Subject Name</td>
            <td class="introduction" class="period" >1st<br>period</td>
            <td class="introduction" >2nd <br>period</td>
            <td class="introduction" >3rd <br>period</td>
            <td class="introduction" >4th <br>period</td>
            <td class="introduction" >5th <br>period</td>
            <td class="introduction" >6th <br>period</td>
            <td class="introduction" >7th <br>period</td>
            <td class="introduction" >8th <br>period</td>
            <td class="introduction" >9th <br>period</td>
            <td class="introduction" >10th <br>period</td>
            <td class="introduction" >11th <br>period</td>
            <td class="introduction" >12th <br>period</td>
            <td class="introduction" >13th <br>period</td>
            <td class="introduction" >14th <br>period</td>
            <td class="introduction" >15th <br>period</td>
            <td class="introduction" >16th <br>period</td>
            <td class="introduction" >17th <br>period</td>
            <td class="introduction" >18th <br>period</td>
            <td class="introduction" >19th <br>period</td>
            <td class="introduction" >20th <br>period</td>
        </tr>

        <tr>
            <td class="introduction">A102IN</td>
            <td class="introduction">Virtualization</td>
            <?php
            if($vir_result->num_rows >0)
            {
              while($row = $vir_result->fetch_assoc())
              {
                echo "<td>".$row["1st_period"]."</td>";
                echo "<td>".$row["2nd_period"]."</td>";
                echo "<td>".$row["3rd_period"]."</td>";
                echo "<td>".$row["4th_period"]."</td>";
                echo "<td>".$row["5th_period"]."</td>";
                echo "<td>".$row["6th_period"]."</td>";
                echo "<td>".$row["7th_period"]."</td>";
                echo "<td>".$row["8th_period"]."</td>";
                echo "<td>".$row["9th_period"]."</td>";
                echo "<td>".$row["10th_period"]."</td>";
                echo "<td>".$row["11th_period"]."</td>";
                echo "<td>".$row["12th_period"]."</td>";echo "<td>".$row["13th_period"]."</td>";echo "<td>".$row["14th_period"]."</td>";echo "<td>".$row["15th_period"]."</td>";echo "<td>".$row["16th_period"]."</td>";echo "<td>".$row["17th_period"]."</td>";echo "<td>".$row["18th_period"]."</td>";echo "<td>".$row["19th_period"]."</td>";echo "<td>".$row["20th_period"]."</td>";

              }
            }
            ?>
        </tr>

        <tr>
            <td class="introduction" >A208ET</td>
            <td class="introduction" >Project Management</td>
            <?php
            if($PM_result->num_rows >0)
            {
              while($row = $PM_result->fetch_assoc())
              {
                echo "<td>".$row["1st_period"]."</td>";
                echo "<td>".$row["2nd_period"]."</td>";
                echo "<td>".$row["3rd_period"]."</td>";
                echo "<td>".$row["4th_period"]."</td>";
                echo "<td>".$row["5th_period"]."</td>";
                echo "<td>".$row["6th_period"]."</td>";
                echo "<td>".$row["7th_period"]."</td>";
                echo "<td>".$row["8th_period"]."</td>";
                echo "<td>".$row["9th_period"]."</td>";
                echo "<td>".$row["10th_period"]."</td>";
                echo "<td>".$row["11th_period"]."</td>";
                echo "<td>".$row["12th_period"]."</td>";echo "<td>".$row["13th_period"]."</td>";echo "<td>".$row["14th_period"]."</td>";echo "<td>".$row["15th_period"]."</td>";echo "<td>".$row["16th_period"]."</td>";echo "<td>".$row["17th_period"]."</td>";echo "<td>".$row["18th_period"]."</td>";echo "<td>".$row["19th_period"]."</td>";echo "<td>".$row["20th_period"]."</td>";

              }
            }
            ?>
        </tr>

        <tr>
            <td class="introduction" >A107CS</td>
            <td class="introduction" >Introduction to Programming</td>
            <?php
            if($c_pro_result->num_rows >0)
            {
              while($row = $c_pro_result->fetch_assoc())
              {
                echo "<td>".$row["1st_period"]."</td>";
                echo "<td>".$row["2nd_period"]."</td>";
                echo "<td>".$row["3rd_period"]."</td>";
                echo "<td>".$row["4th_period"]."</td>";
                echo "<td>".$row["5th_period"]."</td>";
                echo "<td>".$row["6th_period"]."</td>";
                echo "<td>".$row["7th_period"]."</td>";
                echo "<td>".$row["8th_period"]."</td>";
                echo "<td>".$row["9th_period"]."</td>";
                echo "<td>".$row["10th_period"]."</td>";
                echo "<td>".$row["11th_period"]."</td>";
                echo "<td>".$row["12th_period"]."</td>";echo "<td>".$row["13th_period"]."</td>";echo "<td>".$row["14th_period"]."</td>";echo "<td>".$row["15th_period"]."</td>";echo "<td>".$row["16th_period"]."</td>";echo "<td>".$row["17th_period"]."</td>";echo "<td>".$row["18th_period"]."</td>";echo "<td>".$row["19th_period"]."</td>";echo "<td>".$row["20th_period"]."</td>";

              }
            }
            ?>
        </tr>

        <tr>
            <td class="introduction" >A201IN</td>
            <td class="introduction" >Forensics and Security Management</td>
            <?php
            if($forensic_result->num_rows >0)
            {
              while($row = $forensic_result->fetch_assoc())
              {
                echo "<td>".$row["1st_period"]."</td>";
                echo "<td>".$row["2nd_period"]."</td>";
                echo "<td>".$row["3rd_period"]."</td>";
                echo "<td>".$row["4th_period"]."</td>";
                echo "<td>".$row["5th_period"]."</td>";
                echo "<td>".$row["6th_period"]."</td>";
                echo "<td>".$row["7th_period"]."</td>";
                echo "<td>".$row["8th_period"]."</td>";
                echo "<td>".$row["9th_period"]."</td>";
                echo "<td>".$row["10th_period"]."</td>";
                echo "<td>".$row["11th_period"]."</td>";
                echo "<td>".$row["12th_period"]."</td>";echo "<td>".$row["13th_period"]."</td>";echo "<td>".$row["14th_period"]."</td>";echo "<td>".$row["15th_period"]."</td>";echo "<td>".$row["16th_period"]."</td>";echo "<td>".$row["17th_period"]."</td>";echo "<td>".$row["18th_period"]."</td>";echo "<td>".$row["19th_period"]."</td>";echo "<td>".$row["20th_period"]."</td>";

              }
            }
            ?>
        </tr>

        <tr>
            <td class="introduction" >A110IN</td>
            <td class="introduction" >Fundamentals of Information Systems</td>
            <?php
            if($IS_result->num_rows >0)
            {
              while($row = $IS_result->fetch_assoc())
              {
                echo "<td>".$row["1st_period"]."</td>";
                echo "<td>".$row["2nd_period"]."</td>";
                echo "<td>".$row["3rd_period"]."</td>";
                echo "<td>".$row["4th_period"]."</td>";
                echo "<td>".$row["5th_period"]."</td>";
                echo "<td>".$row["6th_period"]."</td>";
                echo "<td>".$row["7th_period"]."</td>";
                echo "<td>".$row["8th_period"]."</td>";
                echo "<td>".$row["9th_period"]."</td>";
                echo "<td>".$row["10th_period"]."</td>";
                echo "<td>".$row["11th_period"]."</td>";
                echo "<td>".$row["12th_period"]."</td>";echo "<td>".$row["13th_period"]."</td>";echo "<td>".$row["14th_period"]."</td>";echo "<td>".$row["15th_period"]."</td>";echo "<td>".$row["16th_period"]."</td>";echo "<td>".$row["17th_period"]."</td>";echo "<td>".$row["18th_period"]."</td>";echo "<td>".$row["19th_period"]."</td>";echo "<td>".$row["20th_period"]."</td>";

              }
            }
            ?>
        </tr>

        <tr>
            <td class="introduction" >A201ET</td>
            <td class="introduction"  >Microcontroller, Sensor and Actuators</td>
            <?php
            if($arduino_result->num_rows >0)
            {
              while($row = $arduino_result->fetch_assoc())
              {
                echo "<td>".$row["1st_period"]."</td>";
                echo "<td>".$row["2nd_period"]."</td>";
                echo "<td>".$row["3rd_period"]."</td>";
                echo "<td>".$row["4th_period"]."</td>";
                echo "<td>".$row["5th_period"]."</td>";
                echo "<td>".$row["6th_period"]."</td>";
                echo "<td>".$row["7th_period"]."</td>";
                echo "<td>".$row["8th_period"]."</td>";
                echo "<td>".$row["9th_period"]."</td>";
                echo "<td>".$row["10th_period"]."</td>";
                echo "<td>".$row["11th_period"]."</td>";
                echo "<td>".$row["12th_period"]."</td>";echo "<td>".$row["13th_period"]."</td>";echo "<td>".$row["14th_period"]."</td>";echo "<td>".$row["15th_period"]."</td>";echo "<td>".$row["16th_period"]."</td>";echo "<td>".$row["17th_period"]."</td>";echo "<td>".$row["18th_period"]."</td>";echo "<td>".$row["19th_period"]."</td>";echo "<td>".$row["20th_period"]."</td>";

              }
            }
            ?>
        </tr>

        <tr>
            <td class="introduction" >A101IN</td>
            <td class="introduction" >Computer Architecture and Network</td>
            <?php
            if($nw_result->num_rows >0)
            {
              while($row = $nw_result->fetch_assoc())
              {
                echo "<td>".$row["1st_period"]."</td>";
                echo "<td>".$row["2nd_period"]."</td>";
                echo "<td>".$row["3rd_period"]."</td>";
                echo "<td>".$row["4th_period"]."</td>";
                echo "<td>".$row["5th_period"]."</td>";
                echo "<td>".$row["6th_period"]."</td>";
                echo "<td>".$row["7th_period"]."</td>";
                echo "<td>".$row["8th_period"]."</td>";
                echo "<td>".$row["9th_period"]."</td>";
                echo "<td>".$row["10th_period"]."</td>";
                echo "<td>".$row["11th_period"]."</td>";
                echo "<td>".$row["12th_period"]."</td>";echo "<td>".$row["13th_period"]."</td>";echo "<td>".$row["14th_period"]."</td>";echo "<td>".$row["15th_period"]."</td>";echo "<td>".$row["16th_period"]."</td>";echo "<td>".$row["17th_period"]."</td>";echo "<td>".$row["18th_period"]."</td>";echo "<td>".$row["19th_period"]."</td>";echo "<td>".$row["20th_period"]."</td>";

              }
            }
            ?>
        </tr>
    </table>
  </body>
</html>


