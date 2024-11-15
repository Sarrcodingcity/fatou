<?php
include 'includes/config.php';
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

$sql = "SELECT * FROM cours";
$result = $conn->query($sql);
?>

<?php include 'includes/navbar.php'; ?>
<div class="dashboard container">
    <h2>Liste des Cours</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nom du Cours</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?= htmlspecialchars($row['nom']) ?></td>
                    <td><?= htmlspecialchars($row['description']) ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

