<?php
include("connection.php")
?>

<?php
if(isset($_POST['search']))
{
    $search =  $_POST['searchId'];
    $querry = "Select * from empform where Id = '$search'";
    $data   =  mysqli_query($con , $querry);
    $res    =  mysqli_fetch_assoc($data);
}
?>
    <title>Employee Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class=" text-center bg-light main">
    <form action="" method="post">
    <h1 class="mt-3">Employee Data Entry Automation Software</h1>
    
    <div class="form">
     <input type="text" name="searchId" class="textfield" placeholder="Search ID" value="<?php if(isset($_POST['search'])){echo $res['Id'];} ?>">
     <input type="text" name="empName" class="textfield" placeholder="Employee Name"  value="<?php if(isset($_POST['search'])){echo $res['empName'];} ?>">
     <input type="email" name="empEmail" class="textfield" placeholder="Email"value="<?php if(isset($_POST['search'])){echo $res['empEmail'];} ?>">
     <select name="gender" id="" >
        <option value="Not Select">Select Gender</option>
        <option value="male"<?php if($res['empGender'] == 'male'){ echo "selected"; }?>>Male</option>

        <option value="female"<?php if($res['empGender'] == 'female'){ echo "selected"; }?>>Female</option>
        
        <option value="other" <?php if($res['empGender'] == 'other'){echo "selected";}?>>other</option>
     </select>

     <select name="depart" id="">
        <option value="Not select">Select Department</option>
        <option value="it"<?php if($res['empDepart'] == 'it' ){ echo "selected";}?>>IT</option>
        <option value="hr" <?php if($res['empDepart'] == 'hr'){echo "selected";}?>>HR</option>
        <option value="intern" <?php if($res['empDepart'] == 'intern') { echo "selected";}?>>Internship</option>;
        <option value="acc" <?php if($res['empDepart'] == 'acc' ){ echo "selected";}?>>Accounts</option>
        <option value="sales" <?php if($res['empDepart'] == 'sales' ){ echo "selected";}?>>Sales</option>
        <option value="mark" <?php if($res['empDepart'] == 'mark' ){ echo "selected";}?>>Marketing</option>
        <option value="bus" <?php if($res['empDepart'] == 'bus'){ echo "selected";}?>>Business Development</option>
     </select>
     <textarea name="address" placeholder="Address" class="h-100 pt-2"> <?php if(isset($_POST['search'])){echo $res['empAddress'];}?></textarea>

     <input type="submit" value="Search" name="search" class="btn btn-secondary fw-bold mx-1 my-2">
     <input type="submit" value="Add" name="add" class="btn btn-info text-light fw-bold mx-1 my-2">
     <input type="submit" value="Modify" name="modify" class="btn btn-warning text-light fw-bold mx-1 my-2">
     <input type="submit" value="Save" name="save" class="btn btn-success fw-bold mx-1 my-2">
     <input type="submit" value="Delete" name="delete" class="btn btn-danger fw-bold mx-1 my-2">
     <input type="submit" value="Clear" name="clear" class="btn btn-primary fw-bold mx-1 my-2">
    </div>
    </form>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>

<?php
if(isset($_POST['save']))
{
 $empName  =  $_POST['empName'];
 $empEmail =  $_POST['empEmail'];
 $gender   =  $_POST['gender'];
 $depart   =  $_POST['depart'];
 $address  =  $_POST['address'];

 $querry = "Insert INTO empform (empName , empEmail , empGender , empDepart , empAddress) values('$empName' , '$empEmail', '$gender' , '$depart' , '$address')" ;

 $result = mysqli_query($con , $querry);
 if($result)
 {
    echo "<script>alert('Data saved into database!!')</script>";
 }
 else{
    echo "<script>alert('Failed saved data into database!!')</script>";
 }

}

?>

<?php

//gpt bhai

// if(isset($_POST['search'])) {
//     $search = $_POST['searchId'];
//     $query = "SELECT * FROM empform WHERE Id = '$search'";
//     $data = mysqli_query($con, $query);
    
//     if($data && mysqli_num_rows($data) > 0) {
//         $res = mysqli_fetch_assoc($data);
//         $name = $res['empName'];
//         echo $name;
//     } else {
//         echo "<script>alert('No record found for the given ID.')</script>";
//     }
// }
?>



<!-- Delete -->

<?php
if(isset($_POST['delete']))
{
   $id = $_POST['searchId'];
   $querry = "Delete From empform where Id = '$id'";
   $data = mysqli_query($con , $querry);

   if( $data )
   {
      echo "<script>alert('Record deleted successsfully')</script>";
   }
   else{
      echo "<script>alert('Failed to Record delete')</script>";

   }
}

?>