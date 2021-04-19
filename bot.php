<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css?version=51">
        <!-- <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script> -->
        <title>Guess my Number</title>
    </head>
    <body>
        <div class="index">
            <h1>Guess my Number</h1>
            <form action="bot/easy.php" method="POST">
                <input type="submit" name="easy" class="button  easyHard" value="Easy">
            </form>
            <form action="bot/medium.php" method="POST">
                <input type="submit" name="medium" class="button " value="Medium">
            </form>
            <form action="bot/hard.php" method="POST">
                <input type="submit" name="hard" class="button  easyHard" value="Hard">
            </form>
            
            <?php
                
            ?>
        </div>
    </body>
</html>