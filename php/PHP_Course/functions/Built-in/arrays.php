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
        // Built-in Array functions

        $personalInfo = array("Name" => "Sami", "Age" => 48, "City" => "London");

        $moreInfo = array("Province" => "ON", "Weight" => 86);

        $personalInfo = array_merge($personalInfo, $moreInfo);

        foreach($personalInfo as $key => $value){
            echo $key . ": ".$value."<br/>";
        }

        echo "<br/>";
        print_r($personalInfo);
       
        echo "<br/>";
        print_r(array_keys($personalInfo));

        echo "<br/>";
        print_r(array_values($personalInfo));

        $cars = ["Volkswagon","Audi","Mercedes"];
        // $cars = array("Volkswagon","Audi","Mercedes");
        array_push($cars, "Volvo");

        echo "<br/>";
        print_r($cars);

        // Array search
        echo "<br/>";
        echo array_search("Mercedes",$cars);

        // Array Length
        echo "<br/>";
        echo count($cars);
    ?>
        <script src="" async defer></script>
    </body>
</html>