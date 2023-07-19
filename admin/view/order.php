<?php include_once "./composants/header.php"; ?>
<!-- Navbar Section Starts Here -->
<?php include_once "./composants/navbar.php"; ?>
<!-- Navbar Section Ends Here -->

<!-- fOOD sEARCH Section Starts Here -->
<section class="food-search">
    <div class="container">

        <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

        <form action="#" class="order">
            <fieldset>
                <legend>Selected Food</legend>

                <div class="food-menu-img">
                    <img src="<?=$_GET['image']?>" alt="<?=$_GET['title']?>" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h3><?=$_GET['title']?></h3>
                    <p class="food-price">$<?=$_GET['price']?></p>

                    <div class="order-label">Quantite</div>
                    <input type="number" name="qty" class="input-responsive" value="1" required>

                </div>

            </fieldset>

            <fieldset>
                <legend>Delivery Details</legend>
                <div class="order-label">Nom</div>
                <input type="text" name="full-name" placeholder="Ex. Jean Kasenda" class="input-responsive" required>

                <div class="order-label">Numero Telephone</div>
                <input type="tel" name="contact" placeholder="Ex. +243xxxxxx" class="input-responsive" required>

                <div class="order-label">Email</div>
                <input type="email" name="email" placeholder="Ex. donatien@gmail.com" class="input-responsive" required>

                <div class="order-label">Adress</div>
                <textarea name="address" rows="10" placeholder="Ex. Avenue, Ville, Pays" class="input-responsive" required></textarea>

                <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
            </fieldset>

        </form>

    </div>
</section>
<!-- fOOD sEARCH Section Ends Here -->

<!-- social Section Starts Here -->
    <!-- social Section Starts Here -->
    <?php include_once "./composants/social.php"; ?>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
  <?php include_once "./composants/frontFooter.php"; ?>