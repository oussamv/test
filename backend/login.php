<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>SignUp - FT-STORE</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #74ebd5, #ACB6E5);
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      height: 100vh;
    }

    .container {
      background: white;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 400px;
      text-align: center;
    }

    h1 {
      margin-bottom: 20px;
      color: #333;
    }

    input {
      width: 90%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 16px;
    }

    input:focus {
      outline: none;
      border-color: #1d05f3ff;
      box-shadow: 0 0 5px rgba(9, 32, 243, 0.3);
    }

    button {
      width: 100%;
      padding: 12px;
      background: #007ef3ff;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover {
      background: #0004faff;
    }

    .message {
      margin-top: 15px;
      font-weight: bold;
    }

    .j {
      margin-top: 0;
      text-align: center;
      color: white;
    }
  </style>
</head>
<body>

  <h1 class="j">Bienvenue à FT-STORE</h1>

  <div class="container">
    <h1>Login</h1>
    <form method="post">
      <input type="email" name="email" placeholder="Entrez votre Email" required> <br>
      <input type="password" name="pwd" placeholder="Entrez votre Password" required> <br>
      <button type="submit">Se Connecter</button>
    </form>

    <?php
    session_start();
    include("connection.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if(!empty($_POST['nom']) || !empty($_POST['email']) || !empty($_POST['pwd'])){
         
          $email = ($_POST['email']);
          $pwd = ($_POST['pwd']);
           $idcom=connexpdo("ft_store");
      if($idcom) 
      {
        try{
          $req="SELECT * FROM users where (email = :email AND pwd = :pwd)";
          $response=$idcom->prepare($req);
          $response->execute([
            ':email' => $email,
            ':pwd' => $pwd
          ]);

          if($response->rowCount()>0){
            $res = $response->fetch(PDO::FETCH_ASSOC);
            
            $_SESSION['email'] = $email;
            $_SESSION['pwd'] = $pwd;
            $_SESSION['nom'] = $res['user_name'];
            header("Location: ../front-end/acceuil.php");
            exit;
          }
          else{
           echo "<p style='color: red;'>Check The Email Or Password</p>";

          }
        }
        catch (PDOException $c){
           echo "<h1> PLEASE CONNECT YOUR DATABASE </h1>  ";
        }

    }
      }
      

      
    };
     
    ?>
  </div>

</body>
</html>
