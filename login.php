<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="css/style1.css"/>
</head>
<body>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['LoginId'])) {
        $LoginId = stripslashes($_REQUEST['LoginId']);    // removes backslashes
        $LoginId = mysqli_real_escape_string($con, $LoginId);
        $UserPassword = stripslashes($_REQUEST['UserPassword']);
        $UserPassword = mysqli_real_escape_string($con, $UserPassword);
        // Check user is exist in the database
        $query    = "SELECT * FROM `userinfo` WHERE LoginId='$LoginId'
                     AND UserPassword='" . md5($UserPassword) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
		if ($rows == 1) {
            $_SESSION['LoginId'] = $LoginId;
            // Redirect to user dashboard page
            header("Location: agentform.html");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="LoginId" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="UserPassword" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link">Don't have an account? <a href="registration.php">Registration Now</a></p>
  </form>
<?php
    }
?>
</body>
</html>
