<!DOCTYPE html>
<html>
    <head>
        <title>cal</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div>
            <h1>Cal</h1>
            <form action="calculator.php" method="post">
                FirstNum:<input type="number" step="0.00000001" name="num1"><br>
                OP:<input type="text" name="op"><br>
                SecondNum:<input type="number" step="0.00000001" name="num2">
                <br>
                <input type="submit">    
            </form>
        </div>
        <?php
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $op = $_POST["op"];
            if($op == "+") {
                echo $num1 + $num2;
            }
            elseif($op == "-") {
                echo $num1-$num2;
            }
            elseif($op == "*") {
                echo $num1*$num2;
            }
            elseif($op == "/") {
                echo $num1/$num2;
            }
            else{
                echo "invalid operator";
            }
        ?>
    </body>
</html>
