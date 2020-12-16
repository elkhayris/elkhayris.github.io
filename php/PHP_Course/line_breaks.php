<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>echo</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php
           echo "This is a line. My name is Sami."."<br/>";   # Concatenating string using . (dot)
           echo nl2br("This is a line.\nMy name is Sami.\n");
           echo "This is a line.<br/>My name is Sami.<br/>";

           $name = "Sami";
           echo "This is a line. My name is $name.<br/>";
        ?>
        <script src="" async defer></script>
    </body>
</html>