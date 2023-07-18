<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOOD ORDER WEBSITE - Home Page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $("#pswd").prop('required', true);
    </script>
    <link rel="stylesheet" href="../../css/admin.css?v=<?= time() ?>">
</head>

<body>
    <!-- Menu Section Starts -->
    <div class="menu text-center">
        <div class="wrapper">
            <ul>
                <li>
                    <a href="index.php">Accueil</a>
                </li>
                <li>
                    <a href="manage-admin.php">Admin</a>
                </li>
                <li>
                    <a href="manage-category.php">Categorie</a>
                </li>
                <li>
                    <a href="manage-food.php">Plats</a>
                </li>
                <li>
                    <a href="manage-order.php">Commandes</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Menu Section Ends -->