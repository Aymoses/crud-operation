<?php 

include "config.php";

$sql = "SELECT * FROM coursereg";

$result = $conn->query($sql);

?>

 <!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>Course Registration</h2>
        <button onclick="location.href='create.php'">Add Courses</button>

<table class="table">

    <thead> 

        <tr>

            <th>ID</th>
            <th>CourseCode</th>
            <th>CourseTitle</th>
            <th>Units</th>
            <th>Action</th>

        </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                <tr>

                    <td><?php echo $row['id']; ?></td>

                    <td><?php echo $row['CourseCode']; ?></td>

                    <td><?php echo $row['CourseTitle']; ?></td>

                    <td><?php echo $row['Units']; ?></td>

                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" 
                    href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>

                </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>

