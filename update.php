<?php 

   include "config.php";
  
   if(isset($_POST['update'])){
    $CourseCode =$_POST['CourseCode'];
    $CourseTitle =$_POST['CourseTitle'];
    $Units =$_POST['Units'];
    $id = $_POST['id'];
  
    $sql="UPDATE coursereg SET  CourseCode ='$CourseCode', CourseTitle ='$CourseTitle', Units='$Units' 
    WHERE id= '$id'";

  // var_dump($sql);
    $result=mysqli_query($conn, $sql);
    if($result){
      echo "Updated successfully";
    }else{
      die(mysqli_error($conn));
  
    }
     header('location:view.php');
  }
  

    $id = $_GET['updateid'];
    $sql= "SELECT *FROM coursereg Where id ='$id'";
    $result=mysqli_query($conn, $sql);

    $row=mysqli_fetch_assoc($result);
    $CourseCode=$row['CourseCode'];
    $CourseTitle=$row['CourseTitle'];
    $Units=$row['Units'];
    $id = $row['id'];

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
      <h2>Course Registration Form</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
          <fieldset>
            Course Code: <br>
           <input type="text" name="CourseCode" required value="<?php echo $CourseCode;?>">
            <br>

           Course Title: <br>
            <input type="text" name="CourseTitle" required value="<?php echo $CourseTitle;?>">
            <br>
            <input type="text" hidden name="id" required value="<?php echo $id;?>">
            <br>
           Units: <br>
           <input type="number" name="Units" required value="<?php echo $Units;?>">
            <br>
                      
           <!-- <input type="submit" name="Update" value="Update">   -->
            <button class="btn btn-md btn-success" name="update" type="submit">submit</button>
            </fieldset>    
              </form>

          </body>
          </html>

  
 
  


          



