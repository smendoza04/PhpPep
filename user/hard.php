<?php
if(isset($_POST['number'])) {
    $number = $_POST['number'];
    } else { 
        $number = rand(1,100);
    }
?>

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
            <form method="post">
                <input type="number" min="1" max="100" class="inputBox" name="guess" />
                <input name="number" type="hidden" value="<?= $number ?>" />
                <button type="submit" class="button mode" name="correct"><i class="fas fa-check"></i></button>
            </form>
            
            <?php
            
            
            ?>
            
            <?php
            
                session_start();
                
                
                if(isset($_POST["guess"])){
                    
                    $guess  = $_POST['guess'];
                    $number  = $_POST['number'];
                    
                    if (isset($_SESSION["tries"])) {
                        $tries = $_SESSION["tries"];
                    }
                    else {
                        $tries = 1;
                    }

                    if ($guess < $number){ 
                        echo "<p>Guess Higher</p>";
                        $tries++;
                        $_SESSION["tries"] = $tries;
                    } elseif($guess > $number){       
                        echo "<p>Guess Lower</p>";
                        $tries++;
                        $_SESSION["tries"] = $tries;
                    } elseif($guess == $number){      
                        echo "<p>You got it!</p>";
                        $_SESSION["random"] = $guess;
                        header("Location: ../stats.php");
                    }
                
                    
                
                echo "<br>Your Number: $guess<br>";
                echo "<br>Computer's Number: ".$number."<br>";
            }
            ?>
        </div>
    </body>
</html>