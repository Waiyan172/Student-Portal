<?php
date_default_timezone_set('Asia/Rangoon');
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
session_start();
$connect = mysqli_connect("localhost:3306","root","w@iy@n1921","auston");
session_start();

if(isset($_COOKIE['user_id']))
{
    $user_id = $_COOKIE['user_id'];
}
 else
{
    $user_id = '';
}

if (isset($_POST['btnlogin']))
{
    $_SESSION['email']  = $_POST['txtemail'];
    $email = $_SESSION['email'];
    // $email = $_POST['txtemail'];
    $password = $_POST['txtpass'];

    // $ID = "SELECT Student_id from students WHERE Email = $email";
    // $_SESSION['ID']  = $ID;
    $select = "SELECT * FROM students WHERE Email = ? AND password = ?";

    $stmt = mysqli_prepare($connect, $select);
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);
    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);
    $countrow = mysqli_num_rows($result);

    // $runquery = mysqli_query($connect,$select);
    // $countrow = mysqli_num_rows($runquery);
    if ($countrow > 0) 
    {
        $_SESSION['stuemail'] = $email;
        $_SESSION['stupass'] = $password;
        // echo "<script>alert('Login successful!')</script>";
        echo "<script>location='stu_pp.php'</script>";
    }
    else
    {
        // echo "<script>location = 'login.html'</script>";
        // $_SESSION['error_message'] = 'Incorrect email or password';
        echo "<script>alert('Incorrect Email or Password! Try again!')</script>";
        echo "<script>location='index.html'</script>";
        // header('Location: login.html');
        // echo "<script>document.getElementById('error_message').innerHTML='Incorrect Email or Password!';</script>";
        exit;
    }
    mysqli_stmt_close($stmt);
}


// if (isset($_POST['btnlogin']))
// {
//     $email = $_POST['txtemail'];
//     $password = $_POST['txtpass'];

//     $select = "SELECT * FROM students WHERE Email = ? AND password = ?";
//     $stmt = mysqli_prepare($connect, $select);
//     mysqli_stmt_bind_param($stmt, "ss", $email, $password);
//     mysqli_stmt_execute($stmt);
    
//     $result = mysqli_stmt_get_result($stmt);
//     $countrow = mysqli_num_rows($result);
    
//     if ($countrow == 0) 
//     {
//         echo "<script>alert('Email or Password may be wrong! please try again!')</script>";
//         echo "<script>location = 'test.html'</script>";
//     }
//     else
//     {
//         $_SESSION['Email'] = $email;
//         $_SESSION['password'] = $password;
//         echo "<script>alert('Login successful!')</script>";
//         echo "<script>location='test.html'</script>";
//     }

//     mysqli_stmt_close($stmt);
// }



// if(isset($_COOKIE['user_id']))
// {
//     $user_id = $_COOKIE['user_id'];
// }
//  else
// {
//     $user_id = '';
// }
 
//  if(isset($_POST['submit']))
//  {
//     $email = $_POST['email'];
//     $email = filter_var($email, FILTER_SANITIZE_STRING);
//     $pass = sha1($_POST['pass']);
//     $pass = filter_var($pass, FILTER_SANITIZE_STRING);
//     $select_user = $conn->prepare("SELECT * FROM 'students' WHERE Email = ? AND password = ? LIMIT 1");
//     $select_user->execute([$email, $pass]);
//     $row = $select_user->fetch(PDO::FETCH_ASSOC);

//     if($select_user->rowCount() > 0)
//     {
//         echo "<script>alert('Login successful!')</script>";
//       setcookie('user_id', $row['id'], time() + 60*60*24*30, '/');
//       header('location:CustomerRegister.php');
//     }
//     else
//     {
//        $message[] = 'incorrect email or password!';
//     }
//  }
?>