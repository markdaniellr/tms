

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="Login form.css" />
<title>Task Management System</title>
</head>
<body>
<form action="action_page.php" method="post"><br>
<h2>Login</h2>
<div class="container">
  <div class="imgcontainer">
    <img src="img.png" alt="Avatar" class="avatar">
  </div>
  <div class = "cont_form">
    <label for="email"><b>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
    <input type="email" placeholder="Enter Your Email..." name="uname" required><br>

    <label for="psw"><b>Password&nbsp</b></label>
    <input type="password" placeholder="Enter Your Password...." name="psw" required><br>
	<button type="submit">Login</button>
	<a href="reg.php"><p>Don't have Account Yet? Register Here<p></a>
  </div>
  </div>
</form>
</body>
</html>