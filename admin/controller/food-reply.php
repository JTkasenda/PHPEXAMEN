<?php
include_once "../model/dataClass.class.php";

$DataClass = new DataClass();
if (isset($_POST["food"])) {

    $SaveAdmin = $DataClass->SearchAll_Food();
    foreach ($SaveAdmin as $Food) :
?>
        <tr>
            <td><?=$Food["id"]?></td>
            <td><?=$Food["f_title"]?></td>
            <td><?=$Food["description"]?></td>
            <td><?=$Food["category_title"]?></td>
            <td>$<?=$Food["Price"]?></td>
            <td><?=$Food["active"]?></td>
            <td><?=$Food["featured"]?></td>
            <td>
                <a href="../view/update-food.php?f_name=<?=$Food['f_title']?>&desc=<?=$Food['description']?>&price=<?=$Food['Price']?>&image=<?=$Food['image']?>&category=<?=$Food['category_title']?>&featured=<?=$Food['featured']?>&active=<?=$Food['active']?>" class="btn-secondary">Modifier</a>
                <a href="#" class="btn-danger" onclick="DeleteFood()">Supprimer</a>
            </td>
        </tr>
<?php
    endforeach;
}
