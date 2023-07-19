<?php
include_once "../model/dataClass.class.php";

$DataClass = new DataClass();
if (isset($_POST["food"])) {

    $SaveAdmin = $DataClass->SearchAll_Food();
    foreach ($SaveAdmin as $Food) :
?>
        <tr id="<?= $Food['f_title'] ?>">
            <td><?= $Food["id"] ?></td>
            <td><?= $Food["f_title"] ?></td>
            <td><?= $Food["description"] ?></td>
            <td><?= $Food["category_title"] ?></td>
            <td>$<?= $Food["Price"] ?></td>
            <td><?= $Food["active"] ?></td>
            <td><?= $Food["featured"] ?></td>
            <td>
                <a href="../view/update-food.php?f_name=<?= $Food['f_title'] ?>&desc=<?= $Food['description'] ?>&price=<?= $Food['Price'] ?>&image=<?= $Food['image'] ?>&category=<?= $Food['category_title'] ?>&featured=<?= $Food['featured'] ?>&active=<?= $Food['active'] ?>" class="btn-secondary">Modifier</a>
                <a href="#" class="btn-danger" onclick='DeleteFood("<?= $Food["f_title"] ?>")'>Supprimer</a>
            </td>
        </tr>
    <?php
    endforeach;
}

if (isset($_POST["number"])) {

    $SaveAdmin = $DataClass->count_plats();
    foreach ($SaveAdmin as $count) :

        echo $count["TOTAL"];
    endforeach;
}


$Food = new DataClass();
if (isset($_POST["Catepage"])) {
//echo "Hello";
    $Foods = $Food->SearchAll_Food_Category($_POST["cate"]);
    foreach ($Foods as $Home) :
    ?>
         <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="<?=$Home["image"]?>" alt="<?=$Home["f_title"]?>" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4><?=$Home["f_title"]?></h4>
                    <p class="food-price">$<?=$Home["Price"]?></p>
                    <p class="food-detail">
                    <?=$Home["description"]?>
                    </p>
                    <br>

                    <a href="order.php?title=<?=$Home["f_title"]?>&price=<?=$Home["Price"]?>&desc=<?=$Home["description"]?>&image=<?=$Home["image"]?>" class="btn btn-primary">Order Now</a>
                </div>
            </div>
<?php
    endforeach;
}

if (isset($_POST["FoodpageYes"])) {
    //echo "Hello";
        $Foods = $Food->SearchAll_Food_Yes();
        foreach ($Foods as $Home) :
        ?>
             <div class="food-menu-box">
                    <div class="food-menu-img">
                        <img src="<?=$Home["image"]?>" alt="<?=$Home["f_title"]?>" class="img-responsive img-curve">
                    </div>
    
                    <div class="food-menu-desc">
                        <h4><?=$Home["f_title"]?></h4>
                        <p class="food-price">$<?=$Home["Price"]?></p>
                        <p class="food-detail">
                        <?=$Home["description"]?>
                        </p>
                        <br>
    
                        <a href="order.php?title=<?=$Home["f_title"]?>&price=<?=$Home["Price"]?>&desc=<?=$Home["description"]?>&image=<?=$Home["image"]?>" class="btn btn-primary">Order Now</a>
                    </div>
                </div>
    <?php
        endforeach;
    }
