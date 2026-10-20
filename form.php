<?php

include 'connection.php';

?>


<!DOCTYPE html>

<html>

<head>

    <title>Student Registration</title>

</head>


<body>


<h2>Student Registration</h2>



<form action="process.php" method="POST">


    First Name:

    <input type="text"
           name="first_name"
           required>


    <br><br>


    Last Name:

    <input type="text"
           name="last_name"
           required>


    <br><br>


    Age:

    <input type="number"
           name="age"
           required>


    <br><br>


    <button type="submit" name="submit">

        Add Student

    </button>


</form>


<hr>


<h2>Registered Students</h2>


<table border="1" cellpadding="10">


<tr>

    <th>SN</th>

    <th>First Name</th>

    <th>Last Name</th>

    <th>Age</th>

    <th>Actions</th>

</tr>


<?php


$sql = "SELECT * FROM students ORDER BY ID ASC";

$result = $conn->query($sql);


$sn = 1;


while ($row = $result->fetch_assoc()) {


?>


<tr>


    <td>

        <?php echo $sn; ?>

    </td>


    <td>

        <?php echo $row['first_name']; ?>

    </td>


    <td>

        <?php echo $row['last_name']; ?>

    </td>


    <td>

        <?php echo $row['age']; ?>

    </td>


    <td>


        <form action="view.php"
              method="GET"
              style="display:inline;">

            <input type="hidden"
                   name="id"
                   value="<?php echo $row['ID']; ?>">

            <button type="submit">

                View

            </button>

        </form>


        <form action="edit.php"
              method="GET"
              style="display:inline;">

            <input type="hidden"
                   name="id"
                   value="<?php echo $row['ID']; ?>">

            <button type="submit">

                Edit

            </button>

        </form>


        <form action="delete.php"
              method="GET"
              style="display:inline;">

            <input type="hidden"
                   name="id"
                   value="<?php echo $row['ID']; ?>">

            <button type="submit"
                    onclick="return confirm('Are you sure you want to delete this student?');">

                Delete

            </button>

        </form>


    </td>


</tr>


<?php


    $sn++;


}


?>


</table>


</body>

</html>