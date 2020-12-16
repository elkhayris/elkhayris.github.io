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
            $cars1 = "BMW";
            $cars2 = "Audi";
            $cars3 = "Mercedes";
            
            $cars = ["BMW","Audi","Mercedes"];
            
            echo $cars[1];

            echo "<br/>";
            $myCar = array("Audi",2015,75.304);
            var_dump($myCar);

            echo "<br/>";

            print_r($myCar);

            echo "<br/>";
            
            $cars2 = ["Volvo","Chevy","Volkswagen"];

            $cars = array_merge($cars, $cars2);

            print_r($cars);
        ?>
        <script src="" async defer></script>
    </body>
</html>