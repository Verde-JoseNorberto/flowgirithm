<?php
# The following function is called whenever your program needs to input data.
# You can change it to use other sources rather than fgets().
function input() {
    return fgets(STDIN);
}

$sum = 0;
$counter = 0;
echo "Enter a positive number" . PHP_EOL;
$n = input();
while ($counter < $n) {
    $counter = $counter + 1;
    echo "Adding " . $counter . " to " . $sum . PHP_EOL;
    $sum = $sum + $counter;
    if ($sum % 2 == 0) {
        echo "Even number of variable sum " . $sum . PHP_EOL;
    }
}
echo "End of Program" . PHP_EOL;
?>
