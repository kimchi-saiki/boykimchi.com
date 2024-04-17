<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bookings";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $selectedDate = $_POST['appointment_date'];

    // Count the number of appointments in database
    $countSql = "SELECT COUNT(*) as count FROM appointments WHERE date = '$selectedDate'";
    $result = $conn->query($countSql);

    if ($result) {
        $row = $result->fetch_assoc();
        $availableSlots = 9; 
        $remainingSlots = $availableSlots - $row['count'];

        if ($remainingSlots >=0) {
            // Insert the data into the 'appointments' table
            $insertSql = "INSERT INTO appointments (patient, date) VALUES ('Charles Adrian', '$selectedDate')";
            if ($conn->query($insertSql) === TRUE) {
                echo "Appointment set successfully for date: $selectedDate. Remaining Slot: $remainingSlots";
            } else {
                echo "Error: " . $insertSql . "<br>" . $conn->error;
            }
        } else {
            echo "No available slots for date: $selectedDate";
        }
    } else {
        echo "Error counting slots: " . $countSql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>