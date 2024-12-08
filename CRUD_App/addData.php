<?php
// session_start();
// if(isset($_POST['addStudent']))
// {
// echo 'Yes It button is press';

// $fname = $_POST['fname'];
// $lname = $_POST['lname'];
// $age = $_POST['age'];

// if ($fname == '' || empty($fname)) {
//     header('Location: index.php?message=' . urlencode('Please fill in the first name!'));
//     exit;
// }  else {
//     // Correct INSERT query
//     $query = "INSERT INTO `students` (`Fname`, `Lname`, `Age`) VALUES ('$fname', '$lname', '$age')";

//     // Execute the query
//     $result = mysqli_query(mysql: $connection, query: $query);

//     if (!$result) {
//         die('Query Failed: ' . mysqli_error($connection));
//     } else {
//         header('Location: index.php?message=' . urlencode('Student added successfully!'));
//         exit;
//     }

// }}

?>

<?php
session_start();
include('dbcon.php'); // Ensure the database connection is included

if (isset($_POST['addStudent'])) {
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
?>
