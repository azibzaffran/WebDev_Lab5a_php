<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q2</title>
</head>
<body>
    <?php
    $students = [
    [
        'name' => 'Azib',
        'program' => 'BIW',
        'age' => 22
    ],
    [
        'name' => 'Nabil',
        'program' => 'BIP',
        'age' => 21
    ],
    [
        'name' => 'Assafi',
        'program' => 'BIS',
        'age' => 21
    ]
];
?>

<table border="1" cellpadding="5">
    <tr>
        <th>Name</th>
        <th>Program</th>
        <th>Age</th>
    </tr>
    <?php foreach ($students as $student) : ?> 
    <tr>
        <td><?php echo $student['name']; ?></td>
        <td><?php echo $student['program']; ?></td>
        <td><?php echo $student['age']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
