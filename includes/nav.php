<?php
 include('array.php');
?>

<nav id="main-nav" class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
<!--    <div class="row main-navbar"> -->
      <a href="#" class="navbar-brand"><img src="assets/img/logo.jpg" alt=""></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
           <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="collapsibleNavbar">
       <ul class="navbar-nav ml-auto">
         <?php
           foreach($navItems as $items){
            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"$items[slug]\">$items[title]</a></li>";
           }
         ?>

       </ul>
      </div>


<!--    </div> -->
  </div>

</nav>
