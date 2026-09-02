<?php 
$today = "Wednesday"; 

echo "<h2>Today's Schedule: $today</h2> <br>";

switch ($today) {
    case "Monday":
        echo "4:00 PM - 6:30 PM : System Integration & Architecture 1 <br>";
        echo "7:00 PM - 8:30 PM : Quantitative Methods";
        break;
    case "Wednesday":
        echo "10:00 AM - 1:00 PM : Interdisciplinary Elective 2 <br>";
        echo "1:00 PM - 6:00 PM : Integrative Programming & Technologies 1";
        break;
    case "Thursday":
        echo "4:00 PM - 6:30 PM : System Integration & Architecture 1 <br>";
        echo "7:00 PM - 8:30 PM : Quantitative Methods";
        break;
    case "Saturday":
        echo "7:00 AM - 12:00 PM : Human Computer Interaction <br>";
        echo "1:00 PM - 6:00 PM : IT Professional Elective 1";
        break;
    default:
        echo "No classes today.";
}
?>
