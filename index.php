<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/index.css">
        <title>Charred Man: D&D 5e Character Manager</title>
    </head>
    <body class="min-vh-100 m-0 p-0">
        <div class="container-fluid m-0 p-0" id="main-container">
            <div class="row border vh-100 m-0 p-0">
                <div class="col-md vh-100 m-0 p-0">
		</div>
		<div class="col-md m-0 p-0 vh-100 bg-light d-flex align-items-center">
		    <form class="d-flex flex-column p-5 m-0">
		        <h1 class="fs-3 mb-3 text-center">Charred Manual: A D&D 5e Character Manager</h1>
                        <label for="username" class="text-sm-center text-lg-start">Username</label>
                        <input class="mx-1 my-2 form-control" type="text" id="username" name="username" required>
                        <label for="password" class="text-sm-center text-lg-start">Password</label>
                        <input class="mx-1 mb-4 form-control" type="password" id="password" name="password" required>
                        <button class="btn btn-success mt-2 mb-4" type="submit">Login</button>
		        <p class="text-center mt-1">Don't have an account? <a href="./signup.php">Register here</a><p>
		    </form>
                </div>
            </div>
        </div>
        <script src="js/bootstrap.js"></script>
        <script src="js/index.js"></script>
    </body>
</html>
