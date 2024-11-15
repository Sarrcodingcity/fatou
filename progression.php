<?php
include 'includes/config.php';
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

// Récupérer la progression de l'utilisateur connecté
$user_email = $_SESSION['email'];
$sql = "SELECT cours.nom AS cours_nom, progression.avancement FROM progression 
        JOIN cours ON progression.cours_id = cours.id 
        WHERE progression.user_email = '$user_email'";
$result = $conn->query($sql);
?>

<?php include 'includes/navbar.php'; ?>
<div class="dashboard container ">
    <h2>Votre Progression</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nom du Cours</th>
                <th>Progression</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?= htmlspecialchars($row['cours_nom']) ?></td>
                    <td><?= htmlspecialchars($row['avancement']) ?>%</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

