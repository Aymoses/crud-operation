<?php

include("config.php");


//inserting data to the database
  if (isset($_POST['submit'])) {

    $CourseCode = $_POST['CourseCode'];

    $CourseTitle = $_POST['CourseTitle'];

    $Units = $_POST['Units'];
  
    $sql = "INSERT INTO coursereg (CourseCode, CourseTitle, Units) VALUES ('$CourseCode','$CourseTitle','$Units')";

    $result = mysqli_query($conn, $sql);

    if($result) {

    //   echo "New record created successfully.";
      header('location:view.php');

    } else{
        die(mysqli_error($conn));
    }
  }

    ?>

<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Course Form</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 </head>
 <body>
    <div class="container">
     <h2> AY International School 'Course Registration Form'</h2>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <fieldset>
          Course Code: <br>
          <input type="text" name="CourseCode"class="form-control"  required>
          <br>

          Course Title: <br>
          <input type="text" name="CourseTitle" class="form-control" required>
          <br>

          Units: <br>
          <input type="number" name="Units" class="form-control" required>
          <br>
          
          <input type="submit" name="submit" class="btn btn-primary" value="Add Course"> 
        </fieldset>
      </form>
    </div>
 </body>
</html>






