<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../style.css?version=51">
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <title>Guess my Number</title>
    </head>
    <body>
        <div class="index">
            <h1>Guess my Number</h1>
            <h2>Medium</h2>
            <form method="post">
                <button type="submit" class="button mode" name="smaller"><i class="fas fa-minus"></i></button>
                <button type="submit" class="button mode" name="correct"><i class="fas fa-check"></i></button>
                <button type="submit" class="button mode" name="bigger"><i class="fas fa-plus"></i></button>
            </form>
            

            <?php
            session_start();
                if(!(isset($_SESSION["min"]) && isset($_SESSION["max"]))) {
                    $min = 1;
                    $max = 50;
                    $random = 25;
                    $tries = 1;
                } else {
                    $min = $_SESSION["min"];
                    $max = $_SESSION["max"];
                    $random = $_SESSION["random"];
                    $tries = $_SESSION["tries"];
                }
                
                
                
                if(isset($_POST["smaller"])) {
                    $tries++;
                    $max = $random - 1;
                    $random = rand($min, $max);
                    $_SESSION["random"] = $random;
                    $_SESSION["min"] = $min;
                    $_SESSION["max"] = $max;
                    $_SESSION["tries"] = $tries;
                    
                    if($min == $max || $min > $max){
                        header("Location: ../stats.php");
                    }
                    
                }
                if(isset($_POST["bigger"])) {
                    $tries++;
                    $min = $random + 1;
                    $random = rand($min, $max);
                    $_SESSION["random"] = $random;
                    $_SESSION["min"] = $min;
                    $_SESSION["max"] = $max;
                    $_SESSION["tries"] = $tries;
                    
                    if($min == $max || $min > $max){
                        header("Location: ../stats.php");
                    }
                }
                if(isset($_POST["correct"])) {
                   header("Location: ../stats.php");
                }
                
                
            ?>
            <p> Is your number <b><?php echo $random ?> </b>?</p>
            <p> Tries: <?php echo $tries ?></p>
            <p> Min: <?php echo $min ?></p>
            <p> Max: <?php echo $max ?></p>
            
        </div>
    </body>
</html>