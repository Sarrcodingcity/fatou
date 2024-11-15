<?php
include 'includes/config.php';
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

// Récupérer les questions pour un cours spécifique
$cours_id = isset($_GET['cours_id']) ? $_GET['cours_id'] : 1; // Cours par défaut si non précisé
$sql = "SELECT * FROM questions WHERE cours_id = $cours_id";
$questions = $conn->query($sql);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Traitement des réponses
    $score = 0;
    foreach ($_POST as $question_id => $answer) {
        $sql = "SELECT bonne_reponse FROM questions WHERE id = $question_id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        if ($row['bonne_reponse'] == $answer) {
            $score++;
        }
    }
    echo "<p>Votre score : $score</p>";
}
?>

<?php include 'includes/navbar.php'; ?>
<div class="container dashboard">
    <h2> Tous les Quiz</h2>
    <form action="quiz.php?cours_id=<?= $cours_id ?>" method="post">
        <?php while ($question = $questions->fetch_assoc()) { ?>
            <div class="form-group">
                <label><?= htmlspecialchars($question['texte']) ?></label><br>
                <?php foreach (['A', 'B', 'C', 'D'] as $option) { ?>
                    <input type="radio" name="<?= $question['id'] ?>" value="<?= $option ?>"> <?= $option ?>. <?= htmlspecialchars($question["option_$option"]) ?><br>
                <?php } ?>
            </div>
        <?php } ?>
        <button type="submit" class="btn btn-primary">Soumettre</button>
    </form>
</div>

