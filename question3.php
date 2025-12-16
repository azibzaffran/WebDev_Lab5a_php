<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
// Function to calculate area of a rectangle
function calculateArea($length, $width) {
    return $length * $width;
}

// Example call
$length = 5;
$width = 10;
$area = calculateArea($length, $width);

// Display the result
echo "Area of a rectangle with length $length and width $width is: $area";
?>
</body>
</html>