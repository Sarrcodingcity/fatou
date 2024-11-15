
<?php
include 'includes/config.php';
session_start();

if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

$categorie = isset($_GET['categorie']) ? $_GET['categorie'] : '';

$sql = "SELECT * FROM cours";
if ($categorie) {
    $sql .= " WHERE categorie = ?";
}

$stmt = $conn->prepare($sql);
if ($categorie) {
    $stmt->bind_param("s", $categorie);
}
$stmt->execute();
$result = $stmt->get_result();
?>

<?php include 'includes/navbar.php'; ?>
<div class="dashboard">
  <div class="container mt-2">
<a href="dashboard.php" class="btn btn-warning">Tous les Cours</a>
    <!-- Menu de sélection des catégories -->
    







  