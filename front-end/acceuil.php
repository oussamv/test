<?php
session_start();
if(empty($_SESSION['nom']) || empty($_SESSION['email']) || empty($_SESSION['pwd']))
  {
    header("Location: ../backend/signup.php");
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>FT-STORE</title>
    <style>
      .site-footer {
  background-color: #222;
  color: #fff;
  padding: 40px 20px 20px;
  font-family: Arial, sans-serif;
}

.footer-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  max-width: 1200px;
  margin: auto;
}

.footer-column {
  flex: 1 1 250px;
  margin: 20px;
}

.footer-column h4 {
  margin-bottom: 15px;
  font-size: 18px;
  color: #f0f0f0;
}

.footer-column ul {
  list-style: none;
  padding: 0;
}

.footer-column ul li {
  margin-bottom: 10px;
}

.footer-column ul li a {
  color: #ccc;
  text-decoration: none;
}

.footer-column ul li a:hover {
  text-decoration: underline;
}

.social-icons a {
  display: inline-block;
  margin-right: 10px;
  color: #ccc;
  font-size: 18px;
  text-decoration: none;
}

.social-icons a:hover {
  color: #fff;
}

.footer-bottom {
  text-align: center;
  margin-top: 30px;
  border-top: 1px solid #444;
  padding-top: 15px;
  font-size: 14px;
  color: #aaa;
}

    </style>
</head>
<body>
    <nav class="navbar bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href=".">
      <img src="../images/logo-foot.jpg" alt="Logo" width="100" height="50" class="d-inline-block align-text-top">
      
    </a>
       <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Shoes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Gloves</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Socks</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="#"> Contactez-nous</a>
  </li>
  
    <a href="../backend/deconnexion.php" target="_blank" class="btn rounded" style="background-color: red; color: white; padding: 10px 20px; text-decoration: none; display: inline-block;">
  Déconnexion
</a>

    
</ul>
  </div>
</nav>
<h1 style="text-align: center; margin-top: 20px; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Welcome To FootBall Store , <?php echo $_SESSION['nom'] ?></h1>
<div id="carouselExample" class="carousel slide"  >
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images/FR_F50-Yamal_slider_desktop_1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../images/FR_adidas_Predator_Beckham_slider_desktop.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../images/FR_Mizuno_slider_desktop_1.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<h1 style="text-align: center; margin-top: 20px; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">TOP PRODUCTS</h1>
<div class="container-fluid">
  <div class="row">
    <div class="col-3">
      <div class="card h-100">
        <img src="../images/gloves-1.jpg" class="card-img-top" alt="Card image">
        <div class="card-body">
          <h5 class="card-title">Gloves Adidas</h5>
          <p class="card-text">Protégez votre gardien avec les gants de la marque Stanno, spécialement conçus pour les jeunes joueurs de football - Thunder VI Goalkeeper Gloves.</p>
          <a href="#" class="btn btn-primary">Add To Cart</a>
        </div>
      </div>
    </div>
    <div class="col-3">
      <div class="card h-100">
        <img src="../images/shoes-1.jpg" class="card-img-top" alt="Card image">
        <div class="card-body">
          <h5 class="card-title">Chaussures de football</h5>
          <p class="card-text">Découvrez les chaussures de football adidas F50 Elite Lamine FG, alliées de votre performance sur le terrain, alliant confort et style.</p>
          <a href="#" class="btn btn-primary">Add To Cart</a>
        </div>
      </div>
    </div>
    <div class="col-3">
      <div class="card h-100">
        <img src="../images/socks-2.jpg" class="card-img-top" alt="Card image">
        <div class="card-body">
          <h5 class="card-title">Chaussettes mi-mollet </h5>
          <p class="card-text">Optimise tes performances sur le terrain avec les chaussettes mi-mollet adidas, alliant confort et technologie avancée pour le football..</p>
          <a href="#" class="btn btn-primary">Add To Cart</a>
        </div>
      </div>
    </div>
    <div class="col-3">
      <div class="card h-100">
        <img src="../images/shoes-2.jpg" class="card-img-top" alt="Card image">
        <div class="card-body">
          <h5 class="card-title">Nike</h5>
          <p class="card-text">Libérez votre potentiel avec les chaussures de football Nike Mercurial Superfly 10 Elite SG, conçues pour des performances optimales sur le terrain.</p>
          <a href="#" class="btn btn-primary">Add To Cart</a>
        </div>
      </div>
    </div>
  </div>
</div>
<h1 style="text-align: center; margin-top: 20px; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Most Popular Categories</h1>
<div class="container">
  <div class="row g-5">
    <div class="col-6">
      <img src="../images/Bloc_1.jpg" alt="Bloc 1" class="img-fluid w-100 h-100 rounded">
    </div>
    <div class="col-6">
      <img src="../images/Bloc2_2.jpg" alt="Bloc 2" class="img-fluid w-100 h-100 rounded">
    </div>
  </div>
</div>
<br>
<h1 style="text-align: center; margin-top: 20px; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Contact Us</h1>
<footer class="site-footer">
  <div class="footer-container">
    <div class="footer-column">
      <h4>About Us</h4>
      <p>We build modern, user-friendly web solutions to help businesses grow online.</p>
    </div>
    <div class="footer-column">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="#">Shoes</a></li>
        <li><a href="#">Gloves</a></li>
        <li><a href="#">Socks</a></li>
        <li><a href="#">Contactez-nous</a></li>
      </ul>
    </div>
    <div class="footer-column">
      <h4>Follow Us</h4>
      <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; 2025 YourCompany. All rights reserved.</p>
  </div>
</footer>




</div>





 





</body>
</html>