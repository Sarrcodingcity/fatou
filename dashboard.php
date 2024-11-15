
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
<a href="dashboard.php" class="btn btn-secondary">Tous les Cours</a>
    <!-- Menu de sélection des catégories -->
    <div class="mb-3">
       
        
        <!-- Ajoutez plus de catégories selon vos besoins -->
    <div class="row mt-3">
    <div class="col-md-4">
    <a href="dev.php" class="btn ">
      <div class="card-custom" style="background-color: rgba(4, 77, 37, 0.929);">
        <i class="fa-solid fa-code fs-3"></i>
        <h3 class="fs-2"> Développement web</h3>
      </div>
    </a>
    </div>
    <div class="col-md-4">
    <a href="reseaux.php" class="btn ">
      <div class="card-custom" style="background-color: #F5A623;">
        <i class="fa-solid fa-wifi fs-3"></i>
        <h3 class="fs-2">Réseaux informatique</h3>
      </div>
      </a>
    </div>
    <div class="col-md-4">
    <a href="jeux.php" class="btn ">
      <div class="card-custom" style="background-color: #F54523;">
        <i class="fa-solid fa-gamepad fs-3"></i>
        <h3 class="fs-2">Mini-Jeux éducatifs</h3>
      </div>
      </a>
    </div>
  </div>

  <h2 class="mt-5">Spécial pour vous!</h2>
  <div class="card d-flex flex-row p-1">
    <img src="Image/imgprogré.jpeg" alt="Progression Image" >
    <div class="card-body">
        <h5 class="card-title">Progression</h5>
        <div class="progress mb-3" style="height: 8px;">
            <div class="progress-bar" style="width: 60%;" ></div>
        </div>
        <p class="progress-text">Il reste 4 heures 25 minutes</p>
    </div>
</div>
      </div>
    </div>

    <div class="row">
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row['nom'] ?></h5>
                        <p class="card-text"><?= $row['description'] ?></p>
                        <a href="course.php?id=<?= $row['id'] ?>" class="btn btn-primary">Voir le Cours</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>
</div>







  