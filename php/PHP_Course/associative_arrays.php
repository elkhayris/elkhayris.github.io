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
            
            
            $cars = ["BMW" => 50500,"Audi" => 40700,"Mercedes" => 60300];
            
            print_r($cars);

            echo "<br/>";

            $cars["BMW"] = 51000;

            echo $cars["BMW"];

            echo "<br/>";

            foreach($cars as $key => $value) {
                echo "My ".$key." has ".$value." mileage. <br/>";
            }
        ?>
        <script src="" async defer></script>
    </body>
</html>