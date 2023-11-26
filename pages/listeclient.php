<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Client</title>
</head>

<body>
    <?php include '../include/nav.php' ?>
    <div >
            

        </div>

    <?php if (isset($_GET['delete']) && $_GET['delete'] == 1) { ?>
    <div class='alert alert-danger corner-radius container mt-4'>
        <p>Client supprimé avec succés</p>
    </div>
    <?php unset($_GET['delete']);
    } ?>

    <?php if (isset($_GET['success']) && $_GET['success'] == 1) { ?>
    <div class='alert alert-success corner-radius container mt-4'>
        <p>Client modifié avec succés</p>
    </div>
    <?php unset($_GET['success']);
    } ?>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header bg-success text-white">
                
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>Nom </th>
                        <th>Tel</th>
                        <th>Email</th>
                        <th>Boite postale</th>
                        <th>Rue</th>
                    </tr>
                    <tr>
                        <?php
                        include '../DB/db.php';
                        $stmt = $connexion->query("SELECT * FROM client");

                        while ($row = $stmt->fetch()) { ?>

                    <tr>
                        <td><?php echo $row["nom"]; ?></td>
                        <td><?php echo $row["tel"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["bp"]; ?></td>
                        <td><?php echo $row["rue"]; ?></td>
                        <td><a class="btn btn-warning"
                                href="../pages/editclient.php?id=<?php echo $row['id']; ?>">
                                Modifier</a></td>
                        <td><a class="btn btn-danger"
                                href="../traitement/deleteclient.php?id=<?php echo $row['id']; ?>"
                                onclick="return confirm('Vous êtes sur le point de supprimer , vous voulez vraiment supprimer');">Supprimer</a>
                        </td>

                    </tr>

                    <?php
                        }

                ?>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</body>

</html>

