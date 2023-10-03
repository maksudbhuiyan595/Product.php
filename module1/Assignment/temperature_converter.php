<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>
    <h1>Temperature Converter</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="temperature">Enter Temperature:</label>
        <input type="text" id="temperature" name="temperature" required>
        
        <label for="conversion_type">Select Conversion:</label>
        <select id="conversion_type" name="conversion_type">
            <option value="c_to_f">Celsius to Fahrenheit</option>
            <option value="f_to_c">Fahrenheit to Celsius</option>
        </select>
        
        <input type="submit" value="Convert">
    </form>

    <?php
    // Function to convert from Celsius to Fahrenheit
    function celsiusToFahrenheit($celsius) {
        return ($celsius * 9/5) + 32;
    }

    // Function to convert from Fahrenheit to Celsius
    function fahrenheitToCelsius($fahrenheit) {
        return ($fahrenheit - 32) * 5/9;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = floatval($_POST["temperature"]);
        $conversion_type = $_POST["conversion_type"];
        $result = '';

        if ($conversion_type === "c_to_f") {
            $result = celsiusToFahrenheit($temperature) . " °F";
        } elseif ($conversion_type === "f_to_c") {
            $result = fahrenheitToCelsius($temperature) . " °C";
        }

        echo "<p>Result: " . $result . "</p>";
    }
    ?>

</body>
</html>