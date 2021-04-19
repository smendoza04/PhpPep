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
            <form action="user/easy.php" method="POST">
                <input type="submit" name="mode" class="button easyHard" value="Easy">
            </form>
            <form action="user/medium.php" method="POST">
                <input type="submit" name="mode" class="button" value="Medium">
            </form>
            <form action="user/hard.php" method="POST">
                <input type="submit" name="mode" class="button easyHard" value="Hard">
            </form>
            
            <?php
                
            ?>
        </div>
    </body>
</html>