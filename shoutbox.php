<?php include 'database.php'; ?>

<?php

if (isset($_POST['name']) && isset($_POST['shout'])) {
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $shout = mysqli_real_escape_string($connection, $_POST['shout']);
    $date = mysqli_real_escape_string($connection, $_POST['date']);
    
    date_default_timezone_set('Europe/Belgrade');
    $date = date('H:i:s');
    
    $query = "INSERT INTO shouts(name, shout, date) VALUES('$name', '$shout', '$date')";
    
    if (!mysqli_query($connection, $query)) {
        echo 'Error: ' . mysqli_error($connection); 
    }
    
    echo stripslashes('<li>' . $name . ': ' . '<b>' . $shout . '</b>'. ' [' . $date . ']</li>');
}

