<?php
include('dbcon.php');
include('header.php')
?>


<style>
  h6{
    text-align: center;
    color: red;
  }
</style>



    <table class="table table-bordered table-hover table-striped mt-5">
      <thead>
        <tr>
        <th>Std ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Action</th>
        </tr>
      </thead> 
      <tbody> 
     
       <?php
        $querry = "select * from students";
        $result = mysqli_query($connection , $querry);

        if($result)
        {
          
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
        <td><?php echo $row['Id'];?></td>
        <td><?php echo $row['Firstname'];?></td>
        <td><?php echo $row['Lastname'];?></td>
        <td><?php echo $row['Age'];?></td>
        <td>  
          
        <button type="button" class="btn btn-outline-primary mx-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Student</button>
 
        <button type="button" class="btn btn-outline-warning mx-2"> <a href="update.php?Id=<?php echo $row['Id']; ?>" class="btn btn-outline-warning mx-2">Edit Student</a>
        </button>
        <button type="button" class="btn btn-outline-danger mx-2"><a href="delete.php?Id=<?php echo $row['Id'];?>" class="nav-link">Delete Student</a></button></td>
  
        </tr>

        <?php
            }
        }


        else{
        die("Failed results");
        }


     ?>




      </tbody> 
    </table>


    <?php
 if(isset($_GET['message']))
 {
   echo "<h6> " .$_GET['message']. "</h6>";
 }
 else{
  // echo '<h6> no msg display</h6>';
 }



 if(isset($_GET['addData_message']))
 {
   echo "<h6> " .$_GET['addData_message']. "</h6>";
 }
 else{
  // echo '<h6> no msg display</h6>';
 }


?>
    <!-- Modal -->
   <form action="addData.php" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content ">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Students</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
  
        <div class="form-group">
          <label for="fname" class="">First Name:</label>
          <input type="text" name="fname" class="form-control">
        </div>
        <div class="form-group">
          <label for="lname" class="mt-4">Last Name:</label>
          <input type="text" name="lname" class="form-control"> 
        </div>
        <div class="form-group">
          <label for="age"class="mt-4">Age:</label>
          <input type="text" name="age" class="form-control">
        </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" name="addStudent" value="Add Submit" class="btn btn-success">
      </div>
    </div>
  </div>
</div>
 </form>
<?php
include('footer.php')
?>
