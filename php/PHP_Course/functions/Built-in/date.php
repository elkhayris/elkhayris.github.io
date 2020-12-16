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
        // Built-in Date functions

        // 'd' = Day
        // 'j' = Day without zeroes
        // 'D' = Day of week (3-letters)
        // 'l' = Full day of week
        // 'm' = Month as a number with zeroes
        // 'n' = Month as a member without zeroes
        // 'M' = Month (3-letters)
        // 'F' = Full month
        // 'y' = Two-digit year
        // 'Y' = Full year

        echo date('Y/m/d');

        // 'g' - Hours in 12-hour format without zeroes
        // 'h' - Hours in 12-hour format with zeroes
        // 'G' - Hours in 24-hour format without zeroes
        // 'H' - Hours in 24-hour format with zeroes
        // 'a' - am/pm in lowercase
        // 'A' - AM/PM in uppercasae
        // 'i' - minutes without leading zeroes
        // 's' - seconds without leading zeroes

        echo "<br/>";
        echo date('H:i:s');

        // set timezone
        date_default_timezone_set("America/Toronto");

        echo "<br/>";
        echo date('H:i:s');

        // String to time
        $time = strtotime("4:00pm December 03 2020");
        
        echo "<br/>";
        echo "Unix timestamp (number of seconds since Jan 1, 1970): ".$time;

        echo "<br/>";
        echo date('m/d/Y H:i:s a', $time);
    ?>
        <script src="" async defer></script>
    </body>
</html>