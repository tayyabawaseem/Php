<?php

include('header.php');
include('dbcon.php');



if (isset($_POST['UpdateStudent'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    // Validate the input
    if (empty($fname) && empty($lname) && empty($age)) {
        header('Location: index.php?message=' . urlencode('Please fill in the all fields!'));
        exit;
    }elseif(empty($fname)){

        header('Location: index.php?message=' . urlencode('Please fill in the First name!'));
        exit;

    } elseif(empty($lname)){

        header('Location: index.php?message=' . urlencode('Please fill in the Last name!'));
        exit;

    } 
    elseif(empty($age)){

        header('Location: index.php?message=' . urlencode('Please fill in the age!'));
        exit;

    } 
    else {
        // Correct INSERT query
        $query = "INSERT INTO `students` (`Firstname`, `Lastname`, `Age`) VALUES ('$fname', '$lname', '$age')";

        // Execute the query
        $result = mysqli_query(mysql: $connection, query: $query);

        if (!$result) {
            die('Query Failed: ' . mysqli_error(mysql: $connection));
        } else {
            header('Location: index.php?message=' . urlencode('Student added successfully!'));
            exit;
        }
    }
}

if(isset($_GET['Id'])){
$id = $_GET['Id'];
}

    $querry = "select * from students where Id ='$id'";
    $result = mysqli_query($connection , $querry);

    if($result)
    {
      
        $row = mysqli_fetch_assoc($result);
        // print_r($row);
// 
 
}else{
    die("Failed results");
    }




?>




<form action="update.php" method="post">

<div class="form-group">
          <label for="fname" class="">First Name:</label>
          <input type="text" name="fname" class="form-control" value="<?php echo $row['Firstname'];?>">
        </div>
        <div class="form-group">
          <label for="lname" class="mt-4">Last Name:</label>
          <input type="text" name="lname" class="form-control" value="<?php echo $row['Lastname'];?>"> 
        </div>
        <div class="form-group">
          <label for="age"class="mt-4">Age:</label>
          <input type="text" name="age" class="form-control" value="<?php echo $row['Age'];?>">
        </div>
        <input type="submit" name="UpdateStudent" value="Update Submit" class="btn btn-success mt-3">
</form>

<?php

include('footer.php');


?>