<?php
$n1 = 5;
$n2 = 8;
$ansMultiplication = 0;
$quotient = 0;

// MULTIPLICATION
$multiplicationIterations = 0;

if ($n1 < $n2) {
    for ($i = 0; $i < $n1; $i++) {
        $ansMultiplication += $n2;
        $multiplicationIterations++;
    }
} else {
    for ($i = 0; $i < $n2; $i++) {
        $ansMultiplication += $n1;
        $multiplicationIterations++;
    }
}


// DIVISION
$divisionIterations = 0;
$remainder = $n1;

if ($n2 != 0) {
    while ($remainder >= $n2) {
        $remainder -= $n2;
        $quotient++;
        $divisionIterations++;
    }
}

echo "Product: $ansMultiplication <br/>";
echo "Multiplication Iterations: $multiplicationIterations <br/>";

echo "Quotient: " . $quotient . "<br>";
echo "Remainder: " . $remainder . "<br>";
echo "Division Iterations: $divisionIterations <br/>";
?>
