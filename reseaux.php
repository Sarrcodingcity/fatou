
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
            <h4>Cours reseaux</h4>
            <div class="nav-search">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Découvrez les cours...">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
        </div>
        <!-- Ajoutez plus de catégories selon vos besoins -->
        <div class="card text-center">
      <div class="card-header">
        <ul class="nav nav-pills card-header-pills">
          <h5 class="card-title"text-center="center">Télécom</h5>
        </ul>
      </div>
      <div class="card-body">
        <p class="card-text">Le terme Télécom est une abréviation de télécommunications. Il désigne l'ensemble des techniques et des technologies qui permettent la transmission d'informations sur de longues distances.Les entreprises de télécommunications sont souvent responsables de la fourniture de ces services, et elles peuvent inclure des opérateurs de téléphonie mobile, des fournisseurs d'accès Internet, des entreprises de câble, etc. </p>
        <button type="button" class="btn btn-outline-success">Voir</button>&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="button" class="btn btn-outline-warning">Quiz</button>
      </div>
    </div>
    &nbsp;
    &nbsp;
    &nbsp;
    <div class="card text-center">
        <div class="card-header">
          <ul class="nav nav-pills card-header-pills">
            <h5 class="card-title">Administration WS</h5>
          </ul>
        </div>
        <div class="card-body">
          <p class="card-text">L'administration Windows Server fait référence à la gestion et à la maintenance des systèmes d'exploitation Windows Server, qui est une version de Windows destinée à être utilisée sur des serveurs.L'administration de Windows Server est essentielle dans les environnements d'entreprise, car elle assure la disponibilité, la sécurité et la performance des applications et des services qui dépendent des serveurs. </p>
          <button type="button" class="btn btn-outline-success">Voir</button>&nbsp;&nbsp;&nbsp;&nbsp;
          <button type="button" class="btn btn-outline-warning">Quiz</button>
          </div>
      </div>
      &nbsp;
      &nbsp;
      &nbsp;
      <div class="card text-center">
        <div class="card-header">
          <ul class="nav nav-pills card-header-pills">
            <h5 class="card-title">Sécurité Rx</h5>
          </ul>
        </div>
        <div class="card-body"> 
          <p class="card-text">La sécurité réseau fait référence à l'ensemble des mesures, des technologies et des pratiques mises en place pour protéger un réseau informatique contre les accès non autorisés, les attaques, les dommages, et les interruptions de service. Elle vise à garantir la confidentialité, l'intégrité et la disponibilité des données qui circulent sur le réseau.</p>
          <button type="button" class="btn btn-outline-success">Voir</button>&nbsp;&nbsp;&nbsp;&nbsp;
          <button type="button" class="btn btn-outline-warning">Quiz</button>
        </div>
      </div>
      &nbsp;
      &nbsp;
      &nbsp;
      <div class="card text-center">
        <div class="card-header">
          <ul class="nav nav-pills card-header-pills">
            <h5 class="card-title">Maintenance</h5>
          </ul>
        </div>
        <div class="card-body">
          <p class="card-text">La maintenance désigne l'ensemble des activités et des processus nécessaires pour maintenir en bon état de fonctionnement, réparer, ou améliorer un système, un équipement ou une infrastructure. Cela peut s'appliquer à de nombreux domaines, tels que l'informatique, l'ingénierie, l'automobile, les bâtiments, et bien d'autres.</p>
          <button type="button" class="btn btn-outline-success">Voir</button>&nbsp;&nbsp;&nbsp;&nbsp;
          <button type="button" class="btn btn-outline-warning">Quiz</button>
        </div>
      </div>
      &nbsp;
      &nbsp;
      &nbsp;
      <div class="card text-center">
        <div class="card-header">
          <ul class="nav nav-pills card-header-pills">
            <h5 class="card-title">Administration Linux</h5>
          </ul>
        </div>
        <div class="card-body">
       
          <p class="card-text">L'administration Linux désigne la gestion, la configuration et la maintenance des systèmes d'exploitation basés sur Linux, qui sont largement utilisés dans les serveurs, les ordinateurs de bureau, et les systèmes embarqués.L'administration Linux est une compétence essentielle dans de nombreux environnements informatiques, en particulier pour les entreprises qui dépendent de serveurs Linux pour leurs opérations.</p>
          <button type="button" class="btn btn-outline-success">Voir</button>&nbsp;&nbsp;&nbsp;&nbsp;
          <button type="button" class="btn btn-outline-warning">Quiz</button>
        </div>
      </div>
      &nbsp;
      &nbsp;
      &nbsp;
      <div class="card text-center">
        <div class="card-header">
          <ul class="nav nav-pills card-header-pills">
            <h5 class="card-title">Réseaux</h5>
          </ul>
        </div>
        <div class="card-body">
          <p class="card-text">Un réseau désigne un ensemble d'ordinateurs, de serveurs, de périphériques, et d'autres éléments interconnectés qui peuvent communiquer entre eux pour partager des ressources et des informations. Les réseaux peuvent varier en taille, en complexité, et en technologie, mais ils partagent tous un objectif commun : faciliter la communication et l'échange de données.</p>
          <button type="button" class="btn btn-outline-success">Voir</button>&nbsp;&nbsp;&nbsp;&nbsp;
          <button type="button" class="btn btn-outline-warning">Quiz</button>
        </div>
      </div>
    
 </div>
</div>







  