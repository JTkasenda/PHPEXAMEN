<?php include_once "./composants/header.php" ?>
    <!-- Navbar Section Starts Here -->
    <?php include_once "./composants/navbar.php" ?>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="food-search.html" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container" id="Food_Yes">
            <h2 class="text-center">Food Menu</h2>

            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

    <!-- social Section Starts Here -->
    <?php include_once "./composants/social.php" ?>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    <?php include_once "./composants/frontFooter.php" ?>