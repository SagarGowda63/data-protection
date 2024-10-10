<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>agentupdate</title>
    <link rel="stylesheet" href="css/style1.css"/>
	
  <link rel="stylesheet" href="css/table.css" type="text/css"/>
</head>
<body>
<center><b><font size=24>Agent Details</font></b></center>
<div class="CSSTableGenerator" style="width:1300px;height:150px;">   
    <center>
<?php

 require('db.php');
	    $query    = "select LoginId, UserId, FName, LName, CellNumber, EmailAddress, rollId, city, pincode, agenttype from agentinfo";
        $result   = mysqli_query($con, $query);
	
	//$rid=mysql_query("select LoginId, UserId, FName, LName, CellNumber, EmailAddress, rollId, city, pincode from agentinfo") or die(mysql_error());
	print "<table><tr><td>LoginId</td><td>UserId</td><td>FName</td><td>LName</td><td>CellNumber</td><td>EmailAddress</td><td>rollId</td><td>city</td><td>pincode</td><td>agenttype</td></tr>";
	
	While($row=mysqli_fetch_row($result))
	{
        print "</tr><td>$row[0]</td>";
		print "<td>$row[1]</td>";
		print "<td>$row[2]</td>";
		print "<td>$row[3]</td>";
        print "<td>$row[4]</td>";
        print "<td>$row[5]</td>";
		print "<td>$row[6]</td>";
        print "<td>$row[7]</td>";
        print "<td>$row[8]</td>";
		print "<td>$row[9]</td>";
		
	}
	print "</table>";


    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['UserId'])) {
        // removes backslashes
        $UserId = stripslashes($_REQUEST['UserId']);
        //escapes special characters in a string
        $UserId = mysqli_real_escape_string($con, $UserId);
       
        $query    = "UPDATE agentinfo SET blockstate='blocked' WHERE agenttype='0'";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are update successfully.</h3><br/>
                  <p class='link'>Click here to <a href='adminform.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='adminform.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Agent Update</h1>
		<input type="text" class="login-input" name="UserId" placeholder="UserId" required />
        
        <input type="submit" name="submit" value="update" class="login-button"></br></br>
		  <p class="link">Already have an account? <a href="distributorform.php">Login here</a></p>
    </form>
<?php
    }
?>
</body>
</html>
