<?php
include_once "../model/dataClass.class.php";

$DataClass = new DataClass();


if (isset($_POST["save"])) {

    $SaveAdmin = $DataClass->SearchAll_Admin();
    foreach ($SaveAdmin as $Admin) :
?>
        <tr id="<?= $Admin["username"] ?>">
            <td><?= $Admin["Fullname"] ?></td>
            <td><?= $Admin["username"] ?></td>
            <td>
                <a href="../view/update-admin.php?name=<?= $Admin["Fullname"] ?>&username=<?= $Admin["username"] ?>" class="btn-secondary">Modifier</a>
                <a href="#" class="btn-danger" onclick='DeleteAdmin("<?= $Admin["username"] ?>")'>Supprimer</a>
            </td>
        </tr>

<?php
    endforeach;
}
