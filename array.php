<?php
function printAr($a)
{ 
    foreach($a as $x)
         echo "$x, ";
        
    echo "<br><br>"; 
}

$arr=['she','hna','she','erin'];

echo "Original: "; printAr($arr);

$sorted=$arr; 
sort($sorted);
echo "Sorted: "; 
printAr($sorted);

echo "Unique: "; 
printAr(array_unique($arr));

echo "Popped: ".array_pop($arr)."<br><br>";

echo "Reversed: "; 
printAr(array_reverse($arr));

$find='hna';
echo "Search $find: ".(in_array($find,$arr) ? array_search($find,$arr) : "Not found");
?>
