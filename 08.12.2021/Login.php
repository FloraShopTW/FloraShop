<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="./login.css">
  <link href="css/font-awesome.min.css" rel="stylesheet" />

</head>
<body>
<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>

</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="connect.php" method="post">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" placeholder="User name" required="" name="username">
					<input type="email" placeholder="Email" required="" name="email">
					<input type="password" placeholder="Password" required="" name="password">
					<button>Sign up</button>
				</form>
			</div>
			
			<div class="login">
				<form action="reconnect.php" method="post">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button>Login</button>
				</form>
			</div>
	</div>
</body>
</html>
<!-- partial -->
  
</body>
</html>
