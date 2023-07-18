<?php include("./composants/menu.php"); ?>

<div class="content">
    <div class="wrapper">
        <h1>Ajouter Admin</h1>
        <br><br>
        <form action="" method="Post" id="myForm">

            <table class="tbl-30">
                <tr>
                    <td>Noms: </td>
                    <td>
                        <input type="text" name="full_name" placeholder="Nom et Prenom" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td>Nom Utilisateur: </td>
                    <td>
                        <input type="username" name="username" placeholder="Nom utilisateur" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td>Mot de Passe: </td>
                    <td>
                        <input type="password" name="password" placeholder="mot de passe" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="button" value="Ajouter Admin" name="../controller/add-admin-controller.php" id="send" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>


<?php include("./composants/footer.php"); ?>