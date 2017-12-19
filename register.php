<?php
  include("includes/config.php");
  include("includes/classes/Constants.php");
  include("includes/classes/Account.php");

  $account = new Account($con);

  include("includes/handlers/register-handler.php");
  include("includes/handlers/login-handler.php");

  function getInputValue($name) {
    if (isset($_POST[$name])) {
      echo $_POST[$name];
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome to Oybutue</title>
    <link rel="stylesheet" href="assets/css/register.css">


    <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
    <script src="assets/js/register.js"></script>
  </head>
  <body>
    <?php
    if (isset($_POST['registerButton'])) {
      echo '<script>
      $(document).ready(function() {
        $("#loginForm").hide();
        $("#registerForm").show();
      });
      </script>';
    } else {
      echo '<script>
      $(document).ready(function() {
        $("#loginForm").show();
        $("#registerForm").hide();
      });
      </script>';
    }
    ?>


    <div id="background">
      <div id="loginContainer">
        <div id="inputContainer">
          <form class="" id="loginForm" action="register.php" method="POST">
            <h2>Login to your account</h2>
            <p>
              <?php echo $account->getError(Constants::$loginFailed); ?>
              <label for="loginUsername">Username</label>
              <input id="loginUsername" type="text" name="loginUsername" placeholder="e.g Bart Simpson" value="<?php getInputValue('loginUsername'); ?>" required>
            </p>
            <p>
              <label for="loginPassword">Password</label>
              <input id="loginPassword" type="password" name="loginPassword" placeholder="Your password" required>
            </p>

            <button type="submit" name="loginButton">Log in</button>

            <div class="hasAccountText">
              <span id="hideLogin">Don't have an account yet Sign up here.</span>
            </div>

          </form>


          <form  id="registerForm" action="register.php" method="POST">
            <h2>Create an account</h2>
            <p>
              <?php echo $account->getError(Constants::$usernameChars); ?>
              <?php echo $account->getError(Constants::$usernameTaken); ?>
              <label for="username">Username</label>
              <input id="username" type="text" name="username" placeholder="e.g Bart420blaze" value="<?php getInputValue('username'); ?>" required>
            </p>
            <p>
              <?php echo $account->getError(Constants::$firstNameChars); ?>
              <label for="firstName">First name</label>
              <input id="firstName" type="text" name="firstName" placeholder="e.g Bart" value="<?php getInputValue('firstName'); ?>" required>
            </p>
            <p>
              <?php echo $account->getError(Constants::$lastNameChars); ?>
              <label for="lastName">Last name</label>
              <input id="lastName" type="text" name="lastName" placeholder="e.g Simpson" value="<?php getInputValue('lastName'); ?>" required>
            </p>
            <p>
              <?php echo $account->getError(Constants::$emailNoMatch) ?>
              <?php echo $account->getError(Constants::$emailInvalid); ?>
              <?php echo $account->getError(Constants::$emailTaken); ?>
              <label for="email">Email</label>
              <input id="email" type="email" name="email" placeholder="e.g bart@gmail.com" value="<?php getInputValue('email'); ?>" required>
            </p>
            <p>
              <label for="email2">Confrim email</label>
              <input id="email2" type="email" name="email2" placeholder="e.g bart@gmail.com" required>
            </p>


            <p>
              <?php echo $account->getError(Constants::$passwordsNoMatch); ?>
              <?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
              <?php echo $account->getError(Constants::$passwordChars); ?>
              <label for="password">Password</label>
              <input id="password" type="password" name="password" placeholder="Your password" required>
            </p>
            <p>
              <label for="password2">Password</label>
              <input id="password2" type="password" name="password2" placeholder="Confrim your password" required>
            </p>

            <button type="submit" name="registerButton">Sign up</button>

            <div class="hasAccountText">
              <span id="hideRegister">Already have an account? Login here.</span>
            </div>

          </form>
        </div>
        <div id="loginText">
          <h1>Get great music, right now</h1>
          <h2>Listen to loads of songs for free</h2>
          <ul>
            <li>Discover music you'll fall in lave with</li>
            <li>Create your own playlists</li>
            <li>Follow artist to keep up to date</li>
          </ul>
        </div>
      </div>
    </div>

  </body>
</html>
