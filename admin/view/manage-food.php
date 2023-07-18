<?php include("./composants/menu.php") ?>

<div class="content">
    <div class="wrapper">
        <h1>Gestion Plat</h1>
        <br><br>
        <!-- Button to add Admin -->
        <a href="./add-food.php" class="btn-primary">Ajout Nourriture</a>
        <br><br><br>
        <table class="tbl-full" id="tableFood">
            <tr>
                <th>ID.</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Categorie</th>
                <th>Prix</th>
                <th>Disponible</th>
                <th>Page D'acc</th>
                <th>Actions</th>
            </tr>

        </table>
        <div class="clearfix"></div>

    </div>
</div>

<?php include("./composants/footer.php") ?>