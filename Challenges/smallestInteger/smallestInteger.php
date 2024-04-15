<?php
/*
* Given an array of integers your solution should find the smallest integer.

For example:

Given [34, 15, 88, 2] your solution will return 2
Given [34, -345, -1, 100] your solution will return -345
*/

function smallestInteger($arr) {
    sort($arr);
    $smallest = $arr[0];

    return $smallest;
}

$arr = [34, 15, 88, 2];
$smallestInt = smallestInteger($arr);
echo "The smallest Integer is: " . $smallestInt;