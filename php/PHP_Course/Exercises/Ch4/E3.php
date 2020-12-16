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
    
    $grade = 55;
    
    switch ($grade) {
        case ( $grade >= 90 && $grade <= 100  ): echo "Grade: A. Passed."; break;
        case ( $grade >= 80 && $grade < 90  ) : echo "Grade: B. Passed."; break;
        case ( $grade >= 70 && $grade < 80  ) : echo "Grade: C. Passed."; break;
        case ( $grade >= 60 && $grade < 70  ) : echo "Grade: D. Passed."; break;
        default: echo "Grade: F. Failed.";
    }
    ?>    
        <script src="" async defer></script>
    </body>
</html>