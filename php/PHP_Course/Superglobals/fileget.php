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

    $filePath = "uploads/file.txt";
    
    $output = file_get_contents($filePath);

    $ages = explode("\n", $output);

    foreach($ages as $age){
        echo $age."<br/>";
    }

    echo "The average age is ".(array_sum($ages)/count($ages));
        
    ?>    

    
        <script src="" async defer></script>
    </body>
</html>