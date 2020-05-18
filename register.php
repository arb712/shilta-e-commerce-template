<!DOCTYPE html>
<html style="overflow: hidden;">

<head>
	<meta charset="utf-8">
	<title>Sign Up</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<? include("insert.php"); ?>

<body style="background-color:#464c53;">
	<!-- navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="register.php">Shilta</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
			<li class="nav-item">
                    <a class="nav-link" href="login.php">Sign In</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="register.php">Sign Up  <span class="sr-only">(current)</span></a>
                </li>

            </ul>
        </div>
	</nav>

	<div class="space"></div>
	
	<!-- content goes here -->
	<br><br><br>
	<div class="top100">
			<div class="row" style="background-color:#464c53;">
				<div class="col-lg-4"></div>
				<div class="col-lg-4 anim-right" style="background-color:#464c53;">
					
					<form action="insert.php" id="sign-up-form" method="post" style="background-color:whitesmoke;">
					<br>
					<h3 style="color: black; background-color:white;text-align:center;">Sign Up</h3>
					<br>
						<table class="table" style="background-color:whitesmoke;">
							<tr>
								<td><label for="firstName" style="color: black;">First Name</label></td>
								<td><input type="text" name="firstName" required></td>
							</tr>
							<tr>
								<td><label for="lastName" style="color: black;">Last Name</label></td>
								<td><input type="text" name="lastName" required></td>
							</tr>
							<tr>
								<td><label for="username" style="color: black;">Username</label></td>
								<td><input type="text" name="username" required></td>
							</tr>
							<tr>
								<td><label for="email" style="color: black;">Email</label></td>
								<td><input type="text" name="email" required></td>
							</tr>
							<tr>
								<td><label for="password" style="color: black;">Password</label></td>
								<td><input type="password" name="password"></td>
							</tr>
							<tr>
								<td class="submit"><input type="submit" value="Submit" name="add" style="background-color: #3b4045;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 4px 2px;cursor: pointer;"></td>
								<td><input type="reset" value="Clear" style="background-color: #3b4045;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 4px 2px;cursor: pointer;"/></td>
							</tr>
						</table>
					</form>
				</div>
				<div class="col-lg-4"></div>
			</div>
	</div>
	<!-- content end here -->

	<!-- script -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>