<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color: grey;
        margin: auto;
        padding: 23px;
    }
</style>
<body>
    <div class="container">
        <h1>Let's learn about PHP.</h1>
        <p>Your party status is here</p>
        <?php
            // Conditional Statements in PHP

            $age = 34;
            if($age>18){
                echo "You can go to the party!";
            }
            else if($age==7){
                echo "You are 7 years old!";
                echo "Go to sleep!";
            }
            else{
                echo "You cannot go to the party";
            }
            echo "<br>";
            echo "<br>";

            // Arrays in PHP

            $languages = array("Python", "C++", "PHP", "NodeJs");
            echo $languages[0];
            echo "<br>";
            echo count($languages);
            echo "<br>";
            echo "<br>";

            // Loops in PHP

            // While loop

            $a = 0;
            while ($a <= 10) {
                echo "The value of a is: ";
                echo $a;
                $a++;
                echo "<br>";
            }
            echo "<br>";

            // Iterating arrays in PHP using while loop

            $a = 0;
            while ($a < count($languages)) {
                echo "The value of languages is: ";
                echo $languages[$a];
                $a++;
                echo "<br>";
            }
            echo "<br>";

            // Do-while loop

            $a = 200;
            do {
                echo "The value of a is: ";
                echo $a;
                $a++;
                echo "<br>";
            } while ($a < 10);
            echo "<br>";
            
            // For loop

            for ($a=0; $a < 10; $a++) { 
                echo "The value of a is: ";
                echo $a;
                echo "<br>";
            }
            echo "<br>";

            // For Each Loop

            foreach ($languages as $value) {
                echo "The value from foreach loop is ";
                echo $value;
                echo "<br>";
            }

            // Functions

            function print5(){
                echo "FIVE";
            }
            print5();
            print5();
            print5();
            print5();
            print5();

            function print_number($number){
                echo "<br> your number is ";
                echo $number;
            }
            print_number(45);
            print_number(450);
            print_number(4500);
        ?>
    </div>
</body>
</html>