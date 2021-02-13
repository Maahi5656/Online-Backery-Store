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
            <h2>About Us</h2>
            <p>Get to know a brief history of our place</p>
          </div>
        </div>
     </div>
  </div>
  <section class="single-section about-us-section">
     <div class="about-us-inner">
         <div class="about-us-content">
            <div class="container">
              <div class="row align-items-center mb-5">
                <div class="col-md-6 px-0">
                  <img src="assets/img/bakery-items.png" alt="">
                </div>
                <div class="col-md-6 px-0">
                  <h3>A Few Words About Us</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic accusantium odit sint in quisquam itaque, illo corporis ex cupiditate, fuga ducimus aut repudiandae, debitis nobis aliquid nostrum vel accusamus doloremque!</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa</p>
                </div>
              </div>
               <div class="row align-items-center mb-5 flex-row-reverse">
                 <div class="col-md-6 px-0">
                   <img src="assets/img/dine.png" alt="">
                 </div>
                 <div class="col-md-6 px-0">
                   <h3>Perfect Place To Dine</h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic accusantium odit sint in quisquam itaque, illo corporis ex cupiditate, fuga ducimus aut repudiandae, debitis nobis aliquid nostrum vel accusamus doloremque!</p>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa</p>
                 </div>
               </div>
            </div>
         </div>
     </div>
  </section>
  <section class="single-section our-services">
     <div class="service-section-inner">
       <div class="service-section-content">
          <div class="container">
              <h2 class="section-title">Our Services</h2>
             <div class="row justify-content-center">

                  <?php foreach($ourServices as $services){ ?>

                  <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-img">
                        <img src="assets/img/<?php echo $services['service-img'] ?>.png" alt="Make Reservation">
                    </div>

                    <h3><?php echo $services['service'] ?></h3>
                    <p><?php  echo $services['description']; ?></p>
                  </div>

                <?php } ?>


               <!--

               <div class="col-lg-3 col-md-6 text-center">
                 <div class="service-img">
                     <img src="assets/img/make-reservation.png" alt="Make Reservation">
                 </div>

                 <h3>Make Reservation</h3>
                 <p>Curabitur posuere pellentesque mi quis gravida. Proin metus velit, volutpat at sem faucibus, rhoncus</p>
               </div>
               <div class="col-lg-3 col-md-6 text-center">
                 <div class="service-img">
                    <img src="assets/img/special-offers.png" alt="">
                 </div>

                 <h3>Special Offers</h3>
                 <p>Curabitur posuere pellentesque mi quis gravida. Proin metus velit, volutpat at sem faucibus, rhoncus</p>
               </div>
               <div class="col-lg-3 col-md-6 text-center">
                 <div class="service-img">
                    <img src="assets/img/order-food.png" alt="">
                 </div>

                 <h3>Order Your Food</h3>
                 <p>Curabitur posuere pellentesque mi quis gravida. Proin metus velit, volutpat at sem faucibus, rhoncus</p>
               </div>
               <div class="col-lg-3 col-md-6 text-center">
                 <div class="service-img">
                   <img src="assets/img/food-delivery.png" alt="">
                 </div>

                 <h3>Fast Delivery</h3>
                 <p>Curabitur posuere pellentesque mi quis gravida. Proin metus velit, volutpat at sem faucibus, rhoncus</p>
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
