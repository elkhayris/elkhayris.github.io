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
    // VAT Calculator
    $price = 35;
    $vat = 0.07;

    function calculateVat($pr, $va){
        return $pr * (1 + $va);
    }

    echo "Price is {$price}, VAT = {$vat}, Total price is ".calculateVat($price,$vat)."<br/>"

    ?>
        <script src="" async defer></script>
    </body>
</html>