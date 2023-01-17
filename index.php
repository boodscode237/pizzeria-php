<?php
//    const NATIONALITY = "Cameroon";
    const NATIONALITY = 'Cameroon';
    $name = "Donald";
    $surname = "Brice";
    $age = 36;
    $stringOne = "My name is  ";
    $stringTwo = "boods@gmail.com<br>";

    $radius = 25;
    $pi = 3.14;

    //    Basic - *, /, +, -, **
    // order of execution (Brackets - Indexes - Division - Multiplication - Addition - Subtraction )

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pizzeria</title>
</head>
<body>
    <h1>User Profile Page</h1>
    <div>
        <?php
            echo "My name is $name and surname is $surname. <br>";
            echo "I am $age";
        ?>
    </div>
    <p>
        <?php
            echo "I am from: " . NATIONALITY;
        ?>
    </p>
    <p>
        <?php
            echo "Hey my email is: $stringTwo <br>";
            echo strtoupper($stringOne ) . str_replace("boods","boodscode", $stringTwo);
            echo strlen($stringTwo)
        ?>
    </p>
    <p>
        <?php
            echo $pi * $radius**2 . '<br>';
            echo 2 * (4 + 9) / 3;
        ?>
    </p>
    <p>
        <?php
            $age += 10;
            echo $age . '<br>';
            $age += 10;
            echo $age . '<br>';

            echo floor($pi) . '<br>';
            $aga = 25.36;
            echo ceil($aga) . '<br>';
            echo pi() . '<br>';

        ?>
    </p>
    <p>
        <?php
            echo "ARRAYS"
        ?>
    </p>

</body>
</html>
