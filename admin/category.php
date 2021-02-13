<?php
 include('includes/header.php');
 include 'action.php';
?>

<div class="container-fluid py-4">
   <div class="row justify-content-center">
      <div class="col-md-10">
        <h5 class="text-center text-dark">View, Update and Delete Records In The Database</h5>
        <hr>
        <?php if(isset($_SESSION['response'])){ ?>
           <div class="alert alert-<?php echo $_SESSION['res_type']; ?> alert-dismissible text-center">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php echo $_SESSION['response']; ?>
           </div>
        <?php } unset($_SESSION['response']); ?>
      </div>
    </div>
      <div class="row">
         <div class="col-md-4 mb-5">
           <?php if($update == true){ ?>
            <h3 class="text-center text-info">Update Record</h3>
         <?php }else { ?>
              <h3 class="text-center text-info">Add Record</h3>
         <?php } ?>
            <form class="border border-secondary p-3 shadow" action="action.php" method="post" enctype="multipart/form-data">
               <div class="form-group">
                 <input type="hidden" name="id" value="<?php echo $id; ?>">
                 <input type="text" name="category_name" class="form-control" value="<?php echo $name; ?>" placeholder="Enter Your Category" required>
               </div><!--
               <div class="form-group">
                 <input type="email" name="email" class="form-control" value=""  placeholder="Enter Your Email"required>
               </div>
              <div class="form-group">
                 <input type="tel" name="phone" class="form-control" value=""  placeholder="Enter Your Phone Number" required>
              </div>
              <div class="form-group">
                 <input type="hidden" name="oldimage" value="">
                 <input type="file" name="image" class="custom-file"  value="">
                 <img src="" width="120" height="120" class="img-thumbnail" alt="">
               </div>-->
              <div class="form-group">
                <?php if($update == true){ ?>
                <input type="submit" name="update_category" class="btn btn-success btn-block" value="Update">
                 <a href="category.php" class="small btn-link">Go Back</a>
                <?php }else { ?>
                <input type="submit" name="add_category" class="btn btn-primary btn-block" value="Add">
                <?php } ?>
              </div>
           </form>
         </div>
         <div class="col-md-8 mb-5">
           <?php
           //mysql oop prepared statement
              $sql = "select * from category";
              $stmt = $connection->prepare($sql);
              $stmt->execute();
              $result = $stmt->get_result();
           ?>

           <h3 class="text-center text-info">Our Menu Categories</h3>
     <div class="table-responsive shadow">
    <table class="table table-striped table-hover table-bordered">
       <thead class="thead-dark">
       <tr>
          <th>ID</th>
         <th>Name</th>
         <th>Action</th>
       </tr>
       </thead>
       <tbody>
         <?php while($row = $result->fetch_assoc()){ ?>
       <tr>
          <td><?php echo $row['CategoryID']; ?></td>
          <td><?php echo $row['CategoryName']; ?></td>

          <td>
        <!--    <a href="" class="btn btn-primary">Details</a> -->
            <a href="category.php?edit=<?php echo $row['CategoryID']; ?>" class="btn btn-warning m-1">Edit</a>
            <a href="action.php?delete=<?php echo $row['CategoryID']; ?>" class="btn btn-danger m1" onclick="return confirm('Do You Want To Delete This Record ?');">Delete</a>
          </td>
       </tr>
       <?php  } ?>
       </tbody>
     </table>
     </div>
         </div>
      </div>
</div>

<?php
 include('includes/footer.php');
?>
