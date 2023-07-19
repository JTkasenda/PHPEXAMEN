<?php include_once "./composants/header.php"; ?>
    <!-- Navbar Section Starts Here -->
    <?php include_once "./composants/navbar.php"; ?>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <h2>Plats <a href="#" class="text-white" id="TextNode"><?=$_GET["title"]?></a></h2>

        </div>
    </section>
    
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container" id="Dish">
            <h2 class="text-center">Menu Plats</h2>



            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

    <!-- social Section Starts Here -->
    <?php include_once "./composants/social.php"; ?>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
  <?php include_once "./composants/frontFooter.php"; ?>