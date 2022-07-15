<?php
	include("db_conn.php");
    if (isset($_POST['createUserButton'])) {
        $inputUserType = $_POST['inputUserType'];
        $inputUserFirstname = $_POST['inputUserFirstname'];
        $inputUserLastname = $_POST['inputUserLastname'];
        $exists = 0;
        $fields = array('inputUserType','inputUserFirstname','inputUserLastname');
        foreach($fields as $fieldname) {
            if(empty($_POST[$fieldname])) {
                $exists = 1;
            }
        }
        if($db->connect_errno > 0){
            die('Unable to connect to database [' . $db->connect_error . ']');
        }
        $result = $db->query("SELECT fname from user WHERE fname = '{$inputUserFirstname}' AND lname = '{$inputUserLastname}' LIMIT 1");
        if ($result->num_rows == 1) 
        $exists = 3;
        if($exists == 1){
            echo "<div class='alert alert-warning alert-dismissable'>";
            echo "Fields can not be empty!";
            echo "</div>";
         }
          if ($exists == 3){
             echo "<div class='alert alert-warning alert-dismissable'>";
             echo "User already exists!";
             echo "</div>";
            }
            if ($exists == 0){
                $sql = "INSERT  INTO `user` (`iduser`, `fname`, `lname`, `type`) VALUES (NULL, '{$inputUserFirstname}', '{$inputUserLastname}', '{$inputUserType}')";
                if ($db->query($sql)) { 
                    echo "<div class='alert alert-success alert-dismissable'>";
                    echo "User was created.";
                    echo "</div>";
                                }
                            }
                        }
                    ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Task Management System</title>
</head>
<header>
<p>RAGOA Business Solutions INC.</p>
</header>
<body>
<form action="reg.php" method="post"><br>
<h2>Sign Up</h2>
  <div class = "cont_form">
  
    <label for="fname"><b>First Name</b></label>
    <input type="text" placeholder="Enter Your First Name..." name="inputUserFirstname" required><br>
	
    <label for="lname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Your Last Name..." name="inputUserLastname" required><br>
	
    <div class="form-group">
        <label for="inputUserType" class="col-2 col-form-label">User Type</label>
        <select class="form-control" id="inputUserType" name="inputUserType">
            <option selected>Administrator</option>
            <option>Task Manager</option>
            <option>User</option>
        </select>
    </div>

    <label for="uname"><b>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
    <input type="email" placeholder="Enter Your Username..." name="uname" required><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Your Password..." name="psw" required><br>
     
    <button type="submit">Sign Up</button><br>
  </div>
  </div>
</form>
</body>
</html>
