<?php 

declare (strict_types = 1);

$letterPoints = [
    "a" => 1, "b" => 3, "c" => 3, "d" => 2, "e" => 1, 
    "f" => 4, "g" => 2, "h" => 4, "i" => 1, "j" => 8, 
    "k" => 5, "l" => 1, "m" => 3, "n" => 1, "o" => 1, 
    "p" => 3, "q" => 10, "r" => 1, "s" => 1, "t" => 1, 
    "u" => 1, "v" => 4, "w" => 4, "x" => 8, "y" => 4, 
    "z" => 10
];

define('MAX_POINTS', 100);
$points = 0;

while ($points != MAX_POINTS) {
    $word = customReadline("Enter a word: ");
    $points = calculateWordPoints($word, $points);
    echo "You entered: $word\n";
    echo "Points: $points\n";
}

function customReadline($prompt = '') {
    echo $prompt;
    $input = fgets(STDIN);
    return ($input === false) ? '' : trim($input);
}

function calculateWordPoints(string $word, int $points): int {
    global $letterPoints;
    $word = strtolower($word);
    
    for ($i = 0; $i < strlen($word); $i++) {
        $points += $letterPoints[$word[$i]];
    }
    return $points;
}

?>