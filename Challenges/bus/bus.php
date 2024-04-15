<?php
/*
Bob is working as a Challenges driver. However, he has become extremely popular amongst the city's residents.
With so many passengers wanting to get aboard his Challenges, he sometimes has to face the problem of not enough space left on the Challenges!
He wants you to write a simple program telling him if he will be able to fit all the passengers.

Task Overview:
You have to write a function that accepts three parameters:

cap -> The amount of people the Challenges can hold excluding the driver.
on -> The number of people on the Challenges excluding the driver.
wait -> The number of people waiting to get on to the Challenges excluding the driver.

If there is enough space, return 0, and if there isn't, return the number of passengers he can't take.
*/
function enough($cap, $on, $wait) {
    $availableSpace = $cap - $on; // Calculating the Challenges' space

    if($availableSpace >= $wait) {
        return 0;
    }else{
        return $wait - $availableSpace;
    }
}

// Example
$capacity = 40;
$passengers = 35;
$waitingPassengers = 10;
$result = enough($capacity, $passengers, $waitingPassengers);
echo "$result: " . $result . "passenger(s) can't board.\n";