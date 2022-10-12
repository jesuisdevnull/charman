<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" content="width=device-width; initial-scale=1">
	<title>Testing PHP</title>
    </head>
    <body>
        <?php
            echo "Hello, world!";
	    $variable = "mysql";
	    $dsn = $variable . ":hostname=localhost;dbname=test<br>";
	    print($dsn);
	    echo 'Before trying to access DB<br>';
	    include './includes/core/dbh.php';
	    include './includes/classes/models/signup.model.php';
	    $rows = SignupModel::getServiceUser("example@loadeddice.com");
	    echo count($rows);
	    echo '<br>';
	    $register_result = SignupModel::registerUser("matthew@gmail.com","m_albrecht","slimjim");
	    if($register_result) {
	    	echo "Register success<br>";
	    } else {
	    	echo "Register failure<br>";
	    }
        ?>
    </body>
</html>
