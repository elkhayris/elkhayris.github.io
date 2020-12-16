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
    // Conditional statments
    // Switch Statement

    $role = "Visitor";

    switch($role) {
        case 'Visitor':
            echo "Welcome Visitor!";
            break;
        case 'Admin':
            echo "Welcome Admin!";
            break;
        case 'SuperAdmin':
            echo "Welcome SuperAdmin!";
            break;
        case 'Boss':
            echo "Welcome Boss!";
            break;
        default:
            echo "User has no role!";
    }

    
    ?>
        
        <script src="" async defer></script>
    </body>
</html>