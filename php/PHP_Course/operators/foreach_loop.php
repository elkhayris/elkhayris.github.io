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
    // foreach loop

    $names = array("John","Michael","David");
    // OR
    $names = ["John","Michael","David"];

    foreach($names as $name) {
        echo "My name is {$name}<br/>";
    }

    echo "<br/>";

    $person = array("Name" => "Dary", "Age" => 30, "Gender" => "Male");

    foreach ( $person as $key => $value) {
        echo "My ". $key . " is " . $value . "<br/>";
    }

    ?>
        
        <script src="" async defer></script>
    </body>
</html>