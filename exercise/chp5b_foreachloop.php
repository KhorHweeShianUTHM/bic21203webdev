<?php 
$students = [
    [
        'name' => 'Alice',
        'grade' => 'A',
    ],
    [
        'name' => 'Bob',
        'grade' => 'B',
    ]
];

foreach ($students as $student):
echo "Student's name: " . $student['name'] . "<br>";
echo "Student's grade: " . $student['grade'] . "<br><br>";
endforeach;
?>