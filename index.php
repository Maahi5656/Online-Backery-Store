<?php
 include('includes/header.php');
?>
<header id="header">
  <?php include('includes/nav.php'); ?>

<div class="row">
  <div class="main-banner">
    <div class="main-banner-content">
      <h1>Welcome To Puro Pastry & Bakery</h1>
      <p>Fresh Pastry & Bakery
No Preservatives, No Artificial Additives</p>
    </div>
  </div>
</div>
</header>

<section class="single-section about-section">
      <div class="about-section-inner">
        <div class="about-section-content">
           <div class="container">
              <div class="row">
                <div class="col-md-7 col-sm-12">
                   <div class="mb-5">
                      <img src="assets/img/pastry-1.jpg" alt="">
                   </div>
                   <div class="row">
                     <div class="col-md-6">
                        <img src="assets/img/bread-1.jpg" alt="">
                         <h3 class="about-img-caption">Best Ingredients</h3>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam magni voluptatibus, asperiores esse rerum ratione.</p>
                     </div>
                     <div class="col-md-6">
                        <img src="assets/img/bread-2.jpg" alt="">
                         <h3 class="about-img-caption">Best Ingredients</h3>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat doloremque vel dolorum.</p>
                     </div>
                   </div>
                </div>
                <div class="col-md-1 col-sm-12"></div>
                <div class="col-md-4 col-sm-12">
                     <h3>AMAZING MEALS <span>&</span><br><strong>GREAT ENTERTAINMENT</strong></h3>
                     <small>Hope To See You Soon</small>
                     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem</p>
                     <p>Venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
                </div>
              </div>
           </div>
        </div>
      </div>
   </section>
   <section class="single-section menu-item-section">
       <div class="menu-item-inner">
         <div class="container">
           <div class="row mb-5">
               <div class="menu-item-content">
                 <h2>Our Products</h2>
                 <p>Our backery items include wide range of products from breads, cakes, cookies, pastry and also snacks</p>
               </div>
           </div>
           <div class="row d-flex align-items-end">

             <?php  foreach($mainMenu as $menu){   ?>

               <div class="col-lg-2 col-md-4 col-sm-6 menu-item-content px-3 mb-5 text-center">
                 <img class="menu-img" src="assets/img/<?php echo $menu['menu-img'] ?>.png" alt="">
                 <h3><?php echo $menu['menu-item']; ?></h3>
               </div>

             <?php } ?>

           </div>
         </div>
       </div>
   </section> 



<?php
 include('includes/footer.php');
?>
