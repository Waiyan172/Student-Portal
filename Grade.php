<?php
date_default_timezone_set('Asia/Rangoon');
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
session_start();
$hostname = "localhost:3306";
$username = "root";
$password = "w@iy@n1921";
$database = "auston";
$connect = mysqli_connect($hostname,$username,$password,$database);
$email = $_SESSION['email'];

$select_c_programming = "SELECT * FROM c_programming where email = '$email'";
$runselect_c_programming = $connect->query($select_c_programming);

$select_virtualization = "SELECT * FROM virtualization where email = '$email'";
$runselect_virtualization= $connect->query($select_virtualization);

$select_project_management = "SELECT * FROM project_management where email = '$email'";
$runselect_project_management= $connect->query($select_project_management);

$select_forensics = "SELECT * FROM forensics where email = '$email'";
$runselect_forensics= $connect->query($select_forensics);

$select_fundamentals_of_is = "SELECT * FROM fundamentals_of_is where email = '$email'";
$runselect_fundamentals_of_is= $connect->query($select_fundamentals_of_is);

$select_network_mikrotik = "SELECT * FROM network_mikrotik where email = '$email'";
$runselect_network_mikrotik= $connect->query($select_network_mikrotik);

$select_microcontroller_arduino = "SELECT * FROM microcontroller_arduino where email = '$email'";
$runselect_microcontroller_arduino= $connect->query($select_microcontroller_arduino);
// $connect = mysqli_connect("localhost:3308","root","","auston");
// $select_virtualization = "SELECT * from virtualization";
//  where stu_id = '$email'";
// $runselect_virtualization = mysqli_query($connect,$select_virtualization);

// $select_project_management = "SELECT * from project_management";
//  where stu_id = '$email'";
// $runselect_project_management = mysqli_query($connect,$select_project_management);

// $select_virtualization = "SELECT * from virtualization";
// //  where stu_id = '$email'";
// $runselect_virtualization = mysqli_query($connect,$select_virtualization);
// $select_virtualization = "SELECT * from virtualization";
// //  where stu_id = '$email'";
// $runselect_virtualization = mysqli_query($connect,$select_virtualization);
// $select_virtualization = "SELECT * from virtualization";
// //  where stu_id = '$email'";
// $runselect_virtualization = mysqli_query($connect,$select_virtualization);
// $select_virtualization = "SELECT * from virtualization";
// //  where stu_id = '$email'";
// $runselect_virtualization = mysqli_query($connect,$select_virtualization);
// $select_virtualization = "SELECT * from virtualization";
// //  where stu_id = '$email'";
// $runselect_virtualization = mysqli_query($connect,$select_virtualization);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <!-- <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script> -->
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
    <title>Grade</title>
    <style>
      body
      {
        background: #67B26F;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #4ca2cd, #67B26F);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #caaa29, #011F41); 
        font-family: "Poppins", sans-serif;
      }
        nav
        {
            position: sticky;
            
        }
        h1
        {
          text-align: center;
          font-size: 40pt;
          text-decoration: ;
        }
        table
        {
          margin: auto;
          border-color: black;
          box-shadow: 14px 15px 50px 4px rgba(0,0,0,0.68);
        }
        tr > td
        {
          padding: 5px;
          width: fit-content;
          background-color: #caaa29;
          font-weight: bold;
          color: #011F41;
        }
        th
        {
          
          background-color: #011F41;
          color: white;
        }
        td{min-width: 200px;}
        .tablediv
        {
          margin-top: 100px;
          /* border: 1px solid red; */
        }
        #myTable_filter
        {
            margin-top: 10px;
            margin-bottom: 20px;
        }
        #myTable_paginate,#myTable_info
        {
            margin-top: 20px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <!-- navigation bar -->
    <nav >
    <a href="https://auston.edu.mm/" target="_blank"><img src="media/austonlogo.png" alt="Auston" width="120px" height="auto" class="Auston"></a>
    <input type="checkbox" id="hamburger" />
    <ul>
      <li>
        <a href="#Account"  onclick="Student_PP()" style="text-decoration: none;">Account</a>
      </li>
      <li>
        <a href="#Timetable" onclick="Timetable()" style="text-decoration: none;">Timetable</a>
      </li>
      <li>
        <a href="#Attendance"   style="text-decoration: none;" onclick="Attendance()">Attendance</a>
      </li>
      <li>
        <a href="#Grades" class="active" style="text-decoration: none;" onclick="Grades()">Grades</a>
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


  <div class="tablediv">
    <h1>Student's Grade Table</h1>
    <table width="80%" border="1" cellspacing="0px" id="myTable" class="display">
        <thead>
            <tr>
                <th>Subject</th>
                <th>Grade</th>
            </tr>
        </thead>
        <?php
        foreach ($runselect_c_programming as $value_C_programming) 
        {
            echo "<tr>";
            echo "<td>Introduction to C Programming</td>";
            echo "<td >".$value_C_programming['Grades']."</td>";
            echo "</tr>";
        }
        foreach ($runselect_virtualization as $value_virtualization) 
        { 
            echo "<tr>";
            echo "<td>Virtualization</td>";
            echo "<td>".$value_virtualization['Grades']."</td>";
            echo "</tr>";
        }
        foreach ($runselect_project_management as $value_project_management) 
        { 
            echo "<tr>";
            echo "<td>Project Management</td>";
            echo "<td>".$value_project_management['Grades']."</td>";
            echo "</tr>";
        }
        foreach ($runselect_forensics as $value_forensics) 
        { 
            echo "<tr>";
            echo "<td>Forensics & Security Management</td>";
            echo "<td>".$value_forensics['Grades']."</td>";
            echo "</tr>";
        }
        foreach ($runselect_fundamentals_of_is as $value_fundamentals_of_is) 
        { 
            echo "<tr>";
            echo "<td>Fundamentals of Information Systems</td>";
            echo "<td>".$value_fundamentals_of_is['Grades']."</td>";
            echo "</tr>";
        }
        foreach ($runselect_network_mikrotik as $value_network_mikrotik) 
        { 
            echo "<tr>";
            echo "<td>Microcontrollers, Sensors & Actuator</td>";
            echo "<td>".$value_network_mikrotik['Grades']."</td>";
            echo "</tr>";
        }
        foreach ($runselect_microcontroller_arduino as $value_microcontroller_arduino) 
        { 
            echo "<tr>";
            echo "<td>Computer Architecture & Network</td>";
            echo "<td>".$value_microcontroller_arduino['Grades']."</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <script>
        $(document).ready( function () 
        {
        $('#myTable').DataTable();
        } );
    </script>
    </div>
</body>
</html>