<?php include 'database.php'; ?>

<?php 
$query = "SELECT * FROM shouts ORDER BY id DESC";
$shouts = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Shoutbox</title>
        <link href="css/master.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    </head>
    <body>
        <div id="container">
            <header>
                <h1>Shoutbox</h1>
            </header>
            
            <main id="shouts">
                <ul>
                    <?php while ($row = mysqli_fetch_assoc($shouts)) : ?>
                    <li> <?php echo $row['name'] . ': ' . '<b>' . $row['shout'] . '</b>' . ' [' . $row['date'] . ']'; ?> </li>
                    <?php endwhile; ?>
                </ul>
            </main>
            
            <footer>
                <form>
                    <label>Name</label>
                    <input type="text" id="name">
                    <label>Shout Text</label>
                    <input type="text" id="shout">
                    <input type="submit" id="submit" value="SHOUT!">
                </form>
            </footer>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>
