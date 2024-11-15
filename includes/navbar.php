
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard | ÉduChallenge</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #F6F8FA;
    }
    .sidebar {
      background-color: rgba(4, 77, 37, 0.929);
      width: 220px;
      height: 100vh;
      color: white;
      padding-top: 20px;
      position: fixed;
    }
    .sidebar a {
      color: white;
      text-decoration: none;
      display: block;
      padding: 15px;
      
    }
    .sidebar a:hover {
      text-decoration: underline;
    }
    .logo {
     width: 11rem;
     height: 11rem;
      font-weight: bold;
      margin-top: -3rem;
    }
    
    .lateral{
        margin-top: -6rem;
    }
    .dashboard {
      margin-left: 250px;
      padding: 20px;
    }
    .dashboard h2 {
      font-weight: bold;
      color: #050d0c;
    }
    .card-custom {
      border-radius: 10px;
      padding: 30px;
      color: white;
      font-weight: bold;
      text-align: center;
      cursor: pointer;
    }
    .progression {
      background-color: white;
      padding: 20px;
      border-radius: 30px;
    }
    .special-badge {
      background-color: rgba(4, 77, 37, 0.929);
      padding: 20px;
      color: white;
      border-radius: 10px;
    }
    .search-box {
      background-color: #F5F5F5;
      padding: 10px;
      border-radius: 25px;
      width: 300px;
      border: 1px solid #CCC;
    }
  </style>
</head>
<body>

<div class="sidebar">
  <div class="text-center mb-4">
    <a class="navbar-brand" href="#">
      <img src="Image/logo2.png" alt="Logo" width="80" height="80" class="d-inline-block align-text-top logo">
    </a>
</div>
<div class="lateral">
    
<?php if (isset($_SESSION['loggedin'])) { ?>
                <a class="nav-link" href="dashboard.php"><i class="fas fa-home"></i> Tableau de Bord</a>
                <a class="nav-link" href="courses.php"><i class="fas fa-book"></i>  Cours</a>
                <a class="nav-link" href="quiz.php"><i class="fas fa-question-circle"></i> Mes Quiz</a>
                <a class="nav-link" href="progression.php"><i class="fas fa-chart-line"></i> Progression</a>
                <a class="nav-link" href="recompenses.php"> <i class="fas fa-award"></i> Récompenses</a>
                <a class="nav-link" href="Paramètres.php"><i class="fas fa-cog"></i>  Paramètres</a>
                <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i> Déconnexion</a>
                <a class="nav-link" href="aide.php"><i class="fas fa-info-circle"></i> Aide</a>
            <?php } else { ?>
                <li class="nav-item"><a class="nav-link" href="login.php">Connexion</a></li>
                <li class="nav-item"><a class="nav-link" href="register.php">Inscription</a></li>
            <?php } ?>
</div>
     
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
