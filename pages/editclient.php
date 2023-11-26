<?php
include '../DB/db.php';
$q = $connexion->query("SELECT * FROM client WHERE id='" . $_GET["id"] . "'");

while ($row = $q->fetch(PDO::FETCH_ASSOC)) {
    $nom = $row['nom'];
    $tel = $row['tel'];
    $email = $row['email'];
    $bp = $row['bp'];
    $rue = $row['rue'];
}

if (isset($_POST['update'])) {
    $nom = $_POST['nom'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $bp = $_POST['bp'];
    $rue = $_POST['rue'];
   
   



    $r = "UPDATE client SET nom='$nom',tel='$tel',email='$email ',bp='$bp',rue='$rue' WHERE id = '" . $_GET["id"] . "'";
    $connexion->exec($r);

    if ($r) {
        $success = "client modifié avec succès...";
        header('Location: ../pages/listeclient.php?success=1');
    }
}
?>

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

    <?php if (isset($_GET['success']) && $_GET['success'] == 1) { ?>
    <div class='alert alert-success corner-radius container'>
        <p>Client ajouté avec succés</p>
    </div>
    <?php unset($_GET['success']);
    } ?>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header bg-success text-white">
                Client
            </div>
            <div class="card-body px-1g pt-0">
            <form class="text-center" style="color: #757575;" action = "" method="POST">
            
                <div class="row mt-4">
                    <div class="col-md-3">
                        <label for=""> Nom </label>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="text" name="nom" class="form-control" value="<?php echo $nom; ?>" placeholder="saisir votre nom"  required="required">                                        
                    </div>
                </div>  
                <div class="row mt-4">
                    <div class="col-md-3">
                        <label for=""> Tel </label>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="text" name="tel" class="form-control" value="<?php echo $tel; ?>" placeholder="saisir votre tel"  required="required">                                        
                    </div>
                </div> 
                <div class="row mt-4">
                    <div class="col-md-3">
                        <label for=""> Email </label>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="text" name="email" class="form-control" value="<?php echo $email; ?>" placeholder="saisir votre email"  required="required">                                        
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-3">
                        <label for=""> Boite postale </label>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="text" name="bp" class="form-control" value="<?php echo $bp; ?>" placeholder="saisir votre boite postale"  required="required">                                        
                    </div>
                </div> 
                <div class="row mt-4">
                    <div class="col-md-3">
                        <label for=""> Rue </label>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="text" name="rue" class="form-control" value="<?php echo $rue; ?>" placeholder="saisir votre rue"  required="required">                                        
                    </div>
                </div> 
                   <div class="row mt-4 ">
                    <div class="col-md-3 ">
                    </div>
                        <input type="submit" class="btn btn-primary" value="update" name="update"> 
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>

</body>

</html>

