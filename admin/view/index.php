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

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container" id="Cate_Yes">
            <h2 class="text-center">Explore Foods</h2>


            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container" id="Food_Yes">
            <h2 class="text-center">Food Menu</h2>



            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <a href="./foods.php">See All Foods</a>
        </p>
    </section>
    <!-- fOOD Menu Section Ends Here -->

    <!-- social Section Starts Here -->
    <?php include_once "./composants/social.php" ?>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    <?php include_once "./composants/frontFooter.php" ?>