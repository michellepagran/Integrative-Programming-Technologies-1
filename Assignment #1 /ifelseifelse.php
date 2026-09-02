<?php

$grade = 85;

echo "<h4>Grade Equivalent: ";

if ($grade >= 97 && $grade <= 100) {
    echo "1.00 (Passed)";
} else if ($grade >= 94 && $grade <= 96) {
    echo "1.25 (Passed)";
} else if ($grade >= 91 && $grade <= 93) {
    echo "1.50 (Passed)";
} else if ($grade >= 88 && $grade <= 90) {
    echo "1.75 (Passed)";
} else if ($grade >= 85 && $grade <= 87) {
    echo "2.00 (Passed)";
} else if ($grade >= 82 && $grade <= 84) {
    echo "2.25 (Passed)";
} else if ($grade >= 79 && $grade <= 81) {
    echo "2.50 (Passed)";
} else if ($grade >= 76 && $grade <= 78) {
    echo "2.75 (Passed)";
} else if ($grade >= 74 && $grade <= 75) {
    echo "3.00 (Passed)";
} else if ($grade >= 70 && $grade <= 73) {
    echo "4.00 (Conditional)";
} else if ($grade >= 0&& $grade <= 69) {
    echo "5.00 (Failed)";
} else {
    echo "Invalid grade.";
}

?>
