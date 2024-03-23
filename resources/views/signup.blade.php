<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Sign UP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('css/signup.css')}}"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	
	<section id="nav-bar">
	
		<nav class="navbar bg-body-tertiary">
			<form>
				<div class="input-group">
					<a class="navbar-brand" href="#">Steadfast Courier</a>
					<input type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1">
					<button class="btn" type="submit">Guest</button>
				</div>
				
			</form>
		</nav>
	</section>
	<section class="body-cont">
		<div class="cont1">
			<form method="POST" action="{{url('/')}}/signup">
				@csrf
				<h1>Sign in</h1><br/>
				<input class="attributes" type="text" name="user_name" placeholder="Employee id" required><br/>
				<input class="attributes" type="number" name="mobile" placeholder="Phone Number" required><br/>
				<input class="attributes" type="text" name="address" placeholder="Address" required><br/>
				<input class="attributes" type="password" name="passcode" placeholder="Password" required><br/>
				<input class="submit" type="submit" value="signup"><br/>
				<p>Already have an account? <a href="{{url('/')}}/login">Log in</a></p>
		
			</form>
		</div>
	</section>
	
</body>
</html>