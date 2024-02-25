<!DOCTYPE html>
<htmL>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>account.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

        <link rel="Website Icon" type="png" href="<?php echo base_url('assets/'); ?>./assets/Logo Healthy Dishes.png">

        <title>Account</title>
    </head>
    <body>
        <nav>
            <a><img src=" <?php echo base_url('assets/'); ?>assets/Logo Healthy Dishes.png"></a>

            <button onclick="home()">Back</button>
        </nav>

        <div class="container">

            <?php foreach($user as $u): ?>

            <div class="container-id">
                <h4>Hi <br>Daerez</h4>
            </div>

            <h3>ACCOUNT</h3>
            <form autocomplete="off">
                <label for="name" id="name-text">Name </label><br>
                <input type="name" name="name" id="name"><br>
                <label for="password" id="password-text">Password </label><br>
                <input type="password" name="password" id="password"><br>
                <label for="email" id="email-text">Email </label><br>
                <input type="email" name="email" id="email"><br>
                
                <button>Edit</button>
            </form>

            <?php endforeach; ?>
        </div>
        <script src="<?php echo base_url('assets/'); ?>script.js"></script>
    </body>

</htmL>