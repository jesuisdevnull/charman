<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="utf-8" content="viewport=device-width;initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
	<title>Sign-up</title>
    </head>
    <body>
        <div class="d-flex align-items-center vh-100" style="background-image:url(./img/back.jpg);">
 	    <div class="container-md border rounded bg-light">
		<form class="d-flex flex-column mx-5 my-5 px-3" method="POST" action="includes/signup_process.php">
		    <h1>Create an account</h1>
	            <label for="username">Username</label>
		    <input type="text" class="mb-2 form-control" id="username" name="username" required>
		    <label for="email">E-mail</label>
		    <input type="email" class="mb-2 form-control" id="email" name="email" required>
		    <label for="password">Password</label>
		    <input type="password" class="mb-2 form-control" id="password" name="password" required>
		    <label for="passwordRepeat">Password (repeat)</label>
		    <input type="password" class="md-2 form-control" id="passwordRepeat" name="passwordRepeat" required>
		    <button type="submit" name="submit" class="btn btn-dark mt-4" >Register</button>
		    <a href="./index.php" class="d-block mt-2 btn btn-primary text-decoration-none">Return to homepage</a>
	        </form>
	    </div>
        </div>
        <script src="js/bootstrap.js"></script>
    </body>
</html>
