<?php 

include "config.php";

    if (isset($_POST['update'])) {

        $firstname = $_POST['CourseCode'];

        $lastname = $_POST['CourseTitle'];

        $email = $_POST['Units']; 

        $user_id = $_POST['user_id'];

        $sql = "UPDATE 'coursereg' SET 'CourseCode'='$CourseCode','CourseTitle'='$CourseTitle','Units'='$Units' WHERE 'id'='$user_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 

    $sql = "SELECT * FROM coursereg WHERE 'id'='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $CourseCode = $row['CourseCode'];

            $CourseTitle = $row['CourseTitle'];

            $Units = $row['Units'];

            $id = $row['id'];

        } 

    ?>

        <h2>Student Update Form</h2>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

          <fieldset>

            <legend>Personal information:</legend>

            Course Code:<br>

            <input type="text" name="CourseCode" value="<?php echo $CourseCode; ?>">

            <input type="hidden" name="user_id" value="<?php echo $id; ?>">

            <br>

            CourseTitle:<br>

            <input type="text" name="CourseTitle" value="<?php echo $CourseTitle; ?>">

            <br>

            Units:<br>

            <input type="number" name="Units" value="<?php echo $Units; ?>">

            <br><br>

            <input type="submit" value="Update" name="update">

          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: view.php');

    } 

}

?> 