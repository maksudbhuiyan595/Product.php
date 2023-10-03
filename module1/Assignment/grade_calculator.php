<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <h1>Grade Calculator</h1>

    <?php
    function calculateGrade($average) {
        if ($average >= 90) {
            return "A";
        } elseif ($average >= 80) {
            return "B";
        } elseif ($average >= 70) {
            return "C";
        } elseif ($average >= 60) {
            return "D";
        } else {
            return "F";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $score1 = $_POST["score1"];
        $score2 = $_POST["score2"];
        $score3 = $_POST["score3"];

        $average = ($score1 + $score2 + $score3) / 3;
        $grade = calculateGrade($average);

        echo "<p>The average score is $average, and the corresponding grade is $grade.</p>";
    }
    ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="score1">Test Score 1:</label>
        <input type="number" name="score1" id="score1" required>
        <br>

        <label for="score2">Test Score 2:</label>
        <input type="number" name="score2" id="score2" required>
        <br>

        <label for="score3">Test Score 3:</label>
        <input type="number" name="score3" id="score3" required>
        <br>

        <input type="submit" value="Calculate Grade">
    </form>
</body>
</html>