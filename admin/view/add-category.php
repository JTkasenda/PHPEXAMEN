<?php include("./composants/menu.php"); ?>

<div class="content">
    <div class="wrapper">
        <h1>Ajouter Category</h1>
        <br><br>
        <form action="" method="Post" id="myForm" enctype="multipart/form-data">

            <table class="tbl-30">
                <tr>
                    <td>Nom: </td>
                    <td>
                        <input type="text" name="cat_name" placeholder="e.g. Poisson, Legume..." autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td>Image: </td>
                    <td>
                        <input type="text" name="image" placeholder="Chemin d'access de l'image">
                    </td>
                </tr>
                <tr>
                    <td>Aff. Page D'acceuil: </td>
                    <td>
                        <select name="featured" id="">
                            <option value="Non">Non</option>
                            <option value="Oui">Oui</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Disponible: </td>
                    <td>
                    <select name="active" id="">
                            <option value="Non">Non</option>
                            <option value="Oui">Oui</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="button" value="Ajouter Category" name="../controller/add-category-controller.php" id="send" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>


<?php include("./composants/footer.php"); ?>
