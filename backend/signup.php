<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SignUp</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #74ebd5, #ACB6E5);
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
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
      border-color: #6a11cb;
      box-shadow: 0 0 5px rgba(106,17,203,0.3);
    }

    button {
      width: 100%;
      padding: 12px;
      background: #6a11cb;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover {
      background: #2575fc;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Sign-Up</h1>
    <form method="post">
      <input type="text" name="nom" placeholder="Entrez votre nom" required> <br>
      <input type="email" name="email" placeholder="Entrez votre Email" required> <br>
      <input type="password" name="pwd" placeholder="Entrez votre Password" required> <br>
      <button type="submit">Se Connecter</button>
    </form>
  </div>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
   $nom=$_POST['nom'];
   $email=$_POST['email'];
   $pwd=$_POST['pwd'];
   if (!empty($nom)&&!empty($email)&&!empty($pwd)) {
    
   }

}















?>

