<?php 

include ("config.php");
?>

<!DOCTYPE html>
<html>

  <head>

        <title>View Page</title>
  
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    </head>

  <body>

        <div class="container">

           <h2>Course Registration Form</h2>

         <table class="table">
               <thead>

                   <tr>
    
                      <th>ID</th>

                      <th>Course Code</th>

                      <th>Course Title</th>

                      <th>Units</th>

                      <th>Action</th>
                  </tr>
               </thead>

               <tbody>
               <?php
                     $sql = "SELECT * FROM coursereg";

                       $result = mysqli_query($conn, $sql);
                          if($result){
                             while($row=mysqli_fetch_assoc($result)){
                                 $id=$row['id'];
                                 $CourseCode=$row['CourseCode'];
                                 $CourseTitle=$row['CourseTitle'];
                                 $Units=$row['Units'];

                                echo '<tr>
                                         <th scope="row">'. $id .'</th>
                                            <td> ' . $CourseCode .'</td>
                                            <td> ' . $CourseTitle .'</td>
                                            <td> ' . $Units .'</td>
                                            <td>
                                               <button class="btn btn-success "><a href="update.php?updateid='.$id.'"
                                                class="text-light">Update</a></button>
                                               <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'"
                                               class="text-light">Delete</a></button>
                                             </td>

                                      </tr>';
                            }
                         }

                ?>


               </tbody>
          </table>

        </div> 

    </body>
</html>





   