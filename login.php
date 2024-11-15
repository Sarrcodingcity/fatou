<?php
include 'includes/config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        header("location: dashboard.php");
    } else {
        $error = "Email ou mot de passe incorrect";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login EduChallenge</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
      .custom-form {
     /* Couleur de fond du formulaire */
      padding: 20px;
      border-radius: 20px;
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
            <h2 class="text-center mt-3 mb- " style="color:white">Connexion</h2>
            <form action="login.php" method="post" class=" text-white p-4 rounded" style="background-color: rgba(4, 77, 37, 0.929);">
              <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Entrez votre adresse e-mail" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Entrez votre mot de passe" required>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn  text-white fw-bold" style="background-color: orange;">Se connecter</button>
              </div>
              <div class="text-center mt-3">
                <p>Pas encore inscrit ? <a href="register.php" class="text-warning">Inscrivez-vous ici</a></p>
              </div>
            </form>
            <?php if (isset($error)) { echo "<p class='text-danger'>$error</p>"; } ?>
          </div>
        </div>
      </div>
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
      </body>
      </html>
      
</body>
</html>

