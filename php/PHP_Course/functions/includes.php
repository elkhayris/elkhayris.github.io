<?php
    include "includes/head.php";
    require "includes/header.php";

    include_once "includes/head.php";  // It is better to use include_once
    require_once "includes/header.php"; // and require_once

?>

<h1><?php introduction(); ?></h1>

<?php
    include 'includes/footer.php';
    // include - if the path is wrong, the program issues warning and continues running
    // require - if the path is wrong, a fatal error is thrown and the program terminates
?>