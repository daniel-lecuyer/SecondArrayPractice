<?php
function getAmountOfCaloriesPerKilograms($amountOfCaloriesSpent, $amountOfKilogramsByTenKilometers) {
    $amountOfCaloriesPerKilograms = $amountOfCaloriesSpent / $amountOfKilogramsByTenKilometers;
    return $amountOfCaloriesPerKilograms;
}

function getAmountOfCaloriesForWork($amountOfCaloriesPerKilograms, $amountOfKilograms) {
    $amountOfCaloriesForWork = $amountOfCaloriesPerKilograms * $amountOfKilograms;
    return $amountOfCaloriesForWork;
}
function getAmountOfPie($amountOfCaloriesForWork, $amountOfCaloriesPerPie) {
    $amountOfPie = $amountOfCaloriesForWork / $amountOfCaloriesPerPie ;
    return $amountOfPie; 
}
function getTotalCost($amountOfPie, $costPerPie) {
    $totalCost = $amountOfPie * $costPerPie;
    return $totalCost;
}
function getKilogramsPerHuman($secondAmountOfKilograms, $numberOfHuman) {
    $kilogramsPerHuman = $secondAmountOfKilograms / $numberOfHuman;
    return $kilogramsPerHuman;
}
function getDaysForWork($kilogramsPerHuman,$amountOfKilogramsByTenKilometers) {
    $daysForWork = $kilogramsPerHuman / $amountOfKilogramsByTenKilometers;
    return $daysForWork;
}

$amountOfKilogramsByTenKilometers = rand(10, 50);
$amountOfCaloriesSpent = rand(1000, 2000);
$amountOfCaloriesPerPie = 800;
$costPerPie = rand(2, 5);
$amountOfKilograms = 5000;
$amountOfCaloriesPerKilograms = getAmountOfCaloriesPerKilograms($amountOfCaloriesSpent, $amountOfKilogramsByTenKilometers);
$amountOfCaloriesForWork = getAmountOfCaloriesForWork($amountOfCaloriesPerKilograms, $amountOfKilograms);
$amountOfPie = getAmountOfPie($amountOfCaloriesForWork, $amountOfCaloriesPerPie);
$totalCost = getTotalCost($amountOfPie, $costPerPie);
$numberOfHuman = 30;
$secondAmountOfKilograms = 10000;
$kilogramsPerHuman = getKilogramsPerHuman($secondAmountOfKilograms, $numberOfHuman);
$daysForWork = getDaysForWork($kilogramsPerHuman, $amountOfKilogramsByTenKilometers);

echo PHP_EOL."IL Coutera: ".$totalCost.PHP_EOL;
echo PHP_EOL."Le travail prendra: ".$daysForWork.PHP_EOL;
