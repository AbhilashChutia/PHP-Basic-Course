<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorial</title>
</head>
<body>
    <div class="container">
        This is my first PHP Website
        <br>
        <?php
            echo "Hello World\n";
            echo "<br>";
            echo "This is printed using PHP";
            echo "<br>";
            echo "<br>";
            // Single line comment
            /*
                This
                is
                a
                multi
                line
                comment
             */

            // Variables
        
            $variable1 = 5;
            $variable2 = 2;
            echo $variable1;
            echo "<br>";

            echo $variable2;
            echo "<br>";

            echo $variable1 + $variable2;
            echo "<br>";
            echo "<br>";

            // Operators in PHP

            // Arithmetic Operators

            echo "The value of $variable1 + $variable2 is ";
            echo $variable1 + $variable2;
            echo "<br>";

            echo "The value of $variable1 - $variable2 is ";
            echo $variable1 - $variable2;
            echo "<br>";

            echo "The value of $variable1 * $variable2 is ";
            echo $variable1 * $variable2;
            echo "<br>";

            echo "The value of $variable1 / $variable2 is ";
            echo $variable1 / $variable2;
            echo "<br>";
            echo "<br>";

            // Assignment Operators

            $newvar = $variable1;
            echo "The value of new variable is ";
            echo $newvar;
            echo "<br>";

            $newvar += 1;
            echo "The value of new variable is ";
            echo $newvar;
            echo "<br>";

            $newvar -= 1;
            echo "The value of new variable is ";
            echo $newvar;
            echo "<br>";

            $newvar *= 2;
            echo "The value of new variable is ";
            echo $newvar;
            echo "<br>";

            $newvar /= 2;
            echo "The value of new variable is ";
            echo $newvar;
            echo "<br>";
            echo "<br>";

            // Comparision Operators

            echo "The value of 1 == 4 is :";
            echo var_dump(1==4);
            echo "<br>";

            echo "The value of 1 != 4 is :";
            echo var_dump(1!=4);
            echo "<br>";

            echo "The value of 1 >= 4 is :";
            echo var_dump(1>=4);
            echo "<br>";

            echo "The value of 1 <= 4 is :";
            echo var_dump(1<=4);
            echo "<br>";
            echo "<br>";

            // Increment/Decrement Operators

            echo $variable1++;
            echo "<br>";

            echo $variable1--;
            echo "<br>";

            echo ++$variable1;
            echo "<br>";

            echo --$variable1;
            echo "<br>";
            echo "<br>";

            // Logical Operators

            // And (&&)

            echo "And Operator";
            echo "<br>";
            $myvar = (true  and true);
            echo var_dump($myvar);
            echo "<br>";

            $myvar = (false and true);
            echo var_dump($myvar);
            echo "<br>";

            $myvar = (true and false);
            echo var_dump($myvar);
            echo "<br>";

            $myvar = (false and false);
            echo var_dump($myvar);
            echo "<br>";
            echo "<br>";

            // Or (||)

            echo "Or Operator";
            echo "<br>";
            $myvar = (true  or true);
            echo var_dump($myvar);
            echo "<br>";

            $myvar = (false or true);
            echo var_dump($myvar);
            echo "<br>";

            $myvar = (true or false);
            echo var_dump($myvar);
            echo "<br>";

            $myvar = (false and false);
            echo var_dump($myvar);
            echo "<br>";
            echo "<br>";

            // Xor

            echo "Xor Operator";
            echo "<br>";
            $myvar = (true  xor true);
            echo var_dump($myvar);
            echo "<br>";

            $myvar = (false xor true);
            echo var_dump($myvar);
            echo "<br>";

            $myvar = (true xor false);
            echo var_dump($myvar);
            echo "<br>";

            $myvar = (false xor false);
            echo var_dump($myvar);
            echo "<br>";
            echo "<br>";

            // !
            $myvar = (!true);
            echo var_dump($myvar);
            echo "<br>";

            $myvar = (!false);
            echo var_dump($myvar);
            echo "<br>";
            echo "<br>";

        ?>

        <?php
            // Datatypes in PHP

            echo "Datatypes <br>";

            // 1. String

            $var = "This is a string";
            echo var_dump($var);
            echo "<br>";

            $var = 67;
            echo var_dump($var);
            echo "<br>";

            $var = 67.5;
            echo var_dump($var);
            echo "<br>";

            $var = true;
            echo var_dump($var);
            echo "<br>";

            // 2. Integer
            // 3. Float
            // 4. Boolean
            // 5. Array
            // 6. Object
        ?>
    </div>
</body>
</html>