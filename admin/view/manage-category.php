<?php include("./composants/menu.php") ?>

<div class="content">
    <div class="wrapper">
        <h1>Gestion Categorie</h1>
        <br><br>
        <!-- Button to add Admin -->
        <a href="./add-category.php" class="btn-primary">Ajout Categories</a>
        <br><br><br>
        <table class="tbl-full" id="tableCat">
            <tr>
                <th>ID.</th>
                <th>Nom</th>
                <th>Page D'acc</th>
                <th>Disponible</th>
                <th>Actions</th>
            </tr>
           
        </table>
        <div class="clearfix"></div>
    </div>
</div>

<?php include("./composants/footer.php") ?>