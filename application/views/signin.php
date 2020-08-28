<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sig In | Ui Blog</title>
</head>

<body>

    <h1>Hello User, Sign In Here</h1>

    <?php
    echo form_open('Main/sigin_validation');
    echo validation_errors();

    echo "<p>Username: ";
    echo form_input('email');
    echo "</p>";

    echo "<p>Password: ";
    echo form_input('password');
    echo "</p>";

    echo "<p>Confirm Password: ";
    echo form_input('cpassword');
    echo "</p>";

    echo "<p>";
    echo form_submit('signin_submit', 'Sign In');
    echo "</p>";

    echo form_close();
    ?>
    <a href="<?php echo base_url() . "index.php/Main/login" ?>">Login</a>

</body>

</html>