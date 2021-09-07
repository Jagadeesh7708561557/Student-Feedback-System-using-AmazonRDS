<?php  
define('DB_SERVER','localhost:3306');
define('DB_USERNAME','root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'feedback_system');
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die ("could not connect to mysql");      

    if(! $conn ) {
        die('Could not connect: ' . mysqli_error($conn));
    }else{
        echo ' ';
    }
    ?>