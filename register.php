<?php
include 'includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        header("location: login.php");
    } else {
        echo "Erreur : " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>registre | ÉduChallenge</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .custom-form {
     /* Couleur de fond du formulaire */
      padding: 20px;
      border-radius: 15px;
      color: white;
      background-color: rgba(4, 77, 37, 0.929);
     
    }
    .custom-input {
      border-radius: 25px;
    }
    .btn-custom {
      background-color: #F5A623;
      color: white;
      font-weight: bold;
      border-radius: 11px;
    }
    .btn-custom:hover{
        background-color: #F5A623;
        
      }
      .img-fond{
        background-size: cover;
        background-repeat: no-repeat;
      }
  </style>
</head>
<body>
<?php include 'includes/header.php'; ?>


<div class="container-fluid img-fond">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2 class="text-center mt-3 mb-" style="color: white;">Inscription</h2>
      <form action="register.php" method="post" class="custom-form mb-5" >
        <div class="mb-3">
          <label for="name" class="form-label">Nom</label>
          <input type="text"  name="name" class="form-control custom-input" id="name" placeholder="Mettre votre nom" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" name="email" class="form-control custom-input" id="email" placeholder="Mettre votre adresse e-mail" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Mot de passe</label>
          <input type="password" name="password" class="form-control custom-input" id="password" placeholder="Mettre votre mot de passe" required>
        </div>
        <div class="mb-3">
          <label for="confirmPassword" class="form-label">Confirmer le mot de passe</label>
          <input type="password" name="password" class="form-control custom-input" id="confirmPassword" placeholder="Confirmer le mot de passe" required>
        </div>
        <div class="d-grid">
          <button type="submit" class="btn  text-white fw-bold" style="background-color: orange;">S'inscrire</button>
        </div>
        <div class="text-center mt-3">
          <p>Déjà un compte ? <a href="login.php" class="text-warning">Cliquez ici</a></p>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

