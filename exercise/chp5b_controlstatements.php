<?php 
$score = 50;

if ($score >= 90) {
    echo "Grade A";
} else if ($score >= 80 && $score <= 89) {
    echo "Grade B";
} else if ($score >= 70 && $score <= 79) {
    echo "Grade C";
} else if ($score >= 0 && $score < 70) {
    echo "Grade F";
} else {
    echo "Error";
}
?>