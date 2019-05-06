
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <h1>Enter Scores:</h1>
        Score 1 <input type="text" name="score1" /><br />
        Score 2 <input type="text" name="score2" /><br />
        Score 3 <input type="text" name="score3" /><br />
        Score 4 <input type="text" name="score4" /><br />
        Score 5 <input type="text" name="score5" /><br />
        Score 6 <input type="text" name="score6" /><br /><br />
        <input type="submit" name="submit">
</form>


<?php

if (isset($_POST['submit'])) {

    
    $scores = array($_POST['score1'], $_POST['score2'], $_POST['score3'], $_POST['score4'], $_POST['score5'], $_POST['score6']);
    $average = number_format(array_sum($scores) / count($scores), 1);

    echo $scores[0];

    echo "Sample scores: [";
    for ($i = 0; $i < count($scores); $i++) {
        echo $scores[$i] . ", ";
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
}

?>