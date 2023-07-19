<?php
include_once "../model/dataClass.class.php";

$DataClass = new DataClass();


if (isset($_POST["save"])) {

    $SaveAdmin = $DataClass->SearchAll_menu();
    foreach ($SaveAdmin as $Cate) :
?>
        <option value="<?= $Cate['title'] ?>"><?= $Cate['title'] ?></option>


    <?php
    endforeach;
}

if (isset($_POST["category"])) {

    $SaveAdmin = $DataClass->SearchAll_menu();
    foreach ($SaveAdmin as $Cate) :
    ?>
        <tr id="<?= $Cate["title"] ?>">
            <td><?= $Cate["id"] ?></td>
            <td><?= $Cate["title"] ?></td>
            <td><?= $Cate["featured"] ?></td>
            <td><?= $Cate["active"] ?></td>
            <td>
                <a href="../view/update-category.php?title=<?= $Cate["title"] ?>&image=<?= $Cate["image"] ?>&featured=<?= $Cate["featured"] ?>&active=<?= $Cate["active"] ?>" class="btn-secondary">Modifier</a>
                <a href="#" class="btn-danger" onclick='DeleteCategory("<?= $Cate["title"] ?>")'>Supprimer</a>
            </td>
        </tr>
    <?php
    endforeach;
}

if (isset($_POST["number"])) {

    $SaveAdmin = $DataClass->count_categories();
    foreach ($SaveAdmin as $count) :

        echo $count["TOTAL"];
    endforeach;
}

$Food = new DataClass();
if (isset($_POST["homepage"])) {
//echo "Hello";
    $Foods = $Food->SearchAll_menu();
    foreach ($Foods as $Home) :
    ?>
        <a href="category-foods.php?title=<?= $Home["title"] ?>">
            <div class="box-3 float-container">
                <img src="<?= $Home["image"] ?>" alt="<?=$Home['title'] ?>" class="img-responsive img-curve">

                <h3 class="float-text text-white"><?= $Home['title'] ?></h3>
            </div>
        </a>
<?php
    endforeach;
}

if (isset($_POST["CatepageYes"])) {
    //echo "Hello";
        $Foods = $Food->SearchAll_menu_Yes();
        foreach ($Foods as $Home) :
        ?>
            <a href="category-foods.php?title=<?= $Home["title"] ?>">
                <div class="box-3 float-container">
                    <img src="<?= $Home["image"] ?>" alt="<?=$Home['title'] ?>" class="img-responsive img-curve">
    
                    <h3 class="float-text text-white"><?= $Home['title'] ?></h3>
                </div>
            </a>
    <?php
        endforeach;
    }
