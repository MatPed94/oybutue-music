<?php
if (isset($_POST['loginButton'])) {
  //Login form submitted
  $username = $_POST['loginUsername'];
  $password = $_POST['loginPassword'];

  //Login function
  $result = $account->login($username, $password);
  if ($result == true) {
    $_SESSION['userLoggedIn'] = $username;
    header("Location: index.php");
  }

}
?>