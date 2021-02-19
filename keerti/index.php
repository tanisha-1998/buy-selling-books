<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary"> Registration Form</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-6">
			<form method="POST" action="">
				<div class="form-group">
					<label>Firstname</label>
					<input type="text" class="form-control" name="firstname" required="required"/>
				</div>
                <div class="form-group">
					<label>Lastname</label>
					<input type="text" class="form-control" name="lastname" required="required"/>
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username" required="required"/>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" maxlength="12" name="password" required="required"/>
				</div>
				<p><input type="checkbox" id="toggle"/> I agree with the terms and conditions.</p>
				<button class="btn btn-primary" id="register" name="register">Register</button>
			</form>
		</div>
		<div class="col-md-6">
		<?php include 'register.php'?>
        </div>
	</div>
<script>
var checkbox = document.getElementById("toggle");
var register = document.getElementById("register");
register.disabled = true;
checkbox.onchange = function(){
	register.disabled = !this.checked;
}
</script>	
</body>
</html>