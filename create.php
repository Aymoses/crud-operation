<?php

// include "config.php";

session_start();

include("config.php");


$CourseCode = $CourseTitle = $Units = "";

if($_SERVER['REQUEST_METHOD'] == "POST")
{
     
    //Something was posted
    $CourseCode = $_POST['CourseCode'];
    $CourseTitle = $_POST['CourseTitle'];
    $Units = $_POST['Units'];
   

    if(!empty($CourseCode) && !empty($CourseTitle) && !empty ($Units))
    {

        //save to database
        $query = "INSERT INTO coursereg (CourseCode, CourseTitle, Units) 
        VALUES ('$CourseCode', '$CourseTitle', '$Units')";

        mysqli_query($conn, $query);
        
        
        die;
    }else
    {
        echo "please enter some valid information!";
    }

    if(isset($_POST['submit']))
       {  
        echo "Submision button clicked.";


  
    } 

    //redirect to logion.php
    header("Location: view.php");
}


 //not parsing inputs

//   if (isset($_POST['submit'])) {

//     $CourseCode = $_POST['CourseCode'];

//     $CourseTitle = $_POST['CourseTitle'];

//     $Units = $_POST['Units'];
//   }

//     $sql = "INSERT INTO coursereg (CourseCode, CourseTitle, Units) 
//     VALUES ('$CourseCode','$CourseTitle','$Units')";

//     $result = $conn->query($sql);

//     if ($result == TRUE) {

//       echo "New record created successfully.";

//     }else{

//       echo "Error:". $sql . "<br>". $conn->error;

//     } 

//     $conn->close(); 

?>
<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
     <h2>Course Registration Form</h2>
     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
         <fieldset>
             Course Code: <br>
             <input type="text" name="CourseCode" required>
             <br>

             Course Title: <br>
             <input type="text" name="CourseTitle" required>
             <br>

             Units: <br>
             <input type="number" name="Units" required>
             <br>
             <input type="submit" name="Add" value="Add"> 

          </fieldset>
     </form>

 </body>
</html>


