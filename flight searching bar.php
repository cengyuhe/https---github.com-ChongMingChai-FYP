<?php

include('databaseconnection.php');
$departure = $_GET['departure'];
$destination = $_GET['destination'];
$date = $_GET['date'];

echo $departure;
echo $destination;
echo $date;
$sql = "SELECT * FROM flight WHERE Flight_departure = '$departure' AND Flight_destination = '$destination'";
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
    // Loop through the results and display them
    while ($row = mysqli_fetch_assoc($result)) {
        // Display flight details as needed
        echo "Flight Name: " . $row['Flight_Name'] . "<br>";
        
        // Display other flight details as needed
    }
} else {
    echo "No flights found matching your criteria.";
}

?>
