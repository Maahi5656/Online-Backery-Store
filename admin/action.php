<?php
session_start();
include 'database.php';


// ****** Category Tasks ***********

 $update = false;
 $id = "";
 $name = "";
 $price = "";
 $category = "";
 $photo = "";

 if(isset($_POST['add_category'])){
   $name = $_POST['category_name'];

   //Insert Query
   $query = "insert into category(CategoryName) values(?)";

   //insert using prepared statement
   $stmt = $connection->prepare($query);
   $stmt->bind_param('s',$name);
   $stmt->execute();

   header('Location: category.php');

   $_SESSION['response']="Successfully Inserted A New Category To The Database";
   $_SESSION['res_type'] = "success";
 }

 if(isset($_GET['edit'])){
   $id = $_GET['edit'];

   //Edit Query
   $query = "select * from category where CategoryID = ? ";

   //edit using a prepared statement
   $stmt = $connection->prepare($query);
   $stmt->bind_param('i', $id);
   $stmt->execute();

   $result = $stmt->get_result();
   $row = $result->fetch_assoc();

   $id = $row['CategoryID'];
   $name = $row['CategoryName'];

   $update = true;
 }


 if(isset($_POST['update_category'])){
    $id = $_POST['id'];

    $name = $_POST['category_name'];

    //Update Query
    $query = "update category set CategoryName=? where CategoryID=?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param('si',$name,$id);
    $stmt->execute();

    $_SESSION['response'] ="Updated Successfully";
    $_SESSION['res_type'] = "success";

    header('Location: category.php');
 }

 if(isset($_GET['delete'])){
   $id = $_GET['delete'];

   //Delete Query
   $query = "delete from category where CategoryID=?";
   $stmt = $connection->prepare($query);
   $stmt->bind_param('i',$id);
   $stmt->execute();

   header('Location: category.php');

   $_SESSION['response'] = "Deleted Successfully";
   $_SESSION['res_type'] = "danger";
 }

//******//

//*** Menu Item Tasks ***//
if(isset($_POST['add_item'])){
  $name = $_POST['item_name'];
  $price = $_POST['item_price'];
  $category = $_POST['item_category'];

  //Uploading File in the server
  $file = $_FILES['image']; //get info of the file
  $filename = $_FILES['image']['name'];
  $tmp_name = $_FILES['image']['tmp_name'];
  $error = $_FILES['image']['error'];

  //separate the string of the filename
  $temporaryExtension = explode('.',$filename);
  $fileExtension = strtolower(end($temporaryExtension));

  //check if file extension is allowed
  $isAllowed = array('jpg', 'jpeg', 'png'); //allowed extensions

  if(in_array($fileExtension, $isAllowed)){
    if($error === 0){
         $newFileName = uniqid('', true).".".$fileExtension; //this function generates id based on microtimes
         $fileDestination = "uploads/".$newFileName;

         $query = "insert into menu(ItemName, Price, CategoryName,image) values(?,?,?,?)";

         //insert record using prepared statement
         $stmt = $connection->prepare($query);
         $stmt->bind_param('siss',$name,$price,$category,$fileDestination);
         $stmt->execute();
         move_uploaded_file($tmp_name, $fileDestination);

         header("Location: index.php");

         $_SESSION['response']="Successfully Inserted A New Item Into The Database";
         $_SESSION['res_type'] = "success";
    }else{
      header("Location: index.php");

      $_SESSION['response']="Sorry Something Went Wrong!";
      $_SESSION['res_type'] = "warning";
    }
  }else{
    header("Location: index.php");

    $_SESSION['response']="File is Empty Or Its Extension Is Not Allowed In Database. Please Insert An Image";
    $_SESSION['res_type'] = "warning";
  }
}

if(isset($_GET['delete_item'])){
  $id = $_GET['delete_item'];

  $query = "select image from menu where ItemID =?";
  $stmt =  $connection->prepare($query);
  $stmt->bind_param('i',$id);
  $stmt->execute();

  $result = $stmt->get_result();
  $row = $result->fetch_assoc();

  $imagepath = $row['image'];
  unlink($imagepath);

  $query2 = "delete from menu where ItemID =?";
  $stmt2 = $connection->prepare($query2);
  $stmt2->bind_param("i",$id);
  $stmt2->execute();

  header('Location: index.php');

  $_SESSION['response'] = "Deleted Successfully";
  $_SESSION['res_type'] = "danger";
}

if(isset($_GET['edit_item'])){
  $id = $_GET['edit_item'];

  $query = "select * from menu where ItemID=?";
  $stmt = $connection->prepare($query);
  $stmt->bind_param("i",$id);
  $stmt->execute();

  $result = $stmt->get_result();
  $row = $result->fetch_assoc();

  $id = $row['ItemID'];
  $name = $row['ItemName'];
  $price = $row['Price'];
  $category = $row['CategoryName'];
  $photo = $row['image'];

  $update = true;
}

if(isset($_POST['update_item'])){
   $id = $_POST['id'];

   $name = $_POST['item_name'];
   $price = $_POST['item_price'];
   $category = $_POST['item_category'];
   $oldimage = $_POST['oldimage'];

   if(isset($_FILES['image']['name']) && ($_FILES['image']['name']!="")){
      $newimage ="uploads/".$_FILES['image']['name'];
      unlink($oldimage);
      move_uploaded_file($_FILES['image']['tmp_name'], $newimage);
    }else{
      $newimage = $oldimage;
    }

    $query = "update menu set ItemName=?,Price=?,CategoryName=?,image=? where ItemID=?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("sissi",$name,$price,$category,$newimage,$id);
    $stmt->execute();

    $_SESSION['response'] ="Updated Successfully";
    $_SESSION['res_type'] = "success";

    header('Location: index.php');

}

?>
