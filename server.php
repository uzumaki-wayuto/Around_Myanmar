<?php
session_start();
$fname = '';
$lname = '';
$email = '';
$errors = array();

//connect to //
$db = mysqli_connect('localhost','root','','aroundmyanmar');

//if reg btn is clicked
if(isset($_POST['register'])){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $password_1 = $_POST['password_1'];
  $password_2 = $_POST['password_2'];

  ///check not empty form
  if(empty($fname)){
    array_push($errors,"First Name cannot be omitted");
  }
  if(empty($lname)){
    array_push($errors,"Last Name cannot be omitted");
  }
  if(empty($email)){
    array_push($errors,"Email must be filled");
  }
  if(empty($password_1)) {
    array_push($errors,"Password must be filled");
  }
  if($password_1 != $password_2){
    array_push($errors,"Two passwords do not match");
  }

//if no error,save user data
  if(count($errors) == 0){
    $password = md5($password_1);//encrypt psw hash code
    $sql = "INSERT INTO user (fname,lname,email,psw) VALUES('$fname','$lname','$email','$password')";
    mysqli_query($db,$sql);
    $_SESSION['email'] = $email;
    $_SESSION['fname'] = $fname;
    $_SESSION['lname'] = $lname;
    $_SESSION['success'] = "You are now logged in";
    header('location:default.php'); //redirect to homepage
  }

  //log user in from login page
  if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email)){
      array_push($errors,"Email is required");
    }
    if(empty($password)) {
      array_push($errors,"Password is required");
    }
    if(count($errors) == 0){
      $password = md5($password);
      $query = "SELECT * FROM user WHERE email='$email' AND psw='$password'";
      $result = mysqli_query($db,$query);
      if(mysqli_num_rows($result) == 1){
        $_SESSION['email'] = $email;
        $_SESSION['fname'] = $fname;
        $_SESSION['lname'] = $lname;
        $_SESSION['success'] = "You are now logged in";
        header('location:index.php');
      }else{
        array_push($errors,"Email and password you entered is incorrect");
        header('location: login.php');
      }
    }
  }

  if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['email']);
    unset($_SESSION['fname']);
    unset($_SESSION['lname']);
    header('location:login.php');
  }
}
 ?>
