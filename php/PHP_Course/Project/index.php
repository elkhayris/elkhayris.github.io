
    <?php
    include 'includes/header.php';

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);
    
    if ( $rowCount ) {
        while ($row = mysqli_fetch_assoc($result)){
            echo "row<br/>";
            print_r($row);
        }
    } else {
        echo "No results found";
    }

    include 'includes/footer.php';
    ?>
        
