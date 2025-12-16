<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php 
        $name   = "Muhammad Azib Zaffran Bin Muhammad Azeerin";
        $matric = "AI230019";
        $course = "Bachelor of Computer Science in Technology Web with Honors";
        $year   = "Year 3";
        $address= "Kolej Kediaman Perwira";
    ?>

    <table border="1" cellpadding="5">
        <tr><th>Field</th><th>Value</th></tr>
        <tr><td>Name</td><td><?php echo $name; ?></td></tr>
        <tr><td>Matric Number</td><td><?php echo $matric; ?></td></tr>
        <tr><td>Course</td><td><?php echo $course; ?></td></tr>
        <tr><td>Year of Study</td><td><?php echo $year; ?></td></tr>
        <tr><td>Address</td><td><?php echo $address; ?></td></tr>
    </table>
</body>
</html>