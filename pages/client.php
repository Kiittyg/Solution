<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
<?php include '../include/nav.php' ?>
<div >
            

            </div>
    
    
    <?php if (isset($_GET['success']) && $_GET['success'] == 1) { ?>
    <div class='alert alert-success corner-radius container mt-3'>
        <p>Zone ajouté avec succés</p>
    </div>
    <?php unset($_GET['success']);
    } ?>

<div class="card col-md-8 mt-4 container py-4">
        <h5 class="card-header aqua-gradient white-text text-center py-4">
            <strong>
            Client
            </strong>
        </h5>
        <div class="card-body px-1g pt-0">
            <form class="text-center" style="color: #757575;" action = "../traitement/client.php" method="POST">
            
                <div class="row mt-4">
                    <div class="col-md-3">
                        <label for=""> Nom </label>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="text" name="nom" class="form-control" value="" placeholder="saisir votre nom"  required="required">                                        
                    </div>
                </div>  
                <div class="row mt-4">
                    <div class="col-md-3">
                        <label for=""> Tel </label>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="text" name="tel" class="form-control" value="" placeholder="saisir votre tel"  required="required">                                        
                    </div>
                </div> 
                <div class="row mt-4">
                    <div class="col-md-3">
                        <label for=""> Email </label>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="text" name="email" class="form-control" value="" placeholder="saisir votre email"  required="required">                                        
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-3">
                        <label for=""> Boite postale </label>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="text" name="bp" class="form-control" value="" placeholder="saisir votre boite postale"  required="required">                                        
                    </div>
                </div> 
                <div class="row mt-4">
                    <div class="col-md-3">
                        <label for=""> Rue </label>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="text" name="rue" class="form-control" value="" placeholder="saisir votre rue"  required="required">                                        
                    </div>
                </div> 
                   <div class="row mt-4 ">
                    <div class="col-md-3 ">
                    </div>
                        <input type="submit" class="form-control btn btn-lg btn-light" style="color: #757575;" name="save" value="save"> 
                    </div>
                </div>
            </form>
        </div>
    </div>



    


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
</body>
</html>