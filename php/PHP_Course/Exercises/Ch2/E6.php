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
            $expenses = [250.12, 356.12, 140.25, 541.75, 985.00,1540.22];

            $count = 0;
            $total_expenses = 0.0;

            foreach($expenses as $expense) {
                $count += 1;
                $total_expenses += $expense;
            }

            echo "My ".$count." biggest expenses were $".$total_expenses;
        ?> 
        <script src="" async defer></script>
    </body>
</html>