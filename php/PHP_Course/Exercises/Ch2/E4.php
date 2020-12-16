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
            $countries = ["Egypt" => "Cairo", "Tunisia" => "Tunis", "Iraq" => "Baghdad", "Syria" => 
            "Damascus", "Palestine" => "Jerusalem"];

            foreach( $countries as $key => $value) {
                echo "The capital of {$key} is {$value}<br/>";
            }
        ?> 
        <script src="" async defer></script>
    </body>
</html>