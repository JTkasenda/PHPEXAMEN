<?php include("./composants/menu.php"); ?>

<div class="content">
    <div class="wrapper">
        <h1>Modifier Admin</h1>
        <br><br>
        <form action="" method="Post" id="myForm">

            <table class="tbl-30">
                <tr>
                    <td>Noms: </td>
                    <td>
                        <input type="text" value="<?=$_GET['name']?>" name="full_name" placeholder="Nom et Prenom" autocomplete="off" required>
                    </td>
                </tr>
                <tr>
                    <td>Nom Utilisateur: </td>
                    <td>
                        <input type="username" value="<?=$_GET['username']?>" name="username" placeholder="Nom utilisateur" autocomplete="off" readonly>
                    </td>
                </tr>
                <tr>
                    <td>Nouveau Nom Utilisateur: </td>
                    <td>
                        <input type="username" value="<?=$_GET['username']?>" name="user" placeholder="Nom utilisateur" autocomplete="off" required>
                    </td>
                </tr>
                <tr>
                    <td>Mot de Passe: </td>
                    <td>
                        <input type="password" name="password" placeholder="mot de passe" autocomplete="off" id="pswd">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="button" value="Modifier" name="../controller/update-admin-controller.php" id="send" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>


<?php include("./composants/footer.php"); ?>