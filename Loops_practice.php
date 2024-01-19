<?php 

// //for loop
// $n = 5;
// for ($i = 0; $i< $n; $i++){
    
//     for($j = 0; $j <= $i; $j++){
//         echo "* ";
//     }
//     echo (nl2br("\n"));
// }



// //while loop
// $m = 9;
// $i = 1;
// while($i< $m){
//     echo "<br> $i";
//     $i++;
// }

// //do while loop
// $t = 4;
// $r = 1;
// do{
//     echo $r "<br>";
//     $r++;
// }
// while($r < $t);



//for each loop

$fruit = array("mango", "banana", "apple", "kiwi"); 

foreach ($fruit as $x) {
  echo "$x <br>";
}
echo "<br>";
$fruitsPrice = array("mango"=>"100", "apple"=>"250","banana"=>"50");

foreach ($fruitsPrice as $x => $y){
    echo "$x = $y <br>";
}

?>