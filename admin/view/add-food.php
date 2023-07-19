<?php include("./composants/menu.php"); ?>

<div class="content">
    <div class="wrapper">
        <h1>Ajouter Plat</h1>
        <br><br>
        <form action="" method="Post" id="myForm" enctype="multipart/form-data">

            <table class="tbl-30">
                <tr>
                    <td>Nom: </td>
                    <td>
                        <input type="text" name="f_name" placeholder="e.g. Rattatouille..." autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td>
                        <textarea name="desc" id="" cols="30" rows="10" placeholder="Description" autocomplete="off"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Prix: </td>
                    <td>
                       <input type="number" name="price" id="" step="0.1" min="0.0" value="0.0">
                    </td>
                </tr>
                <tr>
                    <td>Image: </td>
                    <td>
                        <input type="text" name="image" placeholder="Chemin d'access de l'image">
                    </td>
                </tr>
                <tr>
                    <td>Category: </td>
                    <td>
                        <select name="category" id="category">
                            <option value="">Choix</option>
                        </select>
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
                        <input type="button" value="Ajouter Nourriture" name="../controller/add-food-controller.php" id="send" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>


<?php include("./composants/footer.php"); ?>
