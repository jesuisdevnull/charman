<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8" content="viewport=device-width;initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Sign-up</title>
    </head>
    <body>
        <div class="d-flex align-items-center vh-100" style="background-image:url(./img/back.jpg); overflow:scroll;">
        <div class="container-md border p-1 rounded bg-light"> 
        <form class="d-flex flex-column mx-5 py-3 px-3" method="POST" action="includes/signup_process.php">
            <h1>Create an account</h1>
                <label for="username">Username</label>
            <input type="text" class="mb-2 form-control" id="username" name="username" required>
            <label for="email">E-mail</label>
            <input type="email" class="mb-2 form-control" id="email" name="email" required>
            <label for="password">Password</label>
            <input type="password" class="mb-2 form-control" id="password" name="password" required>
            <label for="passwordRepeat">Password (repeat)</label>
            <input type="password" class="md-2 form-control" id="passwordRepeat" name="passwordRepeat" required><?php 
                    if(isset($_GET["alert"])) {
                switch($_GET["alert"]) {
                    case "invalidUser": $content = "Registration error: invalid username (too long/already exists)";
                break;
                case "invalidEmail": $content = "Registration error: invalid email (too long/incorrect format/already exists)";
                break;
                case "invalidPassword": $content = "Registration error: invalid pasword (too long/passwords do not match)";
                break;
                default: $content = "Default error (you should not be seeing this)";
            }?><div class="alert alert-danger mt-2"><?php echo $content;?></div><?php
            }
             ?><button type="submit" name="submit" class="btn btn-dark mt-2" >Register</button>
            <a href="./index.php" class="d-block mt-2 btn btn-primary text-decoration-none">Return to homepage</a>
            </form>
        </div>
        </div>
        <script src="js/bootstrap.js"></script>
    </body>
</html>
