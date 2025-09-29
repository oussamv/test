<?php
session_start();
if(empty($_SESSION['nom']) || empty($_SESSION['email']) || empty($_SESSION['pwd']))
{
    header("Location: ../backend/signup.php");
    exit();
}
include("../backend/connection.php");

$idcom = connexpdo('ft_store');
if ($idcom)
{
try{
    $req = "SELECT * FROM shoes";
    $response = $idcom->prepare($req);
    $response->execute();

    if ($response->rowCount() > 0)
    {
        $rows = $response->fetchAll(PDO::FETCH_ASSOC);
    }
    else
    {
        $rows = [];
    }
    }
    catch(PDOException $c){
        $rows = [];
    }
}
else
{
    $rows = [];
}


if($_SERVER['REQUEST_METHOD'=='POST'])
  {
    if(!empty($_POST['id_shoes'])){
      $id_shoes = $_POST['id_shoes'];
      $email = $_SESSION['email'];
      $idcom=connexpdo('ft_store');
      if($idcom)
      {
        try{
            $req='SELECT id_user FROM users WHERE(email=:email)';
            $response=$idcom->prepare($req);
            $response->execute([":email"=>$email]);

            if ($response->rowCount() > 0)
            {
                $id = $repoonse->fetch(PDO::FETCH_ASSOC);
                $id_user = $id['id_user'];
            }

        }
        catch( PDOException $c)
        {
          echo "Error in database";
        }
      } 
    }
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
    <a class="nav-link" href="gloves.php">Gloves</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="socks.php">Socks</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="contact.php"> Contactez-nous</a>
  </li>
  
    <a href="../backend/deconnexion.php" target="_blank" class="btn rounded" style="background-color: red; color: white; padding: 10px 20px; text-decoration: none; display: inline-block;">
  Déconnexion
</a>
 <a href="" target="_blank" class="btn rounded" style="color: black; padding: 10px 10px; text-decoration: none; display: inline-block;">
  Panier
</a>



    
</ul>
  </div>
</nav>
<h1 style="text-align: center; margin-top: 20px; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Shoes</h1>


<div class="container-fluid">
  <div class="row">
    <?php  foreach($rows as $row): ?>
    <div class="col-3">
      <div class="card h-100">
        <img src="../images/shoes-1.jpg" class="card-img-top" alt="Card image">
        <div class="card-body">
          <h5 class="card-title">Nom : <?php echo $row['name_shoes']; ?></h5>
          <p class="card-text">Prix : <?php echo $row['prix_shoes']; ?>$</p>
          <p class="card-text">Quantite : <?php echo $row['qte']; ?></p>
            <form method="POST">
                <input type="hidden" value= <?php echo $row["id_shoes"] ?> >
                <button class="btn btn-primary">Add To Cart</button>
            </form>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
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