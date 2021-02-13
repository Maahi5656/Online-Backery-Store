<?php
include 'action.php';

if(!$_SESSION['admin']){
  header('location:login.php');
}

?>

<?php
 include('includes/header.php');

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
         <div class="col-md-4 mb-4">
           <?php if($update == true){ ?>
             <h3 class="text-center text-info mb-3">Update Your Item</h3>
           <?php }else{ ?>
            <h3 class="text-center text-info mb-3">Add Your Item</h3>
           <?php } ?>

            <form class="border border-secondary p-3" action="action.php" method="post" enctype="multipart/form-data">
               <div class="form-group">
                 <input type="hidden" name="id" value="<?php echo $id; ?>">
                 <input type="text" name="item_name" class="form-control" value="<?php echo $name; ?>" placeholder="Enter Your Name" required>
               </div>
               <div class="form-group">
                 <input type="tel" name="item_price" class="form-control" value="<?php echo $price; ?>"  placeholder="Enter Your Price "required>
               </div>
              <div class="form-group">
                <?php
                //mysql oop prepared statement
                   $sql = "select * from category";
                   $stmt = $connection->prepare($sql);
                   $stmt->execute();
                   $result = $stmt->get_result();
                ?>
                <!-- <input type="tel" name="phone" class="form-control" value=""  placeholder="Enter Your Phone Number" required> -->
                <select class="form-control" name="item_category" value="<?php echo $category; ?>">
                    <option hidden>Enter The Type of Your Item</option>
                   <?php while($row = $result->fetch_assoc()){ ?>
                       <option value="<?php echo $row['CategoryName']; ?>"><?php echo $row['CategoryName']; ?></option>
                   <?php } ?>
                </select>
              </div>
              <div class="form-group">
                 <input type="hidden" name="oldimage" value="<?php echo $photo; ?>">
                 <input type="file" name="image" class="custom-file"  value="<?php echo $photo; ?>">
                 <img src="<?php echo $photo; ?>" width="120" height="120" class="img-thumbnail" alt="">
              </div>
              <div class="form-group">
                <?php if($update == true) { ?>
                    <input type="submit" name="update_item" class="btn btn-success btn-block" value="Update">
                     <a href="index.php" class="small btn-link">Go Back</a>
                <?php }else{ ?>
                    <input type="submit" name="add_item" class="btn btn-primary btn-block" value="Add">
                <?php } ?>
              </div>
           </form>
         </div>
         <div class="col-md-8 mb-4">
           <?php
             $query = "select * from menu";
             $stmt = $connection->prepare($query);
             $stmt->execute();
             $result = $stmt->get_result()
           ?>
           <h3 class="text-center text-info mb-3">Records Present In The Database</h3>

    <table class="table table-striped table-hover table-bordered">
       <thead class="thead-dark">
       <tr>
          <th>ID</th>
          <th>Image</th>
          <th>Name</th>
         <th>Category</th>
         <th>Price</th>
         <th>Action</th>
       </tr>
       </thead>
       <tbody>
        <?php while($row = $result->fetch_assoc()){ ?>

       <tr>
          <td><?php echo $row['ItemID']; ?></td>
          <td><img src="<?php echo $row['image']; ?>" alt="" width="50" height="50"></td>
          <td><?php echo $row['ItemName']; ?></td>
          <td><?php echo $row['CategoryName']; ?></td>
          <td><?php echo $row['Price']; ?></td>
          <td>
        <!--    <a href="" class="btn btn-primary">Details</a> -->
            <a href="index.php?edit_item=<?php echo $row['ItemID']; ?>" class="btn btn-warning m-1">Edit</a>
            <a href="action.php?delete_item=<?php echo $row['ItemID']; ?>" class="btn btn-danger m-1" onclick="return confirm('Do You Want To Delete This Record ?');">Delete</a>
          </td>
       </tr>
     <?php } ?>
       </tbody>
     </table>
         </div>
      </div>
</div>

<?php
 include('includes/footer.php');
?>
