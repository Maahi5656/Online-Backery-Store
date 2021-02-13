<?php
  include('includes/header.php');
?>

<?php
   include('includes/nav.php');
?>

<div class="about-us-banner">
     <div class="about-us-banner-inner">
        <div class="container">
          <div class="about-us-banner-content">
            <h2>Our Menu</h2>
            <p>Everything we have to offer at one glance</p>
          </div>
        </div>
     </div>
  </div>
  <section class="single-section menu-section">
      <div class="menu-section-inner">
        <div class="menu-section-content">
           <div class="container">
          <!--    <div class="row justify-content-center">
                  <div class="special-item-content">
                    <h2>Special Item Of The Day</h2>
                    <p>Limited Offer Only</p>
                    <div class="special-item-list mt-4">
                      <h3 class="list-title">Day 1</h3>
                      <ul>

                        <li><a href="#">Item 1</a> <span><i class="fas fa-dollar-sign"></i> 30</span></li>
                        <li><a href="#">Item 2</a> <span><i class="fas fa-dollar-sign"></i> 30</span></li>
                        <li><a href="#">Item 3</a> <span><i class="fas fa-dollar-sign"></i> 30</span></li>
                      </ul>
                    </div>
                  </div>
              </div>  -->
              <div class="row justify-content-left">
              <div class="special-item-content mb-2">
                <?php
                   include('admin/database.php');

                   $sql1 = "select * from category";
                   $sql2 = "select * from menu,category";

                   $result1 = mysqli_query($connection, $sql1);
                /*   $stmt = $connection->query($sql1);
                   $stmt->execute();
                   $result = $stmt->get_result(); */
                ?>
                <h2 class="section-title">Menu</h2>
              </div>
                <?php if(mysqli_num_rows($result1) > 0) { ?>
                <?php while($row = mysqli_fetch_assoc($result1)){  ?>
                  <div class="col-md-6 mb-5">
                    <div class="special-item-list">
                      <h3 class="list-title"><?php echo $row['CategoryName']; ?></h3>
                       <?php
                         $var = $row['CategoryName'];
                         $x=1;

                      ?>
                      <ul>
                         <div class="gallery">
                        <?php
                           $sql2 = "select * from menu where CategoryName = ?";
                           $stmt = $connection->prepare($sql2);
                           $stmt->bind_param("s",$var);
                           $stmt->execute();

                           $result2 = $stmt->get_result();


                        ?>

                        <?php if(mysqli_num_rows($result2) > 0){   ?>

                          <?php while($row1 = mysqli_fetch_assoc($result2)){ ?>
                            <li><span><a href="<?php echo 'admin/'.$row1['image']; ?>" data-lightbox="<?php echo $var; ?>"><img src="<?php echo 'admin/'.$row1['image']; ?>"></a><?php echo $row1['ItemName']; ?></span> <span><i class="fas fa-dollar-sign"></i><?php echo $row1['Price']; ?></span></li>
                        <?php

                             }
                           }
                        ?>
                      </div>

                       <!--
                        <li><a href="#">Item 1</a> <span><i class="fas fa-dollar-sign"></i> 30</span></li>
                        <li><a href="#">Item 2</a> <span><i class="fas fa-dollar-sign"></i> 30</span></li>
                        <li><a href="#">Item 3</a> <span><i class="fas fa-dollar-sign"></i> 30</span></li> -->
                      </ul>
                    </div>
                  </div>
                <?php

                 }
               }
                ?>
                <!--
                <div class="col-md-6 mb-5">
                  <div class="special-item-list">
                    <h3 class="list-title">Day 1</h3>
                    <ul>

                      <li><a href="#">Item 1</a> <span><i class="fas fa-dollar-sign"></i> 30</span></li>
                      <li><a href="#">Item 2</a> <span><i class="fas fa-dollar-sign"></i> 30</span></li>
                      <li><a href="#">Item 3</a> <span><i class="fas fa-dollar-sign"></i> 30</span></li>
                    </ul>
                  </div>
                </div>        
              -->
              </div>
           </div>
        </div>
      </div>
  </section>



<?php
 include('includes/footer.php');
?>
