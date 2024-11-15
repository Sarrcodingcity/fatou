<?php
include 'includes/config.php';
session_start();

if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cours_id = $_POST['cours_id'];
    $avancement = $_POST['avancement']; // La progression en pourcentage (0-100)

    $user_email = $_SESSION['email'];
    
    // Mise à jour de la progression dans la base de données
    $sql = "UPDATE progression SET avancement = ? WHERE user_email = ? AND cours_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isi", $avancement, $user_email, $cours_id);
    $stmt->execute();
    $stmt->close();

    echo "Progression mise à jour avec succès.";
}
?>
