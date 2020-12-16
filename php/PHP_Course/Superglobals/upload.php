<?php
    if (isset($_POST['submit'])) 
    {
        $file = $_FILES['f1']; 
        $name = $_FILES['f1']['name'];  // file name
        $tmp_name = $_FILES['f1']['tmp_name']; // Temp loc
        $size = $_FILES['f1']['size'];  // Find file size
        $error = $_FILES['f1']['error']; // errors

        // Explode from punctuation mark
        $tempExtension = explode('.',$name);

        $fileExtension = strtolower(end($tempExtension));

        // Allowed Extensions
        $isAllowed = ['jpg','jpeg','png','pdf'];

        echo "name: ".$name."<br/>tmp_name: ".$tmp_name.
        "<br/>size: ".$size."<br/>error: ".$error."<br/>";

        if (in_array($fileExtension, $isAllowed))
        {
            echo "name: ".$name."<br/>tmp_name: ".$tmp_name.
            "<br/>size: ".$size."<br/>error: ".$error."<br/>";
            
            if ($error === 0) 
            {
                if ($size < 100000)
                {
                    $newFileName = uniqid('',true).".".$fileExtension;
                    $fileDestination = "uploads/".$newFileName;
                    move_uploaded_file($tmp_name, $fileDestination);
                    header("Location: files.php?uploadsuccess");
                }
                else
                {
                    echo "Sorry, your file size is too big!";
                }

            }
            else 
            {
                echo "Sorry, there was an error. Please try again.";
            }
        }
        else 
        {   
            echo "Sorry,, your file type is not accepted.";
        }
    }

?>