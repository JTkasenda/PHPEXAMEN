<?php include("./composants/menu.php") ?>

<!-- Main Content Starts -->
<div class="content">
    <div class="wrapper">
        <h1>Gestion Admin</h1>
        <br><br>
        <!-- Button to add Admin -->
        <a href="./add-admin.php" class="btn-primary">Ajout Admin</a>
        <br><br><br>
        <table class="tbl-full" id="table">
            <tr>
                <th>Nom</th>
                <th>Nom Utilisateur</th>
                <th>Actions</th>
            </tr>
            
           

        </table>
        <div class="clearfix"></div>
    </div>
</div>
<!-- Main Content Ends -->

<?php include("./composants/footer.php") ?>