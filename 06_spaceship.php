<?php
// Check if right is lesser than left

// Int
echo 1 <=> 1; // 0
echo 1 <=> 2; // -1
echo 2 <=> 1; // 1

// Float
echo 1.5 <=> 1.5; // 0
echo 1.5 <=> 2.5; // -1
echo 2.5 <=> 1.5; // 1

// String
echo "a" <=> "a"; // 0
echo "a" <=> "b"; // -1
echo "b" <=> "a"; // 1


// Example

$a = 1;
$b = 2;

if ($a > $b) {

} else if ($a < $b) {

} else {

}

//==========

$a = 1;
$b = 2;
$comp = $a <=> $b;

switch ($comp) {
    case 0:
        break;
    case 1:
        break;
    case -1:
        break;

    default:
        break;
}