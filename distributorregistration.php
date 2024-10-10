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
    if (isset($_REQUEST['LoginId'])) {
        // removes backslashes
        $LoginId = stripslashes($_REQUEST['LoginId']);
        //escapes special characters in a string
        $LoginId = mysqli_real_escape_string($con, $LoginId);
        $UserPassword = stripslashes($_REQUEST['UserPassword']);
        $UserPassword    = mysqli_real_escape_string($con, $UserPassword);
        $FName = stripslashes($_REQUEST['FName']);
        $FName = mysqli_real_escape_string($con, $FName);
		
		$LName = stripslashes($_REQUEST['LName']);
        //escapes special characters in a string
        $LName = mysqli_real_escape_string($con, $LName);
        $CellNumber    = stripslashes($_REQUEST['CellNumber']);
        $CellNumber    = mysqli_real_escape_string($con, $CellNumber);
        $EmailAddress = stripslashes($_REQUEST['EmailAddress']);
        $EmailAddress = mysqli_real_escape_string($con, $EmailAddress);
		
		$rollId = stripslashes($_REQUEST['rollId']);
        //escapes special characters in a string
        $rollId = mysqli_real_escape_string($con, $rollId);
        $city    = stripslashes($_REQUEST['city']);
        $city    = mysqli_real_escape_string($con, $city);
        $pincode = stripslashes($_REQUEST['pincode']);
        $pincode = mysqli_real_escape_string($con, $pincode);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `distributorinfo` (LoginId, UserPassword, FName, LName, CellNumber,  EmailAddress, rollId, city, pincode)
                     VALUES ('$LoginId', '" . md5($UserPassword) . "', '$FName', '$LName', '$CellNumber',  '$EmailAddress', '$rollId', '$city', '$pincode')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='distributorlogin.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='distributorregistration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="LoginId" placeholder="Username" required />
        <input type="password" class="login-input" name="UserPassword" placeholder="UserPassword">
        <input type="text" class="login-input" name="FName" placeholder="Fast Name">
		 <input type="text" class="login-input" name="LName" placeholder="Last Name" required />
        <input type="text" class="login-input" name="CellNumber" placeholder="Phone Number">
        <input type="text" class="login-input" name="EmailAddress" placeholder="Email">
		<input type="text" class="login-input" name="rollId" placeholder="Role Id" required>
       <input type="text" class="login-input" name="Role type" placeholder="Role Type" required>        
		
		<input type="text" class="login-input" name="city" placeholder="City">
        <input type="text" class="login-input" name="pincode" placeholder="Pincode">
        <input type="submit" name="submit" value="Register" class="login-button"></br></br>
		<input type="Reset" value="Reset" onclick="validate()" class="login-button"/>
        <p class="link">Already have an account? <a href="login.php">Login here</a></p>
    </form>
<?php
    }
?>
</body>
</html>
