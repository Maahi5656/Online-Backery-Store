<?php
  include('includes/header.php');
?>

<?php
   include('includes/nav.php');
?>

<?php
  $senderName = $senderEmail = $senderContact = $senderAddress = $senderMessage = "";
  $nameError = $emailError = $contactError = $addressError = $messageError = "";


  if($_SERVER['REQUEST_METHOD'] == 'POST') {

     if( empty($_POST['name']) ){
        $nameError = "Please Enter Your Name";
     }elseif(!preg_match("/^[a-zA-Z]*$/",$_POST["name"])) {
       $nameError = "Only letters and white space allowed";
     }else{
       $senderName = test_input($_POST['name']);
     }

     if(empty($_POST['email'])){
       $emailError = "Please Enter Your Email";
     }elseif( !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) ){
       $emailError = "Invalid email format";
     }else{
       $senderEmail = test_input($_POST['email']);
     }

     if(empty($_POST['contact'])){
       $contactError ="Please Enter Your Phone Number";
     }elseif (!preg_match("/^[0-9]*$/",$_POST["contact"])) {
       $contactError = "Invalid Phone Number";
     }else{
       $senderContact = test_input($_POST['contact']);
     }

     if(empty($_POST['address'])){
       $addressError = "Please Give Your Address";
     }else{
       $senderAddress = test_input($_POST['address']);
     }

     if(empty($_POST['message'])){
       $messageError = "Please Write Your Message";
     }else{
       $senderMessage = test_input($_POST['message']);
     }

  }

  function test_input($value){
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);

    return $value;
  }



?>

<div class="about-us-banner">
   <div class="about-us-banner-inner">
      <div class="container">
        <div class="about-us-banner-content">
          <h2>Where To Find Us</h2>
          <p>Living Far Away From Us! Well Thats Not A Problem.<br> We have many different outlets around Dhaka for you to visit. We hope to open more soon</p>
        </div>
      </div>
   </div>
</div>
<section class="single-section location-section">
    <div class="location-section-inner">
      <div class="location-section-content">
            <div class="container">
             <div class="location-list">

                 <?php foreach($ourLocations as $locations){ ?>

                   <div class="outlet-address">
                      <img src="assets/img/<?php echo $locations['city-img']?>.jpg" alt="">
                      <h5><span><i class="fas fa-map-marker-alt"></i></span><?php echo $locations['city-name']; ?></h5>
                      <p><?php echo $locations['city-address'] ?> - <?php echo $locations['postal-code'] ?></p>
                   </div>

                 <?php } ?>

             </div>
         </div>
      </div>
    </div>
</section>
<section class="single-section contact-section">
   <div class="contact-section-inner">
     <div class="contact-section-content">
       <div class="container">
         <div class="row">
           <div class="col-lg-6 col-md-12">
              <h3>Get In Touch <b> With Us</b></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae ex explicabo itaque consequuntur culpa in minima nulla ullam, rem sint. Voluptatum eos cumque officiis laudantium natus, rerum eaque esse odit?</p>
              <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d120286.35177839537!2d90.43203096850853!3d23.749567892450813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1spuro%20pastry%20%26%20bakery!5e0!3m2!1sen!2sbd!4v1599885213503!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae possimus itaque ut repellendus sint quos iure quisquam quaerat dicta ab corrupti numquam eveniet dignissimos nobis fugiat, quibusdam aliquam voluptas voluptates.</p>
           </div>
           <div class="col-lg-1 col-md-12"></div>
           <div class="col-lg-5 col-md-12">
              <div class="contact-form-div">
                <h3> <b>Mail Us</b></h3>
                 <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                    <fieldset>
                       <input type="text" name="name" placeholder="Your Name..." value="<?php echo $senderName ?>">
                       <span class="error" style="color: red;"> *<?php echo $nameError;  ?></span>
                    </fieldset>
                    <fieldset>
                       <input type="email" name="email" placeholder="Your Email.." value="<?php echo $senderEmail ?>">
                       <span class="error" style="color: red;"> *<?php echo $emailError;  ?></span>
                    </fieldset>
                    <fieldset>
                       <input type="text" name="contact" placeholder="Your Number" value="<?php echo $senderContact ?>">
                       <span class="error" style="color: red;"> *<?php echo $contactError;  ?></span>
                    </fieldset>
                    <fieldset>
                      <input type="text" name="address" placeholder="Your Address" value="<?php echo $senderAddress ?>">
                      <span class="error" style="color: red;"> *<?php echo $addressError;  ?></span>
                    </fieldset>
                    <fieldset>
                       <textarea name="message" rows="8" cols="80" placeholder="Your Message..." value="<?php echo $senderMessage ?>"></textarea>
                      <span class="error" style="color: red;"> *<?php echo $messageError;  ?></span>
                    </fieldset>
                    <fieldset>
                      <input type="submit" name="submit" value="Send">
                    </fieldset>
                 </form>
              </div>
           </div>
         </div>
       </div>
     </div>
   </div>
</section>

<?php
 include('includes/footer.php');
?>
