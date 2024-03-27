<?php
if(isset($_POST['submit'])) {
    /** @var mysqli $db */
    require_once "includes/database.php";

    // Get form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dateOfBirth = $_POST['DoB'];
    $number = $_POST['number'];
    $adres = $_POST['adres'];
    $postcode = $_POST['postcode'];

    // Server-side validation
    $errors = array();
    $errorMessage = 'oeps er is iets fout gegaan.';

    if($firstName === '') {
        $errors['firstName'] = $errorMessage;
    }if($lastName === '') {
        $errors['lastName'] = $errorMessage;
    }if($dateOfBirth === '') {
        $errors['DoB'] = $errorMessage;
    }if($email === '') {
        $errors['email'] = $errorMessage;
    }if($number === '') {
        $errors['number'] = $errorMessage;
    }if($adres === '') {
        $errors['adres'] = $errorMessage;
    }if($postcode === '') {
        $errors['postcode'] = $errorMessage;
    }if($password === '') {
        $errors['password'] = $errorMessage;
    }

    // create a secure password, with the PHP function password_hash()
    if (empty($errors)) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // store the new user in the database.
        $query = "INSERT INTO `users`(`id`, `first_name`, `last_name`, `email`, `password`, `date_of_birth`, `phone_number`, `adres`, `postcode`) 
                  VALUES ('','$firstName','$lastName','$email','$hashedPassword','$dateOfBirth','$number','$adres','$postcode')";

        $db->query($query);
        header('Location: login.php');
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
    <link rel="stylesheet" href="style.css" >
    <title>Registreren</title>
</head>
<body>

    <section id="register-title">
        <h1>Register</h1>
    </section>

    <section id="register-form-container">
        <form  action="" method="post">

            <!-- first name -->
            <section class="form-item" id="first-name-Section">
                <label for="first-name">Fisrt name</label>
                <input class="register-form-input" id="first-name" type="text" name="first-name" value="<?= $firstName ?? ''?>" />

                <div id="errorEmail">
                    <p> <?= $errors['email'] ?? ''?> </p>
                </div>
            </section>

            <!-- last name -->
            <section class="form-item" id="last-name-Section">
                <label for="last-name">Last name</label>
                <input class="register-form-input" id="last-name" type="text" name="last-name" value="<?= $lastName ?? ''?>" />

                <div id="errorEmail">
                    <p> <?= $errors['email'] ?? ''?> </p>
                </div>
            </section>

            <!-- Email -->
            <section class="form-item" id="email-Section">
                <label for="email">Email</label>
                <input class="register-form-input" id="email" type="text" name="email" value="<?= $email ?? ''?>" />

                <div id="errorEmail">
                    <p> <?= $errors['email'] ?? ''?> </p>
                </div>
            </section>

                <!-- Date Of Birth -->
                <section class="form-item" id="DOB-Section">
                    <label for="DOB">Date of Birth</label>
                    <input class="register-form-input" id="DoB" type="date" name="DoB" value="<?= $DoB ?? ''?>" />

                    <div id="errorDoB">
                        <p> <?= $errors['DoB'] ?? ''?> </p>
                    </div>
                </section>

                <!-- Number -->
                <section class="form-item" id="number-Section">
                    <label for="number">Number</label>
                    <input class="register-form-input" id="number" type="number" name="number" value="<?= $number ?? ''?>" />

                    <div id="errorNumber">
                        <p class="help is-danger"> <?= $errors['number'] ?? ''?> </p>
                    </div>
                </section>

                <!-- adres -->
                <section class="form-item" id="adres-Section">
                    <label for="adres">Adres</label>
                    <input class="register-form-input" id="adres" type="text" name="adres" value="<?= $adres ?? ''?>" />

                    <div id="errorAdres">
                        <p> <?= $errors['adres'] ?? ''?> </p>
                    </div>
                </section>

                <!-- postcode -->
                <section class="form-item" id="postcode-Section">
                    <label for="postcode">Postcode</label>
                    <input class="register-form-input" id="postcode" type="text" name="postcode" value="<?= $postcode ?? ''?>" />

                    <div id="errorPostcode">
                        <p class="help is-danger"> <?= $errors['postcode'] ?? ''?> </p>
                    </div>
                </section>

                <!-- Password -->
            <section class="form-item" id="password-Section">
                <label for="password">Password</label>
                <input class="register-form-input" id="password" type="password" name="password"/>

                <div id="errorPassword">
                    <p> <?= $errors['password'] ?? ''?> </p>
                </div>
            </section>

            <!-- Submit -->
            <section id="submit">
                    <button id="submitButton" type="submit" name="submit">Register</button>
            </section>
        </form>
    </section>
</body>
</html>
