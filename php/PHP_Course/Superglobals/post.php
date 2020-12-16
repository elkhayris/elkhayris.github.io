<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <?php
    // POST
    // Collect data from HTML form

    if (isset($_POST['name'])){
        echo $_POST['name'].", your form has been submitted.";
    }



    ?>

    <form action="post.php" method="post">
        <input type="text" name="name"/>
        <input type="text" name="age"/>
        <button type="submit">SUBMIT</button>
    </form>

        <script src="" async defer></script>
    </body>
</html>