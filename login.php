<?php
/** @var mysqli $db */

if(isset($_POST['submit'])) {
    require_once "includes/database.php";

    // Get form data
    $errors = array();
    $errorMessage = 'oeps er is iets fout gegaan.';
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    // If data valid
    if (empty($errors)) {
        // SELECT the user from the database, based on the email address.
        $loginQuery = "SELECT * FROM users where email = '$email'";
        $result = mysqli_query($db, $loginQuery) or die('error: ' . mysqli_error($db));

        // check if the user exists
        if (mysqli_num_rows($result) != 1) {
            header('Location: register.php');
            exit;
        }

        // Get user data from result
        $user = mysqli_fetch_assoc($result);

        // Check if the provided password matches the stored password in the database
        if (password_verify($password, $user['password'])) {
            // Password is correct

            // Store the user in the session
            $_SESSION['user'] = $user; // Assuming user details are stored in session
            $_SESSION['loggedin'] = true;

            // Redirect to secure page
            header('Location: index.php');
            exit;
        } else {
            // Password is incorrect

            //error incorrect log in
            $errors['loginFailed'] = "Incorrect login credentials";
        }
    }

// User doesn't exist

//error incorrect log in
    // Server-side validation
    if ($email === '') {
        $errors['email'] = $errorMessage;
    }
    if ($password === '') {
        $errors['password'] = $errorMessage;
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>

    
    <section id="form-container">
        <h1 id="login-title">Inloggen</h1>

            <form  action="" method="post">
                <div id="errorEmail">
                    <p> <?= $errors['email'] ?? ''?> </p>
                </div>

                <section id="email-Section">
                    <input id="email" type="email" name="email" placeholder="Email" required/>

                    <div id="errorPassword">
                        <p> <?= $errors['password'] ?? ''?> </p>
                    </div>
                </section>

                <section id="password-Section">
                    <input id="password" type="password" name="password" placeholder="Password" required/>

                    <div id="error-password">
                        <p> <?= $errors['password'] ?? ''?> </p>
                    </div>
                </section>

                <section id="submit">
                    <button id="submit-button" type="submit" name="submit">Login</button>
                </section>

                <section>
                    <a href="register.php">Ik heb nog geen account</a>
                </section>
            </form>
    </section>

</body>
</html>
