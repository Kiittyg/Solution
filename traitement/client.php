<?php
if (isset($_POST['save'])) {
    include '../DB/db.php';
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $bp = $_POST['bp'];
    $rue = $_POST['rue'];

    $stmt = $connexion->prepare("INSERT INTO client (id, nom, tel, email, bp, rue) VALUES (:id, :nom, :tel, :email, :bp, :rue)");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':tel', $tel);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':bp', $bp);
    $stmt->bindParam(':rue', $rue);
    $stmt->execute();

    $location = $_SERVER['HTTP_REFERER'];
    if ($stmt) {
        $success = "client ajouté avec succès...";
        header('Location: ../pages/client.php?success=1');
    }
}



?>