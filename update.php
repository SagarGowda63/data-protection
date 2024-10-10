<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="css/style1.css"/>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['UserId'])) {
        // removes backslashes
        $UserId = stripslashes($_REQUEST['UserId']);
        //escapes special characters in a string
        $UserId = mysqli_real_escape_string($con, $UserId);
       
        $query    = "UPDATE agentinfo SET agenttype='0' WHERE UserId='$UserId'";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are update successfully.</h3><br/>
                  <p class='link'>Click here to <a href='distributorform.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='distributorform.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Agent Update</h1>
        <input type="text" class="login-input" name="UserId" placeholder="UserId" required />
        <input type="submit" name="submit" value="update" class="login-button"></br></br>
		<input type="Reset" value="Reset" onclick="validate()" class="login-button"/>
        <p class="link">Already have an account? <a href="distributorform.php">Login here</a></p>
    </form>
<?php
    }
?>
</body>
</html>
