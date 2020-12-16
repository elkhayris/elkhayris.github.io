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
        // Built-in String functions

        // String length
        $str = "Today is a sunny day";

        echo strlen($str)."<br/>";

        // String word count
        $firstName = "My first name is Sami";
        echo str_word_count($firstName)."<br/>";

        // String contains
        $test = "Test String";
        echo strpos($test,"g")."<br/>";

        // ucwords - converts first letter of every word to uppercase
        echo ucwords("what is your name?")."<br/>";

        // strtoupper - convert the entire string to uppercase
        echo strtoupper('what is your name?')."<br/>";

        // strtolower - convert the entire string to lowercase
        echo strtolower('WHAT IS YOUR NAME?')."<br/>";
    ?>
        <script src="" async defer></script>
    </body>
</html>