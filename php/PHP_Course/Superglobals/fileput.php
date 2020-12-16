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

    if (isset($_POST["age"]))
    {
        $myFile = fopen("uploads/file.txt","a");
        echo $myFile;

        $text = "My age is ".$_POST["age"]."\n";
        
        fwrite($myFile, $text);

        fclose($myFile);
    }
    ?>    

    <form action="fileput.php" method="post">
        <input type="text" name="age"/>
        <input type="submit" name="SUBMIT"/>
    </form>
        <script src="" async defer></script>
    </body>
</html>