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
    // $_FILES
    // How to upload files
    // 1. Upload to the root
    // 2. Upload to a database

    // enctype="multipart/form-data"  --- for uploading files
    // Specifies how the form data should be encoded 

    if(isset($_FILES['f1']))
    {
        echo $name = $_FILES['f1']['name']."<br/>";
        echo $type = $_FILES['f1']['type']."<br/>";
        echo $tmp_location = $_FILES['f1']['tmp_name']."<br/>";
        echo $error = $_FILES['f1']['error']."<br/>";
    }

    print_r($_FILES);

    ?>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="f1"/>
        <button type="submit" name="submit">SUBMIT</button>
    </form>

 

        <script src="" async defer></script>
    </body>
</html>