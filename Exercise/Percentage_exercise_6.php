<?php
//A is 10% higher than B, then how much lower is B from A?

$a = $_POST["percent"]; //A is this much % higher than B
$b = 100; 
echo "let B = 100";
echo "A is ".$a."% higher than B <br>";
$a = $b + ($b * $a/100); 

$diff = round(($a-$b)/$a*100,2); //Difference % calculated from values of A and B
echo "B is ".$diff."% Lower than A";

?>
<html>
    <body>
        <form action="" method="POST">
            <input type = "text" id = "percent" name = "percent" placeholder = "Enter Percentage"/>
            <br/>
            <input type = "submit" name = "submit" value = "Calculate"/>
        </form>
    </body>
</html>