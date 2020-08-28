<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
</head>

<body>

    <h1>Yay Welcome You on Dashboard</h1>

    <?php
    echo "<pre>";
    echo print_r($this->session->all_userdata());
    echo "</pre>"
    ?>

    <a href="<?php echo base_url() . "index.php/Main/logout" ?>">Logout</a>

</body>

</html>