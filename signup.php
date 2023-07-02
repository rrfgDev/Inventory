<!DOCTYPE html>
<html>
<head>
  <title>Registro de Usuário</title>
  <link rel="stylesheet" type="text/css" href="./Master/css/signup.css">
</head>
<?php include './Master/includes/header.php'; ?>
<body>
  <form class="form" id="signup-form">
    <span class="signup">Sign Up</span>
    <input type="email" placeholder="Email address" class="form--input" id="email">
    <input type="password" placeholder="Password" class="form--input" id="password">
    <input type="password" placeholder="Confirm password" class="form--input" id="confirm-password">
    
    <div class="form--marketing">
        <input id="okayToEmail" type="checkbox">
        <label for="okayToEmail" class="checkbox">
          "Eu aceito todos os termos de uso"
        </label>
    </div>
    <button type="submit" class="form--submit">
        Sign up
    </button>
  </form>
 
  <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-database.js"></script>
  <script src="./Master/scripts/firebase-config.js"></script>
  <script src="./Master/scripts/signup.js"></script>
</body>
<footer><?php include './Master/includes/footer.php'; ?></footer>
</html>
