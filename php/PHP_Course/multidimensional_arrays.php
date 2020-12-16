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
            
            
            $cars = array(
                "Expensive" => array("Audi","Mercedes","BMW"),
                "Inexpensive" => array("Volvo","Ford","Toyota")
            );

            echo $cars["Expensive"][1];
        ?>
        <script src="" async defer></script>
    </body>
</html>