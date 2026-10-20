<?php

include 'connection.php';


if (isset($_POST['submit'])) {


    $first_name = $_POST['first_name'];

    $last_name = $_POST['last_name'];

    $age = $_POST['age'];


    $sql = "INSERT INTO students
            (first_name, last_name, age)
            VALUES
            ('$first_name', '$last_name', '$age')";


    if ($conn->query($sql)) {

        echo "Student added successfully!";

        echo "<br><br>";

        echo "<a href='form.php'>Back to Students</a>";

    }

    else {

        echo "Error: " . $conn->error;

    }

}

?>