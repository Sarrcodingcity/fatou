
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
            <h4>Cours Developpement</h4>
            <div class="nav-search">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Découvrez les cours...">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
        </div>
       <!-- Cours Section -->
       <div class="row">
            <!-- PHP Course Card -->
            <div class="col-md-4">
                <div class="card course-card">
                    <img src="Image/imgphp.jpeg" class="card-img-top" alt="PHP">
                    <div class="card-body">
                        <h5 class="card-title">PHP</h5>
                        <p class="card-text">Langage serveur pour créer des sites web dynamiques.</p>
                        <a href="#" class="btn btn-success">Voir</a>
                        <a href="#" class="btn quiz btn-warning">Quiz</a>
                    </div>
                </div>
            </div>

            <!-- JavaScript Course Card -->
            <div class="col-md-4">
                <div class="card course-card">
                    <img src="image/imgjava.jpeg" class="card-img-top" alt="JavaScript">
                    <div class="card-body">
                        <h5 class="card-title">JavaScript</h5>
                        <p class="card-text">Langage pour rendre les sites web interactifs.</p>
                        <a href="#" class="btn btn-success">Voir</a>
                        <a href="#" class="btn quiz btn-warning">Quiz</a>
                    </div>
                </div>
            </div>

            <!-- Réseau Course Card -->
            <div class="col-md-4">
                <div class="card course-card">
                    <img src="Image/imgreact.jpeg" class="card-img-top" alt="Réseau">
                    <div class="card-body">
                        <h5 class="card-title">React</h5>
                        <p class="card-text">React est une bibliothèque utilisée construire des interfaces utilisateur.</p>
                        <a href="#" class="btn btn-success">Voir</a>
                        <a href="#" class="btn quiz btn-warning">Quiz</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cours Section -->
        <div class="row mt-4">
            <!-- PHP Course Card -->
            <div class="col-md-4">
                <div class="card course-card">
                    <img src="Image/imgpyt.jpeg" class="card-img-top" alt="PHP">
                    <div class="card-body">
                        <h5 class="card-title">Pyton</h5>
                        <p class="card-text">Langage de programmation très populaire pour sa simplicité. </p>
                        <a href="#" class="btn btn-success">Voir</a>
                        <a href="#" class="btn quiz btn-warning">Quiz</a>
                    </div>
                </div>
            </div>

            <!-- JavaScript Course Card -->
            <div class="col-md-4">
                <div class="card course-card">
                    <img src="Image/imgdjango.jpeg" class="card-img-top" alt="JavaScript">
                    <div class="card-body">
                        <h5 class="card-title">Django</h5>
                        <p class="card-text">Un framework web écrit en Python, conçu pour faciliter le développement.</p>
                        <a href="#" class="btn btn-success">Voir</a>
                        <a href="#" class="btn btn-warning">Quiz</a>
                    </div>
                </div>
            </div>

            <!-- Réseau Course Card -->
            <div class="col-md-4">
                <div class="card course-card">
                    <img src="Image/imgjquery.jpeg" class="card-img-top" alt="Réseau">
                    <div class="card-body">
                        <h5 class="card-title">jquery</h5>
                        <p class="card-text">Une bibliothèque JavaScript rapide, légère qui simplifie l'écriture JavaScript. </p>
                        <a href="#" class="btn btn-success">Voir</a>
                        <a href="#" class="btn btn-warning">Quiz</a>
                    </div>
                </div>
            </div>
        </div>

        
    </div>  
        
        <!-- Ajoutez plus de catégories selon vos besoins -->
 </div>
</div>







  