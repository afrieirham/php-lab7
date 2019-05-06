<?php

// echo $_SERVER['REQUEST_METHOD'];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo '<h1>POST</h1>';
    $scores = array($_POST['score1'], $_POST['score2'], $_POST['score3'], $_POST['score4'], $_POST['score5'], $_POST['score6']);
}

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    echo '<h1>GET</h1>';
    $scores = array($_GET['score1'], $_GET['score2'], $_GET['score3'], $_GET['score4'], $_GET['score5'], $_GET['score6']);
}


$average = number_format(array_sum($scores) / count($scores), 1);
echo "Sample scores: [";
for ($i = 0; $i < count($scores); $i++) {
    echo $scores[$i] . " ";
}
echo "]";
echo "<br>";

echo "average score is " . $average;

echo "<br>";


if ($average >= 80) {
    echo "Average grade is A";
} elseif ($average >= 60) {
    echo "Average grade is B";
} elseif ($average >= 40) {
    echo "Average grade is C";
} elseif ($average >= 20) {
    echo "Average grade is D";
} elseif ($average >= 1) {
    echo "Average grade is E";
} else {
    echo "Average grade is F";
}
