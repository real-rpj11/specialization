<?php

$numeric = array("me",1,"you",2,"we",3);
$associative = array("Green" => "Grass", "Red" => "Roses", "Blue" => "Sky");
$multidimensional = array(
    "smtown" => array(
        "NCT" => 23,
        "EXO" => 9,
        "Aespa" => 4,
        "Red Velvet" => 5
    ),
    "yg" => array(
        "treasure" => 12,
        "blackpink" => 4,
        "ikon" => 8
    ),
    "jyp" => array(
        "twice" => 9,
        "stray kids" => 9,
        "got7" => 7
    )
);
// for loop basic number printing  
print("<b>for loop basic number printing</b><br> ");
for($i = 1;$i <= 10; $i++){
    echo "number $i<br>";
};

// while loop associative array
print("<br><b>while loop associative array</b><br>");
while(list($key,$value) = each($associative)){
    echo "$key is for $value<br>";
}

// do..while numeric array
$x = 0;
print("<br><b>do..while numeric array</b><br>");
do{
    echo $numeric[$x] . "<br>";
    $x++;
}
while($x < count($numeric));


// foreach multidimensional array
print("<br><b>foreach multidimensional array</b><br>");
foreach ($multidimensional as $arr) {
    foreach ($arr as $key => $val) {
        echo "$key has $val members.<br>";
    }
}



?>