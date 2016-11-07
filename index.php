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
                    <li></li>
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
        
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>
