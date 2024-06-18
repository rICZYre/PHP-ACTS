<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>TEMPLATE in PHP</title>
        <style>
            body{
                font-family: sans-serif;
            }
        </style>
    </head>
    <body>
        <link rel="stylesheet" type="text/css" href="">
        <!-- Tabigo-on, Riczyre Christian -->


        <?php
            echo "<h1>Hello World</h1>"."Welcome to my Page";
        ?>


        <?php
            $variable = 'Welcome Newbie';
            echo "<br>";
            echo '<h3>welcome to PHP .$variable</h3>'.$variable;
            echo "<br>";
            echo "<br>";
        ?>


        <?php
            $string = "I Love PHp";
            $number = 54;
            $float = 3.1416;
            $name = "Grace";

            define ("PI", 3.1416);
            
            echo "Line1:". $string;
            echo "<br>";
            echo "Line2:"."The Value of $string is".$string;
            echo "<br>";
            echo "Line3:".'The Value of $string is '.$string; 
            echo "<br>";
            echo "Line4:"."The Value of CONSTANT PI is ".PI; 
            echo "<br>";
        ?>

        <?php

        ?>

    </body>
</html>