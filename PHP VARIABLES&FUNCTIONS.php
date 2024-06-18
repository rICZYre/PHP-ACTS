<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
    <style type="text/css">
    
    </style>
</head>
<body>
    <link rel="stylesheet" type="text/css">
    <!--Tabigo-on, Riczyre Christian-->
    <!--June 19 2024-->
    <?php
// Constants
define('PI', 3.14159);
define('SITE_NAME', 'My Awesome Site');

// Variables
$integerVar = 42; // Integer
$floatVar = 3.14; // Float
$stringVar = "Hello, PHP!"; // String
$arrayVar = array(1, 2, 3, 4, 5); // Array
$booleanVar = true; // Boolean

// Output the constants
echo "Constant PI: " . PI . "\n";
echo "Constant SITE_NAME: " . SITE_NAME . "\n\n";

// Output the variables
echo "Integer Variable: " . $integerVar . "\n";
echo "Float Variable: " . $floatVar . "\n";
echo "String Variable: " . $stringVar . "\n";
echo "Array Variable: ";
print_r($arrayVar);
echo "Boolean Variable: " . ($booleanVar ? 'true' : 'false') . "\n\n";

// Functions associated with each data type

// Integer functions
echo "Integer Functions:\n";
echo "Is integerVar an integer? " . (is_int($integerVar) ? 'Yes' : 'No') . "\n";
echo "Integer to float conversion: " . floatval($integerVar) . "\n\n";

// Float functions
echo "Float Functions:\n";
echo "Is floatVar a float? " . (is_float($floatVar) ? 'Yes' : 'No') . "\n";
echo "Float to integer conversion: " . intval($floatVar) . "\n\n";

// String functions
echo "String Functions:\n";
echo "String length: " . strlen($stringVar) . "\n";
echo "String to upper case: " . strtoupper($stringVar) . "\n";
echo "String concatenation: " . $stringVar . " Welcome to learning PHP!\n\n";

// Array functions
echo "Array Functions:\n";
echo "Array count: " . count($arrayVar) . "\n";
echo "Is arrayVar an array? " . (is_array($arrayVar) ? 'Yes' : 'No') . "\n";
echo "First element of the array: " . reset($arrayVar) . "\n\n";

// Boolean functions
echo "Boolean Functions:\n";
echo "Is booleanVar a boolean? " . (is_bool($booleanVar) ? 'Yes' : 'No') . "\n";
echo "Boolean to string conversion: " . ($booleanVar ? 'true' : 'false') . "\n";
?>


</body>
</html>