<?php
include("includes/config.php");
include("includes/classes/Artist.php");
include("includes/classes/Album.php");
include("includes/classes/Song.php");

//session_destroy(); Logout

if (isset($_SESSION['userLoggedIn'])) {
  $userLoggedIn = $_SESSION['userLoggedIn'];
  echo "<script>userLoggedIn = '$userLoggedIn';</script>";
} else {
  header("Location: register.php");
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome to Oybutue</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
  </head>
  <body>



    <div id="mainContainer">

      <div id="topContainer">

        <?php include("includes/navBarContainer.php") ?>

        <div id="mainViewContainer">

          <div id="mainContent">
