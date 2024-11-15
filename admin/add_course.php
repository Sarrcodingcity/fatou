<?php
include '../includes/config.php';
session_start();

if (!isset($_SESSION['admin']) || !$_SESSION['admin']) {
    header('Location: ../login.php');
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $categorie = $_POST['categorie'];
    $video_url = $_POST['video_url'];
    $pdf_url = $_POST['pdf_url'];
    
    // Insertion du cours dans la base de données
    $sql = "INSERT INTO cours (nom, description, categorie, video_url, pdf_url) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $nom, $description, $categorie, $video_url, $pdf_url);
    if ($stmt->execute()) {
        echo "Cours ajouté avec succès.";
    } else {
        echo "Erreur : " . $stmt->error;
    }
    $stmt->close();
}
?>

<?php include '../includes/header.php'; ?>
<div class="container mt-5">
    <h2>Ajouter un Cours</h2>
    <form action="add_course.php" method="post">
        <div class="form-group">
            <label>Nom du Cours</label>
            <input type="text" name="nom" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label>Catégorie</label>
            <input type="text" name="categorie" class="form-control" required>
        </div>
        <div class="form-group">
            <label>URL de la Vidéo</label>
            <input type="text" name="video_url" class="form-control">
        </div>
        <div class="form-group">
            <label>URL du PDF</label>
            <input type="text" name="pdf_url" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
<?php include '../includes/footer.php'; ?>
