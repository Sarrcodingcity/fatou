
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
    <div class="d-flex justify-content-between align-items-center mb-4">
            <h4>Mini-Jeu Educatif</h4>
            <div class="nav-search">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Découvrez les jeux...">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
        </div>
        
        <!-- Ajoutez plus de catégories selon vos besoins -->
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
              <div class="card">
                <img src="Image/imgjeu4.jpg"  height="117 " class="card-img-top" alt="..." >
                <div class="card-body">
                    <button type="button" class="btn btn-danger btn-lg">Jouer</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="Image/imgjeu1.jpg" height="117" class="card-img-top" alt="...">
                <div class="card-body">
                    <button type="button" class="btn btn-danger btn-lg">Jouer</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="Image/imgjeu2.jpg" height="117" class="card-img-top" alt="...">
                <div class="card-body">
                    <button type="button" class="btn btn-danger btn-lg">Jouer</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="Image/imgjeu3.jpg" height="117" class="card-img-top" alt="...">
                <div class="card-body">
                    <button type="button" class="btn btn-danger btn-lg">Jouer</button>
                </div>
              </div>
            </div>
          </div>
        
 </div>
</div>







  