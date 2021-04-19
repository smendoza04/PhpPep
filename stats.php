<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css?version=51">
        <!-- <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script> -->
        <title>Guess my Number</title>
    </head>
    <body>
        <div class="index">
            
            <?php
                session_start();
            ?>
            <h1>Congratulations</h1>
            <p> Your number is <b><?php echo $_SESSION["random"] ?></b> </p>
            <p> I guessed it in <b><?php echo $_SESSION["tries"] ?></b> tries</p>
            <a class="button mode" href="game.php">Try again?</a>
            
            <?php
            
            session_destroy();
            
            ?>
        </div>
    </body>
</html>