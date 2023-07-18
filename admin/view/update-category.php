<?php include("./composants/menu.php"); ?>

<div class="content">
    <div class="wrapper">
        <h1>Modifier Category</h1>
        <br><br>
        <form action="" method="Post" id="myForm" enctype="multipart/form-data">

            <table class="tbl-30">
                <tr>
                    <td>Nom: </td>
                    <td>
                        <input type="text" name="cat_name" placeholder="e.g. Poisson, Legume..." value="<?= $_GET["title"] ?>" autocomplete="off" readonly>
                    </td>
                </tr>
                <tr>
                    <td>Nouveau Nom: </td>
                    <td>
                        <input type="text" name="cat" placeholder="e.g. Poisson, Legume..." value="<?= $_GET["title"] ?>" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td>Image: </td>
                    <td>
                        <input type="text" value="<?= $_GET["image"] ?>" name="image" placeholder="Chemin d'access de l'image">
                    </td>
                </tr>
                <tr>
                    <td>Aff. Page D'acceuil: </td>
                    <td>
                        <select name="featured" id="" value="<?= $_GET["featured"] ?>">
                            <option value="">Choix</option>
                            <option value="Non">Non</option>
                            <option value="Oui">Oui</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Disponible: </td>
                    <td>
                        <select name="active" id="">
                            <option value="">Choix</option>
                            <option value="Non">Non</option>
                            <option value="Oui">Oui</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="button" value="Modifier" name="../controller/update-category-controller.php" id="send" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>


<?php include("./composants/footer.php"); ?>